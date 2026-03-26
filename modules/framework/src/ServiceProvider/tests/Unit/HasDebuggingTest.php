<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Unit;

use Illuminate\Support\Facades\Log;
use Pixielity\ServiceProvider\Tests\Stubs\TestServiceProvider;
use Pixielity\ServiceProvider\Tests\TestCase;
use Pixielity\Support\Str;

/**
 * Tests for HasDebugging Trait.
 *
 * Verifies that the debugging functionality works correctly with both
 * module-level and application-level debug settings.
 *
 * @covers \Pixielity\ServiceProvider\Traits\HasDebugging
 */
class HasDebuggingTest extends TestCase
{
    /**
     * Test that debug logs are not written when debug mode is disabled.
     *
     * Ensures no performance overhead when debugging is turned off.
     */
    public function test_debug_log_does_not_log_when_debug_disabled(): void
    {
        Log::spy();

        $testServiceProvider = new TestServiceProvider($this->app);
        $testServiceProvider->testDebugLog('Test message');

        Log::shouldNotHaveReceived('debug');
        $this->assertTrue(true);  // Explicit assertion to avoid risky test warning
    }

    /**
     * Test that debug logs are written when module debug is enabled.
     *
     * Verifies that module-level debug flag activates logging with context.
     */
    public function test_debug_log_logs_when_module_debug_enabled(): void
    {
        Log::spy();

        $testServiceProvider = new TestServiceProvider($this->app);
        $testServiceProvider->enableDebug();
        $testServiceProvider->testDebugLog('Test message', ['key' => 'value']);

        Log::shouldHaveReceived('debug')
            ->once()
            ->with('[Module: TestModule] Test message', ['key' => 'value']);
        $this->assertTrue(true);  // Explicit assertion to avoid risky test warning
    }

    /**
     * Test that debug logs are written when app debug is enabled.
     *
     * Ensures application-level debug setting overrides module setting.
     */
    public function test_debug_log_logs_when_app_debug_enabled(): void
    {
        $this->app['config']->set('app.debug', true);
        Log::spy();

        $testServiceProvider = new TestServiceProvider($this->app);
        $testServiceProvider->testDebugLog('Test message');

        Log::shouldHaveReceived('debug')
            ->once()
            ->with('[Module: TestModule] Test message', []);
        $this->assertTrue(true);  // Explicit assertion to avoid risky test warning
    }

    /**
     * Test that debug logs include module name prefix.
     *
     * Verifies log messages are prefixed for easy filtering in logs.
     */
    public function test_debug_log_includes_module_name_prefix(): void
    {
        Log::spy();

        $testServiceProvider = new TestServiceProvider($this->app);
        $testServiceProvider->enableDebug();
        $testServiceProvider->testDebugLog('Loading resources');

        Log::shouldHaveReceived('debug')
            ->once()
            ->withArgs(fn ($message): bool => Str::startsWith((string) $message, '[Module: TestModule]'));
        $this->assertTrue(true);  // Explicit assertion to avoid risky test warning
    }
}
