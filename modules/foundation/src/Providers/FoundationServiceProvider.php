<?php

namespace Pixielity\Foundation\Providers;

use Nwidart\Modules\Support\ModuleServiceProvider;

class FoundationServiceProvider extends ModuleServiceProvider
{
    /**
     * The name of the module.
     */
    protected string $name = 'Foundation';

    /**
     * The lowercase version of the module name.
     */
    protected string $nameLower = 'foundation';

    /**
     * Command classes to register.
     *
     * @var string[]
     */
    // protected array $commands = [];

    /**
     * Provider classes to register.
     *
     * @var string[]
     */
    protected array $providers = [
        // RouteServiceProvider removed - using route attributes instead
    ];

    /**
     * Define module schedules.
     *
     * @param  $schedule
     */
    // protected function configureSchedules(Schedule $schedule): void
    // {
    //     $schedule->command('inspire')->hourly();
    // }

    /**
     * Register the service provider.
     *
     * Binds our custom RouteRegistrar so Spatie's auto-discovery uses it.
     */
    public function register(): void
    {
        parent::register();

        // Bind our custom RouteRegistrar so Spatie's service provider uses it
        // This allows us to override registerDirectory() to use Discovery
        $this->app->bind(
            \Spatie\RouteAttributes\RouteRegistrar::class,
            \Pixielity\Routing\RouteRegistrar::class
        );
    }

    /**
     * Boot the service provider.
     *
     * Routes are automatically registered by Spatie's RouteAttributesServiceProvider
     * using our custom RouteRegistrar which discovers controllers via the
     * #[AsController] attribute instead of scanning directories.
     *
     * No manual registration needed - just configure directories in
     * config/route-attributes.php and add #[AsController] to your controllers.
     */
    public function boot(): void
    {
        parent::boot();

        // Spatie's auto-discovery will use our custom RouteRegistrar
        // which overrides registerDirectory() to use Discovery with #[AsController]
        // Configuration is in config/route-attributes.php
    }
}
