<?php

declare(strict_types=1);

namespace Pixielity\Database\Traits;

use Abbasudo\Purity\Traits\Filterable as PurityFilterable;
use Pixielity\Database\Attributes\Filterable;
use Pixielity\Support\Reflection;

/**
 * Has Filterable Trait.
 *
 * Extends Purity's Filterable trait with automatic, attribute-based configuration.
 * Provides advanced query filtering via URL parameters with support for multiple
 * filter operators and field restrictions.
 *
 * ## Features:
 * - All Purity Filterable functionality
 * - Attribute-based configuration (modern)
 * - Property-based configuration (legacy)
 * - Field-level filter restrictions
 * - Field renaming for API
 * - Custom filter operators
 *
 * ## Usage:
 *
 * ### Basic Filtering (All fields, all filters):
 * ```php
 * use Pixielity\Database\Model;
 * use Pixielity\Database\Traits\HasFilterable;
 *
 * class Post extends Model
 * {
 *     use HasFilterable;
 * }
 *
 * // API: GET /api/posts?filter[title][$contains]=laravel
 * $posts = Post::filter()->get();
 * ```
 *
 * ### With Attribute Configuration:
 * ```php
 * use Pixielity\Database\Attributes\Filterable;
 *
 * #[Filterable(
 *     fields: ['title', 'status', 'created_at'],
 *     filters: ['$eq', '$contains', '$gt', '$lt']
 * )]
 * class Post extends Model
 * {
 *     use HasFilterable;
 * }
 * ```
 *
 * ### With Property Configuration:
 * ```php
 * class Post extends Model
 * {
 *     use HasFilterable;
 *
 *     protected ?array $filters = ['$eq', '$contains', '$gt'];
 *     protected ?array $filterFields = ['title', 'status', 'created_at'];
 *     protected ?array $restrictedFilters = [
 *         'title' => ['$eq', '$contains'],
 *         'status' => ['$eq', '$in'],
 *     ];
 *     protected ?array $renamedFilterFields = [
 *         'created_at' => 'date',
 *     ];
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
 * - `$contains` - Contains string (LIKE %value%)
 * - `$startsWith` - Starts with string (LIKE value%)
 * - `$endsWith` - Ends with string (LIKE %value)
 * - `$between` - Between two values
 * - `$null` - Is null
 * - `$notNull` - Is not null
 *
 * ## API Examples:
 *
 * ### Basic Filtering:
 * ```
 * GET /api/posts?filter[status][$eq]=published
 * GET /api/posts?filter[title][$contains]=laravel
 * GET /api/posts?filter[views][$gt]=1000
 * ```
 *
 * ### Multiple Filters:
 * ```
 * GET /api/posts?filter[status][$eq]=published&filter[views][$gt]=1000
 * ```
 *
 * ### Array Filters:
 * ```
 * GET /api/posts?filter[status][$in][]=published&filter[status][$in][]=draft
 * ```
 *
 * ### Date Filtering:
 * ```
 * GET /api/posts?filter[created_at][$gt]=2024-01-01
 * GET /api/posts?filter[created_at][$between][]=2024-01-01&filter[created_at][$between][]=2024-12-31
 * ```
 *
 * ### With Renamed Fields:
 * ```
 * GET /api/posts?filter[date][$gt]=2024-01-01  // Instead of created_at
 * ```
 *
 * ## Priority:
 * If both attribute and property are defined:
 * 1. Attribute settings take precedence
 * 2. Falls back to property if attribute has no configuration
 * 3. Falls back to config('purity.filters') if neither defined
 *
 * @see PurityFilterable
 * @see Filterable
 * @since 1.0.0
 */
trait HasFilterable
{
    use PurityFilterable;

    /**
     * Get the list of available filters.
     *
     * Priority:
     * 1. Filters from #[Filterable] attribute
     * 2. $filters property
     * 3. config('purity.filters')
     *
     * @return array<int, string>|null
     */
    public function getFilters(): ?array
    {
        // Check for #[Filterable] attribute first
        if (Reflection::hasAttribute(static::class, Filterable::class)) {
            $attributes = Reflection::getAttributes(static::class, Filterable::class);

            if ($attributes !== []) {
                /** @var Filterable $filterable */
                $filterable = $attributes[0]->newInstance();

                // If attribute has filters, use them
                if ($filterable->filters !== null) {
                    return $filterable->filters;
                }
            }
        }

        // Fall back to property
        if ($this->filters !== null) {
            return $this->filters;
        }

        // Fall back to config
        return config('purity.filters');
    }

    /**
     * Get the list of filterable fields.
     *
     * Priority:
     * 1. Fields from #[Filterable] attribute
     * 2. $filterFields property
     * 3. null (all fields available)
     *
     * @return array<int|string, string>|null
     */
    public function getFilterFields(): ?array
    {
        // Check for #[Filterable] attribute first
        if (Reflection::hasAttribute(static::class, Filterable::class)) {
            $attributes = Reflection::getAttributes(static::class, Filterable::class);

            if ($attributes !== []) {
                /** @var Filterable $filterable */
                $filterable = $attributes[0]->newInstance();

                // If attribute has fields, use them
                if ($filterable->fields !== null) {
                    return $filterable->fields;
                }
            }
        }

        // Fall back to property
        return $this->filterFields ?? null;
    }

    /**
     * Get restricted filters per field.
     *
     * Priority:
     * 1. Restricted from #[Filterable] attribute
     * 2. $restrictedFilters property
     * 3. null (no restrictions)
     *
     * @return array<string, array<int, string>|string>|null
     */
    public function getRestrictedFilters(): ?array
    {
        // Check for #[Filterable] attribute first
        if (Reflection::hasAttribute(static::class, Filterable::class)) {
            $attributes = Reflection::getAttributes(static::class, Filterable::class);

            if ($attributes !== []) {
                /** @var Filterable $filterable */
                $filterable = $attributes[0]->newInstance();

                // If attribute has restricted filters, use them
                if ($filterable->restricted !== null) {
                    return $filterable->restricted;
                }
            }
        }

        // Fall back to property
        return $this->restrictedFilters ?? null;
    }

    /**
     * Get renamed filter fields.
     *
     * Priority:
     * 1. Renamed from #[Filterable] attribute
     * 2. $renamedFilterFields property
     * 3. null (no renaming)
     *
     * @return array<string, string>|null
     */
    public function getRenamedFilterFields(): ?array
    {
        // Check for #[Filterable] attribute first
        if (Reflection::hasAttribute(static::class, Filterable::class)) {
            $attributes = Reflection::getAttributes(static::class, Filterable::class);

            if ($attributes !== []) {
                /** @var Filterable $filterable */
                $filterable = $attributes[0]->newInstance();

                // If attribute has renamed fields, use them
                if ($filterable->renamed !== null) {
                    return $filterable->renamed;
                }
            }
        }

        // Fall back to property
        return $this->renamedFilterFields ?? null;
    }
}
