<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Pixielity\Contracts\Foundation\Application;
use Pixielity\Discovery\Facades\Discovery;
use Pixielity\Support\Reflection;
use Pixielity\Support\Str;
use Symfony\Component\Console\Attribute\AsCommand;

/**
 * Has Resource Discovery Trait.
 *
 * Provides automatic resource discovery for module service providers using
 * the centralized Discovery package for efficient class discovery.
 *
 * ## Purpose:
 * This trait automatically discovers and registers module resources without
 * requiring manual registration. It uses the Discovery package for consistent
 * and performant class discovery across the monorepo.
 *
 * ## Features:
 * - ✅ Automatic controller discovery and registration
 * - ✅ Automatic command discovery and registration
 * - ✅ Automatic listener discovery and registration
 * - ✅ Automatic seeder registration
 * - ✅ Resource caching for production performance
 * - ✅ Centralized discovery logic via Discovery package
 * - ✅ Error handling with detailed logging
 *
 * ## Caching:
 * In production mode, discovered resources are cached to improve performance.
 * Cache duration is configurable via the `$cacheDuration` property.
 *
 * ## Migration from Manual Discovery:
 * This version replaces manual RecursiveDirectoryIterator scanning with the
 * Discovery package's optimized directory strategy, providing better performance
 * and consistency across the monorepo.
 *
 * ## Usage:
 * ```php
 * class MyServiceProvider extends BaseModuleServiceProvider
 * {
 *     // Enable/disable caching
 *     protected bool $cacheDiscoveredResources = true;
 *
 *     // Cache duration in seconds
 *     protected int $cacheDuration = 3600;
 * }
 * ```
 *
 * @property string      $modulePath               The path to the current module
 * @property string      $moduleName               The name of the current module
 * @property string      $moduleNamespace          The namespace of the current module
 * @property Application $app                      The application instance
 * @property bool        $cacheDiscoveredResources Enable/disable resource caching
 * @property int         $cacheDuration            Cache duration in seconds
 *
 * @method string getModuleSlug() Get the module slug (lowercase, kebab-case)
 * @method void   debugLog(string $message, array $context = [])              Log debug message
 *
 * @since 2.0.0 - Migrated to use Discovery package
 */
trait HasResourceDiscovery
{
    use HasModuleConstants;

    /**
     * Enable caching of discovered resources.
     *
     * When enabled and in production mode, discovered commands and controllers
     * will be cached to improve performance by avoiding repeated directory scans.
     *
     * Default: true
     */
    protected bool $cacheDiscoveredResources = true;

    /**
     * Cache duration in seconds.
     *
     * How long to cache discovered resources (commands, controllers).
     *
     * Default: 3600 seconds (1 hour)
     */
    protected int $cacheDuration = 3600;

    /**
     * Determine if resources should be cached.
     *
     * Resources are only cached when:
     * - The $cacheDiscoveredResources property is true
     * - The application is running in production mode
     *
     * @return bool True if resources should be cached
     */
    protected function shouldCacheResources(): bool
    {
        // Only cache when explicitly enabled AND in production mode
        // This avoids caching during development for faster iteration
        return $this->cacheDiscoveredResources && $this->app->isProduction();
    }

    /**
     * Collect and register module commands.
     *
     * This method checks if commands should be loaded and then discovers
     * and registers all Artisan commands from the Console/Commands/ directory.
     *
     * ## How It Works:
     * 1. Checks if commands should be loaded via shouldLoadCommands()
     * 2. Uses Discovery facade to find commands with #[AsCommand] attribute
     * 3. Registers discovered commands with Laravel
     * 4. Logs the number of commands registered
     *
     * ## Example:
     * ```php
     * // Commands are automatically discovered from:
     * // Console/Commands/*.php
     * ```
     */
    protected function collectCommands(): void
    {
        if (! $this->shouldLoadCommands()) {
            return;
        }

        $this->registerCommands();
        $this->debugLog('Registered commands', ['count' => count($commands ?? [])]);
    }

    /**
     * Register module commands.
     *
     * Automatically discovers and registers all Artisan commands
     * in the module's `Console/Commands/` directory using the Discovery package.
     *
     * Uses attribute-based discovery to find classes decorated with #[AsCommand].
     *
     * @return array<int, class-string> Array of registered command class names
     */
    protected function registerCommands(): void
    {
        // Get commands from cache or discover them
        $commands = $this->getCachedCommands();

        // Register commands with Laravel if any were found
        if (! empty($commands)) {
            $this->commands($commands);
        }
    }

    /**
     * Register module listeners.
     *
     * Automatically discovers and registers all event listeners
     * in the module's `Listeners/` directory using the Discovery package.
     *
     * @return array<int, class-string> Array of registered listener class names
     */
    protected function collectListeners(): array
    {
        // Get listeners from cache or discover them
        $listeners = $this->getCachedListeners();

        // Laravel will auto-discover events from listener handle methods
        // No explicit mapping needed

        return $listeners;
    }

    /**
     * Get cached commands or discover them.
     *
     * @return array<int, class-string> Array of command class names
     */
    protected function getCachedCommands(): array
    {
        if (! $this->shouldCacheResources()) {
            return $this->discoverCommands();
        }

        $cacheKey = self::CACHE_KEY_COMMANDS . '.' . $this->getModuleSlug();

        return Cache::remember($cacheKey, $this->cacheDuration, fn () => $this->discoverCommands());
    }

    /**
     * Get cached listeners or discover them.
     *
     * @return array<int, class-string> Array of listener class names
     */
    protected function getCachedListeners(): array
    {
        if (! $this->shouldCacheResources()) {
            return $this->discoverListeners();
        }

        $cacheKey = self::CACHE_KEY_LISTENERS . '.' . $this->getModuleSlug();

        return Cache::remember($cacheKey, $this->cacheDuration, fn () => $this->discoverListeners());
    }

    /**
     * Discover commands in the module's Console/Commands directory.
     *
     * Uses the Discovery facade's attribute strategy to find all classes
     * decorated with the #[AsCommand] attribute in the Commands directory.
     *
     * @return array<int, class-string> Array of command class names
     */
    protected function discoverCommands(): array
    {
        $commandsPath = Str::format('%s/%s/%s', $this->getModuleSourcePath(), self::DIR_CONSOLE, self::DIR_COMMANDS);

        // Debug: Log the path being checked
        $this->debugLog('Discovering commands', [
            'path' => $commandsPath,
            'exists' => is_dir($commandsPath),
        ]);

        // Return empty array if Commands directory doesn't exist
        if (! File::isDirectory($commandsPath)) {
            return [];
        }

        // Use Discovery facade to find commands with AsCommand attribute
        // Filter to only include classes in the Commands directory
        // get() returns collection with metadata, keys() gives us class names, values() reindexes
        $commands = Discovery::attribute(AsCommand::class)
            ->directories($commandsPath)
            ->instantiable()
            ->get()
            ->keys()
            ->values()
            ->all();

        // Debug: Log discovered commands
        $this->debugLog('Commands discovered', [
            'count' => count($commands),
            'commands' => $commands,
        ]);

        return $commands;
    }

    /**
     * Discover listeners in the module's Listeners directory.
     *
     * Uses the Discovery facade's directory strategy to find all classes
     * in the Listeners directory.
     *
     * @return array<int, class-string> Array of listener class names
     */
    protected function discoverListeners(): array
    {
        $listenersPath = Str::format('%s/%s', $this->getModuleSourcePath(), self::DIR_LISTENERS);

        $this->debugLog('Discovering listeners', [
            'path' => $listenersPath,
            'exists' => is_dir($listenersPath),
        ]);

        if (! File::isDirectory($listenersPath)) {
            return [];
        }

        // Use Discovery facade to find all classes in Listeners directory
        $listeners = Discovery::directories($listenersPath)
            ->instantiable()
            ->get()
            ->all();

        $this->debugLog('Listeners discovered', [
            'count' => count($listeners),
            'listeners' => $listeners,
        ]);

        return $listeners;
    }

    /**
     * Collect and register module seeders.
     *
     * This method discovers and registers the module's database seeder
     * making it available for `bin/laravel db:seed`.
     *
     * ## How It Works:
     * 1. Calls registerSeeder() to discover and register the seeder
     * 2. Seeder class follows convention: {ModuleName}DatabaseSeeder
     *
     * ## Example:
     * ```php
     * // Seeder is automatically discovered from:
     * // Seeders/MyModuleDatabaseSeeder.php
     * ```
     */
    protected function collectSeeders(): void
    {
        $this->registerSeeder();
    }

    /**
     * Register the module seeder.
     *
     * Makes the module's database seeder available for `bin/laravel db:seed`.
     */
    protected function registerSeeder(): void
    {
        // Build expected seeder class name following convention
        $seederClass = Str::format('%s\Seeders\%sDatabaseSeeder', $this->moduleNamespace, $this->moduleName);

        // Only register if seeder class exists
        if (Reflection::exists($seederClass)) {
            // Register after application has booted
            $this->app->booted(function () use ($seederClass): void {
                // Add to module seeders config array
                /** @var array<int, string> $seeders */
                $seeders = config('app.module_seeders', []);
                $seeders[] = $seederClass;
                config()->set('app.module_seeders', $seeders);
            });
        }
    }
}
