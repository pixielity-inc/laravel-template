<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

use Spatie\Sluggable\SlugOptions;

/**
 * HasSlug Interface.
 *
 * Defines the contract for models that support automatic slug generation.
 * Slugs are SEO-friendly URL identifiers typically generated from a source field.
 *
 * This interface matches the public methods from the HasSlugs trait.
 */
interface HasSlug
{
    /**
     * Get the options for generating the slug.
     *
     * @return SlugOptions The slug configuration options
     */
    public function getSlugOptions(): SlugOptions;

    /**
     * Check if model has slugs enabled.
     *
     * @return bool True if sluggable, false otherwise.
     */
    public function isSluggable(): bool;
}
