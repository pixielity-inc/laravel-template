<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;
use Pixielity\Database\Traits\HasTranslations;

/**
 * Translatable Attribute.
 *
 * Marks a model as having translatable fields. This is a modern alternative
 * to using the `protected array $translatable` property.
 *
 * ## Purpose:
 * - Explicitly mark models as translatable
 * - Define translatable fields via attribute
 * - More discoverable than property-based configuration
 * - Enables IDE autocomplete and static analysis
 *
 * ## Usage:
 *
 * ### Basic Usage (All fields):
 * ```php
 * use Pixielity\Database\Attributes\Translatable;
 * use Pixielity\Database\Model;
 * use Pixielity\Database\Traits\HasTranslations;
 *
 * #[Translatable]
 * class Post extends Model
 * {
 *     use HasTranslations;
 *
 *     // Define fields via property (still supported)
 *     protected array $translatable = ['title', 'content'];
 * }
 * ```
 *
 * ### With Fields in Attribute:
 * ```php
 * #[Translatable(['title', 'content', 'excerpt'])]
 * class Post extends Model
 * {
 *     use HasTranslations;
 *
 *     // No need for $translatable property
 * }
 * ```
 *
 * ### Multiple Attributes (Future):
 * ```php
 * #[Translatable(['title', 'content'])]
 * #[Searchable(['title', 'excerpt'])]
 * #[Auditable]
 * class Post extends Model
 * {
 *     use HasTranslations, HasSearch, HasAuditing;
 * }
 * ```
 *
 * ## Benefits:
 * - **Explicit**: Clear intent at class level
 * - **Discoverable**: Easy to find translatable models
 * - **Type Safe**: IDE can validate attribute usage
 * - **Flexible**: Can specify fields in attribute or property
 * - **Modern**: Follows PHP 8+ attribute pattern
 *
 * ## Priority:
 * If both attribute and property are defined:
 * 1. Attribute fields take precedence
 * 2. Falls back to property if attribute has no fields
 *
 * @see HasTranslations
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Translatable
{
    /**
     * Create a new Translatable attribute instance.
     *
     * @param  array<int, string>  $fields  Optional array of translatable field names
     */
    public function __construct(
        public readonly array $fields = [],
    ) {}
}
