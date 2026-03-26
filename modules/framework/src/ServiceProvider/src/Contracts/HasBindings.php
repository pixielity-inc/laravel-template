<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

/**
 * Has Bindings Contract.
 *
 * Defines the contract for service providers that register service bindings
 * in the application container.
 *
 * ## Purpose:
 * - Provide a standardized way to register container bindings
 * - Enable automatic binding registration during service provider registration
 * - Support dependency injection configuration
 * - Allow modules to define their service bindings
 *
 * ## When to Use:
 * Implement this interface when your module needs to:
 * - Bind interfaces to implementations
 * - Register singletons
 * - Register contextual bindings
 * - Configure dependency injection
 * - Register factories
 *
 * ## Usage Example:
 * ```php
 * use Pixielity\ServiceProvider\Providers\ServiceProvider;
 * use Pixielity\ServiceProvider\Contracts\HasBindings;
 *
 * class MyServiceProvider extends ServiceProvider implements HasBindings
 * {
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 *
 *     public function bindings(): void
 *     {
 *         // Bind interface to implementation
 *         $this->app->bind(
 *             MyServiceInterface::class,
 *             MyService::class
 *         );
 *
 *         // Register singleton
 *         $this->app->singleton(
 *             CacheManager::class,
 *             fn($app) => new CacheManager($app['config'])
 *         );
 *
 *         // Contextual binding
 *         $this->app->when(MyController::class)
 *             ->needs(LoggerInterface::class)
 *             ->give(CustomLogger::class);
 *     }
 * }
 * ```
 *
 * ## Execution Flow:
 * ```
 * Application Boot
 *   → ServiceProvider::register()
 *   → collectBindings() (if implements HasBindings)
 *   → bindings() method called
 *   → Services bound to container
 * ```
 *
 * ## Best Practices:
 * - Use interface bindings for flexibility
 * - Use singletons for stateful services
 * - Use factories for complex instantiation
 * - Document binding rationale
 * - Keep bindings simple
 *
 * @since 1.0.0
 * @see \Pixielity\ServiceProvider\Concerns\HasBindings
 */
interface HasBindings
{
    /**
     * Register service bindings in the container.
     *
     * This method is called during the registration phase to bind services,
     * interfaces, and other classes into the application container.
     *
     * ## Common Binding Types:
     * - `bind()` - Basic binding (new instance each time)
     * - `singleton()` - Singleton binding (same instance)
     * - `scoped()` - Scoped binding (same instance per request)
     * - `instance()` - Bind existing instance
     * - `when()->needs()->give()` - Contextual binding
     *
     * ## Implementation Notes:
     * - Called during register() phase
     * - Should not resolve services from container
     * - Should only register bindings
     * - Should be idempotent
     *
     * @return void
     */
    public function bindings(): void;
}
