<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

/**
 * Has Macros Contract.
 *
 * Defines the contract for service providers that register macros on macroable classes.
 *
 * @since 1.0.0
 */
interface HasMacros
{
    /**
     * Register macros on macroable classes.
     *
     * @return void
     */
    public function macros(): void;
}
