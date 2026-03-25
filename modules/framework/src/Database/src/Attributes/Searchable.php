<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;
use Pixielity\Database\Enums\SearchEngine;
use Pixielity\Database\Traits\HasSearch;

/**
 * Searchable Attribute.
 *
 * Marks a model as searchable via Laravel Scout. This is a modern alternative
 * to using the `protected bool $searchable` property.
 *
 * ## Purpose:
 * - Explicitly mark models as searchable
 * - Define searchable fields via attribute
 * - Configure search engine and index
 * - More discoverable than property-based configuration
 * - Enables IDE autocomplete and static analysis
 *
 * ## Usage:
 *
 * ### Basic Usage (All fields):
 * ```php
 * use Pixielity\Database\Attributes\Searchable;
 * use Pixielity\Database\Model;
 * use Pixielity\Database\Traits\HasSearch;
 *
 * #[Searchable]
 * class Post extends Model
 * {
 *     use HasSearch;
 * }
 * ```
 *
 * ### With Specific Fields:
 * ```php
 * #[Searchable(['title', 'content', 'excerpt'])]
 * class Post extends Model
 * {
 *     use HasSearch;
 *
 *     // No need for $searchableAttributes property
 * }
 * ```
 *
 * ### With Custom Index:
 * ```php
 * #[Searchable(
 *     fields: ['title', 'content'],
 *     index: 'posts_v2'
 * )]
 * class Post extends Model
 * {
 *     use HasSearch;
 * }
 * ```
 *
 * ### With Search Engine:
 * ```php
 * use Pixielity\Database\Enums\SearchEngine;
 *
 * #[Searchable(
 *     fields: ['title', 'content'],
 *     engine: 'meilisearch'
 * )]
 * class Post extends Model
 * {
 *     use HasSearch;
 * }
 *
 * // Or using enum
 * #[Searchable(
 *     fields: ['title', 'content'],
 *     engine: SearchEngine::MEILISEARCH
 * )]
 * class Post extends Model
 * {
 *     use HasSearch;
 * }
 * ```
 *
 * ### Complete Configuration:
 * ```php
 * #[Searchable(
 *     fields: ['title', 'content', 'excerpt'],
 *     engine: 'meilisearch',
 *     index: 'posts_production',
 *     enabled: true
 * )]
 * class Post extends Model
 * {
 *     use HasSearch;
 * }
 * ```
 *
 * ### Disabled:
 * ```php
 * #[Searchable(enabled: false)]
 * class Post extends Model
 * {
 *     use HasSearch;
 * }
 * ```
 *
 * ### Multiple Attributes:
 * ```php
 * #[Searchable(['title', 'content'], engine: 'meilisearch')]
 * #[Translatable(['title', 'content'])]
 * #[Auditable]
 * class Post extends Model
 * {
 *     use HasSearch, HasTranslations, HasAuditing;
 * }
 * ```
 *
 * ## Available Engines:
 * - `collection` - In-memory collection search (default, no external service)
 * - `database` - Database-based search (uses LIKE queries)
 * - `meilisearch` - Meilisearch engine (fast, typo-tolerant)
 * - `algolia` - Algolia engine (powerful, hosted)
 * - `typesense` - Typesense engine (open-source alternative)
 *
 * ## Benefits:
 * - **Explicit**: Clear intent at class level
 * - **Discoverable**: Easy to find searchable models
 * - **Type Safe**: IDE can validate attribute usage
 * - **Flexible**: Can specify fields, engine, and index in one place
 * - **Modern**: Follows PHP 8+ attribute pattern
 *
 * ## Priority:
 * If both attribute and property are defined:
 * 1. Attribute settings take precedence
 * 2. Falls back to property if attribute has no fields/engine
 *
 * @see HasSearch
 * @see \Laravel\Scout\Searchable
 * @see SearchEngine
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Searchable
{
    /**
     * Create a new Searchable attribute instance.
     *
     * @param  array<int, string>  $fields  Optional array of searchable field names
     * @param  SearchEngine|string|null  $engine  Optional search engine name (e.g., 'meilisearch', 'algolia', 'collection')
     * @param  string|null  $index  Optional custom search index name
     * @param  bool  $enabled  Whether search is enabled (default: true)
     */
    public function __construct(
        public readonly array $fields = [],
        public readonly SearchEngine|string|null $engine = null,
        public readonly ?string $index = null,
        public readonly bool $enabled = true,
    ) {}
}
