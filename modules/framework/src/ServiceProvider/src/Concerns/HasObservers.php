<?php

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\ServiceProvider\Contracts\HasObservers as HasObserversContract;
use Pixielity\Support\Reflection;

/**
 * Has Observers Trait.
 *
 * Provides Eloquent model observer registration functionality for module service providers.
 * Allows modules to attach observers to models to listen for model events.
 *
 * ## Purpose:
 * This trait enables modules to define model observers that should be registered
 * during the boot process.
 *
 * ## Features:
 * - ✅ Automatic observer registration during boot
 * - ✅ Interface-based observer definition
 * - ✅ Support for all Eloquent model events
 * - ✅ Cross-cutting concerns (logging, caching, etc.)
 *
 * ## Usage:
 * Implement the HasObservers interface in your service provider:
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasObservers
 * {
 *     public function observers(): void
 *     {
 *         User::observe(UserObserver::class);
 *         Post::observe(PostObserver::class);
 *     }
 * }
 * ```
 *
 * @since 1.0.0
 */
trait HasObservers
{
    /**
     * Collect and register model observers for the module.
     *
     * This method is called during the boot process to register any model observers
     * defined by the module. It checks if the provider implements the
     * HasObservers interface and calls observers() method.
     *
     * ## How It Works:
     * 1. Checks if provider implements HasObservers interface
     * 2. Calls observers() method
     * 3. Observers are attached to models
     *
     * ## Example:
     * ```php
     * // In your module's service provider
     * class MyServiceProvider extends ServiceProvider implements HasObservers
     * {
     *     public function observers(): void
     *     {
     *         User::observe(UserObserver::class);
     *     }
     * }
     * ```
     */
    protected function collectObservers(): void
    {
        // Check if the provider implements HasObservers interface
        if (! Reflection::implements($this, HasObserversContract::class)) {
            return;
        }

        // Register observers
        $this->observers();
    }
}
