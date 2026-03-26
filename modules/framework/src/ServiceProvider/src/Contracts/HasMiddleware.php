<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

use Illuminate\Routing\Router;

/**
 * Has Middleware Contract.
 *
 * Defines the contract for service providers that register HTTP middleware.
 *
 * @since 1.0.0
 */
interface HasMiddleware
{
    /**
     * Register middleware.
     *
     * @param Router $router The router instance
     * @return void
     */
    public function middleware(Router $router): void;
}
