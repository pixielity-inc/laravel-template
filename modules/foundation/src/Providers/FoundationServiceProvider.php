<?php

namespace Pixielity\Foundation\Providers;

use Illuminate\Console\Scheduling\Schedule;
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
        );

        // Use Discovery to find all controllers with #[AsController] attribute
        // get() returns a collection with metadata, keys() gives us just the class names
        Discovery::attribute(AsController::class)
            ->get()
            ->keys()
            // Filter out any classes that don't exist (safety check)
            ->filter(fn (string $controller): bool => Reflection::exists($controller))
            // Register each controller with our route registrar
            ->each(fn (string $controller) => $registrar->registerController($controller));
    }
}
