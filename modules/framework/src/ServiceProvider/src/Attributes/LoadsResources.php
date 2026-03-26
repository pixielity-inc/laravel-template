<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Attributes;

use Attribute;

/**
 * Loads Resources Attribute.
 *
 * Declaratively configure which resources a ServiceProvider should load.
 * This replaces the need for flags and should*() methods.
 *
 * ## Purpose:
 * - Declarative resource loading configuration
 * - Eliminate boolean flags and conditional methods
 * - Clear, self-documenting code
 * - Build-time compilation friendly
 *
 * ## Usage:
 * ```php
 * #[LoadsResources(
 *     migrations: true,
 *     routes: true,
 *     views: true,
 *     translations: true,
 *     config: true,
 *     commands: true,
 *     seeders: true
 * )]
 * class MyServiceProvider extends ServiceProvider
 * {
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 * }
 * ```
 *
 * ## Minimal Example (only load routes):
 * ```php
 * #[LoadsResources(routes: true)]
 * class ApiServiceProvider extends ServiceProvider
 * {
 *     // Only routes will be loaded, everything else disabled
 * }
 * ```
 *
 * ## All Resources (default behavior):
 * ```php
 * #[LoadsResources] // All resources enabled by default
 * class FullServiceProvider extends ServiceProvider
 * {
 *     // All resources will be loaded
 * }
 * ```
 *
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_CLASS)]
final readonly class LoadsResources
{
    /**
     * Create a new LoadsResources attribute.
     *
     * @param bool $migrations Load database migrations
     * @param bool $routes Load routes (api.php, web.php, channels.php)
     * @param bool $views Load Blade views
     * @param bool $translations Load translations (i18n)
     * @param bool $config Load and merge configuration files
     * @param bool $commands Discover and register Artisan commands
     * @param bool $seeders Register database seeders
     * @param bool $publishables Register publishable assets
     * @param bool $middleware Register middleware
     * @param bool $observers Register model observers
     * @param bool $policies Register authorization policies
     * @param bool $healthChecks Register health checks
     * @param bool $listeners Register event listeners
     * @param bool $macros Register macros
     * @param bool $scheduledTasks Register scheduled tasks
     */
    public function __construct(
        public bool $migrations = true,
        public bool $routes = true,
        public bool $views = true,
        public bool $translations = true,
        public bool $config = true,
        public bool $commands = true,
        public bool $seeders = true,
        public bool $publishables = true,
        public bool $middleware = true,
        public bool $observers = true,
        public bool $policies = true,
        public bool $healthChecks = true,
        public bool $listeners = true,
        public bool $macros = true,
        public bool $scheduledTasks = true,
    ) {
    }

    /**
     * Check if all resources are enabled.
     *
     * @return bool
     */
    public function loadsAll(): bool
    {
        return $this->migrations
            && $this->routes
            && $this->views
            && $this->translations
            && $this->config
            && $this->commands
            && $this->seeders
            && $this->publishables
            && $this->middleware
            && $this->observers
            && $this->policies
            && $this->healthChecks
            && $this->listeners
            && $this->macros
            && $this->scheduledTasks;
    }

    /**
     * Check if no resources are enabled.
     *
     * @return bool
     */
    public function loadsNone(): bool
    {
        return !$this->migrations
            && !$this->routes
            && !$this->views
            && !$this->translations
            && !$this->config
            && !$this->commands
            && !$this->seeders
            && !$this->publishables
            && !$this->middleware
            && !$this->observers
            && !$this->policies
            && !$this->healthChecks
            && !$this->listeners
            && !$this->macros
            && !$this->scheduledTasks;
    }
}
