<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;

/**
 * Filterable Attribute.
 *
 * Marks a model as filterable via Purity filtering system. This is a modern
 * alternative to using the `protected array $filters` property.
 *
 * ## Purpose:
 * - Explicitly mark models as filterable
 * - Define available filters and fields via attribute
 * - Configure filter restrictions and field renaming
 * - More discoverable than property-based configuration
 * - Enables IDE autocomplete and static analysis
 *
 * ## Usage:
 *
 * ### Basic Usage (All fields, all filters):
 * ```php
 * use Pixielity\Database\Attributes\Filterable;
 * use Pixielity\Database\Model;
 *
 * #[Filterable]
 * class Post extends Model
 * {
 *     // All table columns and relations are filterable
 * }
 * ```
 *
 * ### With Specific Fields:
 * ```php
 * #[Filterable(fields: ['title', 'status', 'author_id', 'created_at'])]
 * class Post extends Model
 * {
 *     // Only these fields can be filtered
 * }
 * ```
 *
 * ### With Custom Filters:
 * ```php
 * #[Filterable(
 *     filters: ['$eq', '$contains', '$gt', '$lt', '$between'],
 *     fields: ['title', 'status', 'created_at']
 * )]
 * class Post extends Model
 * {
 *     // Only these filters are available
 * }
 * ```
 *
 * ### With Restricted Filters (Per Field):
 * ```php
 * #[Filterable(
 *     fields: ['title', 'status', 'views', 'created_at'],
 *     restricted: [
 *         'title' => ['$eq', '$contains'],
 *         'status' => ['$eq', '$in'],
 *         'views' => ['$gt', '$lt', '$between'],
 *         'created_at' => ['$gt', '$lt', '$between'],
 *     ]
 * )]
 * class Post extends Model
 * {
 *     // Each field has specific allowed filters
 * }
 * ```
 *
 * ### With Field Renaming:
 * ```php
 * #[Filterable(
 *     fields: ['title', 'status', 'created_at', 'user_id'],
 *     renamed: [
 *         'created_at' => 'date',
 *         'user_id' => 'author',
 *     ]
 * )]
 * class Post extends Model
 * {
 *     // API uses: ?filter[date][$gt]=2024-01-01&filter[author][$eq]=1
 *     // Instead of: ?filter[created_at][$gt]=2024-01-01&filter[user_id][$eq]=1
 * }
 * ```
 *
 * ### Complete Configuration:
 * ```php
 * #[Filterable(
 *     filters: ['$eq', '$contains', '$gt', '$lt', '$between', '$in'],
 *     fields: ['title', 'status', 'views', 'created_at', 'user_id'],
 *     restricted: [
 *         'title' => ['$eq', '$contains'],
 *         'status' => ['$eq', '$in'],
 *         'views' => ['$gt', '$lt', '$between'],
 *     ],
 *     renamed: [
 *         'created_at' => 'date',
 *         'user_id' => 'author',
 *     ]
 * )]
 * class Post extends Model
 * {
 * }
 * ```
 *
 * ## Available Filters:
 * - `$eq` - Equals
 * - `$ne` - Not equals
 * - `$gt` - Greater than
 * - `$gte` - Greater than or equal
 * - `$lt` - Less than
 * - `$lte` - Less than or equal
 * - `$in` - In array
 * - `$notIn` - Not in array
 * - `$contains` - Contains string
 * - `$startsWith` - Starts with string
 * - `$endsWith` - Ends with string
 * - `$between` - Between two values
 * - `$null` - Is null
 * - `$notNull` - Is not null
 *
 * ## Benefits:
 * - **Explicit**: Clear intent at class level
 * - **Discoverable**: Easy to find filterable models
 * - **Type Safe**: IDE can validate attribute usage
 * - **Flexible**: Configure all filtering options in one place
 * - **Modern**: Follows PHP 8+ attribute pattern
 * - **Secure**: Restrict which fields and filters are exposed
 *
 * ## Priority:
 * If both attribute and property are defined:
 * 1. Attribute settings take precedence
 * 2. Falls back to property if attribute has no configuration
 *
 * @see \Abbasudo\Purity\Traits\Filterable
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Filterable
{
    /**
     * Create a new Filterable attribute instance.
     *
     * @param  array<int, string>|null  $filters  Available filter operators (e.g., ['$eq', '$contains'])
     * @param  array<int, string>|null  $fields  Fields available for filtering
     * @param  array<string, array<int, string>|string>|null  $restricted  Restrict specific filters to specific fields
     * @param  array<string, string>|null  $renamed  Rename filter fields for API (field => alias)
     */
    public function __construct(
        public readonly ?array $filters = null,
        public readonly ?array $fields = null,
        public readonly ?array $restricted = null,
        public readonly ?array $renamed = null,
    ) {}
}
