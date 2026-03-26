<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Tests\Stubs;

use Override;
use Pixielity\Contracts\Framework\ServiceProvider\Terminatable as TerminatableContract;
use Pixielity\Foundation\Exceptions\RuntimeException;
use Pixielity\ServiceProvider\Providers\ServiceProvider;

/**
 * Terminatable Service Provider Stub.
 *
 * Tests termination callback functionality for cleanup operations
 * during application shutdown. Implements the Terminatable interface
 * to opt-in to termination handling.
 */
class TerminatableServiceProvider extends ServiceProvider implements TerminatableContract
{
    /**
     * @var string Module name for testing
     */
    protected string $moduleName = 'TerminatableModule';

    /**
     * @var string Module namespace for testing
     */
    protected string $moduleNamespace = 'Pixielity\TerminatableModule';

    /**
     * @var bool Tracks if terminating() was called
     */
    private bool $terminated = false;

    /**
     * @var bool Controls whether terminating() throws exception
     */
    private bool $shouldThrow = false;

    /**
     * Perform cleanup operations when application terminates.
     *
     * Implements the Terminatable interface contract.
     */
    public function terminating(): void
    {
        if ($this->shouldThrow) {
            throw new RuntimeException('Termination error');
        }

        $this->terminated = true;
    }

    /**
     * Check if terminating() was called.
     *
     * @return bool True if termination callback executed
     */
    public function wasTerminated(): bool
    {
        return $this->terminated;
    }

    /**
     * Configure whether terminating() should throw exception.
     *
     * Used to test error handling during termination.
     *
     * @param bool $shouldThrow True to throw exception
     */
    public function setShouldThrow(bool $shouldThrow): void
    {
        $this->shouldThrow = $shouldThrow;
    }

    /**
     * Expose registerTerminatingCallback for testing.
     *
     * Allows tests to verify callback registration logic.
     */
    public function testRegisterTerminatingCallback(): void
    {
        $this->collectTerminatingCallback();
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
