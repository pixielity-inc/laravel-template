<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

use Illuminate\Console\Scheduling\Schedule;

/**
 * Has Scheduled Tasks Contract.
 *
 * Defines the contract for service providers that register scheduled tasks.
 *
 * @since 1.0.0
 */
interface HasScheduledTasks
{
    /**
     * Register scheduled tasks.
     *
     * @param Schedule $schedule The schedule instance
     * @return void
     */
    public function scheduledTasks(Schedule $schedule): void;
}
