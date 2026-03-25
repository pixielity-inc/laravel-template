<?php

declare(strict_types=1);

namespace Pixielity\Database\Concerns;

use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Pixielity\Database\Enums\SearchEngine;
use Pixielity\Database\Traits\HasBaseIdentifier;
use Pixielity\Database\Traits\HasFilterable;
use Pixielity\Database\Traits\HasMagicMethods;
use Pixielity\Database\Traits\HasSearch;
use Pixielity\Database\Traits\HasSortable;
use Pixielity\Database\Traits\HasTranslations;
use Pixielity\Foundation\Enums\ContainerToken;
use Pixielity\Support\Arr;
use Pixielity\Support\Reflection;

/**
 * Has Model Features Trait.
 *
 * Provides all base Model functionality as a trait for models that cannot
 * extend the base Model class (e.g., when extending third-party packages).
 *
 * ## Use Cases:
 * - Extending Spatie Permission models (Role, Permission)
 * - Extending other third-party package models
 * - Any model that needs base features but has different inheritance
 *
 * ## Features Included:
 * - Search (Scout)
 * - Filtering (Purity)
 * - Sorting (Purity)
 * - Translations
 * - Magic Methods
 * - Base Identifier
 *
 * ## Usage:
 * ```php
 * use Spatie\Permission\Models\Role as SpatieRole;
 * use Pixielity\Database\Concerns\HasModelExtender;
 *
 * class Role extends SpatieRole
 * {
 *     use HasModelExtender;
 *
 *     // Enable features as needed
 *     protected bool|array $translatable = ['description'];
 * }
 * ```
 *
 * ## Important Notes:
 * - All feature flags work the same as base Model class
 * - Zero overhead when features are disabled
 *
 * @property bool|array          $translatable         Enable/disable translations for this model
 * @property bool                $searchable           Enable/disable search indexing for this model
 * @property SearchEngine|string $searchEngine         Search engine to use for this model
 * @property array               $searchableAttributes Attributes to index for search
 * @property string|null         $searchableIndex      Custom search index name
 * @property bool                $baseIdentifiable     Enable/disable base identifier generation (random public IDs)
 * @property array|null          $filters              Available filter operators
 * @property array|null          $filterFields         Fields available for filtering
 * @property array|null          $restrictedFilters    Restrict specific filters to specific fields
 * @property array|null          $renamedFilterFields  Rename filter fields for API
 * @property array|null          $sortFields           Fields available for sorting
 *
 * @method static void    bootModelFeatures()                                                                           Boot the model features
 * @method        array   getTranslatableFields()                                                                       Get the translatable fields
 * @method        array   getEnabledLocales()                                                                           Get the enabled locales
 * @method        bool    isTranslatable()                                                                              Determine if the model is translatable
 * @method        static  reload(array|string|null $relations = null)                                                   Reload the model from the database
 * @method        static  reloadRelations(array|string $relations)                                                      Reload specific relations on the model
 * @method        static  addFillable(array|string $attributes)                                                         Add fillable attributes to the model
 * @method        static  addDateAttribute(array|string $attributes)                                                    Add dates to be mutated to Carbon instances
 * @method        static  addCasts(array $casts)                                                                        Add casts to the model
 * @method        bool    isModified(array|string|null $attributes = null)                                              Check if the model or any given attribute(s) have been modified
 * @method        static  duplicateWithRelations(array|null $relations = null)                                          Duplicate the model with its relations
 * @method        bool    saveQuietly(array $options = [])                                                              Save the model without firing any events
 * @method        array   transform()                                                                                   Transform the model to array for repository pattern
 * @method static Builder filter((array|null) $params = null)                                                           Apply Purity filters from request query parameters
 * @method static Builder sort((array|null) $params = null)                                                             Apply Purity sorting from request query parameters
 * @method static Builder filterBy((array|string) $filters)                                                             Restrict filters to specific operators
 * @method static Builder filterFields((array|string) $fields)                                                          Restrict filterable fields
 * @method static Builder restrictedFilters((array|string) $restrictedFilters)                                          Set field-specific filter restrictions
 * @method static Builder renamedFilterFields(array $renamedFilterFields)                                               Rename filter fields for API
 * @method static Builder sortFields((array|string) $fields)                                                            Restrict sortable fields
 *
 * @see \Pixielity\Database\Model
 * @see HasSearch
 * @see HasFilterable
 * @see HasSortable
 * @see HasTranslations
 *
 * @since 1.0.0
 */
trait HasModelExtender
{
    use HasBaseIdentifier;
    use HasFilterable;
    use HasMagicMethods;
    use HasSearch, HasTranslations {
        HasTranslations::getEnabledLocales insteadof HasSearch;
        HasTranslations::getTranslatableFields insteadof HasSearch;
        HasTranslations::isTranslatable insteadof HasSearch;
    }
    use HasSortable;
    use ModelHelper;

    /**
     * Bootstrap the model and its traits.
     */
    protected static function boot(): void
    {
        parent::boot();

        // Enable strict mode in non-production environments
        try {
            if (! resolve(ContainerToken::APP())->isProduction()) {
                static::preventLazyLoading();
                static::preventSilentlyDiscardingAttributes();
            }
        } catch (Exception) {
            // If we can't determine environment, assume non-production and enable strict mode
            static::preventLazyLoading();
            static::preventSilentlyDiscardingAttributes();
        }
    }

    /**
     * Reload the model from the database.
     *
     * This method refreshes the model instance with the latest data from the database,
     * including all loaded relationships.
     *
     * @param  array<string>|string|null  $relations  Specific relations to reload, or null for all
     * @return $this
     *
     * @example
     * ```php
     * $user->reload(); // Reload model and all loaded relations
     * $user->reload('posts'); // Reload model and posts relation
     * $user->reload(['posts', 'comments']); // Reload model and specific relations
     * ```
     */
    public function reload(array|string|null $relations = null): static
    {
        if ($this->exists) {
            $this->refresh();

            if ($relations !== null) {
                $this->load(is_array($relations) ? $relations : func_get_args());
            } else {
                // Reload all currently loaded relations
                $loadedRelations = Arr::keys($this->getRelations());
                if ($loadedRelations !== []) {
                    $this->load($loadedRelations);
                }
            }
        }

        return $this;
    }

    /**
     * Reload specific relations on the model.
     *
     * @param  array<string>|string  $relations  Relations to reload
     * @return $this
     *
     * @example
     * ```php
     * $user->reloadRelations('posts');
     * $user->reloadRelations(['posts', 'comments']);
     * ```
     */
    public function reloadRelations(array|string $relations): static
    {
        $relations = is_array($relations) ? $relations : func_get_args();

        foreach ($relations as $relation) {
            $this->unsetRelation($relation);
        }

        $this->load($relations);

        return $this;
    }

    /**
     * Add fillable attributes to the model.
     *
     * @param  array<string>|string  $attributes  Attributes to add
     * @return $this
     *
     * @example
     * ```php
     * $model->addFillable('custom_field');
     * $model->addFillable(['field1', 'field2']);
     * ```
     */
    public function addFillable(array|string $attributes): static
    {
        $attributes = is_array($attributes) ? $attributes : func_get_args();

        $this->fillable = Arr::unique([...$this->fillable, ...$attributes]);

        return $this;
    }

    /**
     * Add dates to be mutated to Carbon instances.
     *
     * @param  array<string>|string  $attributes  Attributes to add
     * @return $this
     *
     * @example
     * ```php
     * $model->addDateAttribute('published_at');
     * $model->addDateAttribute(['published_at', 'archived_at']);
     * ```
     */
    public function addDateAttribute(array|string $attributes): static
    {
        $attributes = is_array($attributes) ? $attributes : func_get_args();

        $this->mergeCasts(Arr::fill_keys($attributes, 'datetime'));

        return $this;
    }

    /**
     * Add casts to the model.
     *
     * @param  array<string, string>  $casts  Casts to add
     * @return $this
     *
     * @example
     * ```php
     * $model->addCasts(['is_active' => 'boolean', 'data' => 'array']);
     * ```
     */
    public function addCasts(array $casts): static
    {
        $this->mergeCasts($casts);

        return $this;
    }

    /**
     * Check if the model or any given attribute(s) have been modified.
     *
     * @param  array<string>|string|null  $attributes  Attributes to check
     *
     * @example
     * ```php
     * if ($user->isModified()) { } // Check if any attribute changed
     * if ($user->isModified('email')) { } // Check specific attribute
     * if ($user->isModified(['email', 'name'])) { } // Check multiple
     * ```
     */
    public function isModified(array|string|null $attributes = null): bool
    {
        if ($attributes === null) {
            return $this->isDirty();
        }

        $attributes = is_array($attributes) ? $attributes : func_get_args();

        return $this->isDirty($attributes);
    }

    /**
     * Duplicate the model with its relations.
     *
     * @param  array<string>|null  $relations  Relations to duplicate, or null for none
     *
     * @example
     * ```php
     * $newPost = $post->duplicateWithRelations(['comments', 'tags']);
     * ```
     */
    public function duplicateWithRelations(?array $relations = null): static
    {
        $replica = $this->replicate();

        if ($relations !== null && $relations !== []) {
            foreach ($relations as $relation) {
                if ($this->relationLoaded($relation)) {
                    $relatedModels = $this->getRelation($relation);

                    if (Reflection::implements($relatedModels, Collection::class)) {
                        $duplicatedRelations = $relatedModels->map(fn ($model) => $model->replicate());
                        $replica->setRelation($relation, $duplicatedRelations);
                    } elseif (Reflection::implements($relatedModels, Model::class)) {
                        $replica->setRelation($relation, $relatedModels->replicate());
                    }
                }
            }
        }

        return $replica;
    }

    /**
     * Save the model without firing any events.
     *
     * @param  array<string, mixed>  $options  Save options
     *
     * @example
     * ```php
     * $user->saveQuietly(); // No events fired
     * ```
     */
    public function saveQuietly(array $options = []): bool
    {
        return static::withoutEvents(fn () => $this->save($options));
    }

    /**
     * Transform the model to array for repository pattern.
     *
     * @return array<string, mixed>
     */
    public function transform(): array
    {
        return $this->toArray();
    }
}
