<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Pixielity\Discovery\Facades\Discovery;
use Pixielity\Foundation\Contracts\ApplicationInterface;
use Pixielity\Foundation\Enums\ContainerToken;
use Pixielity\Routing\Attributes\AsMiddleware;
use Pixielity\ServiceProvider\Contracts\HasMiddleware as HasMiddlewareContract;
use Pixielity\Support\Reflection;

/**
 * Has Middleware Trait.
 *
 * Provides middleware registration functionality for module service providers.
 * Supports both manual middleware registration and automatic discovery via attributes.
 *
 * ## Purpose:
 * This trait enables modules to define middleware that should be registered
 * with the router during the boot process. It supports two registration approaches:
 * 1. Manual registration via middleware() method (for critical ordering)
 * 2. Automatic discovery via #[Middleware] attribute (for flexible registration)
 *
 * ## Features:
 * - ✅ Automatic middleware registration during boot
 * - ✅ Interface-based middleware definition
 * - ✅ Attribute-based middleware discovery
 * - ✅ Priority-based middleware ordering
 * - ✅ Support for middleware aliases and groups
 * - ✅ Hybrid approach (manual + automatic)
 *
 * ## Usage:
 *
 * ### Manual Registration (Critical Order)
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasMiddleware
 * {
 *     public function middleware(Router $router): void
 *     {
 *         // Critical middleware with specific order
 *         $router->prependMiddlewareToGroup('api', HandleCors::class);
 *         $router->aliasMiddleware('my.middleware', MyMiddleware::class);
 *     }
 * }
 * ```
 *
 * ### Attribute-Based Discovery
 * ```php
 * #[AsMiddleware(alias: 'my.middleware', groups: ['api'], priority: 50)]
 * class MyMiddleware
 * {
 *     public function handle($request, $next) { }
 * }
 * ```
 *
 * ### Hybrid Approach (Recommended)
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasMiddleware
 * {
 *     public function middleware(Router $router): void
 *     {
 *         // 1. Manual registration for critical middleware
 *         $router->prependMiddlewareToGroup('api', HandleCors::class);
 *
 *         // 2. Discover attribute-based middleware
 *         $this->discoverMiddleware($router);
 *     }
 * }
 * ```
 *
 * @property ApplicationInterface $app
 * 
 * @since 1.0.0
 */
trait HasMiddleware
{
    /**
     * Collect and register middleware for the module.
     *
     * This method is called during the boot process to register any middleware
     * defined by the module. It checks if the provider implements the
     * HasMiddleware interface and calls middleware() with the Router instance.
     *
     * ## How It Works:
     * 1. Checks if provider implements HasMiddleware interface
     * 2. Uses afterResolving() to register middleware after HTTP Kernel is resolved
     * 3. Calls middleware() method (manual registration)
     * 4. Automatically discovers middleware with #[Middleware] attribute
     * 5. Middleware is registered with Laravel's router
     *
     * ## Example:
     * ```php
     * // In your module's service provider
     * class MyServiceProvider extends ServiceProvider implements HasMiddleware
     * {
     *     public function middleware(Router $router): void
     *     {
     *         // Optional: Manual registration for critical middleware
     *         $router->prependMiddlewareToGroup('api', HandleCors::class);
     *
     *         // Attribute-based middleware are auto-discovered
     *     }
     * }
     * ```
     */
    protected function collectMiddleware(): void
    {
        // Resolve the Router instance
        $router = $this->app[ContainerToken::ROUTER()];

        // Automatically discover and register middleware with #[Middleware] attribute
        $this->discoverMiddleware($router);

        // Check if the provider implements HasMiddleware interface
        if (! Reflection::implements($this, HasMiddlewareContract::class)) {
            return;
        }

        // Call manual middleware registration (if method exists)
        if (Reflection::methodExists($this, 'middleware')) {
            $this->middleware($router);
        }
    }

    /**
     * Discover and register middleware with #[Middleware] attribute.
     *
     * Uses the Discovery package to find all middleware classes decorated with
     * the #[Middleware] attribute and automatically registers them with the router.
     *
     * ## Discovery Process:
     * 1. Scans for classes with #[Middleware] attribute
     * 2. Filters enabled middleware only
     * 3. Sorts by priority (lower = earlier execution)
     * 4. Registers aliases with router
     * 5. Adds to specified middleware groups
     * 6. Caches results for performance
     *
     * ## Middleware Registration:
     * - **Alias**: Registered for route-level usage
     * - **Groups**: Added to specified groups (api, web, both, or none)
     * - **Priority**: Controls execution order within groups
     *
     * ## Usage:
     * ```php
     * public function middleware(Router $router): void
     * {
     *     // Manual registration first (critical order)
     *     $router->prependMiddlewareToGroup('api', HandleCors::class);
     *
     *     // Then discover attribute-based middleware
     *     $this->discoverMiddleware($router);
     * }
     * ```
     *
     * ## Performance:
     * Results are cached using the Discovery package's caching mechanism.
     * Cache key: 'middleware-discovery'
     *
     * @param Router        $router      The router instance
     * @param array<string> $directories Optional directories to scan (defaults to all)
     */
    protected function discoverMiddleware(Router $router, array $directories = []): void
    {
        // Discover all middleware classes with #[Middleware] attribute
        $discoveryBuilder = Discovery::attribute(AsMiddleware::class);

        // If specific directories provided, scan only those
        if ($directories !== []) {
            $discoveryBuilder->directories($directories);
        }

        // Get middleware classes with caching
        $middlewareClasses = $discoveryBuilder
            ->cached('middleware-discovery')
            ->get();

        // Group middleware by their attribute configuration
        // get() returns collection with metadata (keys=class names, values=metadata)
        $middlewareConfigs = [];
        $middlewareClasses->each(function (array $metadata, string $middlewareClass) use (&$middlewareConfigs): void {
            // Extract attribute from metadata
            // Discovery can return attribute in different formats depending on version
            $attribute = null;
            if (isset($metadata['attribute'])) {
                if ($metadata['attribute'] instanceof AsMiddleware) {
                    // Direct attribute object
                    $attribute = $metadata['attribute'];
                } elseif (is_array($metadata['attribute']) && isset($metadata['attribute'][AsMiddleware::class])) {
                    // Nested in array by class name
                    $attribute = $metadata['attribute'][AsMiddleware::class];
                }
            }

            if ($attribute === null || ! $attribute instanceof AsMiddleware) {
                return;
            }

            // Skip disabled middleware
            if (! $attribute->enabled) {
                return;
            }

            $middlewareConfigs[] = [
                'class' => $middlewareClass,
                'attribute' => $attribute,
            ];
        });

        // Sort by priority (lower = earlier)
        usort($middlewareConfigs, fn (array $a, array $b): int => $a['attribute']->priority <=> $b['attribute']->priority);

        // Register each middleware
        foreach ($middlewareConfigs as $middlewareConfig) {
            $class = $middlewareConfig['class'];
            $attribute = $middlewareConfig['attribute'];

            // Register alias
            $router->aliasMiddleware($attribute->alias, $class);

            // If no groups specified, register as global middleware
            if ($attribute->groups === []) {
                // Global middleware needs to be registered via the Kernel, not Router
                $this->registerGlobalMiddleware($class);
            } else {
                // Add to specified groups
                foreach ($attribute->groups as $group) {
                    $router->pushMiddlewareToGroup($group, $class);
                }
            }
        }
    }

    /**
     * Clear middleware discovery cache.
     *
     * Clears the cached middleware discovery results. Useful during development
     * when adding new middleware or modifying middleware attributes.
     *
     * ## When to Use:
     * - After adding new middleware classes
     * - After modifying #[Middleware] attributes
     * - During deployment to force fresh discovery
     * - In tests to ensure clean state
     *
     * ## Usage:
     * ```php
     * // In service provider
     * $this->clearMiddlewareCache();
     *
     * // Or via artisan
     * php artisan cache:clear
     * ```
     */
    protected function clearMiddlewareCache(): void
    {
        Discovery::clearCache('middleware-discovery');
    }

    /**
     * Register global middleware.
     *
     * Registers middleware to be applied to all requests globally.
     *
     * @param  string $middleware The middleware class to register
     * @return void
     */
    protected function registerGlobalMiddleware($middleware)
    {
        /** @var \Illuminate\Foundation\Http\Kernel $kernel */
        $kernel = $this->app[Kernel::class];

        $kernel->pushMiddleware($middleware);
    }
}
