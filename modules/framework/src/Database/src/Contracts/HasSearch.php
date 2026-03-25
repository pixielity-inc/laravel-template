<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

use Laravel\Scout\Engines\Engine;

/**
 * HasSearch Interface.
 *
 * Defines the contract for models that support full-text search
 * via Laravel Scout with multiple search engines.
 *
 * This interface matches the public methods from the HasSearch trait.
 */
interface HasSearch
{
    /**
     * Get the indexable data array for the model.
     *
     * Automatically handles:
     * - Translation indexing for all enabled languages
     * - Attribute filtering based on $searchableAttributes
     * - Datetime conversion to timestamps
     *
     * @return array<string, mixed> Array of searchable data
     */
    public function toSearchableArray(): array;

    /**
     * Get the index name for the model.
     *
     * Uses $searchableIndex property if defined, otherwise uses table name.
     *
     * @return string The search index name
     */
    public function searchableAs(): string;

    /**
     * Determine if the model should be searchable.
     *
     * Checks the $searchable property flag.
     * Override in model for custom logic.
     *
     * @return bool True if model should be indexed, false otherwise.
     */
    public function shouldBeSearchable(): bool;

    /**
     * Get the engine used to index the model.
     *
     * Uses the $searchEngine property.
     *
     * @return Engine The search engine instance
     */
    public function searchableUsing(): Engine;
}
