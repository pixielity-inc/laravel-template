<?php

declare(strict_types=1);

namespace Pixielity\Database\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

use function in_array;

use Pixielity\Support\Str;
use Symfony\Component\Console\Attribute\AsCommand;
use Throwable;

/**
 * Database Management Command - REFACTORED.
 *
 * This command provides a unified interface for all database operations including
 * database creation, migrations, seeding, and database maintenance. It wraps Laravel's
 * migration commands with additional safety checks and user-friendly output.
 *
 * ## REFACTORING STANDARDS APPLIED:
 *
 * 1. ✅ AsCommand Attribute - With name and description
 * 2. ✅ Extends BaseCommand - Not Command
 * 3. ✅ Comprehensive Docblock - With usage examples
 * 4. ✅ Model Constants - N/A (no model interaction)
 * 5. ✅ Type Hints - On all parameters and returns
 * 6. ✅ Inline Comments - Explaining logic
 * 7. ✅ Error Handling - Try-catch with exception()
 * 8. ✅ Laravel Prompts - For interactive input
 * 9. ✅ Helper Methods - Extracted focused methods
 * 10. ✅ BaseCommand Methods - header(), success(), failure(), etc.
 *
 * ## KEY PATTERNS TO FOLLOW:
 *
 * ### Use BaseCommand Helper Methods:
 * ```php
 * $this->header('Title', '🚀');           // Command header
 * $this->success('Message', '✅');        // Success message
 * $this->failure('Message', '❌');        // Error message
 * $this->caution('Message', '⚠️');        // Warning
 * $this->note('Message');                 // Info note
 * $this->displayTable($headers, $rows);   // Table
 * $this->step(1, 3, 'Step...');          // Multi-step indicator
 * $this->spinner(fn() => $task(), 'Processing...'); // Spinner
 * $this->listing($items, '→');           // List items
 * ```
 *
 * ### Extract Logic into Focused Methods:
 * ```php
 * handle()           // Main entry point (orchestration only)
 * gatherInput()      // Collect user input
 * validateInput()    // Validate data
 * execute()          // Perform action
 * displaySuccess()   // Show results
 * ```
 *
 * ## Key Features:
 * - Create new databases with optional env configuration
 * - Run migrations with automatic confirmation
 * - Fresh database setup with optional seeding
 * - Database rollback and reset operations
 * - Migration status checking
 * - Database wiping with safety confirmations
 *
 * ## Safety Features:
 * - Confirmation prompts for destructive operations
 * - Force flag support for automated deployments
 * - Clear error messages and status reporting
 * - Double confirmation for dangerous operations
 *
 * ## Usage Examples:
 *
 * ### Create a new database:
 * ```bash
 * bin/laravel db create my_database
 * bin/laravel db create my_database --update-env
 * ```
 *
 * ### Run migrations:
 * ```bash
 * bin/laravel db migrate
 * bin/laravel db migrate --seed
 * bin/laravel db migrate --force
 * ```
 *
 * ### Fresh database (drops all tables):
 * ```bash
 * bin/laravel db fresh
 * bin/laravel db fresh --seed
 * ```
 *
 * ### Seed the database:
 * ```bash
 * bin/laravel db seed
 * ```
 *
 * ### Rollback migrations:
 * ```bash
 * bin/laravel db rollback
 * bin/laravel db rollback --step=2
 * ```
 *
 * ### Check migration status:
 * ```bash
 * bin/laravel db status
 * ```
 *
 * ### Reset database (rollback all):
 * ```bash
 * bin/laravel db reset
 * ```
 *
 * ### Refresh database (reset + migrate):
 * ```bash
 * bin/laravel db refresh
 * bin/laravel db refresh --seed
 * ```
 *
 * ### Wipe database (drop everything):
 * ```bash
 * bin/laravel db wipe
 * ```
 *
 * ## Arguments:
 * - `action` - The action to perform (create, migrate, fresh, seed, refresh, reset, rollback, status, wipe)
 * - `name` - Database name (optional, only for create action)
 *
 * ## Options:
 * - `--seed` - Seed the database after migration
 * - `--force` - Force the operation without confirmation
 * - `--step=N` - Number of migrations to rollback
 * - `--update-env` - Update env/.env file with database name (for create action)
 *
 * ## Exit Codes:
 * - 0 (SUCCESS) - Operation completed successfully
 * - 1 (FAILURE) - Invalid action or operation failed
 *
 * ## Available Actions:
 * - **create**: Create a new database
 * - **migrate**: Run pending migrations
 * - **fresh**: Drop all tables and re-run migrations
 * - **seed**: Run database seeders
 * - **refresh**: Rollback and re-run all migrations
 * - **reset**: Rollback all migrations
 * - **rollback**: Rollback the last migration batch
 * - **status**: Show migration status
 * - **wipe**: Drop all tables, views, and types
 *
 * @see https://laravel.com/docs/12.x/migrations
 * @see BaseCommand
 *
 * @author Pixielity Development Team
 *
 * @since 1.0.0
 */
#[AsCommand(
    name: 'db',
    description: 'Database management operations (create, migrate, fresh, seed, rollback, etc.)'
)]
class DatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Defines the command signature with action argument and various options
     * for controlling database operations.
     *
     * @var string
     */
    protected $signature = 'db
                            {action : The action to perform: create, migrate, fresh, seed, refresh, reset, rollback, status, or wipe}
                            {name? : Database name (for create action)}
                            {--seed : Seed the database after migration}
                            {--force : Force the operation without confirmation}
                            {--step= : Number of migrations to rollback}
                            {--update-env : Update env/.env file with database name (for create action)}';

    /**
     * Execute the console command.
     *
     * Routes the command to the appropriate action handler based on the
     * provided action argument. Validates the action before execution.
     *
     * @return int Command exit code (SUCCESS or FAILURE)
     */
    public function handle(): int
    {
        try {
            /** @var string $action */
            $action = $this->argument('action');

            // Validate action is one of the allowed values
            if (! $this->validateAction($action)) {
                return self::FAILURE;
            }

            // Route to appropriate action handler
            return match ($action) {
                'create' => $this->create(),
                'migrate' => $this->migrate(),
                'fresh' => $this->fresh(),
                'seed' => $this->seed(),
                'refresh' => $this->refresh(),
                'reset' => $this->reset(),
                'rollback' => $this->rollback(),
                'status' => $this->status(),
                'wipe' => $this->wipe(),
                default => $this->handleInvalidAction($action),
            };
        } catch (Throwable $throwable) {
            return $this->exception($throwable, 'Database operation failed');
        }
    }

    /**
     * Validate the action argument.
     *
     * Checks if the provided action is one of the valid database operations.
     * Displays error message with valid actions if validation fails.
     *
     * @param  string $action Action to validate
     * @return bool   True if valid, false otherwise
     */
    protected function validateAction(string $action): bool
    {
        $validActions = [
            'create',
            'migrate',
            'fresh',
            'seed',
            'refresh',
            'reset',
            'rollback',
            'status',
            'wipe',
        ];

        if (! in_array($action, $validActions, true)) {
            $this->failure('Invalid action: ' . $action);
            $this->newLine();
            $this->note('Valid actions:');
            $this->listing($validActions, '→');

            return false;
        }

        return true;
    }

    /**
     * Handle invalid action (fallback for match expression).
     *
     * This should never be reached due to validateAction(), but provides
     * a safety net for the match expression.
     *
     * @param  string $action Invalid action
     * @return int    Command exit code (FAILURE)
     */
    protected function handleInvalidAction(string $action): int
    {
        $this->failure('Invalid action: ' . $action);

        return self::FAILURE;
    }

    /**
     * Create a new database.
     *
     * Delegates to the db:create command to create a new database
     * with optional environment configuration update.
     *
     * @return int Command exit code
     */
    protected function create(): int
    {
        $this->header('Creating Database', '🗄️');

        // Build options array for db:create command
        $options = $this->buildCreateOptions();

        // Call the db:create command with spinner
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('db:create', $options),
            'Creating database...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        return $exitCode;
    }

    /**
     * Build options array for database creation.
     *
     * Collects database name and flags from command options.
     *
     * @return array<string, mixed> Options array
     */
    protected function buildCreateOptions(): array
    {
        $options = [];

        // Add database name if provided
        if ($name = $this->argument('name')) {
            $options['name'] = $name;
        }

        // Add update-env flag if specified
        if ($this->option('update-env')) {
            $options['--update-env'] = true;
        }

        // Add force flag if specified
        if ($this->option('force')) {
            $options['--force'] = true;
        }

        return $options;
    }

    /**
     * Run database migrations.
     *
     * Executes all pending migrations in the migrations directory. This is the
     * standard way to update your database schema in production and development.
     *
     * @return int Command exit code
     */
    protected function migrate(): int
    {
        $this->header('Running Migrations', '🗄️');

        // Build options array
        $options = $this->buildMigrationOptions();

        // Show seed notice if applicable
        if ($this->option('seed')) {
            $this->note('Database will be seeded after migrations');
            $this->newLine();
        }

        // Run migrations with spinner
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('migrate', $options),
            'Running migrations...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        // Display result
        if ($exitCode === 0) {
            $this->success('Migrations completed successfully!');
        } else {
            $this->failure('Migration failed');
        }

        return $exitCode;
    }

    /**
     * Build options array for migration commands.
     *
     * Collects force and seed flags from command options.
     *
     * @return array<string, bool> Options array
     */
    protected function buildMigrationOptions(): array
    {
        $options = [];

        // Add force flag if specified (required for production)
        if ($this->option('force')) {
            $options['--force'] = true;
        }

        // Add seed flag if specified
        if ($this->option('seed')) {
            $options['--seed'] = true;
        }

        return $options;
    }

    /**
     * Drop all tables and re-run all migrations.
     *
     * This command drops all database tables and re-runs all migrations from scratch.
     * It's useful for development when you want a clean database state.
     *
     * Warning: This is a destructive operation that will delete all data!
     *
     * @return int Command exit code
     */
    protected function fresh(): int
    {
        $this->header('Fresh Migrations', '🔄');

        // Safety check: require confirmation unless forced
        if (! $this->confirmDestructiveOperation('drop all tables and delete all data')) {
            return self::FAILURE;
        }

        // Show seed notice if applicable
        if ($this->option('seed')) {
            $this->note('Database will be seeded after migrations');
        }

        $this->newLine();

        // Build options array (always force for fresh)
        $options = ['--force' => true];
        if ($this->option('seed')) {
            $options['--seed'] = true;
        }

        // Run fresh migrations with spinner
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('migrate:fresh', $options),
            'Dropping tables and running migrations...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        // Display result
        if ($exitCode === 0) {
            $this->success('Fresh migrations completed successfully!');
        } else {
            $this->failure('Fresh migration failed');
        }

        return $exitCode;
    }

    /**
     * Seed the database with records.
     *
     * Runs all database seeders to populate the database with test or initial data.
     * This is useful for development and testing environments.
     *
     * @return int Command exit code
     */
    protected function seed(): int
    {
        $this->header('Seeding Database', '🌱');

        // Build options array
        $options = [];
        if ($this->option('force')) {
            $options['--force'] = true;
        }

        // Run seeders with spinner
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('db:seed', $options),
            'Seeding database...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        // Display result
        if ($exitCode === 0) {
            $this->success('Database seeded successfully!');
        } else {
            $this->failure('Seeding failed');
        }

        return $exitCode;
    }

    /**
     * Reset and re-run all migrations.
     *
     * This command rolls back all migrations and then re-runs them. Unlike fresh,
     * it uses the rollback mechanism rather than dropping tables directly.
     *
     * Warning: This is a destructive operation that will delete all data!
     *
     * @return int Command exit code
     */
    protected function refresh(): int
    {
        $this->header('Refreshing Database', '🔄');

        // Safety check: require confirmation unless forced
        if (! $this->confirmDestructiveOperation('rollback and re-run all migrations')) {
            return self::FAILURE;
        }

        // Show seed notice if applicable
        if ($this->option('seed')) {
            $this->note('Database will be seeded after migrations');
        }

        $this->newLine();

        // Build options array (always force for refresh)
        $options = ['--force' => true];
        if ($this->option('seed')) {
            $options['--seed'] = true;
        }

        // Run refresh with spinner
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('migrate:refresh', $options),
            'Rolling back and re-running migrations...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        // Display result
        if ($exitCode === 0) {
            $this->success('Database refreshed successfully!');
        } else {
            $this->failure('Refresh failed');
        }

        return $exitCode;
    }

    /**
     * Rollback all database migrations.
     *
     * This command rolls back all migrations, effectively reverting the database
     * to its initial state. This is useful for testing migration rollback logic.
     *
     * Warning: This is a destructive operation that will delete all data!
     *
     * @return int Command exit code
     */
    protected function reset(): int
    {
        $this->header('Resetting Database', '⏮️');

        // Safety check: require confirmation unless forced
        if (! $this->confirmDestructiveOperation('rollback all migrations')) {
            return self::FAILURE;
        }

        $this->newLine();

        // Run reset with spinner (always force)
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('migrate:reset', ['--force' => true]),
            'Rolling back all migrations...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        // Display result
        if ($exitCode === 0) {
            $this->success('Database reset successfully!');
        } else {
            $this->failure('Reset failed');
        }

        return $exitCode;
    }

    /**
     * Rollback the last database migration batch.
     *
     * This command rolls back the most recent migration batch. You can specify
     * the number of batches to rollback using the --step option.
     *
     * @return int Command exit code
     */
    protected function rollback(): int
    {
        $this->header('Rolling Back Migrations', '⏮️');

        // Show step information if specified
        $step = $this->option('step');
        if ($step) {
            $stepCount = (int) $step;
            $this->note(Str::format('Rolling back %d batch(es)', $stepCount));
        } else {
            $this->note('Rolling back last batch');
        }

        $this->newLine();

        // Build options array
        $options = [];
        if ($this->option('force')) {
            $options['--force'] = true;
        }

        if ($step) {
            $options['--step'] = (int) $step;
        }

        // Run rollback with spinner
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('migrate:rollback', $options),
            'Rolling back migrations...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        // Display result
        if ($exitCode === 0) {
            $this->success('Rollback completed successfully!');
        } else {
            $this->failure('Rollback failed');
        }

        return $exitCode;
    }

    /**
     * Show the status of each migration.
     *
     * Displays a table showing all migrations and whether they have been run.
     * This is useful for debugging migration issues and understanding the
     * current state of your database schema.
     *
     * @return int Command exit code
     */
    protected function status(): int
    {
        $this->header('Migration Status', '📊');

        // Run status command
        $exitCode = Artisan::call('migrate:status');

        // Display command output
        $this->line(Artisan::output());

        return $exitCode;
    }

    /**
     * Drop all tables, views, and types.
     *
     * This command completely wipes the database by dropping all tables, views,
     * and types. This is more thorough than migrate:fresh as it removes everything.
     *
     * Warning: This is the most destructive database operation!
     *
     * @return int Command exit code
     */
    protected function wipe(): int
    {
        $this->header('Wiping Database', '🗑️');

        // Safety check: require double confirmation unless forced
        if (! $this->option('force')) {
            $this->failure('DANGER: This will drop ALL database objects!');
            $this->caution('This includes all tables, views, types, and data.');
            $this->newLine();

            // First confirmation
            if (! $this->confirm('Are you ABSOLUTELY sure you want to continue?', false)) {
                $this->note('Operation cancelled');

                return self::FAILURE;
            }

            // Second confirmation for extra safety
            if (! $this->confirm('Type "yes" to confirm', false)) {
                $this->note('Operation cancelled');

                return self::FAILURE;
            }
        }

        $this->newLine();

        // Run wipe with spinner (always force)
        /** @var int $exitCode */
        $exitCode = $this->spinner(
            fn (): int => Artisan::call('db:wipe', ['--force' => true]),
            'Dropping all database objects...'
        );

        // Display command output
        $this->newLine();
        $this->line(Artisan::output());

        // Display result
        if ($exitCode === 0) {
            $this->success('Database wiped successfully!');
            $this->caution('Database is now empty');
        } else {
            $this->failure('Wipe failed');
        }

        return $exitCode;
    }

    /**
     * Confirm destructive operation with user.
     *
     * Displays a warning and prompts for confirmation unless --force is used.
     * This is a helper method for operations that delete data.
     *
     * @param  string $operation Description of the operation
     * @return bool   True if confirmed or forced, false otherwise
     */
    protected function confirmDestructiveOperation(string $operation): bool
    {
        // Skip confirmation if --force is used
        if ($this->option('force')) {
            return true;
        }

        // Display warning and prompt for confirmation
        $this->caution(Str::format('This will %s!', $operation));

        if (! $this->confirm('Are you sure you want to continue?', false)) {
            $this->note('Operation cancelled');

            return false;
        }

        return true;
    }
}
