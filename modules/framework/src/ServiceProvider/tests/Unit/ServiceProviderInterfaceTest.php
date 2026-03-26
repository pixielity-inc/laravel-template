<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Unit;

use Pixielity\ServiceProvider\Tests\Stubs\TestServiceProvider;
use Pixielity\ServiceProvider\Tests\TestCase;

/**
 * Tests for ServiceProviderInterface.
 *
 * Validates that the base service provider interface contract is properly
 * implemented with all required methods.
 *
 * @covers \Pixielity\ServiceProvider\Contracts\ServiceProviderInterface
 */
class ServiceProviderInterfaceTest extends TestCase
{
    /**
     * Test that service providers implement the interface.
     *
     * Ensures type safety and contract compliance.
     */
    public function test_service_provider_implements_interface(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertInstanceOf(ServiceProviderInterface::class, $testServiceProvider);
    }

    /**
     * Test that all interface methods are implemented.
     *
     * Verifies the complete contract is fulfilled.
     */
    public function test_interface_methods_are_implemented(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertTrue(method_exists($testServiceProvider, 'getModuleName'));
        $this->assertTrue(method_exists($testServiceProvider, 'getModuleNamespace'));
        $this->assertTrue(method_exists($testServiceProvider, 'getModulePath'));
        $this->assertTrue(method_exists($testServiceProvider, 'getPriority'));
    }

    /**
     * Test that getModuleName returns a string.
     *
     * Validates return type for module name.
     */
    public function test_get_module_name_returns_string(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertIsString($testServiceProvider->getModuleName());
    }

    /**
     * Test that getModuleNamespace returns a string.
     *
     * Validates return type for module namespace.
     */
    public function test_get_module_namespace_returns_string(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertIsString($testServiceProvider->getModuleNamespace());
    }

    /**
     * Test that getPriority returns an integer.
     *
     * Validates return type for module priority.
     */
    public function test_get_priority_returns_integer(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertIsInt($testServiceProvider->getPriority());
    }
}
