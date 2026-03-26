<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Unit;

use Pixielity\Foundation\Exceptions\RuntimeException;
use Pixielity\ServiceProvider\Tests\Stubs\InvalidServiceProvider;
use Pixielity\ServiceProvider\Tests\Stubs\TestServiceProvider;
use Pixielity\ServiceProvider\Tests\TestCase;

/**
 * Tests for HasModuleConfiguration Trait.
 *
 * Validates module configuration management including name, namespace,
 * path detection, and validation logic.
 *
 * @covers \Pixielity\ServiceProvider\Traits\HasModuleConfiguration
 */
class HasModuleConfigurationTest extends TestCase
{
    /**
     * Test that module name is correctly returned.
     *
     * Verifies the configured module name is accessible.
     */
    public function test_get_module_name_returns_configured_name(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertEquals('TestModule', $testServiceProvider->getModuleName());
    }

    /**
     * Test that module namespace is correctly returned.
     *
     * Ensures the PSR-4 namespace is properly configured.
     */
    public function test_get_module_namespace_returns_configured_namespace(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertEquals('Pixielity\TestModule', $testServiceProvider->getModuleNamespace());
    }

    /**
     * Test that module priority is correctly returned.
     *
     * Verifies loading priority for module ordering.
     */
    public function test_get_priority_returns_configured_priority(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertEquals(100, $testServiceProvider->getPriority());
    }

    /**
     * Test that default priority is used when not explicitly set.
     *
     * Ensures fallback to default priority value.
     */
    public function test_get_priority_returns_default_when_not_set(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $this->assertEquals(100, $testServiceProvider->getPriority());
    }

    /**
     * Test that validation fails when module name is missing.
     *
     * Ensures clear error messages for misconfigured providers.
     */
    public function test_validate_module_configuration_throws_when_name_missing(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Module name not set');

        $invalidServiceProvider = new InvalidServiceProvider($this->app);
        $invalidServiceProvider->testValidateConfiguration();
    }

    /**
     * Test that module path is auto-detected from provider location.
     *
     * Verifies reflection-based path detection works correctly.
     */
    public function test_detect_module_path_sets_path_from_provider_location(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);
        $testServiceProvider->testDetectModulePath();

        $path = $testServiceProvider->getModulePath();

        $this->assertNotEmpty($path);
        $this->assertDirectoryExists($path);
    }

    /**
     * Test that module slug is lowercase version of name.
     *
     * Ensures consistent naming for cache keys and paths.
     */
    public function test_get_module_slug_returns_lowercase_name(): void
    {
        $testServiceProvider = new TestServiceProvider($this->app);

        $slug = $testServiceProvider->testGetModuleSlug();

        $this->assertEquals('testmodule', $slug);
    }
}
