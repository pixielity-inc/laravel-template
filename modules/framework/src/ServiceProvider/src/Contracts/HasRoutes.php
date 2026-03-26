<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

use Illuminate\Routing\Router;

/**
 * Has Routes Contract.
 *
 * Defines the contract for service providers that register routes programmatically.
 *
 * @since 1.0.0
 */
interface HasRoutes
{
    /**
     * Register routes programmatically.
     *
     * @param Router $router The router instance
     * @return void
     */
    public function routes(Router $router): void;
}
