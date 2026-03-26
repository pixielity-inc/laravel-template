<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Stubs;

use Override;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Non-Deferred Service Provider Stub.
 *
 * Tests immediate loading functionality where the provider is loaded
 * during application bootstrap regardless of service usage.
 */
class NonDeferredServiceProvider extends ServiceProvider
{
    /**
     * @var string Module name for testing
     */
    protected string $moduleName = 'NonDeferredModule';

    /**
     * @var string Module namespace for testing
     */
    protected string $moduleNamespace = 'Pixielity\NonDeferredModule';

    /**
     * @var bool Disable deferred loading
     */
    protected bool $defer = false;

    /**
     * Check if provider is deferred.
     *
     * @return bool False for immediate loading
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
}
