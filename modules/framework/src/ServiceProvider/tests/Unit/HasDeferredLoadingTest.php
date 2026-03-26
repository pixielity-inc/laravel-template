<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Unit;

use Pixielity\ServiceProvider\Tests\Stubs\DeferredServiceProvider;
use Pixielity\ServiceProvider\Tests\Stubs\NonDeferredServiceProvider;
use Pixielity\ServiceProvider\Tests\TestCase;

/**
 * Tests for HasDeferredLoading Trait.
 *
 * Validates deferred provider functionality for lazy loading services
 * to improve application boot performance.
 *
 * @covers \Pixielity\ServiceProvider\Traits\HasDeferredLoading
 */
class HasDeferredLoadingTest extends TestCase
{
    /**
     * Test that non-deferred providers return empty services array.
     *
     * Non-deferred providers load immediately, so provides() returns empty.
     */
    public function test_provides_returns_empty_array_when_not_deferred(): void
    {
        $nonDeferredServiceProvider = new NonDeferredServiceProvider($this->app);

        $this->assertEmpty($nonDeferredServiceProvider->provides());
    }

    /**
     * Test that deferred providers return their service list.
     *
     * Verifies the provider declares which services trigger its loading.
     */
    public function test_provides_returns_services_when_deferred(): void
    {
        $deferredServiceProvider = new DeferredServiceProvider($this->app);

        $services = $deferredServiceProvider->provides();

        $this->assertCount(2, $services);
        $this->assertContains('TestServiceInterface', $services);
        $this->assertContains('AnotherServiceInterface', $services);
    }

    /**
     * Test that deferred flag is correctly set.
     *
     * Ensures the provider is marked for deferred loading.
     */
    public function test_deferred_provider_is_not_loaded_immediately(): void
    {
        $deferredServiceProvider = new DeferredServiceProvider($this->app);

        $this->assertTrue($deferredServiceProvider->isDeferred());
    }

    /**
     * Test that non-deferred providers load immediately.
     *
     * Verifies default behavior when defer flag is false.
     */
    public function test_non_deferred_provider_loads_immediately(): void
    {
        $nonDeferredServiceProvider = new NonDeferredServiceProvider($this->app);

        $this->assertFalse($nonDeferredServiceProvider->isDeferred());
    }
}
