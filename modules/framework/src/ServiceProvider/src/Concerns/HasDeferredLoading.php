<?php

namespace Pixielity\ServiceProvider\Concerns;

/**
 * Has Deferred Loading Trait.
 *
 * Provides deferred loading functionality for module service providers.
 * Allows pixielity to be loaded only when their services are requested.
 *
 * ## Purpose:
 * This trait enables pixielity to implement deferred loading, which improves
 * application boot time by only loading the module when one of its services
 * is actually requested. This is particularly useful for heavy pixielity that
 * aren't needed on every request.
 *
 * ## Features:
 * - ✅ Deferred provider support
 * - ✅ Service declaration for lazy loading
 * - ✅ Automatic provider registration when services are requested
 * - ✅ Improved application boot performance
 *
 * ## How It Works:
 * When `$defer` is set to `true`, Laravel will:
 * 1. Skip loading this provider during application boot
 * 2. Register the provider only when a service from `getProvidedServices()` is requested
 * 3. Load the provider and resolve the requested service
 *
 * ## Usage:
 * ```php
 * class MyServiceProvider extends BaseModuleServiceProvider
 * {
 *     // Enable deferred loading
 *     protected bool $defer = true;
 *
 *     protected function getProvidedServices(): array
 *     {
 *         return [
 *             MyServiceInterface::class,
 *             AnotherServiceInterface::class,
 *         ];
 *     }
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *
 *         $this->app->singleton(MyServiceInterface::class, MyService::class);
 *         $this->app->singleton(AnotherServiceInterface::class, AnotherService::class);
 *     }
 * }
 * ```
 *
 * ## When to Use Deferred Loading:
 * ✅ **Use when:**
 * - Module provides services that aren't needed on every request
 * - Module has heavy initialization logic
 * - Module is only used in specific contexts (e.g., admin panel)
 *
 * ❌ **Don't use when:**
 * - Module registers routes (routes must be registered during boot)
 * - Module registers middleware
 * - Module registers event listeners needed on every request
 * - Module provides services used frequently
 *
 * ## Performance Impact:
 * Deferred loading can significantly improve boot time for applications with
 * many pixielity. For example, if you have 20 pixielity but only 5 are needed per
 * request, deferring the other 15 can reduce boot time by 50% or more.
 *
 * @property bool $defer Indicates if loading of the provider is deferred
 *
 * @since 1.0.0
 */
trait HasDeferredLoading
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * When true, the provider will only be loaded when one of its services is requested.
     * This can improve application boot time for heavy pixielity.
     *
     * Default: false
     */
    protected bool $defer = false;

    /**
     * Get the services provided by the provider.
     *
     * This method is used for deferred service providers.
     * When $defer is true, Laravel will only load this provider when
     * one of the services returned by this method is requested.
     *
     * @return array<int, string> Array of service class names
     */
    public function provides(): array
    {
        // If not deferred, return empty array (provider loads normally)
        if (! $this->defer) {
            return [];
        }

        // Return services that trigger loading of this provider
        return $this->getProvidedServices();
    }

    /**
     * Get services provided by this module (for deferred loading).
     *
     * Override this method in child classes to specify which services
     * this module provides. This is only used when $defer is true.
     *
     * ## Example Usage:
     * ```php
     * protected bool $defer = true;
     *
     * protected function getProvidedServices(): array
     * {
     *     return [
     *         MyServiceInterface::class,
     *         AnotherServiceInterface::class,
     *     ];
     * }
     * ```
     *
     * @return array<int, string> Array of service class names
     */
    protected function getProvidedServices(): array
    {
        return [];
    }
}
