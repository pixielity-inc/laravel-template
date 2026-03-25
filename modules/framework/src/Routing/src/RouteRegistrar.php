<?php

namespace Pixielity\Routing;

use Override;
use Pixielity\Support\Reflection;
use ReflectionClass;
use Spatie\RouteAttributes\ClassRouteAttributes;
use Spatie\RouteAttributes\RouteRegistrar as SpatieRouteRegistrar;

/**
 * Route Registrar.
 *
 * Extends Spatie's RouteRegistrar to provide a simplified interface for
 * registering controllers with route attributes. This class focuses solely
 * on registration - discovery is handled by the HasRoutes trait.
 *
 * ## Purpose:
 * - Wrap Spatie's RouteRegistrar with a cleaner API
 * - Register controllers by class name (single or multiple)
 * - Integrate with Spatie's attribute-based routing system
 * - Use custom ClassRouteAttributes for proper prefix combination
 *
 * ## Design Philosophy:
 * This class follows the Single Responsibility Principle:
 * - **Registration Only**: This class only registers controllers
 * - **No Discovery**: Discovery is handled by HasRoutes trait
 * - **Simple Wrapper**: Wraps Spatie's registerClass() method
 * - **Custom Attributes**: Uses our ClassRouteAttributes for better prefix handling
 *
 * ## Features:
 * - ✅ Register single controller by class name
 * - ✅ Register multiple controllers at once
 * - ✅ All Spatie route attributes work as expected
 * - ✅ Proper combination of #[Prefix] and #[Group] attributes
 * - ✅ Integrates with Laravel's service container
 *
 * ## Usage:
 * ```php
 * // In service provider or trait
 * $registrar = app(RouteRegistrar::class);
 *
 * // Register single controller
 * $registrar->registerController(UserController::class);
 *
 * // Register multiple controllers
 * $registrar->registerControllers([
 *     UserController::class,
 *     PostController::class,
 * ]);
 * ```
 *
 * ## Integration with HasRoutes:
 * The HasRoutes trait uses this registrar to register discovered controllers:
 * ```php
 * protected function registerDiscoveredControllers(): void
 * {
 *     $registrar = $this->app->make(RouteRegistrar::class);
 *
 *     Discovery::attribute(Controller::class)
 *         ->get()
 *         ->filter(fn(string $controller) => Reflection::exists($controller))
 *         ->each(fn(string $controller) => $registrar->registerController($controller));
 * }
 * ```
 *
 * @since 1.0.0
 */
class RouteRegistrar extends SpatieRouteRegistrar
{
    /**
     * Register a single controller by class name.
     *
     * This method wraps Spatie's registerClass() method to provide a cleaner API.
     * It processes all route attributes on the controller and registers them with
     * Laravel's router.
     *
     * ## What it does:
     * 1. Validates the controller class exists
     * 2. Scans for route attributes (#[Get], #[Post], etc.)
     * 3. Registers routes with Laravel's router
     * 4. Applies middleware, prefixes, and other route options
     *
     * ## Example:
     * ```php
     * $registrar->registerController(UserController::class);
     * ```
     *
     * @param string $controllerClass Fully qualified controller class name
     */
    public function registerController(string $controllerClass): void
    {
        // Delegate to Spatie's registerClass method
        // This handles all the attribute scanning and route registration
        $this->registerClass($controllerClass);
    }

    /**
     * Register multiple controllers by class names.
     *
     * Convenience method for registering multiple controllers at once.
     * Iterates through the array and calls registerController() for each.
     *
     * ## Example:
     * ```php
     * $registrar->registerControllers([
     *     UserController::class,
     *     PostController::class,
     *     CommentController::class,
     * ]);
     * ```
     *
     * @param array<string> $controllerClasses Array of fully qualified controller class names
     */
    public function registerControllers(array $controllerClasses): void
    {
        // Register each controller individually
        foreach ($controllerClasses as $controllerClass) {
            $this->registerController($controllerClass);
        }
    }

    /**
     * Process route attributes for a controller class.
     *
     * Overrides Spatie's method to use our custom ClassRouteAttributes
     * which properly combines #[Prefix] and #[Group] attributes.
     *
     * @param string $className Fully qualified controller class name
     */
    #[Override]
    protected function processAttributes(string $className): void
    {
        if (! Reflection::exists($className)) {
            return;
        }

        $reflectionClass = new ReflectionClass($className);

        // Use our custom ClassRouteAttributes instead of Spatie's
        $classRouteAttributes = new ClassRouteAttributes($reflectionClass);

        $groups = $classRouteAttributes->groups();

        // Sort groups: domain routes come first
        usort($groups, function (array $group1, array $group2): int {
            $domain1 = ! empty($group1['domain'] ?? null);
            $domain2 = ! empty($group2['domain'] ?? null);

            return $domain2 <=> $domain1;
        });

        // Register routes for each group
        foreach ($groups as $group) {
            // Use parent's group method which has access to $router
            $this->group($group, fn () => $this->registerRoutes($reflectionClass, $classRouteAttributes));
        }

        // Register resource routes if applicable
        if ($classRouteAttributes->resource()) {
            $this->registerResource($reflectionClass, $classRouteAttributes);
        }
    }
}
