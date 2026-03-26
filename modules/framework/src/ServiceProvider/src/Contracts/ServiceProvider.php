<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

/**
 * Service Provider Contract.
 *
 * Defines the contract for module service providers in the application.
 * This interface ensures consistent behavior across all module service providers.
 *
 * ## Purpose:
 * - Standardize service provider interface
 * - Enable type-hinting for service providers
 * - Document expected behavior
 * - Support dependency injection
 *
 * ## Implementation:
 * All module service providers should implement this contract either:
 * 1. By extending `Pixielity\ServiceProvider\Providers\ServiceProvider`
 * 2. By using `Pixielity\ServiceProvider\Concerns\ProvidesServices` trait
 *
 * ## Usage Example:
 *
 * ### Option 1: Extend Base ServiceProvider
 * ```php
 * use Pixielity\ServiceProvider\Providers\ServiceProvider;
 *
 * class MyServiceProvider extends ServiceProvider
 * {
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 *
 *     public function boot(): void
 *     {
 *         parent::boot();
 *         // Custom boot logic
 *     }
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *         // Custom register logic
 *     }
 * }
 * ```
 *
 * ### Option 2: Use ProvidesServices Trait
 * ```php
 * use Illuminate\Support\ServiceProvider as BaseServiceProvider;
 * use Pixielity\ServiceProvider\Concerns\ProvidesServices;
 * use Pixielity\ServiceProvider\Contracts\ServiceProvider as ServiceProviderContract;
 *
 * class MyServiceProvider extends BaseServiceProvider implements ServiceProviderContract
 * {
 *     use ProvidesServices;
 *
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 *
 *     public function boot(): void
 *     {
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
 * ## Type Hinting:
 * ```php
 * function processServiceProvider(ServiceProvider $provider): void
 * {
 *     $provider->boot();
 *     $provider->register();
 * }
 * ```
 *
 * @since 1.0.0
 * @see \Pixielity\ServiceProvider\Providers\ServiceProvider
 * @see \Pixielity\ServiceProvider\Concerns\ProvidesServices
 */
interface ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * This method is called after all service providers have been registered.
     * Use this to perform actions that depend on other services being available.
     *
     * ## Typical Actions:
     * - Load migrations
     * - Register routes
     * - Load views
     * - Load translations
     * - Publish assets
     * - Register commands
     * - Register middleware
     * - Register observers
     * - Register policies
     * - Fire lifecycle events
     *
     * ## Implementation Notes:
     * - Called after register() phase completes
     * - All services are available in the container
     * - Safe to resolve dependencies
     * - Should be idempotent
     *
     * @return void
     */
    public function boot(): void;

    /**
     * Register any application services.
     *
     * This method is called during the registration phase, before boot().
     * Use this to bind services, repositories, and other classes into the container.
     *
     * ## Typical Actions:
     * - Bind interfaces to implementations
     * - Register singletons
     * - Merge configuration
     * - Register deferred providers
     * - Set up container bindings
     *
     * ## Implementation Notes:
     * - Called before boot() phase
     * - Should not resolve services from container
     * - Should only register bindings
     * - Should be idempotent
     * - Should not have side effects
     *
     * @return void
     */
    public function register(): void;
}
