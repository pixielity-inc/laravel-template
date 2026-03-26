<?php

declare(strict_types=1);

namespace Pixielity\Crud\Providers;

use Override;
use Pixielity\Crud\Concerns\HasDiscovery;
use Pixielity\Support\ServiceProvider;

/**
 * CRUD Service Provider.
 *
 * Registers CRUD package services and discovers criteria and scopes automatically.
 *
 * ## Features:
 * - ✅ Automatic criteria discovery via #[AsCriteria] attribute
 * - ✅ Automatic scope discovery via #[AsScope] attribute
 * - ✅ Criteria registry initialization
 * - ✅ Scope registry initialization
 * - ✅ Repository and Service base classes
 *
 * ## Discovery:
 * This provider automatically discovers all criteria and scope classes marked with
 * the #[AsCriteria] and #[AsScope] attributes throughout the application and registers
 * them in their respective registries.
 *
 * ## Usage:
 * This provider is automatically registered via composer.json:
 *
 * ```json
 * {
 *     "extra": {
 *         "laravel": {
 *             "providers": [
 *                 "Pixielity\\Crud\\CrudServiceProvider"
 *             ]
 *         }
 *     }
 * }
 * ```
 *
 * @since 1.0.0
 */
class CrudServiceProvider extends ServiceProvider
{
    use HasDiscovery;

    /**
     * The module name.
     *
     * Used for:
     * - Identifying the module in logs and error messages
     * - Namespacing views: `view('crud::view_name')`
     * - Namespacing config: `config('crud.config_name')`
     */
    protected string $moduleName = 'Crud';

    /**
     * The module namespace.
     *
     * Used for:
     * - Auto-discovering commands in `Pixielity\Crud\Console\Commands\`
     * - Auto-discovering seeders in `Pixielity\Crud\Seeders\`
     * - Auto-discovering controllers in `Pixielity\Crud\Controllers\`
     * - Resolving class names for dependency injection
     */
    protected string $moduleNamespace = 'Pixielity\Crud';

    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Call parent register for base functionality
        // Parent will call collectCrudChecks() which calls crudChecks()
        parent::register();
    }

    /**
     * Bootstrap any application services.
     */
    // #[Override]
    public function boot(): void
    {
        // parent::boot();
    }
}
