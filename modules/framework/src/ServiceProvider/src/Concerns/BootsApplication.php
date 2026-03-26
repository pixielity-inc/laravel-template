<?php

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\ServiceProvider\Enums\ModuleLifecycleEvent;

/**
 * Boots Application Concern.
 *
 * Encapsulates all boot-time logic for service providers.
 * This trait orchestrates the boot sequence by calling various collection methods.
 *
 * @since 1.0.0
 */
trait BootsApplication
{
    /**
     * Execute the boot sequence.
     *
     * This method orchestrates all boot-time operations in the correct order.
     */
    protected function bootApplication(): void
    {
        // Fire booting event
        $this->fireEvent(ModuleLifecycleEvent::BOOTING);

        // Validate configuration (validates properties, dependencies, and detects path)
        $this->validateConfiguration();

        // Load migrations
        $this->collectMigrations();

        // Load configuration
        $this->collectConfig();

        // Load views
        $this->collectViews();

        // Load commands
        $this->collectCommands();

        // Register seeders
        $this->collectSeeders();

        // Load translations
        $this->collectTranslations();

        // Publish module resources (assets, config, translations, views)
        $this->collectPublishables();

        // Register middleware (only if provider implements HasMiddleware)
        // Must be done during boot() after middleware groups are initialized
        $this->collectMiddleware();

        // Load routes
        $this->collectRoutes();

        // Register observers (only if provider implements HasObservers)
        $this->collectObservers();

        // Register policies (only if provider implements HasPolicies)
        $this->collectPolicies();

        // Register health checks (only if provider implements HasHealthChecks)
        $this->collectHealthChecks();

        // Register events
        $this->collectListeners();

        // Register terminating callback
        $this->collectTerminatingCallback();

        // Register macros (only if provider implements HasMacros)
        $this->collectMacros();

        // Register scheduled tasks (only if provider implements HasScheduledTasks)
        $this->collectScheduledTasks();

        // Fire booted event
        $this->fireEvent(ModuleLifecycleEvent::BOOTED);
    }
}
