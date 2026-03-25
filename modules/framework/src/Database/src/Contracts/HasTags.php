<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

use ArrayAccess;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\Tags\Tag;

/**
 * HasTags Interface.
 *
 * Defines the contract for models that support tagging functionality.
 * Tags allow flexible categorization and organization of models.
 *
 * This interface matches the public methods from the HasTags trait,
 * which wraps Spatie's HasTags with property-based conditional application.
 *
 * @property-read Collection $tags Collection of tags
 *
 * @see \Pixielity\Database\Traits\HasTags
 */
interface HasTags
{
    /**
     * Get tag type for this model.
     *
     * @return string The tag type/class name.
     */
    public static function getTagClassName(): string;

    /**
     * Get all tags associated with the model.
     *
     * @return MorphToMany The tags relationship.
     */
    public function tags();

    /**
     * Attach one or more tags to the model.
     *
     * @param  ArrayAccess|Tag|array $tags Tags to attach (names, IDs, or models).
     * @param  string|null           $type Optional tag type.
     * @return self                  Returns this instance for method chaining.
     */
    public function attachTags(ArrayAccess|Tag|array $tags, ?string $type = null);

    /**
     * Detach one or more tags from the model.
     *
     * @param  array|ArrayAccess $tags Tags to detach.
     * @param  string|null       $type Optional tag type.
     * @return self              Returns this instance for method chaining.
     */
    public function detachTags(array|ArrayAccess $tags, ?string $type = null);

    /**
     * Sync tags with the model (replaces all existing tags).
     *
     * @param  string|array|ArrayAccess $tags Tags to sync.
     * @return self                     Returns this instance for method chaining.
     */
    public function syncTags(string|array|ArrayAccess $tags);

    /**
     * Check if the model has a specific tag.
     *
     * @param  string $tag Tag name to check.
     * @return bool   True if tag exists, false otherwise.
     */
    public function hasTag(string $tag);

    /**
     * Check if model has tagging enabled.
     *
     * @return bool True if tagging is enabled, false otherwise.
     */
    public function isTaggable(): bool;
}
