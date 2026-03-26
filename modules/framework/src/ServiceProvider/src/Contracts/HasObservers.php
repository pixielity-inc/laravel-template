<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

/**
 * Has Observers Contract.
 *
 * Defines the contract for service providers that register Eloquent model observers.
 *
 * @since 1.0.0
 */
interface HasObservers
{
    /**
     * Register model observers.
     *
     * @return array<class-string, class-string|array<class-string>> Array of model => observer(s) mappings
     */
    public function observers(): array;
}
