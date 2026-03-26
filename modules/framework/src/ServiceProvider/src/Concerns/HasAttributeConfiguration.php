<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\ServiceProvider\Attributes\LoadsResources;
use Pixielity\Support\Reflection;

/**
 * Has Attribute Configuration Trait.
 *
 * Provides attribute-based configuration for ServiceProviders.
 * This replaces boolean flags and should*() methods with declarative attributes.
 *
 * ## Purpose:
 * - Read configuration from attributes instead of properties
 * - Eliminate boolean flags scattered throughout code
 * - Enable build-time compilation of configuration
 * - Provide clear, self-documenting configuration
 *
 * ## How It Works:
 * 1. Check if class has #[LoadsResources] attribute
 * 2. If yes, use attribute configuration
 * 3. If no, default to loading all resources (backward compatible)
 *
 * ## Usage:
 * This trait is automatically included via ProvidesServices.
 * All should*() methods now check the attribute instead of flags.
 *
 * @since 1.0.0
 */
trait HasAttributeConfiguration
{
    /**
     * Cached LoadsResources attribute instance.
     *
     * @var LoadsResources|null
     */
    private ?LoadsResources $loadsResourcesAttribute = null;

    /**
     * Whether attribute has been loaded.
     *
     * @var bool
     */
    private bool $attributeLoaded = false;

    /**
     * Get the LoadsResources attribute from the class.
     *
     * @return LoadsResources|null
     */
    protected function getLoadsResourcesAttribute(): ?LoadsResources
    {
        if ($this->attributeLoaded) {
            return $this->loadsResourcesAttribute;
        }

        $this->attributeLoaded = true;

        // Get attributes from the class
        $attributes = Reflection::getAttributes($this, LoadsResources::class);

        if (empty($attributes)) {
            // No attribute found, return null (will use defaults)
            $this->loadsResourcesAttribute = null;
            return null;
        }

        // Get the first attribute instance
        $this->loadsResourcesAttribute = $attributes[0]->newInstance();

        return $this->loadsResourcesAttribute;
    }

    /**
     * Check if a specific resource should be loaded.
     *
     * @param string $resource The resource name (migrations, routes, views, etc.)
     * @return bool
     */
    protected function shouldLoadResource(string $resource): bool
    {
        $attribute = $this->getLoadsResourcesAttribute();

        // If no attribute, load all resources (backward compatible)
        if ($attribute === null) {
            return true;
        }

        // Check the specific resource property
        return $attribute->{$resource} ?? true;
    }

    /**
     * Determine if migrations should be loaded.
     *
     * @return bool
     */
    protected function shouldLoadMigrations(): bool
    {
        return $this->shouldLoadResource('migrations');
    }

    /**
     * Determine if routes should be loaded.
     *
     * @return bool
     */
    protected function shouldLoadRoutes(): bool
    {
        return $this->shouldLoadResource('routes');
    }

    /**
     * Determine if views should be loaded.
     *
     * @return bool
     */
    protected function shouldLoadViews(): bool
    {
        return $this->shouldLoadResource('views');
    }

    /**
     * Determine if translations should be loaded.
     *
     * @return bool
     */
    protected function shouldLoadTranslations(): bool
    {
        return $this->shouldLoadResource('translations');
    }

    /**
     * Determine if config should be loaded.
     *
     * @return bool
     */
    protected function shouldLoadConfig(): bool
    {
        return $this->shouldLoadResource('config');
    }

    /**
     * Determine if commands should be discovered.
     *
     * @return bool
     */
    protected function shouldLoadCommands(): bool
    {
        return $this->shouldLoadResource('commands');
    }

    /**
     * Determine if seeders should be registered.
     *
     * @return bool
     */
    protected function shouldLoadSeeders(): bool
    {
        return $this->shouldLoadResource('seeders');
    }

    /**
     * Determine if publishables should be registered.
     *
     * @return bool
     */
    protected function shouldLoadPublishables(): bool
    {
        return $this->shouldLoadResource('publishables');
    }

    /**
     * Determine if middleware should be registered.
     *
     * @return bool
     */
    protected function shouldLoadMiddleware(): bool
    {
        return $this->shouldLoadResource('middleware');
    }

    /**
     * Determine if observers should be registered.
     *
     * @return bool
     */
    protected function shouldLoadObservers(): bool
    {
        return $this->shouldLoadResource('observers');
    }

    /**
     * Determine if policies should be registered.
     *
     * @return bool
     */
    protected function shouldLoadPolicies(): bool
    {
        return $this->shouldLoadResource('policies');
    }

    /**
     * Determine if health checks should be registered.
     *
     * @return bool
     */
    protected function shouldLoadHealthChecks(): bool
    {
        return $this->shouldLoadResource('healthChecks');
    }

    /**
     * Determine if listeners should be registered.
     *
     * @return bool
     */
    protected function shouldLoadListeners(): bool
    {
        return $this->shouldLoadResource('listeners');
    }

    /**
     * Determine if macros should be registered.
     *
     * @return bool
     */
    protected function shouldLoadMacros(): bool
    {
        return $this->shouldLoadResource('macros');
    }

    /**
     * Determine if scheduled tasks should be registered.
     *
     * @return bool
     */
    protected function shouldLoadScheduledTasks(): bool
    {
        return $this->shouldLoadResource('scheduledTasks');
    }
}
