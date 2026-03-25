<?php

namespace Pixielity\Foundation\Providers;

use Nwidart\Modules\Support\ModuleServiceProvider;
use Pixielity\Discovery\Facades\Discovery;
use Pixielity\Routing\Attributes\AsController;
use Pixielity\Support\Reflection;
use Pixielity\Routing\RouteRegistrar;

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

    public function boot(): void
    {
        parent::boot();

        // Disable Spatie's automatic route registration since we're doing it manually
        config(['route-attributes.enabled' => false]);

        // Create a new instance of our RouteRegistrar
        // Pass the router and config from the container
        $registrar = new RouteRegistrar(
            $this->app->make('router'),
            $this->app->make('config')
        );

        // Use Discovery to find all controllers with #[AsController] attribute
        // Cached for performance - cache is cleared on composer dump-autoload
        Discovery::attribute(AsController::class)
            ->cached('foundation.controllers')
            ->get()
            ->keys()
            // Filter out any classes that don't exist (safety check)
            ->filter(Reflection::exists(...))
            // Register each controller with our route registrar
            ->each($registrar->registerController(...));
    }
}
