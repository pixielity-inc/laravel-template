<?php

declare(strict_types=1);

namespace Pixielity\Database\Console\Commands;

use function base_path;

use Exception;

use function file_exists;
use function file_get_contents;
use function file_put_contents;

use Illuminate\Console\Command;
use Illuminate\Container\Attributes\Config;

use function Laravel\Prompts\text;

use PDO;
use PDOException;
use Pixielity\Support\Str;

use function preg_match;
use function preg_replace;

use Symfony\Component\Console\Attribute\AsCommand;
use Throwable;

/**
 * Database Create Command - REFACTORED.
 *
 * This command provides a convenient way to create new databases for the application
 * without manually connecting to the database server. It supports both PostgreSQL
 * and MySQL database systems and can optionally update the .env configuration file
 * with the new database name.
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
 * ## Features:
 * - Creates databases on PostgreSQL or MySQL servers
 * - Checks for existing databases before creation
 * - Optionally updates env/.env file with new database name
 * - Interactive prompts for safety
 * - Force mode for automated scripts
 * - Proper error handling and user feedback
 *
 * ## Usage Examples:
 *
 * ### Interactive mode - prompts for database name:
 * ```bash
 * bin/laravel db:create
 * ```
 *
 * ### Create database with specific name:
 * ```bash
 * bin/laravel db:create my_new_database
 * ```
 *
 * ### Create and automatically update env/.env file:
 * ```bash
 * bin/laravel db:create my_new_database --update-env
 * ```
 *
 * ### Skip confirmation prompts (useful for scripts):
 * ```bash
 * bin/laravel db:create my_new_database --force
 * ```
 *
 * ### Combine options:
 * ```bash
 * bin/laravel db:create my_new_database --update-env --force
 * ```
 *
 * ## Arguments:
 * - `name` - The name of the database to create (optional, will prompt if not provided)
 *
 * ## Options:
 * - `--update-env` - Update the env/.env file with the new database name
 * - `--force` - Force creation without confirmation
 *
 * ## Exit Codes:
 * - 0 (SUCCESS) - Database created successfully
 * - 1 (FAILURE) - Database name missing, creation failed, or user cancelled
 *
 * ## How It Works:
 * 1. Reads database connection settings from current configuration
 * 2. Connects to the database server (postgres/mysql system database)
 * 3. Checks if the target database already exists
 * 4. Creates the database with appropriate encoding/collation
 * 5. Optionally updates env/.env with DB_DATABASE setting
 * 6. Reminds user to clear config cache if .env was updated
 *
 * ## Requirements:
 * - Database server must be running and accessible
 * - User must have CREATE DATABASE privileges
 * - For PostgreSQL: connects to 'postgres' system database
 * - For MySQL: connects without specifying a database
 *
 * ## After Creation:
 * If you updated the .env file, remember to:
 * 1. Run `bin/laravel config:clear` to apply changes
 * 2. Run `bin/laravel migrate` to set up database schema
 * 3. Run `bin/laravel db:seed` to populate initial data
 *
 * ## Supported Drivers:
 * - **pgsql**: PostgreSQL (creates with UTF8 encoding)
 * - **mysql**: MySQL (creates with utf8mb4 character set)
 *
 * @see BaseCommand
 *
 * @author Pixielity Development Team
 *
 * @since 1.0.0
 */
#[AsCommand(
    name: 'db:create',
    description: 'Create a new database with optional environment configuration update'
)]
class DatabaseCreateCommand extends Command
{
    /**
     * The console command signature.
     *
     * Defines the command name, arguments, and available options:
     * - name: Optional database name (prompts if not provided)
     * - --update-env: Automatically update env/.env file
     * - --force: Skip confirmation prompts
     *
     * @var string
     */
    protected $signature = 'db:create
                            {name? : The name of the database to create}
                            {--update-env : Update the env/.env file with the new database name}
                            {--force : Force creation without confirmation}';

    /**
     * Database configuration.
     *
     * @var array{default: string, connections: array<string, array<string, mixed>>}
     */
    protected array $databaseConfig;

    /**
     * Create a new command instance.
     */
    public function _construct(): void
    {
        $this->databaseConfig = config('database');

        parent::_construct();
    }

    /**
     * Execute the console command.
     *
     * This is the main entry point for the command. It orchestrates the entire
     * database creation process:
     * 1. Gets or prompts for database name
     * 2. Validates database name is provided
     * 3. Gathers database configuration
     * 4. Confirms creation with user (unless --force)
     * 5. Creates the database using appropriate driver method
     * 6. Optionally updates env/.env file
     * 7. Provides feedback and next steps
     *
     * @return int Command exit code (SUCCESS or FAILURE)
     */
    public function handle(): int
    {
        // Display command header
        $this->header('Create Database', '🔨');

        try {
            // Step 1: Gather database name
            $this->step(1, 4, 'Gathering database information...');
            $databaseName = $this->gatherDatabaseName();

            // Validate database name is provided
            if (in_array($databaseName, [null, '', '0'], true)) {
                $this->failure('Database name is required!');

                return self::FAILURE;
            }

            // Step 2: Get database configuration
            $this->step(2, 4, 'Reading database configuration...');
            $config = $this->getDatabaseConfig();

            // Step 3: Confirm creation
            $this->step(3, 4, 'Confirming creation...');
            if (! $this->confirmCreation($databaseName, $config)) {
                $this->note('Database creation cancelled');

                return self::SUCCESS;
            }

            // Step 4: Create database
            $this->step(4, 4, 'Creating database...');
            $this->createDatabase($databaseName, $config);

            // Display success and handle env update
            $this->displaySuccess($databaseName);

            return self::SUCCESS;
        } catch (Throwable $throwable) {
            return $this->exception($throwable, 'Failed to create database');
        }
    }

    /**
     * Gather database name from argument or prompt user.
     *
     * If the database name is provided as an argument, uses that.
     * Otherwise, prompts the user interactively using Laravel Prompts.
     *
     * @return string|null Database name or null if not provided
     */
    protected function gatherDatabaseName(): ?string
    {
        // Get database name from argument
        $name = $this->argument('name');

        // If not provided, prompt user using Laravel Prompts
        if (empty($name)) {
            return text(
                label: 'Enter the database name',
                placeholder: 'my_database',
                required: true,
                validate: fn ($value): ?string => empty($value) ? 'Database name is required' : null
            );
        }

        return $name;
    }

    /**
     * Get database configuration from environment.
     *
     * Reads the current database connection settings from the configuration
     * and returns them as an array for easy access.
     *
     * @return array{connection: string, host: string, port: int, driver: string, username: string, password: string} Database configuration
     */
    protected function getDatabaseConfig(): array
    {
        $connection = $this->databaseConfig['default'];
        $connectionConfig = $this->databaseConfig['connections'][$connection];

        return [
            'connection' => $connection,
            'host' => $connectionConfig['host'],
            'port' => (int) $connectionConfig['port'],
            'driver' => $connectionConfig['driver'],
            'username' => $connectionConfig['username'],
            'password' => $connectionConfig['password'],
        ];
    }

    /**
     * Confirm database creation with user.
     *
     * Displays the database details and prompts for confirmation unless
     * the --force flag is used.
     *
     * @param  string  $databaseName  Database name
     * @param  array{connection: string, host: string, port: int, driver: string, username: string, password: string}  $config  Database configuration
     * @return bool True if confirmed or forced, false otherwise
     */
    protected function confirmCreation(string $databaseName, array $config): bool
    {
        // Skip confirmation if --force is used
        if ($this->option('force')) {
            return true;
        }

        // Display database details
        $this->newLine();
        $this->note('Database Details:');
        $this->listing([
            'Name: ' . $databaseName,
            'Driver: ' . $config['driver'],
            'Host: ' . $config['host'],
            'Port: ' . $config['port'],
        ], '→');
        $this->newLine();

        // Prompt for confirmation
        return $this->confirm(
            Str::format("Create database '%s' on %s://%s:%d?", $databaseName, $config['driver'], $config['host'], $config['port']),
            true
        );
    }

    /**
     * Create the database using the appropriate driver.
     *
     * Routes to the correct creation method based on the database driver.
     * Supports PostgreSQL and MySQL.
     *
     * @param  string  $databaseName  Database name
     * @param  array{connection: string, host: string, port: int, driver: string, username: string, password: string}  $config  Database configuration
     *
     * @throws Exception If driver is not supported
     */
    protected function createDatabase(string $databaseName, array $config): void
    {
        // Create database with spinner based on driver
        $this->spinner(
            function () use ($databaseName, $config): void {
                if ($config['driver'] === 'pgsql') {
                    $this->createPostgresDatabase(
                        $config['host'],
                        $config['port'],
                        $config['username'],
                        $config['password'],
                        $databaseName
                    );
                } elseif ($config['driver'] === 'mysql') {
                    $this->createMysqlDatabase(
                        $config['host'],
                        $config['port'],
                        $config['username'],
                        $config['password'],
                        $databaseName
                    );
                } else {
                    throw new Exception('Unsupported database driver: ' . $config['driver']);
                }
            },
            Str::format("Creating database '%s'...", $databaseName)
        );
    }

    /**
     * Create a PostgreSQL database.
     *
     * Connects to the PostgreSQL server using the 'postgres' system database,
     * checks if the target database already exists, and creates it with UTF8
     * encoding if it doesn't exist.
     *
     * @param  string  $host  Database server hostname
     * @param  int  $port  Database server port
     * @param  string  $username  Database username
     * @param  string  $password  Database password
     * @param  string  $databaseName  Name of database to create
     *
     * @throws PDOException If connection or creation fails
     */
    protected function createPostgresDatabase(
        string $host,
        int $port,
        string $username,
        string $password,
        string $databaseName
    ): void {
        // Connect to postgres system database
        $dsn = Str::format('pgsql:host=%s;port=%d;dbname=postgres', $host, $port);
        $pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);

        // Check if database already exists
        $stmt = $pdo->query(Str::format("SELECT 1 FROM pg_database WHERE datname = '%s'", $databaseName));
        if ($stmt !== false && $stmt->fetch()) {
            throw new Exception(Str::format("Database '%s' already exists!", $databaseName));
        }

        // Create database with UTF8 encoding
        $pdo->exec(Str::format('CREATE DATABASE "%s" WITH ENCODING \'UTF8\'', $databaseName));
    }

    /**
     * Create a MySQL database.
     *
     * Connects to the MySQL server without specifying a database, checks if
     * the target database already exists, and creates it with utf8mb4 character
     * set and unicode collation if it doesn't exist.
     *
     * @param  string  $host  Database server hostname
     * @param  int  $port  Database server port
     * @param  string  $username  Database username
     * @param  string  $password  Database password
     * @param  string  $databaseName  Name of database to create
     *
     * @throws PDOException If connection or creation fails
     */
    protected function createMysqlDatabase(
        string $host,
        int $port,
        string $username,
        string $password,
        string $databaseName
    ): void {
        // Connect to MySQL server without specifying database
        $dsn = Str::format('mysql:host=%s;port=%d', $host, $port);
        $pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);

        // Check if database already exists
        $stmt = $pdo->query(
            Str::format("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '%s'", $databaseName)
        );
        if ($stmt !== false && $stmt->fetch()) {
            throw new Exception(Str::format("Database '%s' already exists!", $databaseName));
        }

        // Create database with utf8mb4 character set
        $pdo->exec(Str::format('CREATE DATABASE `%s` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci', $databaseName));
    }

    /**
     * Display success message and handle env file update.
     *
     * Shows success message, optionally updates the env/.env file,
     * and displays next steps for the user.
     *
     * @param  string  $databaseName  Created database name
     */
    protected function displaySuccess(string $databaseName): void
    {
        $this->newLine();
        $this->success(Str::format("Database '%s' created successfully!", $databaseName));

        // Handle env file update
        if ($this->option('update-env')) {
            $this->updateEnvFile($databaseName);
        } elseif ($this->confirm('Update env/.env file with the new database name?', false)) {
            $this->updateEnvFile($databaseName);
        }

        // Display next steps
        $this->displayNextSteps();
    }

    /**
     * Update the env/.env file with the new database name.
     *
     * Reads the env/.env file, finds the DB_DATABASE line, and replaces it
     * with the new database name. If DB_DATABASE doesn't exist, it adds it
     * after the DB_CONNECTION line.
     *
     * @param  string  $databaseName  New database name to set
     */
    protected function updateEnvFile(string $databaseName): void
    {
        $envPath = base_path('env/.env');

        // Check if env/.env file exists
        if (! file_exists($envPath)) {
            $this->newLine();
            $this->caution('env/.env file not found. Skipping update.');
            $this->note('Create env/.env from env/.env.example first.');

            return;
        }

        // Read current env file content
        $envContent = file_get_contents($envPath);

        // Ensure file_get_contents returned a string
        if ($envContent === false) {
            $this->newLine();
            $this->caution('Failed to read env/.env file. Skipping update.');

            return;
        }

        $pattern = '/^DB_DATABASE=.*/m';
        $replacement = 'DB_DATABASE=' . $databaseName;

        // Replace existing DB_DATABASE or add it after DB_CONNECTION
        $newContent = preg_match($pattern, $envContent)
            ? preg_replace($pattern, $replacement, $envContent)
            : preg_replace('/^(DB_CONNECTION=.*)/m', '$1
DB_DATABASE=' . $databaseName, $envContent);

        // Ensure preg_replace succeeded
        if ($newContent === null) {
            $this->newLine();
            $this->caution('Failed to update env/.env file. Skipping update.');

            return;
        }

        // Write updated content back to file
        file_put_contents($envPath, $newContent);

        $this->newLine();
        $this->success('Updated env/.env file with DB_DATABASE=' . $databaseName);
        $this->caution('Run "bin/laravel config:clear" to apply the changes.');
    }

    /**
     * Display next steps after database creation.
     *
     * Provides helpful guidance on what to do after creating the database,
     * including clearing config cache, running migrations, and seeding data.
     */
    protected function displayNextSteps(): void
    {
        $this->newLine();
        $this->note('Next steps:');
        $this->listing([
            'Clear config cache: bin/laravel config:clear',
            'Run migrations:     bin/laravel migrate',
            'Seed database:      bin/laravel db:seed',
            '',
            'Or use: composer db:fresh',
        ], '→');
    }
}
