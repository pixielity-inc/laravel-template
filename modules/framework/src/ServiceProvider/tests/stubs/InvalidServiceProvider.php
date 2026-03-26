<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Stubs;

use Override;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Invalid Service Provider Stub.
 *
 * Tests validation failure scenarios by intentionally omitting
 * required configuration properties to verify error handling.
 */
class InvalidServiceProvider extends ServiceProvider
{
    // Intentionally missing $moduleName and $moduleNamespace
    // to test validation error handling

    /**
     * Expose validateModuleConfiguration for testing.
     *
     * This will throw an exception due to missing configuration.
     */
    public function testValidateConfiguration(): void
    {
        $this->validateModuleConfiguration();
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
