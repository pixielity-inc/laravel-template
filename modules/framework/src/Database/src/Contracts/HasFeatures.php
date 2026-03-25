<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasFeatures Interface.
 *
 * Defines the contract for models that support feature flag functionality.
 * This interface matches the public methods provided by the HasFeatures trait.
 *
 * The trait wraps Laravel Pennant's HasFeatures trait with property-based conditional application.
 * Only the custom method defined in the HasFeatures trait is included in this interface.
 * Additional methods from Laravel Pennant's base trait are available but not enforced by this interface.
 *
 * @see \Pixielity\FeatureFlags\Traits\HasFeatures
 */
interface HasFeatures
{
    /**
     * Check if model has feature flags enabled.
     *
     * @return bool True if feature flags are enabled, false otherwise.
     */
    public function isFeaturable(): bool;
}
