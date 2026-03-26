<?php

namespace Pixielity\ServiceProvider\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Override;
use Pixielity\Foundation\Application;
use Pixielity\ServiceProvider\Concerns\ProvidesServices;
use Pixielity\ServiceProvider\Contracts\ServiceProvider as ServiceProviderContract;
use Pixielity\ServiceProvider\Attributes\LoadsResources;

/**
 * Base Module Service Provider.
 *
 * Abstract base class that provides common functionality for all module service providers.
 * This class implements the Module Pattern for Laravel applications, enabling modular
 * architecture with automatic resource discovery and registration.
 *
 * ## Architecture:
 * This class uses the ProvidesServices trait which composes multiple traits:
 * - HasModuleConfiguration - Configuration management
 * - HasModuleLifecycle - Lifecycle event management
 * - HasResourceLoading - Resource loading (routes, views, etc.)
 * - HasResourceDiscovery - Auto-discovery of commands, controllers
 * - HasDebugging - Debug logging
 * - HasPublishing - Asset and config publishing
 * - HasHealthChecks - Health check registration
 * - HasDeferredLoading - Deferred provider support
 * - BootsApplication - Boot-time orchestration
 * - RegistersServices - Registration-time orchestration
 *
 * ## Alternative: Use ProvidesServices Trait
 * If you need to extend a different base class, use the ProvidesServices trait directly:
 *
 * ```php
 * use Vendor\CustomServiceProvider;
 * use Pixielity\ServiceProvider\Concerns\ProvidesServices;
 *
 * class MyServiceProvider extends CustomServiceProvider
 * {
 *     use ProvidesServices;
 *
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 *
 *     public function boot(): void
 *     {
 *         parent::boot();
 *         $this->bootApplication();
 *     }
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *         $this->registerApplication();
 *     }
 * }
 * ```
 *
 * ## Purpose:
 * - Standardize module structure across the application
 * - Automate common registration tasks (migrations, routes, views, etc.)
 * - Reduce boilerplate code in module service providers
 * - Provide hooks for module-specific customization
 *
 * ## Features:
 * - ✅ Automatic migration loading from Migrations/
 * - ✅ Automatic route registration (API, Web, Channels)
 * - ✅ Automatic command discovery and registration
 * - ✅ Automatic seeder registration
 * - ✅ Config file merging with namespace support
 * - ✅ View loading with namespace support
 * - ✅ Translation loading with namespace support
 * - ✅ Asset publishing support
 * - ✅ Middleware registration hook
 * - ✅ Custom route registration hook
 * - ✅ Lifecycle events
 * - ✅ Dependency validation
 * - ✅ Resource caching
 * - ✅ Debug logging
 * - ✅ Health checks
 * - ✅ Deferred loading
 *
 * ## Module Structure:
 *
 * ```
 * Pixielity/{ModuleName}/
 * ├── src/
 * │   ├── Controllers/           # HTTP Controllers
 * │   ├── Models/                # Eloquent Models
 * │   ├── Services/              # Business Logic Services
 * │   ├── Data/                  # Data Transfer Objects (Dtos)
 * │   ├── Migrations/            # Database Migrations (auto-loaded)
 * │   ├── Seeders/               # Database Seeders (auto-registered)
 * │   │   └── {ModuleName}DatabaseSeeder.php
 * │   ├── Factories/             # Model Factories
 * │   ├── Middleware/            # HTTP Middleware
 * │   ├── Providers/             # Service Providers
 * │   │   └── {ModuleName}ServiceProvider.php (extends this class)
 * │   ├── Console/
 * │   │   └── Commands/          # Artisan Commands (auto-registered)
 * │   ├── routes/
 * │   │   ├── api.php            # API Routes (auto-loaded with api/v1 prefix)
 * │   │   ├── web.php            # Web Routes (auto-loaded)
 * │   │   └── channels.php       # Broadcast Channels (auto-loaded)
 * │   ├── views/                 # Blade Views (namespace: module_name::)
 * │   └── i18n/                  # Translations (namespace: module_name::)
 * ├── config/
 * │   └── config.php             # Module Configuration
 * ├── resources/                 # Public assets (CSS, JS, images)
 * │   ├── css/
 * │   ├── js/
 * │   └── images/
 * └── tests/                     # Module tests
 * ```
 *
 * ## Usage Example:
 *
 * ```php
 * namespace Pixielity\LocationTracking\Providers;
 *
 * use Pixielity\ServiceProvider\Providers\ServiceProvider;
 *
 * class LocationTrackingServiceProvider extends ServiceProvider
 * {
 *     protected string $moduleName = 'LocationTracking';
 *     protected string $moduleNamespace = 'Pixielity\LocationTracking';
 *
 *     public function boot(): void
 *     {
 *         parent::boot(); // Auto-loads migrations, routes, etc.
 *
 *         // Module-specific boot logic here
 *         Event::listen(LocationRecorded::class, UpdateCurrentLocation::class);
 *     }
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *
 *         // Register module services
 *         $this->app->singleton(LocationTrackingServiceInterface::class, LocationTrackingService::class);
 *     }
 * }
 * ```
 *
 * ## Hooks for Customization:
 * - `registerMiddleware(Router $router)` - Register module middleware
 * - `registerRoutes(Router $router)` - Register custom routes programmatically
 * - `terminating()` - Perform cleanup when application shuts down (implement Terminatable interface)
 * - `booting(Closure $callback)` - Execute logic before boot (Laravel built-in)
 * - `booted(Closure $callback)` - Execute logic after boot (Laravel built-in)
 * - `register()` - Register services, bindings, etc.
 * - `boot()` - Perform actions after all services registered
 *
 * @since 1.0.0
 * @see ProvidesServices For the trait version
 * @see ServiceProviderInterface
 * @see \Pixielity\ServiceProvider\Contracts\Terminatable
 */
#[LoadsResources]
abstract class ServiceProvider extends BaseServiceProvider implements ServiceProviderContract
{
    use ProvidesServices;

    /**
     * The application instance.
     *
     * @var Application
     */
    protected $app;

    /**
     * Bootstrap any application services.
     *
     * This method is called after all service providers have been registered.
     * It performs automatic resource discovery and registration for the module.
     *
     * ## Automatic Actions Performed:
     * 1. Fires 'module.booting' event
     * 2. Validates module configuration
     * 3. Validates module dependencies
     * 4. Auto-detects module path
     * 5. Loads database migrations
     * 6. Registers API routes with configurable prefix
     * 7. Registers web routes
     * 8. Registers broadcast channels
     * 9. Merges module configuration files
     * 10. Loads views with module namespace
     * 11. Discovers and registers Artisan commands
     * 12. Registers database seeders
     * 13. Loads translations with module namespace
     * 14. Calls registerMiddleware() hook
     * 15. Calls registerRoutes() hook
     * 16. Registers model observers
     * 17. Registers policies
     * 18. Registers terminating callback (if Terminatable)
     * 19. Fires 'module.booted' event
     *
     * ## Override in Child Classes:
     * ```php
     * public function boot(): void
     * {
     *     parent::boot(); // IMPORTANT: Call parent first
     *
     *     // Add module-specific boot logic here
     *     Event::listen(MyEvent::class, MyListener::class);
     * }
     * ```
     */
    public function boot(): void
    {
        $this->bootApplication();
    }

    /**
     * Register any application services.
     *
     * This method is called during the registration phase, before boot().
     * Use this to bind services, repositories, and other classes into the container.
     *
     * ## Override in Child Classes:
     * ```php
     * public function register(): void
     * {
     *     parent::register(); // IMPORTANT: Call parent first
     *
     *     // Register module services
     *     $this->app->singleton(MyService::class);
     *     $this->app->bind(MyInterface::class, MyImplementation::class);
     * }
     * ```
     */
    public function register(): void
    {
        $this->registerApplication();
    }
}
