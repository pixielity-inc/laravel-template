<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Contracts\Foundation\Application as BaseApplication;
use Pixielity\Contracts\Foundation\Application;
use Pixielity\Foundation\Contracts\ApplicationInterface;
use Pixielity\Support\Reflection;

/**
 * Provides Services Trait.
 *
 * Complete service provider functionality as a trait for maximum flexibility.
 * Use this when you need to extend a different base class but still want
 * all the module service provider features.
 *
 * ## Purpose:
 * This trait provides the same functionality as the ServiceProvider abstract class,
 * but as a trait for composition. This is useful when:
 * - You need to extend a different base service provider
 * - You want to mix service provider functionality into existing classes
 * - You need maximum flexibility in your architecture
 *
 * ## Usage:
 *
 * ### Standard Usage (with Laravel's ServiceProvider):
 * ```php
 * use Illuminate\Support\ServiceProvider as BaseServiceProvider;
 * use Pixielity\ServiceProvider\Concerns\ProvidesServices;
 *
 * class MyServiceProvider extends BaseServiceProvider
 * {
 *     use ProvidesServices;
 *
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 *
 *     public function boot(): void
 *     {
 *         $this->bootApplication();
 *
 *         // Your custom boot logic
 *     }
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *         $this->registerApplication();
 *
 *         // Your custom register logic
 *     }
 * }
 * ```
 *
 * ### Advanced Usage (with custom base class):
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
 * ## Required Properties:
 * Classes using this trait MUST define:
 * - `protected string $moduleName` - The module name
 * - `protected string $moduleNamespace` - The module namespace
 *
 * ## Optional Properties:
 * - `protected ?string $modulePath = null` - Auto-detected if not set
 * - `protected int $priority = 100` - Module loading priority
 * - `protected string $assetVersion = '1.0.0'` - Asset version
 * - `protected array $dependencies = []` - Module dependencies
 *
 * ## Features Included:
 * - ✅ Automatic migration loading
 * - ✅ Automatic route registration
 * - ✅ Automatic command discovery
 * - ✅ Config file merging
 * - ✅ View loading
 * - ✅ Translation loading
 * - ✅ Asset publishing
 * - ✅ Middleware registration
 * - ✅ Observer registration
 * - ✅ Policy registration
 * - ✅ Health checks
 * - ✅ Lifecycle events
 * - ✅ Debug logging
 *
 * ## Constructor Pattern:
 * This trait provides the `_construct()` pattern for dependency injection:
 *
 * ```php
 * class MyServiceProvider extends BaseServiceProvider
 * {
 *     use ProvidesServices;
 *
 *     public function __construct($app)
 *     {
 *         parent::__construct($app);
 *         $this->initializeServiceProvider();
 *     }
 *
 *     // Optional: Use _construct() for DI
 *     protected function _construct(MyDependency $dependency): void
 *     {
 *         // Automatically called with DI
 *     }
 * }
 * ```
 *
 * @since 1.0.0
 * @see ServiceProvider For the abstract class version
 * @see BootsApplication For boot-time logic
 * @see RegistersServices For registration-time logic
 */
trait ProvidesServices
{
    use BootsApplication;
    use HasAttributeConfiguration;
    use HasBindings;
    use HasDebugging;
    use HasDeferredLoading;
    use HasHealthChecks;
    use HasMacros;
    use HasMiddleware;
    use HasModuleConfiguration;
    use HasModuleConstants;
    use HasModuleLifecycle;
    use HasObservers;
    use HasPolicies;
    use HasPublishing;
    use HasResourceDiscovery;
    use HasResourceLoading;
    use HasRoutes;
    use HasScheduledTasks;
    use RegistersServices;

    /**
     * Create a new service provider instance.
     *
     * This constructor is final to ensure consistent initialization flow.
     * Child classes should use the _construct() method for custom initialization logic.
     *
     * ## Recommended Pattern:
     * Instead of overriding __construct, use the _construct() method which supports
     * automatic dependency injection via Laravel's container (Magento pattern).
     *
     * @param ApplicationInterface|BaseApplication $application The application instance
     */
    final public function __construct(ApplicationInterface|BaseApplication $application)
    {
        parent::__construct($application);
        $this->initializeServiceProvider();
    }

    /**
     * Bootstrap the application services.
     *
     * Override this method in your service provider and call bootApplication():
     *
     * ```php
     * public function boot(): void
     * {
     *     $this->bootApplication();
     *
     *     // Your custom boot logic here
     * }
     * ```
     */
    abstract public function boot(): void;

    /**
     * Register the application services.
     *
     * Override this method in your service provider and call registerApplication():
     *
     * ```php
     * public function register(): void
     * {
     *     parent::register();
     *     $this->registerApplication();
     *
     *     // Your custom register logic here
     * }
     * ```
     */
    abstract public function register(): void;

    /**
     * Initialize the service provider.
     *
     * Call this method in your constructor after calling parent::__construct().
     * It handles the _construct() pattern for dependency injection.
     *
     * ## Usage:
     * ```php
     * public function __construct($app)
     * {
     *     parent::__construct($app);
     *     $this->initializeServiceProvider();
     * }
     * ```
     */
    protected function initializeServiceProvider(): void
    {
        // Call _construct() with dependency injection if it exists
        if (Reflection::methodExists($this, '_construct')) {
            /** @var ApplicationInterface $app */
            $app = $this->app;
            $app->call($this->_construct(...));
        }
    }
}
