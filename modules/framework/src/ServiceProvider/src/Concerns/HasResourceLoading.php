<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Support\Facades\File;
use Illuminate\Translation\Translator;
use Illuminate\View\Factory;
use Pixielity\Foundation\Enums\ContainerToken;
use Pixielity\Support\Arr;
use Pixielity\Support\Str;

/**
 * Has Resource Loading Trait.
 *
 * Provides resource loading functionality for module service providers.
 * Handles loading of migrations, routes, views, translations, and configurations.
 *
 * ## Purpose:
 * This trait centralizes all resource loading logic for pixielity, making it easy
 * to conditionally load resources based on environment or configuration.
 *
 * ## Features:
 * - ✅ Conditional resource loading with should*() methods
 * - ✅ Global resource loading toggle with $loadResources property
 * - ✅ Automatic route discovery (API, Web, Channels)
 * - ✅ Controller registration with Spatie Route Attributes
 * - ✅ Configuration file merging with namespacing
 * - ✅ View loading with namespace support
 * - ✅ Translation loading with namespace support
 * - ✅ API route prefix configuration
 *
 * ## Resources Loaded:
 * - Migrations from `Migrations/` directory
 * - Routes from `routes/api.php`, `routes/web.php`, `routes/channels.php`
 * - Controllers from `Controllers/` directory (with route attributes)
 * - Configuration from `config/*.php` files
 * - Views from `resources/views/` directory
 * - Translations from `src/i18n/` directory
 *
 * ## Global Resource Loading Control:
 * Set `$loadResources = false` to disable ALL resource loading:
 * ```php
 * class OctaneServiceProvider extends ServiceProvider
 * {
 *     protected bool $loadResources = false; // Disables everything
 * }
 * ```
 *
 * ## Conditional Loading:
 * Override the should*() methods to control individual resources:
 * ```php
 * protected function shouldLoadMigrations(): bool
 * {
 *     return !app()->environment('testing');
 * }
 * ```
 *
 * @property string      $modulePath           The path to the current module
 * @property string      $moduleName           The name of the current module
 * @property bool        $loadResources        Global toggle for all resource loading (default: true)
 * @property string|null $viewNamespace        The namespace for views (defaults to lowercase module name)
 * @property string|null $translationNamespace The namespace for translations (defaults to lowercase module name)
 *
 * @method void debugLog(string $message, array $context = []) Log debug message
 *
 * @since 1.0.0
 */
trait HasResourceLoading
{
    use HasModuleConstants;

    /**
     * Collect and load migrations for the module.
     *
     * This method checks if migrations should be loaded and then loads them
     * from the Migrations/ directory.
     *
     * ## How It Works:
     * 1. Checks if migrations should be loaded via shouldLoadMigrations()
     * 2. Gets the module source path
     * 3. Loads migrations from {sourcePath}/Migrations
     *
     * ## Example:
     * ```php
     * // Migrations are automatically loaded from:
     * // src/Migrations/2024_01_01_000000_create_users_table.php
     * ```
     */
    protected function collectMigrations(): void
    {
        if (! $this->shouldLoadMigrations()) {
            return;
        }

        $sourcePath = $this->getModuleSourcePath();
        $migrationsPath = Str::format('%s/%s', $sourcePath, static::DIR_MIGRATIONS);

        $this->debugLog('Loading migrations', ['path' => $migrationsPath]);
        $this->loadMigrationsFrom($migrationsPath);
    }

    /**
     * Collect and load views for the module.
     *
     * This method checks if views should be loaded and then loads them
     * from the views/ directory.
     *
     * ## How It Works:
     * 1. Checks if views should be loaded via shouldLoadViews()
     * 2. Calls loadModuleViews() to load views with namespace
     *
     * ## Example:
     * ```php
     * // Views are automatically loaded from:
     * // src/views/ - Namespaced as 'modulename::view'
     * ```
     */
    protected function collectViews(): void
    {
        if (! $this->shouldLoadViews()) {
            return;
        }

        $sourcePath = $this->getModuleSourcePath();
        $viewsPath = Str::format('%s/%s', $sourcePath, static::DIR_VIEWS);

        $this->debugLog('Loading views', ['path' => $viewsPath]);
        $this->loadModuleViews();
    }

    /**
     * Collect and load translations for the module.
     *
     * This method checks if translations should be loaded and then loads them
     * from the i18n/ directory.
     *
     * ## How It Works:
     * 1. Checks if translations should be loaded via shouldLoadTranslations()
     * 2. Calls loadModuleTranslations() to load translations with namespace
     *
     * ## Example:
     * ```php
     * // Translations are automatically loaded from:
     * // src/i18n/ - Namespaced as 'modulename::messages.key'
     * ```
     */
    protected function collectTranslations(): void
    {
        if (! $this->shouldLoadTranslations()) {
            return;
        }

        $sourcePath = $this->getModuleSourcePath();
        $translationsPath = Str::format('%s/%s', $sourcePath, static::DIR_I18N);

        $this->debugLog('Loading translations', ['path' => $translationsPath]);
        $this->loadModuleTranslations();
    }

    /**
     * Collect and load configuration for the module.
     *
     * This method loads the module's configuration file and merges it
     * with the application's config.
     *
     * ## How It Works:
     * 1. Loads config/config.php
     * 2. Merges with namespace: {module_name}.config
     *
     * ## Example:
     * ```php
     * // Config is automatically loaded from:
     * // config/config.php - Accessible as config('modulename.config.key')
     * ```
     */
    protected function collectConfig(): void
    {
        $this->loadModuleConfig(static::FILE_CONFIG);
    }

    /**
     * Load module configuration file.
     *
     * Merges a module configuration file with the application's config.
     * The config is namespaced with the module name (lowercase).
     *
     * ## Example Usage:
     * ```php
     * // Load config/settings.php
     * $this->loadModuleConfig('settings');
     *
     * // Access config values
     * config('mymodule.settings.key');
     * ```
     *
     * ## Config File Structure:
     * ```php
     * // config/settings.php
     * return [
     *     'enabled' => true,
     *     'cache_ttl' => 3600,
     * ];
     * ```
     *
     * @param string $name Config file name (without .php extension)
     */
    protected function loadModuleConfig(string $name): void
    {
        $configPath = Str::format('%s/%s/%s', $this->modulePath, static::DIR_CONFIG, $name);

        if (File::exists($configPath)) {
            // Merge config with namespace: {module_name}.{config_name}
            // Example: locationtracking.config
            $this->mergeConfigFrom($configPath, Str::lower($this->moduleName) . '.' . pathinfo($name, PATHINFO_FILENAME));
        }
    }

    /**
     * Load module translations.
     *
     * Registers the module's translation files with a namespace.
     * Translations are loaded from the `src/i18n/` directory.
     *
     * ## Standard Module Translations:
     * ```
     * src/i18n/
     * ├── en/
     * │   ├── messages.php
     * │   └── validation.php
     * └── ar/
     *     ├── messages.php
     *     └── validation.php
     * ```
     * Usage: `__('mymodule::messages.welcome')`
     *
     * ## Overriding Third-Party Package Translations:
     * If your module needs to override translations from third-party packages,
     * place them in `src/i18n/vendor/{package-namespace}/`:
     * ```
     * src/i18n/vendor/
     * ├── health/              # Override Spatie Health translations
     * │   ├── en/
     * │   │   └── notifications.php
     * │   └── ar/
     * │       └── notifications.php
     * └── backup/              # Override Spatie Backup translations
     *     └── en/
     *         └── notifications.php
     * ```
     * Usage: `__('health::notifications.check_failed')` - Laravel will use your override
     *
     * ## How It Works:
     * 1. Scans for `src/i18n/vendor/` subdirectories
     * 2. Registers each vendor override with its package namespace
     * 3. Uses `app()->booted()` callback to re-register AFTER all providers boot
     * 4. This ensures your translations override third-party packages
     * 5. Registers module's own translations from `src/i18n/` root
     */
    protected function loadModuleTranslations(): void
    {
        $langPath = Str::format('%s/%s', $this->getModuleSourcePath(), static::DIR_I18N);

        if (! is_dir($langPath)) {
            return;
        }

        // Get the module's translation namespace (defaults to lowercase module name)
        $namespace = $this->translationNamespace ?? Str::lower($this->moduleName);

        // Check for vendor subdirectories (for overriding third-party packages)
        $vendorPath = Str::format('%s/%s', $langPath, static::DIR_VENDOR);
        if (is_dir($vendorPath)) {
            // Scan all subdirectories in vendor/
            $vendorDirs = Arr::filter(
                scandir($vendorPath) ?: [],
                fn ($dir): bool => $dir !== '.' && $dir !== '..' && is_dir(Str::format('%s/%s', $vendorPath, $dir))
            );

            // Register vendor translations in booted callback to override third-party packages
            // This is necessary because third-party packages may boot after our module
            foreach ($vendorDirs as $vendorDir) {
                $packageLangPath = Str::format('%s/%s', $vendorPath, $vendorDir);

                // Register immediately for early access
                $this->loadTranslationsFrom($packageLangPath, $vendorDir);

                // Re-register after all providers have booted to ensure we override
                $this->app->booted(function () use ($vendorDir, $packageLangPath): void {
                    if ($this->app->bound(ContainerToken::TRANSLATOR())) {
                        /** @var Translator $translator */
                        $translator = $this->app->make(ContainerToken::TRANSLATOR());
                        $translator->addNamespace($vendorDir, $packageLangPath);

                        $this->debugLog(Str::format("Re-registered vendor translation overrides for package '%s' after boot", $vendorDir), [
                            'module' => $this->moduleName,
                            'source' => $packageLangPath,
                            'namespace' => $vendorDir,
                        ]);
                    }
                });

                $this->debugLog(Str::format("Loaded vendor translation overrides for package '%s'", $vendorDir), [
                    'module' => $this->moduleName,
                    'source' => $packageLangPath,
                    'namespace' => $vendorDir,
                ]);
            }
        }

        // Load module's own translations from root src/i18n/
        $this->loadTranslationsFrom($langPath, $namespace);

        $this->debugLog(Str::format("Loaded module translations for '%s'", $namespace), [
            'module' => $this->moduleName,
            'source' => $langPath,
            'namespace' => $namespace,
        ]);
    }

    /**
     * Load module views.
     *
     * Registers the module's views with a namespace.
     * Views are loaded from the `src/views/` directory.
     *
     * ## Standard Module Views:
     * ```
     * src/views/
     * ├── dashboard/
     * │   └── index.blade.php
     * └── partials/
     *     └── header.blade.php
     * ```
     * Usage: `view('mymodule::dashboard.index')`
     *
     * ## Overriding Third-Party Package Views:
     * If your module needs to override views from third-party packages (like Spatie Health),
     * place them in `src/views/vendor/{package-namespace}/`:
     * ```
     * src/views/vendor/
     * ├── health/              # Override Spatie Health views
     * │   └── list.blade.php
     * └── telescope/           # Override Laravel Telescope views
     *     └── layout.blade.php
     * ```
     * Usage: `view('health::list')` - Laravel will use your override
     *
     * ## Overriding Laravel Core Views:
     * To override Laravel's core views (like error pages), place them directly in `src/views/`:
     * ```
     * src/views/
     * ├── errors/              # Override Laravel error pages
     * │   ├── 404.blade.php
     * │   ├── 500.blade.php
     * │   └── 503.blade.php
     * └── layouts/
     *     └── app.blade.php
     * ```
     * Usage: `view('errors.404')` - Laravel will use your override
     *
     * ## How It Works:
     * 1. Adds module's view path to Laravel's global view paths (for core overrides)
     * 2. Scans for `src/views/vendor/` subdirectories (for package overrides)
     * 3. Registers each vendor override with its package namespace
     * 4. Registers module's own views with module namespace
     * 5. Laravel's view finder checks paths in order: global paths first, then namespaced
     */
    protected function loadModuleViews(): void
    {
        $viewsPath = Str::format('%s/%s', $this->getModuleSourcePath(), static::DIR_VIEWS);

        if (! is_dir($viewsPath)) {
            return;
        }

        // Get the module's view namespace (defaults to lowercase module name)
        $namespace = $this->viewNamespace ?? Str::lower($this->moduleName);

        // Add module views to global view paths for core Laravel view overrides
        // This allows pixielity to override Laravel's core views (errors, pagination, etc.)
        // without needing a namespace
        if ($this->app->bound(ContainerToken::VIEW())) {
            /** @var Factory $view */
            $view = $this->app->make(ContainerToken::VIEW());
            $view->prependLocation($viewsPath);

            $this->debugLog('Added module views to global view paths for core overrides', [
                'module' => $this->moduleName,
                'source' => $viewsPath,
            ]);
        }

        // Check for vendor subdirectories (for overriding third-party packages)
        $vendorPath = Str::format('%s/%s', $viewsPath, static::DIR_VENDOR);
        if (is_dir($vendorPath)) {
            // Scan all subdirectories in vendor/
            $vendorDirs = Arr::filter(
                scandir($vendorPath) ?: [],
                fn ($dir): bool => $dir !== '.' && $dir !== '..' && is_dir(Str::format('%s/%s', $vendorPath, $dir))
            );

            foreach ($vendorDirs as $vendorDir) {
                $packageViewsPath = Str::format('%s/%s', $vendorPath, $vendorDir);

                // Register vendor override views with the package's namespace
                // This allows the module to override third-party package views
                $this->loadViewsFrom($packageViewsPath, $vendorDir);

                $this->debugLog(Str::format("Loaded vendor view overrides for package '%s'", $vendorDir), [
                    'module' => $this->moduleName,
                    'source' => $packageViewsPath,
                    'namespace' => $vendorDir,
                ]);
            }
        }

        // Load module's own views from root src/views/ with module namespace
        $this->loadViewsFrom($viewsPath, $namespace);

        $this->debugLog(Str::format("Loaded module views for '%s'", $namespace), [
            'module' => $this->moduleName,
            'source' => $viewsPath,
            'namespace' => $namespace,
        ]);
    }
}
