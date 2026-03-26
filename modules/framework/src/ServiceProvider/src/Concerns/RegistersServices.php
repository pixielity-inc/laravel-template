<?php

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent;

/**
 * Registers Services Concern.
 *
 * Encapsulates all registration-time logic for service providers.
 * This trait orchestrates the registration sequence by calling various collection methods.
 *
 * @since 1.0.0
 */
trait RegistersServices
{
    /**
     * Execute the registration sequence.
     *
     * This method orchestrates all registration-time operations in the correct order.
     */
    protected function registerApplication(): void
    {
        logger()->info('registerApplication() called', ['provider' => $this::class]);

        // Validate configuration (validates properties, dependencies, and detects path)
        $this->validateConfiguration();

        // Fire registering event
        $this->fireEvent(ModuleLifecycleEvent::REGISTERING);

        // Call bindings hook (only if provider implements HasBindings)
        $this->collectBindings();

        // Fire registered event
        $this->fireEvent(ModuleLifecycleEvent::REGISTERED);
    }
}
