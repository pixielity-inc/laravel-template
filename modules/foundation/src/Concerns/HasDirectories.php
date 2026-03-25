<?php

namespace Pixielity\Foundation\Concerns;

use Illuminate\Support\Env;
use Illuminate\Support\Facades\Request;

use function is_string;

use Override;

/**
 * Has Custom Directories Trait.
 *
 * Provides custom directory path management for the application.
 * Allows configuring a custom project structure where application files
 * are organized under a configurable project path.
 *
 * ## Purpose:
 * - Override Laravel's default directory structure
 * - Support custom project paths via APP_PROJECT_PATH
 * - Provide consistent path resolution
 *
 * ## Features:
 * - ✅ Configurable project path
 * - ✅ Custom environment file location
 * - ✅ Overridden path methods (config, database, resources, lang)
 *
 * @since 1.0.0
 */
trait HasDirectories
{
    /**
     * The base path to the monorepo packages directory.
     */
    protected ?string $packagesPath = null;

    /**
     * The base path to the monorepo modules directory.
     */
    protected ?string $modulesPath = null;

    /**
     * Get the path to the monorepo packages directory.
     *
     * Returns the path to the packages directory in the monorepo structure.
     * This provides a single source of truth for package paths.
     *
     * ## Example:
     * ```php
     * $app->packagesPath('Discovery/src'); // Returns: /path/to/packages/Discovery/src
     * $app->packagesPath('*\/src/Settings'); // Returns: /path/to/packages/*\/src/Settings
     * ```
     *
     * @param  string  $path  Optional path to append
     * @return string The full path to the packages directory
     */
    public function packagesPath(string $path = ''): string
    {
        $basePath = $this->packagesPath ?? $this->basePath('../../packages');

        return $this->joinPaths($basePath, $path);
    }

    /**
     * Set the packages base path for the monorepo.
     *
     * Internal method called by ApplicationBuilder. Use ApplicationBuilder
     * for configuration during bootstrap.
     *
     * @internal
     *
     * @param  string  $path  The base path to the packages directory
     */
    public function usePackagesPath(string $path): void
    {
        $this->packagesPath = $path;
    }

    /**
     * Get the path to the monorepo modules directory.
     *
     * Returns the path to the modules directory in the monorepo structure.
     * This provides a single source of truth for module paths.
     *
     * ## Example:
     * ```php
     * $app->modulesPath('Auth/src'); // Returns: /path/to/modules/Auth/src
     * $app->modulesPath('*\/src/Settings'); // Returns: /path/to/modules/*\/src/Settings
     * ```
     *
     * @param  string  $path  Optional path to append
     * @return string The full path to the modules directory
     */
    public function modulesPath(string $path = ''): string
    {
        $basePath = $this->modulesPath ?? $this->basePath('../../modules');

        return $this->joinPaths($basePath, $path);
    }

    /**
     * Set the modules base path for the monorepo.
     *
     * Internal method called by ApplicationBuilder. Use ApplicationBuilder
     * for configuration during bootstrap.
     *
     * @internal
     *
     * @param  string  $path  The base path to the modules directory
     */
    public function useModulesPath(string $path): void
    {
        $this->modulesPath = $path;
    }

    /**
     * Get the environment file the application uses.
     *
     * Overrides the default Laravel behavior to load environment files
     * from the 'env/' directory instead of the project root.
     *
     * ## Environment Files:
     * - env/.env - Main environment file
     * - env/.env.testing - Testing environment
     * - env/.env.local - Local overrides (gitignored)
     *
     * @return string The path to the environment directory
     */
    #[Override]
    public function environmentPath(): string
    {
        return $this->basePath('env');
    }

    /**
     * Get the path to the application "app" directory.
     *
     * Returns the path to the main application directory, which is
     * configurable via the APP_PROJECT_PATH environment variable.
     *
     * ## Example:
     * ```php
     * $app->path('modules/Users'); // Returns: /path/to/src/modules/Users
     * ```
     *
     * @param  string  $path  Optional path to append
     * @return string The full path to the application directory
     */
    #[Override]
    public function path($path = ''): string
    {
        return $this->joinPaths($this->basePath($this->getProjectPath()), $path);
    }

    /**
     * Get the path to the application configuration files.
     *
     * Returns the path to the config directory under the project path.
     *
     * ## Example:
     * ```php
     * $app->configPath('app.php'); // Returns: /path/to/src/config/app.php
     * ```
     *
     * @param  string  $path  Optional path to append
     * @return string The full path to the config directory
     */
    #[Override]
    public function configPath($path = ''): string
    {
        return $this->joinPaths($this->basePath($this->getProjectPath() . '/config'), $path);
    }

    /**
     * Get the path to the database directory.
     *
     * Returns the path to the database directory (migrations, seeders, factories)
     * under the project path.
     *
     * ## Example:
     * ```php
     * $app->databasePath('migrations'); // Returns: /path/to/src/database/migrations
     * ```
     *
     * @param  string  $path  Optional path to append
     * @return string The full path to the database directory
     */
    #[Override]
    public function databasePath($path = ''): string
    {
        return $this->joinPaths($this->basePath($this->getProjectPath() . '/database'), $path);
    }

    /**
     * Get the path to the resources directory.
     *
     * Returns the path to the resources directory (views, assets, lang)
     * under the project path.
     *
     * ## Example:
     * ```php
     * $app->resourcePath('views'); // Returns: /path/to/src/resources/views
     * ```
     *
     * @param  string  $path  Optional path to append
     * @return string The full path to the resources directory
     */
    #[Override]
    public function resourcePath($path = ''): string
    {
        return $this->joinPaths($this->basePath($this->getProjectPath() . '/resources'), $path);
    }

    /**
     * Get the path to the language files.
     *
     * Returns the path to the i18n directory (language files)
     * under the project path.
     *
     * ## Example:
     * ```php
     * $app->langPath('en'); // Returns: /path/to/src/i18n/en
     * ```
     *
     * @param  string  $path  Optional path to append
     * @return string The full path to the language directory
     */
    #[Override]
    public function langPath($path = ''): string
    {
        return $this->joinPaths($this->basePath($this->getProjectPath() . '/i18n'), $path);
    }

    /**
     * Get the project path from environment variable.
     *
     * Returns the configurable project path where application files are located.
     * Defaults to 'src' if APP_PROJECT_PATH is not set.
     *
     * ## Configuration:
     * Set in .env file:
     * ```
     * APP_PROJECT_PATH=src
     * ```
     *
     * ## Note:
     * Uses $_SERVER during bootstrap before Request facade is available.
     * This file is excluded from ServerVariableToRequestFacadeRector in rector.php.
     *
     * @return string The project path (e.g., 'src')
     */
    protected function getProjectPath(): string
    {
        // Try to get from config if available, otherwise use env()
        // This handles both runtime and bootstrap scenarios
        if (isset($this['config'])) {
            $path = $this['config']->get('app.project_path');
        } else {
            // @rector-ignore RectorLaravel\Rector\ArrayDimFetch\ServerVariableToRequestFacadeRector
            $path = $_ENV['APP_PROJECT_PATH'] ?? $_SERVER['APP_PROJECT_PATH'] ?? null;
        }

        // If path is null or not a string, use default 'src'
        // Empty string '' is valid and means no subdirectory
        if ($path === null || !is_string($path)) {
            return 'src';
        }

        return $path;
    }
}
