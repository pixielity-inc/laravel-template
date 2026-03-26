<?php

namespace Pixielity\ServiceProvider\Concerns;

use Illuminate\Console\Scheduling\Schedule;
use Pixielity\ServiceProvider\Contracts\HasScheduledTasks as HasScheduledTasksContract;
use Pixielity\Support\Reflection;

/**
 * Has Scheduled Tasks Trait.
 *
 * Provides scheduled task registration functionality for module service providers.
 * Allows pixielity to register commands that should run on a schedule.
 *
 * ## Purpose:
 * This trait enables pixielity to define scheduled tasks (cron jobs) that run
 * automatically at specified intervals using Laravel's task scheduler.
 *
 * ## Features:
 * - ✅ Automatic task registration during boot
 * - ✅ Interface-based task definition
 * - ✅ Access to Laravel's Schedule instance
 * - ✅ Support for all Laravel scheduling features
 *
 * ## Usage:
 * Implement the HasScheduledTasks interface in your service provider:
 * ```php
 * class MyServiceProvider extends ServiceProvider implements HasScheduledTasks
 * {
 *     public function scheduledTasks(Schedule $schedule): void
 *     {
 *         // Run command every minute
 *         $schedule->command('mymodule:sync')->everyMinute();
 *
 *         // Run command daily at midnight
 *         $schedule->command('mymodule:cleanup')->daily();
 *
 *         // Run command hourly on weekdays
 *         $schedule->command('mymodule:report')
 *             ->hourly()
 *             ->weekdays();
 *     }
 * }
 * ```
 *
 * ## Available Schedule Methods:
 * - everyMinute(), everyFiveMinutes(), everyTenMinutes()
 * - hourly(), daily(), weekly(), monthly()
 * - dailyAt('13:00'), twiceDaily(1, 13)
 * - weekdays(), weekends(), mondays(), tuesdays(), etc.
 * - when(Closure), skip(Closure)
 * - withoutOverlapping(), onOneServer()
 * - runInBackground(), emailOutputTo()
 *
 * @since 1.0.0
 */
trait HasScheduledTasks
{
    /**
     * Collect and register scheduled tasks for the module.
     *
     * This method is called during the boot process to register any scheduled
     * tasks defined by the module. It checks if the provider implements the
     * HasScheduledTasks interface and calls scheduledTasks() with the Schedule instance.
     *
     * ## How It Works:
     * 1. Checks if running in console (scheduler only runs in console)
     * 2. Checks if provider implements HasScheduledTasks interface
     * 3. Resolves the Schedule instance from the container
     * 4. Calls scheduledTasks() method
     * 5. Tasks are registered with Laravel's scheduler
     *
     * ## Example:
     * ```php
     * // In your module's service provider
     * class MyServiceProvider extends ServiceProvider implements HasScheduledTasks
     * {
     *     public function scheduledTasks(Schedule $schedule): void
     *     {
     *         $schedule->command('health:check')->everyMinute();
     *     }
     * }
     * ```
     */
    protected function collectScheduledTasks(): void
    {
        // Only register scheduled tasks when running in console
        if (! $this->app->runningInConsole()) {
            return;
        }

        // Check if the provider implements HasScheduledTasks interface
        if (! Reflection::implements($this, HasScheduledTasksContract::class)) {
            return;
        }

        // Resolve the Schedule instance and register tasks
        $this->app->booted(function (): void {
            $schedule = $this->app->make(Schedule::class);
            $this->scheduledTasks($schedule);
        });
    }
}
