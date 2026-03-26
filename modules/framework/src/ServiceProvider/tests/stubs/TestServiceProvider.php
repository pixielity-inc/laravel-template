<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Stubs;

use Override;
use Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Test Service Provider Stub.
 *
 * A minimal service provider implementation used for testing base
 * ServiceProvider functionality without triggering resource loading.
 * Exposes protected methods for unit testing.
 */
class TestServiceProvider extends ServiceProvider
{
    /**
     * @var string Module name for testing
     */
    protected string $moduleName = 'TestModule';

    /**
     * @var string Module namespace for testing
     */
    protected string $moduleNamespace = 'Pixielity\TestModule';

    /**
     * @var int Module priority for testing
     */
    protected int $priority = 100;

    /**
     * Expose debugLog method for testing.
     *
     * Allows tests to verify debug logging behavior.
     *
     * @param string $message Debug message
     * @param array  $context Additional context data
     */
    public function testDebugLog(string $message, array $context = []): void
    {
        $this->debugLog($message, $context);
    }

    /**
     * Enable debug mode for testing.
     *
     * Sets the debug flag to true to test debug logging.
     */
    public function enableDebug(): void
    {
        $this->debug = true;
    }

    /**
     * Expose validateModuleConfiguration for testing.
     *
     * Allows tests to verify configuration validation logic.
     */
    public function testValidateConfiguration(): void
    {
        $this->validateModuleConfiguration();
    }

    /**
     * Expose detectModulePath for testing.
     *
     * Allows tests to verify path auto-detection logic.
     */
    public function testDetectModulePath(): void
    {
        $this->detectModulePath();
    }

    /**
     * Expose getModuleSlug for testing.
     *
     * Allows tests to verify slug generation logic.
     *
     * @return string The module slug
     */
    public function testGetModuleSlug(): string
    {
        return $this->getModuleSlug();
    }

    /**
     * Expose fireEvent for testing.
     *
     * Allows tests to verify lifecycle event firing.
     *
     * @param ModuleLifecycleEvent $moduleLifecycleEvent The event to fire
     */
    public function testFireModuleEvent(ModuleLifecycleEvent $moduleLifecycleEvent): void
    {
        $this->fireEvent($moduleLifecycleEvent);
    }

    /**
     * Expose registerTerminatingCallback for testing.
     *
     * Allows tests to verify termination callback registration.
     */
    public function testRegisterTerminatingCallback(): void
    {
        $this->collectTerminatingCallback();
    }

    /**
     * Override boot to prevent automatic resource loading.
     *
     * Skips parent boot to avoid filesystem dependencies in tests.
     */
    public function boot(): void
    {
        // Don't call parent::boot() to avoid resource loading in tests
    }

    /**
     * Override register to prevent automatic registration.
     *
     * Skips parent register to avoid automatic service registration in tests.
     */
    public function register(): void
    {
        // Don't call parent::register() to avoid automatic registration in tests
    }
}
