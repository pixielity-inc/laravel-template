<?php

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\ServiceProvider\Contracts\HasMacros as HasMacrosContract;
use Pixielity\Support\Reflection;

/**
 * Has Macros Trait.
 *
 * Provides macro registration functionality for module service providers.
 * Allows modules to add custom methods to Laravel's macroable classes.
 *
 * ## Purpose:
 * This trait enables modules to define macros that should be registered
 * during the boot process.
 *
 * ## Features:
 * - ✅ Automatic macro registration during boot
 * - ✅ Interface-based macro definition
 * - ✅ Support for all macroable classes
 * - ✅ Extend Collection, Request, Response, etc.
 *
 * ## Usage:
 * Implement the HasMacros interface in your service provider:
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasMacros
 * {
 *     public function macros(): void
 *     {
 *         Collection::macro('toUpper', function () {
 *             return $this->map(fn($item) => Str::upper($item));
 *         });
 *
 *         Request::macro('wantsHtml', function () {
 *             return $this->accepts('text/html');
 *         });
 *     }
 * }
 * ```
 *
 * @since 1.0.0
 */
trait HasMacros
{
    /**
     * Collect and register macros for the module.
     *
     * This method is called during the boot process to register any macros
     * defined by the module. It checks if the provider implements the
     * HasMacros interface and calls macros() method.
     *
     * ## How It Works:
     * 1. Checks if provider implements HasMacros interface
     * 2. Calls macros() method
     * 3. Macros are registered with macroable classes
     *
     * ## Example:
     * ```php
     * // In your module's service provider
     * class MyServiceProvider extends ServiceProvider implements HasMacros
     * {
     *     public function macros(): void
     *     {
     *         Collection::macro('toUpper', function () {
     *             return $this->map(fn($item) => Str::upper($item));
     *         });
     *     }
     * }
     * ```
     */
    protected function collectMacros(): void
    {
        // Check if the provider implements HasMacros interface
        if (! Reflection::implements($this, HasMacrosContract::class)) {
            return;
        }

        // Register macros
        $this->macros();
    }
}
