<?php

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\ServiceProvider\Contracts\HasPolicies as HasPoliciesContract;
use Pixielity\Support\Reflection;

/**
 * Has Policies Trait.
 *
 * Provides authorization policy registration functionality for module service providers.
 * Allows modules to map Eloquent models to authorization policy classes.
 *
 * ## Purpose:
 * This trait enables modules to define authorization policies that should be registered
 * during the boot process.
 *
 * ## Features:
 * - ✅ Automatic policy registration during boot
 * - ✅ Interface-based policy definition
 * - ✅ Support for model-policy mapping
 * - ✅ Gate registration support
 *
 * ## Usage:
 * Implement the HasPolicies interface in your service provider:
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasPolicies
 * {
 *     public function policies(): void
 *     {
 *         Gate::policy(User::class, UserPolicy::class);
 *         Gate::policy(Post::class, PostPolicy::class);
 *     }
 * }
 * ```
 *
 * @since 1.0.0
 */
trait HasPolicies
{
    /**
     * Collect and register authorization policies for the module.
     *
     * This method is called during the boot process to register any authorization policies
     * defined by the module. It checks if the provider implements the
     * HasPolicies interface and calls policies() method.
     *
     * ## How It Works:
     * 1. Checks if provider implements HasPolicies interface
     * 2. Calls policies() method
     * 3. Policies are registered with Laravel's Gate
     *
     * ## Example:
     * ```php
     * // In your module's service provider
     * class MyServiceProvider extends ServiceProvider implements HasPolicies
     * {
     *     public function policies(): void
     *     {
     *         Gate::policy(User::class, UserPolicy::class);
     *     }
     * }
     * ```
     */
    protected function collectPolicies(): void
    {
        // Check if the provider implements HasPolicies interface
        if (! Reflection::implements($this, HasPoliciesContract::class)) {
            return;
        }

        // Register policies
        $this->policies();
    }
}
