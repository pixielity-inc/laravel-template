<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

/**
 * Has Policies Contract.
 *
 * Defines the contract for service providers that register authorization policies.
 *
 * @since 1.0.0
 */
interface HasPolicies
{
    /**
     * Register authorization policies.
     *
     * @return array<class-string, class-string> Array of model => policy mappings
     */
    public function policies(): array;
}
