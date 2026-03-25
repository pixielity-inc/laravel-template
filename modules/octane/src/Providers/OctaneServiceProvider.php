<?php

namespace Pixielity\Octane\Providers;

use Illuminate\Support\ServiceProvider;
use Pixielity\Octane\Console\Commands\RestartAppCommand;
use Pixielity\Octane\Console\Commands\StartAppCommand;
use Pixielity\Octane\Console\Commands\StopAppCommand;
use Laravel\Octane\OctaneServiceProvider as LaravelOctaneServiceProvider;

class OctaneServiceProvider extends LaravelOctaneServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register console commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                StartAppCommand::class,
                StopAppCommand::class,
                RestartAppCommand::class,
            ]);
        }
    }
}
