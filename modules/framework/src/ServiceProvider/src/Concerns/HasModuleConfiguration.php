<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Support\Facades\File;
use Pixielity\Foundation\Exceptions\RuntimeException;
use Pixielity\Support\Reflection;
use Pixielity\Support\Str;

/**
 * Has Module Configuration Trait.
 *
 * Provides configuration management for module service providers.
 * Handles module name, namespace, path, priority, and validation.
 *
 * ## Purpose:
 * - Centralize module configuration management
 * - Provide validation for required properties
 * - Auto-detect module path from provider location
 * - Manage module loading priority
 * - Handle asset versioning
 * - Track module dependencies
 *
 * ## Design Pattern:
 * This trait follows the Trait Composition pattern, allowing pixielity to
 * compose functionality by including only what they need.
 *
 * ## Properties Provided:
 * - `$moduleName` - Human-readable module name
 * - `$moduleNamespace` - PSR-4 namespace for the module
 * - `$modulePath` - Absolute filesystem path to module
 * - `$priority` - Module loading priority (1-999)
 * - `$assetVersion` - Version string for asset cache busting
 * - `$dependencies` - Array of required module names
 *
 * ## Methods Provided:
 * - `validateModuleConfiguration()` - Validates required properties
 * - `detectModulePath()` - Auto-detects module path
 * - `getModuleName()` - Returns module name
 * - `getModuleNamespace()` - Returns module namespace
 * - `getModulePath()` - Returns module path
 * - `getPriority()` - Returns loading priority
 * - `getModuleSlug()` - Returns lowercase module name
 *
 * ## Usage Example:
 * ```php
 * use Pixielity\ServiceProvider\Concerns\HasModuleConfiguration;
 *
 * class MyModuleServiceProvider extends ServiceProvider
 * {
 *     use HasModuleConfiguration;
 *
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 *     protected int $priority = 50;
 *     protected array $dependencies = ['Common', 'Users'];
 *
 *     public function boot(): void
 *     {
 *         $this->validateModuleConfiguration();
 *         $this->detectModulePath();
 *
 *         // Module path is now available
 *         $this->loadMigrationsFrom("{$this->modulePath}/Migrations");
 *     }
 * }
 * ```
 *
 * ## Validation:
 * The trait provides automatic validation to ensure:
 * - Module name is set
 * - Module namespace is set
 * - Clear error messages if configuration is missing
 *
 * ## Path Detection:
 * Module path is automatically detected using reflection:
 * - Finds the provider's file location
 * - Goes up one directory (from Providers/ to module root)
 * - Sets the absolute path
 *
 * ## Priority System:
 * Priority determines module loading order:
 * - 1-10: Core infrastructure (Common, ServiceProvider)
 * - 11-50: Foundation pixielity (Users, Auth)
 * - 51-100: Feature pixielity (default)
 * - 101+: Optional pixielity
 *
 * @since 1.0.0
 *
 * @author Pixielity Development Team
 *
 * @see \Pixielity\ServiceProvider\Contracts\ServiceProviderInterface
 */
trait HasModuleConfiguration
{
    /**
     * The module name.
     *
     * Human-readable name used for identification and display.
     *
     * ## Naming Convention:
     * - PascalCase format (e.g., 'LocationTracking', 'Users')
     * - No spaces or special characters
     * - Should match module directory name
     * - Singular or plural based on domain
     *
     * ## Usage:
     * - View namespacing: `view('locationtracking::dashboard')`
     * - Translation namespacing: `trans('locationtracking::messages.welcome')`
     * - Config namespacing: `config('locationtracking.config.key')`
     * - Logging: `logger()->info("Module {$moduleName} loaded")`
     * - Events: `event('module.booted', ['module' => $moduleName])`
     * - Cache keys: `cache("module.{$moduleName}.data")`
     *
     * ## Examples:
     * - 'LocationTracking'
     * - 'Users'
     * - 'Facilities'
     * - 'ImportExport'
     *
     * @required Must be defined in the class using this trait
     *
     * @example protected string $moduleName = 'MyModule';
     */
    // protected string $moduleName;

    /**
     * The module namespace.
     *
     * Fully qualified namespace for PSR-4 autoloading.
     *
     * ## Naming Convention:
     * - Format: `Pixielity\{ModuleName}`
     * - Must match PSR-4 autoloading configuration
     * - Should align with directory structure
     * - PascalCase for module name portion
     *
     * ## Usage:
     * - Class resolution: `{$namespace}\Controllers\MyController`
     * - Command discovery: `{$namespace}\Console\Commands\MyCommand`
     * - Seeder discovery: `{$namespace}\Seeders\{$moduleName}DatabaseSeeder`
     * - Service binding: `$app->bind("{$namespace}\Contracts\MyInterface")`
     * - Model resolution: `{$namespace}\Models\MyModel`
     *
     * ## Examples:
     * - 'Pixielity\LocationTracking'
     * - 'Pixielity\Users'
     * - 'Pixielity\Facilities'
     *
     * @required Must be defined in the class using this trait
     *
     * @example protected string $moduleNamespace = 'Pixielity\MyModule';
     */
    // protected string $moduleNamespace;

    /**
     * The module path.
     *
     * Absolute filesystem path to the module directory.
     * Auto-detected from provider file location if not explicitly set.
     *
     * ## Path Structure:
     * ```
     * {$modulePath}/                    # src/pixielity/laravel-{ModuleName}/
     * ├── src/                          # PHP source code
     * │   ├── Providers/
     * │   ├── Controllers/              # Auto-discovered via attributes
     * │   ├── Models/
     * │   ├── Services/
     * │   ├── Migrations/               # Auto-discovered
     * │   └── Seeders/                  # Auto-discovered
     * ├── resources/                    # Public assets (publishable)
     * │   ├── js/
     * │   ├── css/
     * │   └── images/
     * ├── src/
     * │   ├── views/                    # Blade templates
     * │   └── i18n/                     # Translations
     * ├── config/
     * └── tests/
     * ```
     *
     * ## Usage:
     * - Migrations: `$this->loadMigrationsFrom("{$modulePath}/src/Migrations")`
     * - Views: `$this->loadViewsFrom("{$modulePath}/src/views")`
     * - Translations: `$this->loadTranslationsFrom("{$modulePath}/src/i18n")`
     * - Config: `$this->mergeConfigFrom("{$modulePath}/config/config.php")`
     * - Assets: `$this->publishes(["{$modulePath}/resources" => public_path(...)])`
     *
     * ## Auto-Detection:
     * If not set, automatically detected using reflection:
     * 1. Get provider file location: `src/pixielity/laravel-{Module}/src/Providers/{Module}ServiceProvider.php`
     * 2. Go up two directories: `../..` from Providers/
     * 3. Result: `src/pixielity/laravel-{Module}/`
     * 4. Set absolute path using realpath()
     *
     * ## Example:
     * '/var/www/app/src/pixielity/laravel-LocationTracking'
     *
     * @auto-detected
     *
     * @optional Can be defined in the class, or will be auto-detected
     *
     * @example protected ?string $modulePath = null;
     */
    // protected ?string $modulePath = null;

    /**
     * Module loading priority.
     *
     * Controls the order in which pixielity are loaded.
     * Lower numbers load first, higher numbers load later.
     *
     * ## Priority Ranges:
     * - **1-10**: Core infrastructure pixielity
     *   - ServiceProvider (1)
     *   - Common (1)
     *   - Attributes (2)
     *
     * - **11-50**: Foundation pixielity
     *   - Users (10)
     *   - Authentication (10)
     *   - Authorization (10)
     *
     * - **51-100**: Feature pixielity (default: 100)
     *   - LocationTracking (10)
     *   - Facilities (10)
     *   - Incidents (10)
     *
     * - **101+**: Optional/addon pixielity
     *   - Reports (10)
     *   - Analytics (10)
     *
     * ## Use Cases:
     * - Ensure Common loads before feature pixielity
     * - Load authentication before authorization
     * - Load database pixielity before ORM pixielity
     * - Control service provider registration order
     *
     * @optional
     *
     * @default 100
     *
     * @example protected int $priority = 50;
     */
    // protected int $priority = 100;

    /**
     * Asset version.
     *
     * Version string used when publishing module assets.
     * Helps with cache busting when assets are updated.
     *
     * ## Versioning Strategy:
     * - Semantic versioning: `major.minor.patch`
     * - Increment on asset changes
     * - Use in asset URLs for cache busting
     *
     * ## Usage:
     * - Asset publishing: `public/pixielity/laravel-{slug}/{version}/`
     * - URL generation: `/pixielity/laravel-locationtracking/1.0.0/app.js`
     * - Cache invalidation: Change version to bust cache
     *
     * ## Example:
     * ```php
     * protected string $assetVersion = '2.1.0';
     * ```
     *
     * ## Publishing:
     * ```bash
     * bin/laravel vendor:publish --tag=locationtracking-assets
     * # Publishes to: public/pixielity/laravel-locationtracking/2.1.0/
     * ```
     *
     * @optional
     *
     * @default '1.0.0'
     *
     * @example protected string $assetVersion = '2.1.0';
     */
    // protected string $assetVersion = '1.0.0';

    /**
     * Module dependencies.
     *
     * List of module names that this module depends on.
     * Dependencies are validated during boot to ensure they are installed and enabled.
     *
     * ## Dependency Validation:
     * - Checks if dependency module exists
     * - Checks if dependency module is enabled
     * - Throws RuntimeException if dependency not met
     * - Validates before loading resources
     *
     * ## Usage:
     * ```php
     * protected array $dependencies = ['Common', 'Users', 'Authentication'];
     * ```
     *
     * ## Validation Process:
     * 1. Loop through each dependency
     * 2. Check if module exists using `Module::has()`
     * 3. Check if module is enabled using `Module::isEnabled()`
     * 4. Throw exception if validation fails
     *
     * ## Error Messages:
     * - "Module {name} depends on {dependency}, but it is not installed."
     * - "Module {name} depends on {dependency}, but it is not enabled."
     *
     * ## Best Practices:
     * - List only direct dependencies
     * - Don't include transitive dependencies
     * - Keep dependency list minimal
     * - Document why each dependency is needed
     *
     * @var array<string>
     *
     * @optional
     *
     * @default []
     *
     * @example protected array $dependencies = ['Common', 'Users'];
     */
    // protected array $dependencies = [];

    /**
     * Get the module name.
     *
     * @return string The module name
     */
    public function getModuleName(): string
    {
        return $this->moduleName;
    }

    /**
     * Get the module namespace.
     *
     * @return string The module namespace
     */
    public function getModuleNamespace(): string
    {
        return $this->moduleNamespace;
    }

    /**
     * Get the module path.
     *
     * @return string Absolute path to module directory
     */
    public function getModulePath(): string
    {
        if (! Reflection::propertyExists($this, 'modulePath') || ! isset($this->modulePath)) {
            $this->detectModulePath();
        }

        return $this->modulePath ?? '';
    }

    /**
     * Get the module priority.
     *
     * Returns the loading priority for this module.
     * Lower numbers load first, higher numbers load later.
     *
     * This can be used by external systems to order module loading.
     *
     * @return int The module priority
     */
    public function getPriority(): int
    {
        return $this->priority ?? 100;
    }

    /**
     * Validate module configuration.
     *
     * Consolidates all configuration validation steps:
     * 1. Validates required properties (moduleName, moduleNamespace)
     * 2. Validates module dependencies
     * 3. Auto-detects module path if not set
     *
     * This method should be called early in both register() and boot()
     * to ensure the module is properly configured before any operations.
     *
     * @throws RuntimeException if configuration is invalid
     */
    protected function validateConfiguration(): void
    {
        // Validate required properties
        $this->validateModuleConfiguration();

        // Auto-detect module path
        $this->detectModulePath();
    }

    /**
     * Validate module configuration.
     *
     * Ensures that required properties are set before the module boots.
     * This prevents cryptic errors and provides clear feedback to developers.
     *
     * @throws RuntimeException if required properties are not set
     */
    protected function validateModuleConfiguration(): void
    {
        throw_unless(isset($this->moduleName), RuntimeException::class, 'Module name not set in ' . $this::class . '. '
            . 'Please set the $moduleName property.');

        throw_unless(isset($this->moduleNamespace), RuntimeException::class, 'Module namespace not set in ' . $this::class . '. '
            . 'Please set the $moduleNamespace property.');
    }

    /**
     * Auto-detect module path from provider file location.
     *
     * If module path is not explicitly set, this method detects it
     * from the service provider's file location.
     *
     * Path structure:
     * - Provider location: src/pixielity/laravel-{Module}/src/Providers/{Module}ServiceProvider.php
     * - Module root:       src/pixielity/laravel-{Module}/
     * - Goes up 2 levels:  ../.. from Providers/ directory
     */

    /**
     * Auto-detect module path from provider file location.
     *
     * If module path is not explicitly set, this method detects it
     * from the service provider's file location.
     *
     * Path structure:
     * - Provider location: src/pixielity/laravel-{Module}/src/Providers/{Module}ServiceProvider.php
     * - Module root:       src/pixielity/laravel-{Module}/
     * - Goes up 2 levels:  ../.. from Providers/ directory
     */
    protected function detectModulePath(): void
    {
        if (! Reflection::propertyExists($this, 'modulePath') || ! isset($this->modulePath)) {
            $fileName = Reflection::getFileName($this);

            // Ensure we have a valid file path before using dirname
            if ($fileName !== false) {
                $dir = dirname($fileName);

                // If the provider is in a 'Providers' directory
                if (basename($dir) === 'Providers') {
                    $parent = dirname($dir);

                    // If the parent is 'src', the module root is one level up (tiered structure)
                    // src/pixielity/laravel-MyModule/src/Providers/MyServiceProvider.php
                    if (basename($parent) === 'src') {
                        $this->modulePath = (string) realpath(dirname($parent));
                    } else {
                        // Otherwise, the module root is the parent (flat structure)
                        // src/pixielity/laravel-MyModule/Providers/MyServiceProvider.php
                        $this->modulePath = (string) realpath($parent);
                    }
                } else {
                    // Fallback to going up two levels if not in Providers directory
                    $this->modulePath = (string) realpath($dir . '/../..');
                }
            }
        }
    }

    /**
     * Get the module's source path (handles tiered and flat structures).
     *
     * Returns {modulePath}/src if it exists (tiered), or {modulePath} (flat).
     *
     * @return string The absolute path to the module's source root
     */
    protected function getModuleSourcePath(): string
    {
        $modulePath = $this->getModulePath();
        $srcPath = $modulePath . '/src';

        return File::isDirectory($srcPath) ? $srcPath : $modulePath;
    }

    /**
     * Get module slug (lowercase module name).
     *
     * Used for cache keys, asset paths, and publish tags.
     *
     * @return string Lowercase module name
     */
    protected function getModuleSlug(): string
    {
        return Str::lower($this->moduleName ?? '');
    }
}
