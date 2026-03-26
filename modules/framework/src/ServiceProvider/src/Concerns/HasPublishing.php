<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Support\Facades\File;
use Pixielity\Support\Str;

/**
 * Has Publishing Trait.
 *
 * Provides asset and configuration publishing functionality for module service providers.
 *
 * ## Purpose:
 * This trait enables pixielity to publish assets (CSS, JS, images) and configuration
 * files to the application's public and config directories. This allows users to
 * customize module resources without modifying the module itself.
 *
 * ## Important Distinction:
 * - **HasResourceLoading**: Loads resources at runtime (views, translations, routes)
 * - **HasPublishing**: Makes resources publishable for user customization (assets, config)
 *
 * ## Features:
 * - ✅ Asset publishing to public directory
 * - ✅ Configuration file publishing
 * - ✅ View publishing for customization
 * - ✅ Translation publishing for customization
 * - ✅ Versioned asset paths for cache busting
 * - ✅ Tagged publishing for selective updates
 *
 * ## Publishing Commands:
 * ```bash
 * # Publish all module assets
 * bin/laravel vendor:publish --tag=mymodule-assets
 *
 * # Publish module configuration
 * bin/laravel vendor:publish --tag=mymodule-config
 *
 * # Publish module views
 * bin/laravel vendor:publish --tag=mymodule-views
 *
 * # Publish module translations
 * bin/laravel vendor:publish --tag=mymodule-lang
 * ```
 *
 * ## Directory Structure:
 * ```
 * src/pixielity/laravel-MyModule/
 * ├── resources/           # Publishable assets
 * │   ├── css/
 * │   ├── js/
 * │   ├── images/
 * │   └── fonts/
 * ├── config/              # Publishable configuration files
 * │   └── config.php
 * └── src/
 *     ├── views/           # Publishable views (for customization)
 *     └── i18n/            # Publishable translations (for customization)
 * ```
 *
 * Published to:
 * ```
 * public/pixielity/laravel-mymodule/{version}/
 * ├── css/
 * ├── js/
 * └── images/
 *
 * config/pixielity/laravel-mymodule/
 * └── config.php
 *
 * resources/views/vendor/mymodule/
 * ├── dashboard/
 * └── emails/
 *
 * lang/vendor/mymodule/
 * ├── en/
 * └── ar/
 * ```
 *
 * ## Usage:
 * ```php
 * class MyServiceProvider extends BaseModuleServiceProvider
 * {
 *     protected string $assetVersion = '1.0.0';
 *
 *     public function boot(): void
 *     {
 *         parent::boot();
 *
 *         // Assets are automatically published from resources/ directory
 *         // Users can run: bin/laravel vendor:publish --tag=mymodule-assets
 *     }
 * }
 * ```
 *
 * ## In Blade Templates:
 * ```blade
 * <link href="{{ asset('pixielity/laravel-mymodule/1.0.0/css/app.css') }}" rel="stylesheet">
 * <script src="{{ asset('pixielity/laravel-mymodule/1.0.0/js/app.js') }}"></script>
 * <img src="{{ asset('pixielity/laravel-mymodule/1.0.0/images/logo.png') }}" alt="Logo">
 * ```
 *
 * @property string $modulePath   The path to the current module
 * @property string $assetVersion The version string for asset paths
 *
 * @method string getModuleSlug() Get the module slug (lowercase, kebab-case)
 *
 * @since 1.0.0
 */
trait HasPublishing
{
    use HasModuleConstants;

    /**
     * Collect and register all publishable resources.
     *
     * This method consolidates all publishing calls into a single method
     * for cleaner code in the ServiceProvider.
     *
     * ## Publishes:
     * - Module assets (CSS, JS, images)
     * - Module configuration files
     * - Module translations
     * - Module views
     *
     * ## Example:
     * ```php
     * // In ServiceProvider boot method:
     * $this->collectPublishables();
     * ```
     */
    protected function collectPublishables(): void
    {
        $this->publishModuleViews();
        $this->publishModuleAssets();
        $this->publishModuleConfig();
        $this->publishModuleTranslations();
    }

    /**
     * Publish module assets.
     *
     * Makes module assets (CSS, JS, images) publishable to the public directory.
     *
     * Assets should be placed in the module's resources/ directory:
     * - src/pixielity/laravel-{Module}/resources/js/
     * - src/pixielity/laravel-{Module}/resources/css/
     * - src/pixielity/laravel-{Module}/resources/images/
     *
     * Published to: public/pixielity/laravel-{pixielitylug}/{version}/
     */
    protected function publishModuleAssets(): void
    {
        $resourcesPath = Str::format('%s/%s', $this->modulePath, static::DIR_RESOURCES);

        if (File::isDirectory($resourcesPath)) {
            // Publish entire resources directory to versioned directory for cache busting
            // Example: public/pixielity/laravel-location-tracking/1.0.0/
            $this->publishes([
                $resourcesPath => public_path(Str::format('%s/%s/%s', static::PATH_PREFIX, $this->getModuleSlug(), $this->assetVersion)),
            ], $this->getModuleSlug() . '-' . static::TAG_ASSETS);
        }
    }

    /**
     * Publish module configuration files.
     *
     * Makes module config files publishable for customization.
     */
    protected function publishModuleConfig(): void
    {
        $configPath = Str::format('%s/%s', $this->modulePath, static::DIR_CONFIG);

        if (! is_dir($configPath)) {
            return;
        }

        // Find all config files in the config directory
        $configs = glob($configPath . '/*.php');

        // Ensure glob returned an array before iterating
        if ($configs === false) {
            return;
        }

        foreach ($configs as $config) {
            $configName = basename($config);
            // Publish each config file to pixielity subdirectory
            // Example: config/pixielity/laravel-location-tracking/config.php
            $this->publishes([
                $config => config_path($configName),
            ], $this->getModuleSlug() . '-' . static::TAG_CONFIG);
        }
    }

    /**
     * Publish module translations.
     *
     * Makes module translation files publishable for customization.
     *
     * Translations should be placed in the module's src/i18n/ directory:
     * - src/pixielity/laravel-{Module}/src/i18n/en/
     * - src/pixielity/laravel-{Module}/src/i18n/ar/
     *
     * Published to: lang/vendor/{pixielitylug}/
     *
     * ## Example:
     * ```bash
     * bin/laravel vendor:publish --tag=common-lang
     * ```
     *
     * Published structure:
     * ```
     * lang/vendor/common/
     * ├── en/
     * │   └── errors.php
     * └── ar/
     *     └── errors.php
     * ```
     */
    protected function publishModuleTranslations(): void
    {
        $langPath = Str::format('%s/%s', $this->getModuleSourcePath(), static::DIR_I18N);

        if (! is_dir($langPath)) {
            return;
        }

        // Publish translations to lang/vendor/{module-slug}/
        // This allows users to customize module translations
        $this->publishes([
            $langPath => $this->app->langPath(Str::format('%s/%s', static::DIR_VENDOR, $this->getModuleSlug())),
        ], $this->getModuleSlug() . '-' . static::TAG_LANG);
    }

    /**
     * Publish module views.
     *
     * Makes module view files publishable for customization.
     *
     * Views should be placed in the module's src/views/ directory:
     * - src/pixielity/laravel-{Module}/src/views/
     *
     * Published to: resources/views/vendor/{pixielitylug}/
     *
     * ## Example:
     * ```bash
     * bin/laravel vendor:publish --tag=common-views
     * ```
     *
     * Published structure:
     * ```
     * resources/views/vendor/common/
     * ├── errors/
     * │   ├── 404.blade.php
     * │   └── 500.blade.php
     * └── layouts/
     *     └── app.blade.php
     * ```
     *
     * ## Note:
     * Published views take precedence over module views, allowing users
     * to customize without modifying the module source.
     */
    protected function publishModuleViews(): void
    {
        $viewsPath = Str::format('%s/%s', $this->getModuleSourcePath(), static::DIR_VIEWS);

        if (! is_dir($viewsPath)) {
            return;
        }

        // Check if views/vendor/ exists (for package overrides)
        $vendorViewsPath = Str::format('%s/%s', $viewsPath, static::DIR_VENDOR);

        if (is_dir($vendorViewsPath)) {
            // Publish each vendor package override separately
            // Example: src/views/vendor/health → resources/views/vendor/health
            $vendorDirs = glob($vendorViewsPath . '/*', GLOB_ONLYDIR);

            foreach ($vendorDirs as $vendorDir) {
                $packageName = basename($vendorDir);
                $this->publishes([
                    $vendorDir => resource_path(Str::format('%s/%s/%s', static::DIR_VIEWS, static::DIR_VENDOR, $packageName)),
                ], $this->getModuleSlug() . '-' . static::TAG_VIEWS);
            }
        } else {
            // Regular module views - publish to vendor namespace
            // Example: src/views → resources/views/vendor/mymodule
            $this->publishes([
                $viewsPath => resource_path(Str::format('%s/%s/%s', static::DIR_VIEWS, static::DIR_VENDOR, $this->getModuleSlug())),
            ], $this->getModuleSlug() . '-' . static::TAG_VIEWS);
        }
    }
}
