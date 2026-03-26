<?php

declare(strict_types=1);

namespace Pixielity\Database\Providers;

use Override;
use Pixielity\Database\Concerns\HasDiscovery as HasDatabaseDiscovery;
use Pixielity\Support\ServiceProvider;

/**
 * Database Service Provider.
 *
 * Registers database utilities, Blueprint macros, and automatically discovers
 * tagged/bound classes for Laravel migrations and database operations.
 *
 * ## Features:
 * - Custom Blueprint macros for common database patterns
 * - Automatic repository injection via #[UseRepository] attribute
 * - Automatic discovery of tagged classes via #[Tagged]
 * - Automatic discovery of bound classes via #[Bind]
 * - Database utilities and extensions
 * - Model traits and repositories
 *
 * ## Blueprint Macros:
 * - `$table->baseId()` - Adds a base_id column for public-facing identifiers
 *
 * ## Repository Injection:
 * Services can use #[UseRepository(Model::class)] to automatically inject repositories:
 * ```php
 * class UserService
 * {
 *     public function __construct(
 *         #[UseRepository(User::class)]
 *         private UserRepository $users
 *     ) {}
 * }
 * ```
 *
 * ## Automatic Discovery:
 * Classes marked with #[Tagged] or #[Bind] are automatically discovered and registered:
 * ```php
 * #[Tagged('repositories')]
 * class UserRepository { }
 *
 * #[Bind(RepositoryInterface::class)]
 * class UserRepository implements RepositoryInterface { }
 * ```
 *
 * ## Usage:
 *
 * ### In Migrations:
 * ```php
 * Schema::create('users', function (Blueprint $table) {
 *     $table->id();
 *     $table->baseId(); // Custom macro
 *     $table->string('name');
 *     $table->timestamps();
 * });
 * ```
 *
 * @category   Providers
 *
 * @since      1.0.0
 */
class DatabaseServiceProvider extends ServiceProvider /* implements HasMacros */
{
    use HasDatabaseDiscovery;

    /**
     * The module name.
     *
     * Used for:
     * - Identifying the module in logs and error messages
     * - Namespacing translations: `trans('featureflags::message')`
     * - Namespacing config: `config('featureflags.config_name')`
     */
    protected string $moduleName = 'Database';

    /**
     * The module namespace.
     *
     * Used for:
     * - Auto-discovering commands in `Pixielity\Database\Console\Commands\`
     * - Resolving class names for dependency injection
     */
    protected string $moduleNamespace = 'Pixielity\Database';

    /**
     * Bootstrap any application services.
     *
     * This method is called after all service providers have been registered.
     * It's the place to perform any actions that depend on other services
     * being available.
     */
    // #[Override]
    public function boot(): void
    {
        // Call parent boot to automatically load configuration
        // parent::boot();
    }

    /**
     * Register any application services.
     *
     * This method is called during the registration phase, before boot().
     * Use this to bind services into the container.
     */
    public function register(): void
    {
        // Call parent register for base functionality
        parent::register();

        // Discover and register Blueprint macros (from Database)
        $this->discoverBlueprintMacros();
    }
}
