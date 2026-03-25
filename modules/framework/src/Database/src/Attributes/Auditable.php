<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;

/**
 * Auditable Attribute.
 *
 * Marks a model as auditable for tracking changes. This is a modern
 * alternative to using the `protected bool $auditable` property.
 *
 * ## Purpose:
 * - Explicitly mark models as auditable
 * - Enable automatic change tracking
 * - More discoverable than property-based configuration
 * - Enables IDE autocomplete and static analysis
 *
 * ## Usage:
 *
 * ### Basic Usage:
 * ```php
 * use Pixielity\Database\Attributes\Auditable;
 * use Pixielity\Database\Model;
 *
 * #[Auditable]
 * class Post extends Model
 * {
 *     // All changes to this model will be audited
 * }
 * ```
 *
 * ### Disabled:
 * ```php
 * #[Auditable(enabled: false)]
 * class Post extends Model
 * {
 *     // Auditing is explicitly disabled
 * }
 * ```
 *
 * ### With Specific Events:
 * ```php
 * #[Auditable(events: ['created', 'updated', 'deleted'])]
 * class Post extends Model
 * {
 *     // Only audit these events
 * }
 * ```
 *
 * ### With Excluded Attributes:
 * ```php
 * #[Auditable(exclude: ['views', 'last_viewed_at'])]
 * class Post extends Model
 * {
 *     // Don't audit changes to these fields
 * }
 * ```
 *
 * ### Complete Configuration:
 * ```php
 * #[Auditable(
 *     enabled: true,
 *     events: ['created', 'updated', 'deleted', 'restored'],
 *     exclude: ['views', 'last_viewed_at', 'updated_at']
 * )]
 * class Post extends Model
 * {
 * }
 * ```
 *
 * ### Combined with Other Attributes:
 * ```php
 * #[Auditable]
 * #[Translatable(['title', 'content'])]
 * #[Searchable(['title', 'content'])]
 * #[Filterable(fields: ['status', 'created_at'])]
 * class Post extends Model
 * {
 *     use HasTranslations, HasSearch;
 * }
 * ```
 *
 * ## Available Events:
 * - `created` - Model was created
 * - `updated` - Model was updated
 * - `deleted` - Model was deleted
 * - `restored` - Model was restored (soft deletes)
 * - `retrieved` - Model was retrieved (optional)
 *
 * ## Benefits:
 * - **Explicit**: Clear intent at class level
 * - **Discoverable**: Easy to find auditable models
 * - **Type Safe**: IDE can validate attribute usage
 * - **Flexible**: Configure auditing options in one place
 * - **Modern**: Follows PHP 8+ attribute pattern
 * - **Compliance**: Helps meet audit requirements
 *
 * ## Priority:
 * If both attribute and property are defined:
 * 1. Attribute settings take precedence
 * 2. Falls back to property if attribute is not present
 *
 * @see \OwenIt\Auditing\Contracts\Auditable
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_CLASS)]
class Auditable
{
    /**
     * Create a new Auditable attribute instance.
     *
     * @param  bool  $enabled  Whether auditing is enabled (default: true)
     * @param  array<int, string>|null  $events  Events to audit (default: all)
     * @param  array<int, string>|null  $exclude  Attributes to exclude from auditing
     */
    public function __construct(
        public readonly bool $enabled = true,
        public readonly ?array $events = null,
        public readonly ?array $exclude = null,
    ) {}
}
