<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Unit;

use Pixielity\ServiceProvider\Contracts\Terminatable;
use Pixielity\ServiceProvider\Tests\Stubs\TerminatableServiceProvider;
use Pixielity\ServiceProvider\Tests\TestCase;

/**
 * Tests for Terminatable Interface.
 *
 * Validates that the Terminatable interface contract is properly
 * implemented for cleanup operations during application shutdown.
 *
 * @covers \Pixielity\ServiceProvider\Contracts\Terminatable
 */
class TerminatableInterfaceTest extends TestCase
{
    /**
     * Test that terminatable providers implement the interface.
     *
     * Ensures type safety for termination handling.
     */
    public function test_terminatable_provider_implements_interface(): void
    {
        $terminatableServiceProvider = new TerminatableServiceProvider($this->app);

        $this->assertInstanceOf(Terminatable::class, $terminatableServiceProvider);
    }

    /**
     * Test that the interface defines the terminating method.
     *
     * Verifies the contract includes required cleanup method.
     */
    public function test_terminatable_interface_has_terminating_method(): void
    {
        $terminatableServiceProvider = new TerminatableServiceProvider($this->app);

        $this->assertTrue(method_exists($terminatableServiceProvider, 'terminating'));
    }

    /**
     * Test that the terminating method is callable.
     *
     * Ensures the method can be invoked for cleanup.
     */
    public function test_terminating_method_is_callable(): void
    {
        $terminatableServiceProvider = new TerminatableServiceProvider($this->app);

        $this->assertTrue(is_callable($terminatableServiceProvider->terminating(...)));
    }

    /**
     * Test that terminating method executes successfully.
     *
     * Validates cleanup logic runs without errors.
     */
    public function test_terminating_method_executes_without_errors(): void
    {
        $terminatableServiceProvider = new TerminatableServiceProvider($this->app);

        $terminatableServiceProvider->terminating();

        $this->assertTrue($terminatableServiceProvider->wasTerminated());
    }
}
