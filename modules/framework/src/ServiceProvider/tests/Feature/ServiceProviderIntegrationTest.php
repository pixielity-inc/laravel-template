<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Feature;

use Illuminate\Support\Facades\Event;
use Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent;
use Pixielity\ServiceProvider\Tests\Stubs\FullFeatureServiceProvider;
use Pixielity\ServiceProvider\Tests\TestCase;

/**
 * Integration tests for ServiceProvider.
 *
 * Tests the full lifecycle of a service provider with all features enabled,
 * ensuring proper registration, boot, and event firing.
 *
 * @covers \Pixielity\ServiceProvider\Providers\ServiceProvider
 */
class ServiceProviderIntegrationTest extends TestCase
{
    /**
     * Test that service provider registers without errors.
     *
     * Validates the registration phase completes successfully.
     */
    public function test_service_provider_registers_successfully(): void
    {
        $fullFeatureServiceProvider = new FullFeatureServiceProvider($this->app);

        $fullFeatureServiceProvider->register();

        $this->assertTrue(true);  // No exceptions thrown
    }

    /**
     * Test that service provider boots without errors.
     *
     * Validates the boot phase completes successfully.
     */
    public function test_service_provider_boots_successfully(): void
    {
        $fullFeatureServiceProvider = new FullFeatureServiceProvider($this->app);
        $fullFeatureServiceProvider->register();

        $fullFeatureServiceProvider->boot();

        $this->assertTrue(true);  // No exceptions thrown
    }

    /**
     * Test that lifecycle events fire during registration.
     *
     * Ensures REGISTERING and REGISTERED events are dispatched.
     */
    public function test_lifecycle_events_fire_during_registration(): void
    {
        Event::fake();

        $fullFeatureServiceProvider = new FullFeatureServiceProvider($this->app);
        $fullFeatureServiceProvider->register();

        Event::assertDispatched(new ModuleLifecycleEvent()->REGISTERING());
        Event::assertDispatched(new ModuleLifecycleEvent()->REGISTERED());
    }

    /**
     * Test that lifecycle events fire during boot.
     *
     * Ensures BOOTING and BOOTED events are dispatched.
     */
    public function test_lifecycle_events_fire_during_boot(): void
    {
        Event::fake();

        $fullFeatureServiceProvider = new FullFeatureServiceProvider($this->app);
        $fullFeatureServiceProvider->register();
        $fullFeatureServiceProvider->boot();

        Event::assertDispatched(new ModuleLifecycleEvent()->BOOTING());
        Event::assertDispatched(new ModuleLifecycleEvent()->BOOTED());
    }

    /**
     * Test that module configuration is accessible after instantiation.
     *
     * Validates all configuration getters work correctly.
     */
    public function test_module_configuration_is_accessible(): void
    {
        $fullFeatureServiceProvider = new FullFeatureServiceProvider($this->app);

        $this->assertEquals('FullFeatureModule', $fullFeatureServiceProvider->getModuleName());
        $this->assertEquals('Pixielity\FullFeatureModule', $fullFeatureServiceProvider->getModuleNamespace());
        $this->assertIsInt($fullFeatureServiceProvider->getPriority());
    }

    /**
     * Test that provider can be registered multiple times safely.
     *
     * Ensures idempotent registration for edge cases.
     */
    public function test_provider_can_be_registered_multiple_times(): void
    {
        $provider1 = new FullFeatureServiceProvider($this->app);
        $provider2 = new FullFeatureServiceProvider($this->app);

        $provider1->register();
        $provider2->register();

        $this->assertTrue(true);  // No exceptions thrown
    }
}
