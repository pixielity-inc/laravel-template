<?php

declare(strict_types=1);

namespace Pixielity\Database\Traits;

use Abbasudo\Purity\Traits\Sortable as PuritySortable;
use Pixielity\Database\Attributes\Sortable;
use Pixielity\Support\Reflection;

/**
 * Has Sortable Trait.
 *
 * Extends Purity's Sortable trait with automatic, attribute-based configuration.
 * Provides multi-field sorting via URL parameters with support for ascending
 * and descending order.
 *
 * ## Features:
 * - All Purity Sortable functionality
 * - Attribute-based configuration (modern)
 * - Property-based configuration (legacy)
 * - Multi-field sorting
 * - Field renaming for API
 * - Ascending/descending support
 *
 * ## Usage:
 *
 * ### Basic Sorting (All fields):
 * ```php
 * use Pixielity\Database\Model;
 * use Pixielity\Database\Traits\HasSortable;
 *
 * class Post extends Model
 * {
 *     use HasSortable;
 * }
 *
 * // API: GET /api/posts?sort=created_at
 * $posts = Post::sort()->get();
 * ```
 *
 * ### With Attribute Configuration:
 * ```php
 * use Pixielity\Database\Attributes\Sortable;
 *
 * #[Sortable(['title', 'status', 'views', 'created_at'])]
 * class Post extends Model
 * {
 *     use HasSortable;
 * }
 * ```
 *
 * ### With Property Configuration:
 * ```php
 * class Post extends Model
 * {
 *     use HasSortable;
 *
 *     protected ?array $sortFields = ['title', 'status', 'views', 'created_at'];
 * }
 * ```
 *
 * ### With Field Renaming:
 * ```php
 * #[Sortable(
 *     fields: ['title', 'created_at', 'user_id'],
 *     renamed: [
 *         'created_at' => 'date',
 *         'user_id' => 'author',
 *     ]
 * )]
 * class Post extends Model
 * {
 *     use HasSortable;
 * }
 * ```
 *
 * ## API Examples:
 *
 * ### Single Field Sorting:
 * ```
 * GET /api/posts?sort=created_at          // Ascending
 * GET /api/posts?sort=-created_at         // Descending (note the minus)
 * ```
 *
 * ### Multiple Field Sorting:
 * ```
 * GET /api/posts?sort=status,-created_at  // Sort by status ASC, then created_at DESC
 * GET /api/posts?sort=-views,title        // Sort by views DESC, then title ASC
 * ```
 *
 * ### With Renamed Fields:
 * ```
 * GET /api/posts?sort=-date               // Instead of -created_at
 * GET /api/posts?sort=author,-date        // Instead of user_id,-created_at
 * ```
 *
 * ### Combined with Filtering:
 * ```
 * GET /api/posts?filter[status][$eq]=published&sort=-created_at
 * ```
 *
 * ## Sort Syntax:
 * - `field` - Sort ascending
 * - `-field` - Sort descending (prefix with minus)
 * - `field1,field2` - Multiple sorts (comma-separated)
 * - `-field1,field2` - Mixed directions
 *
 * ## Priority:
 * If both attribute and property are defined:
 * 1. Attribute settings take precedence
 * 2. Falls back to property if attribute has no configuration
 * 3. Falls back to all fields if neither defined
 *
 * @see PuritySortable
 * @see Sortable
 * @since 1.0.0
 */
trait HasSortable
{
    use PuritySortable;

    /**
     * Get the list of sortable fields.
     *
     * Priority:
     * 1. Fields from #[Sortable] attribute
     * 2. $sortFields property
     * 3. null (all fields available)
     *
     * @return array<int, string>|null
     */
    public function getSortFields(): ?array
    {
        // Check for #[Sortable] attribute first
        if (Reflection::hasAttribute(static::class, Sortable::class)) {
            $attributes = Reflection::getAttributes(static::class, Sortable::class);

            if ($attributes !== []) {
                /** @var Sortable $sortable */
                $sortable = $attributes[0]->newInstance();

                // If attribute has fields, use them
                if ($sortable->fields !== null) {
                    return $sortable->fields;
                }
            }
        }

        // Fall back to property
        return $this->sortFields ?? null;
    }

    /**
     * Get renamed sort fields.
     *
     * Priority:
     * 1. Renamed from #[Sortable] attribute
     * 2. Property (if exists)
     * 3. null (no renaming)
     *
     * @return array<string, string>|null
     */
    public function getRenamedSortFields(): ?array
    {
        // Check for #[Sortable] attribute first
        if (Reflection::hasAttribute(static::class, Sortable::class)) {
            $attributes = Reflection::getAttributes(static::class, Sortable::class);

            if ($attributes !== []) {
                /** @var Sortable $sortable */
                $sortable = $attributes[0]->newInstance();

                // If attribute has renamed fields, use them
                if ($sortable->renamed !== null) {
                    return $sortable->renamed;
                }
            }
        }

        // Fall back to property (if you add it later)
        // return $this->renamedSortFields ?? null;

        return null;
    }
}
