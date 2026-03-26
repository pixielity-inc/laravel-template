<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

/**
 * Has Health Checks Contract.
 *
 * Defines the contract for service providers that register health checks.
 *
 * @since 1.0.0
 */
interface HasHealthChecks
{
    /**
     * Register health checks.
     *
     * @return array<string, object|class-string> Array of health check name => instance/class mappings
     */
    public function healthChecks(): array;
}
