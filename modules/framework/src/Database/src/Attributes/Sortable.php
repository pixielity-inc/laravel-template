<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;

/**
 * Sortable Attribute.
 *
 * Marks a model as sortable via Purity sorting system. This is a modern
 * alternative to using the `protected array $sortFields` property.
 *
 * ## Purpose:
 * - Explicitly mark models as sortable
 * - Define sortable fields via attribute
 * - More discoverable than property-based configuration
 * - Enables IDE autocomplete and static analysis
 *
 * ## Usage:
 *
 * ### Basic Usage (All fields):
 * ```php
 * use Pixielity\Database\Attributes\Sortable;
 * use Pixielity\Database\Model;
 *
 * #[Sortable]
 * class Post extends Model
 * {
 *     // All table columns and relations are sortable
 * }
 * ```
 *
 * ### With Specific Fields:
 * ```php
 * #[Sortable(['title', 'status', 'views', 'created_at'])]
 * class Post extends Model
 * {
 *     // Only these fields can be sorted
 * }
 * ```
 *
 * ### API Usage:
 * ```
 * GET /api/posts?sort=created_at          // Sort by created_at ascending
 * GET /api/posts?sort=-created_at         // Sort by created_at descending
 * GET /api/posts?sort=status,-created_at  // Multiple sorts
 * ```
 *
 * ### With Renamed Fields:
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
 *     // API uses: ?sort=date,-author
 *     // Instead of: ?sort=created_at,-user_id
 * }
 * ```
 *
 * ### Combined with Filterable:
 * ```php
 * #[Filterable(
 *     fields: ['title', 'status', 'created_at'],
 *     renamed: ['created_at' => 'date']
 * )]
 * #[Sortable(
 *     fields: ['title', 'status', 'created_at'],
 *     renamed: ['created_at' => 'date']
 * )]
 * class Post extends Model
 * {
 *     // API: ?filter[date][$gt]=2024-01-01&sort=-date
 * }
 * ```
 *
 * ## Benefits:
 * - **Explicit**: Clear intent at class level
 * - **Discoverable**: Easy to find sortable models
 * - **Type Safe**: IDE can validate attribute usage
 * - **Flexible**: Configure sortable fields in one place
 * - **Modern**: Follows PHP 8+ attribute pattern
 * - **Secure**: Restrict which fields can be sorted
 *
 * ## Priority:
 * If both attribute and property are defined:
 * 1. Attribute settings take precedence
 * 2. Falls back to property if attribute has no fields
 *
 * @see \Abbasudo\Purity\Traits\Sortable
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Sortable
{
    /**
     * Create a new Sortable attribute instance.
     *
     * @param  array<int, string>|null  $fields  Fields available for sorting
     * @param  array<string, string>|null  $renamed  Rename sort fields for API (field => alias)
     */
    public function __construct(
        public readonly ?array $fields = null,
        public readonly ?array $renamed = null,
    ) {}
}
