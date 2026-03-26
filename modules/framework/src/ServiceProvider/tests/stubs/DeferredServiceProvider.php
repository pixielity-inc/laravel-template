<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Stubs;

use Override;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Deferred Service Provider Stub.
 *
 * Tests deferred loading functionality where the provider is only
 * loaded when one of its declared services is requested.
 */
class DeferredServiceProvider extends ServiceProvider
{
    /**
     * @var string Module name for testing
     */
    protected string $moduleName = 'DeferredModule';

    /**
     * @var string Module namespace for testing
     */
    protected string $moduleNamespace = 'Pixielity\DeferredModule';

    /**
     * @var bool Enable deferred loading
     */
    protected bool $defer = true;

    /**
     * Check if provider is deferred.
     *
     * @return bool True if deferred loading is enabled
     */
    public function isDeferred(): bool
    {
        return $this->defer;
    }

    /**
     * Override boot to prevent resource loading in tests.
     */
    public function boot(): void
    {
        // Don't call parent::boot()
    }

    /**
     * Override register to prevent automatic registration in tests.
     */
    public function register(): void
    {
        // Don't call parent::register()
    }

    /**
     * Get services provided by this module for deferred loading.
     *
     * @return array<int, string> Service class names that trigger loading
     */
    protected function getProvidedServices(): array
    {
        return [
            'TestServiceInterface',
            'AnotherServiceInterface',
        ];
    }
}
