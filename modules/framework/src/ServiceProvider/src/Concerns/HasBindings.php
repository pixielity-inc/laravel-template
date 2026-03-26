<?php

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\ServiceProvider\Contracts\HasBindings as HasBindingsContract;
use Pixielity\Support\Reflection;

/**
 * Has Bindings Trait.
 *
 * Provides service binding registration functionality for module service providers.
 * Allows modules to bind services, repositories, and other classes into the container.
 *
 * ## Purpose:
 * This trait enables modules to define service bindings that should be registered
 * during the register process.
 *
 * ## Features:
 * - ✅ Automatic binding registration during register
 * - ✅ Interface-based binding definition
 * - ✅ Support for singletons, bindings, and aliases
 * - ✅ Dependency injection support
 *
 * ## Usage:
 * Implement the HasBindings interface in your service provider:
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasBindings
 * {
 *     public function bindings(): void
 *     {
 *         $this->app->singleton(MyService::class);
 *         $this->app->bind(MyInterface::class, MyImplementation::class);
 *         $this->app->alias(MyService::class, 'my.service');
 *     }
 * }
 * ```
 *
 * @since 1.0.0
 */
trait HasBindings
{
    /**
     * Collect and register service bindings for the module.
     *
     * This method is called during the register process to register any service bindings
     * defined by the module. It checks if the provider implements the
     * HasBindings interface and calls bindings() method.
     *
     * ## How It Works:
     * 1. Checks if provider implements HasBindings interface
     * 2. Calls bindings() method
     * 3. Services are bound to the container
     *
     * ## Example:
     * ```php
     * // In your module's service provider
     * class MyServiceProvider extends ServiceProvider implements HasBindings
     * {
     *     public function bindings(): void
     *     {
     *         $this->app->singleton(MyService::class);
     *     }
     * }
     * ```
     */
    protected function collectBindings(): void
    {
        // Check if the provider implements HasBindings interface
        if (! Reflection::implements($this, HasBindingsContract::class)) {
            return;
        }

        // Register bindings
        $this->bindings();
    }
}
