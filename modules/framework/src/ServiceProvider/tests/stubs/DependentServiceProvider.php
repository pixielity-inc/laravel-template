<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Stubs;

use Override;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Dependent Service Provider Stub.
 *
 * Tests dependency validation functionality to ensure required
 * modules are installed and enabled before loading.
 */
class DependentServiceProvider extends ServiceProvider
{
    /**
     * @var string Module name for testing
     */
    protected string $moduleName = 'DependentModule';

    /**
     * @var string Module namespace for testing
     */
    protected string $moduleNamespace = 'Pixielity\DependentModule';

    /**
     * @var array<string> Module dependencies
     */
    protected array $dependencies = [];

    /**
     * Set module dependencies for testing.
     *
     * @param array<string> $dependencies Module names this provider depends on
     */
    public function setDependencies(array $dependencies): void
    {
        $this->dependencies = $dependencies;
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
