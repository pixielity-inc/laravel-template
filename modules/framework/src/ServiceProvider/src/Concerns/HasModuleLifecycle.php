<?php

namespace Pixielity\ServiceProvider\Concerns;

use function event;

use Pixielity\Contracts\Foundation\Application;
use Pixielity\ServiceProvider\Contracts\Terminatable;
use Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent;
use Pixielity\Support\Reflection;
use Throwable;

/**
 * Has Module Lifecycle Trait.
 *
 * Provides lifecycle event management for module service providers.
 * Handles firing lifecycle events and registering termination callbacks.
 *
 * ## Purpose:
 * This trait enables pixielity to fire lifecycle events that can be listened to
 * by other parts of the application. It also provides opt-in termination handling
 * for pixielity that need to perform cleanup when the application shuts down.
 *
 * ## Lifecycle Events:
 * - `module.registering` - Fired at the start of register()
 * - `module.registered` - Fired at the end of register()
 * - `module.booting` - Fired at the start of boot()
 * - `module.booted` - Fired at the end of boot()
 *
 * ## Termination Handling:
 * Pixielity can implement the `Terminatable` interface to opt-in to termination
 * callbacks. This is useful for cleanup tasks like closing connections or
 * flushing caches.
 *
 * ## Usage:
 * ```php
 * // Listen to module events
 * Event::listen('module.booted', function ($data) {
 *     if ($data['module'] === 'Users') {
 *         // Perform actions after Users module boots
 *     }
 * });
 *
 * // Implement termination handling
 * class MyServiceProvider extends BaseModuleServiceProvider implements Terminatable
 * {
 *     public function terminating(): void
 *     {
 *         // Cleanup logic here
 *     }
 * }
 * ```
 *
 * @property string      $moduleName      The name of the current module
 * @property string      $moduleNamespace The namespace of the current module
 * @property string|null $modulePath      The path to the current module
 * @property Application $app             The application instance
 *
 * @since 1.0.0
 */
trait HasModuleLifecycle
{
    /**
     * Fire a module lifecycle event.
     *
     * Fires an event with module context information that can be listened to
     * by other parts of the application for monitoring and integration purposes.
     *
     * ## Event Names:
     * - `module.registering` - Fired at the start of register()
     * - `module.registered` - Fired at the end of register()
     * - `module.booting` - Fired at the start of boot()
     * - `module.booted` - Fired at the end of boot()
     *
     * ## Event Data:
     * - `module` - The module name
     * - `namespace` - The module namespace
     * - `path` - The module path
     *
     * ## Example Usage:
     * Listen to module events in your EventServiceProvider:
     * ```php
     * Event::listen('module.booted', function ($data) {
     *     if ($data['module'] === 'Users') {
     *         // Perform actions after Users module boots
     *     }
     * });
     * ```
     *
     * @param ModuleLifecycleEvent $moduleLifecycleEvent The lifecycle event to fire
     */
    protected function fireEvent(ModuleLifecycleEvent $moduleLifecycleEvent): void
    {
        // Fire Laravel event with module context data
        // This allows other parts of the application to listen and react
        event($moduleLifecycleEvent->value, [
            'module' => $this->moduleName,
            'namespace' => $this->moduleNamespace,
            'path' => $this->modulePath ?? null,
        ]);
    }

    /**
     * Register terminating callback if the provider implements Terminatable.
     *
     * This method checks if the service provider implements the Terminatable
     * interface and registers the terminating callback if it does.
     *
     * This allows pixielity to opt-in to termination handling only when needed.
     *
     * ## Performance Considerations:
     * Terminating callbacks should be FAST (< 100ms recommended).
     * For heavy cleanup operations, consider:
     * - Queuing cleanup jobs instead of running synchronously
     * - Using async operations where possible
     * - Logging errors instead of throwing exceptions
     */
    protected function collectTerminatingCallback(): void
    {
        // Only register terminating callback if provider implements Terminatable
        // This allows pixielity to opt-in to termination handling only when needed
        if (Reflection::implements($this, Terminatable::class)) {
            $this->app->terminating(function (): void {
                try {
                    // Wrap in timeout to prevent blocking
                    $this->executeWithTimeout(function (): void {
                        $this->terminating();
                    }, 1);  // 1 second timeout
                } catch (Throwable $throwable) {
                    // Log but don't throw - termination should be graceful
                    logger()->error('Module termination failed', [
                        'module' => $this->moduleName ?? 'unknown',
                        'error' => $throwable->getMessage(),
                    ]);
                }
            });
        }
    }

    /**
     * Execute a callback with a timeout.
     *
     * @param callable $callback The callback to execute
     * @param int      $timeout  Timeout in seconds
     */
    protected function executeWithTimeout(callable $callback, int $timeout = 1): void
    {
        // For CLI, we can use pcntl_alarm if available
        if (PHP_SAPI === 'cli' && function_exists('pcntl_alarm')) {
            pcntl_alarm($timeout);
            $callback();
            pcntl_alarm(0);  // Cancel alarm
        } else {
            // For web requests, just execute (response already sent)
            $callback();
        }
    }
}
