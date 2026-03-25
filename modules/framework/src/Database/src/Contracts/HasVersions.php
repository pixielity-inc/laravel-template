<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * HasVersions Interface.
 *
 * Defines the contract for models that support version control.
 * This interface matches the public methods provided by the HasVersions trait.
 *
 * The trait wraps Overtrue's Versionable trait with property-based conditional application.
 * Only the methods defined in the custom HasVersions trait are included in this interface.
 * Additional methods from the parent Versionable trait are available but not enforced by this interface.
 *
 * @property-read Collection $versions Collection of all versions
 *
 * @see \Pixielity\Database\Traits\HasVersions
 */
interface HasVersions
{
    /**
     * Get all versions relationship.
     *
     * @return MorphMany The versions relationship.
     */
    public function versions(): MorphMany;

    /**
     * Check if model has versioning enabled.
     *
     * @return bool True if versioning is enabled, false otherwise.
     */
    public function isVersionable(): bool;

    /**
     * Get the list of versionable attributes.
     *
     * @return array<int, string> Array of versionable attribute names.
     */
    public function getVersionableAttributes(): array;
}
