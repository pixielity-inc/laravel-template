<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Stubs;

use Override;
use Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Full Feature Service Provider Stub.
 *
 * Tests complete service provider lifecycle with all features enabled.
 * Used for integration testing to verify registration, boot, and
 * lifecycle event firing work correctly together.
 */
class FullFeatureServiceProvider extends ServiceProvider
{
    /**
     * @var string Module name for testing
     */
    protected string $moduleName = 'FullFeatureModule';

    /**
     * @var string Module namespace for testing
     */
    protected string $moduleNamespace = 'Pixielity\FullFeatureModule';

    /**
     * @var int Module priority for testing
     */
    protected int $priority = 50;

    /**
     * @var bool Debug mode disabled for tests
     */
    protected bool $debug = false;

    /**
     * @var bool Deferred loading disabled for tests
     */
    protected bool $defer = false;

    /**
     * @var array<string> No dependencies for tests
     */
    protected array $dependencies = [];

    /**
     * @var bool Disable resource loading to avoid filesystem dependencies
     */
    protected bool $loadResources = false;

    /**
     * Bootstrap the service provider.
     *
     * Fires lifecycle events and validates configuration without
     * loading filesystem resources.
     */
    public function boot(): void
    {
        // Fire lifecycle events but skip resource loading
        $this->fireEvent(ModuleLifecycleEvent::BOOTING);
        $this->validateModuleConfiguration();
        $this->detectModulePath();
        $this->fireEvent(ModuleLifecycleEvent::BOOTED);
    }

    /**
     * Register services in the container.
     *
     * Calls parent to fire lifecycle events.
     */
    public function register(): void
    {
        parent::register();
    }
}
