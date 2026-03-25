<?php

declare(strict_types=1);

namespace Pixielity\Database\Traits;

use BackedEnum;
use DateTimeInterface;
use Laravel\Scout\EngineManager;
use Laravel\Scout\Engines\Engine;
use Laravel\Scout\Searchable;
use Pixielity\Support\Arr;
use Pixielity\Support\Reflection;
use Pixielity\Support\Str;

/**
 * Has Search Trait.
 *
 * Extends Laravel Scout's Searchable trait with automatic, property-based configuration.
 * Handles translations automatically based on config/localization.php.
 *
 * ## Features:
 * - All Laravel Scout functionality
 * - Property-based configuration (no method overrides needed)
 * - Automatic translation indexing for all enabled languages
 * - Dynamic searchable array generation
 * - Custom search index naming
 *
 * ## Usage:
 *
 * ### Basic Search (All Attributes):
 * ```php
 * use Pixielity\Database\Model;
 *
 * class Post extends Model
 * {
 *     protected $fillable = ['title', 'content', 'status'];
 * }
 *
 * // Search (indexes all attributes by default)
 * $posts = Post::search('laravel')->get();
 * ```
 *
 * ### Specific Searchable Attributes:
 * ```php
 * class Post extends Model
 * {
 *     // Only index these attributes
 *     protected array $searchableAttributes = ['title', 'content'];
 *
 *     protected $fillable = ['title', 'content', 'status', 'views'];
 * }
 * ```
 *
 * ### With Translations (Automatic Multi-Language Indexing):
 * ```php
 * use Pixielity\Database\Contracts\TranslatableInterface;
 * use Pixielity\Database\Model;
 * use Pixielity\Database\Traits\HasTranslations;
 *
 * class Post extends Model implements TranslatableInterface
 * {
 *     use HasTran
 *
 *     // Enable translations for these fields
 *     protected bool|array $translatle', 'content'];
 *
 *     protected $fillable = ['title', 'content', 'status'];
 * }
 *
 * // Automatically indexes: title_en, title_ar, content_en, content_ar
 * // Based on enabled languages in config/localization.php
 * $posts = Post::search('hello')->get();   // Searches English
 * $posts = Post::search('مرحبا')->get();    // Searches Arabic
 * ```
 *
 * ### Custom Search Engine:
 * ```php
 * use Pixielity\Database\Model;
 * use Pixielity\Database\Enums\SearchEngine;
 *
 * class Post extends Model
 * {
 *     protected SearchEngine $searchEngine = SearchEngine::MEILISEARCH();
 * }
 * ```
 *
 * ### Disable Search:
 * ```phpPost extends Model
 * {
 *     protected bool $searchable = false;
 * }
 * ```
 *
 * ## How It Works:
 *
 * 1. **toSearchableArray()** is called automatically by Scout
 * 2. Checks if model has translations enabled
 * 3. If translatable:
 *    - Gets all enabled languages from config/localization.php
 *    - Indexes each translatable field for each language (e.g., title_en, title_ar)
 * 4. If not translatable:
 *    - Indexes specified attributes or all attributes
 * 5. Converts datetime fields to timestamps for better search
 *
 * @see https://laravel.com/docs/scout Laravel Scout Documentation
 * @see Searchable Laravel Scout's Searchable trait
 *
 * @category   Database
 *
 * @since      1.0.0
 */
trait HasSearch
{
    use Searchable;

    /**
     * Boot the HasSearch trait.
     *
     * Only registers Scout if search is enabled via property.
     */
    public static function bootHasSearch(): void
    {
        // Check if model has search enabled via property
        // Use property_exists on class name to avoid instantiation during migration
        if (! Reflection::propertyExists(static::class, 'searchable')) {
            // Default is true, so boot if property doesn't exist
            parent::bootSearchable();

            return;
        }

        // Get default value from property without instantiation
        $defaults = Reflection::getDefaultProperties(static::class);

        if (! isset($defaults['searchable']) || $defaults['searchable'] === false) {
            return;
        }

        // Call parent boot logic from Searchable
        parent::bootSearchable();
    }

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
    public function toSearchableArray(): array
    {
        // Check if model has translations enabled
        $array = $this->isTranslatable() ? $this->buildTranslatableSearchArray() : $this->buildStandardSearchArray();
        // Convert datetime fields to timestamps for better search
        $array = $this->convertDatesToTimestamps($array);

        return $array;
    }

    /**
     * Get the index name for the model.
     *
     * Uses $searchableIndex property if defined, otherwise uses table name.
     *
     * @return string The search index name
     */
    public function searchableAs(): string
    {
        if (! empty($this->searchableIndex)) {
            return $this->searchableIndex;
        }

        return $this->getTable();
    }

    /**
     * Determine if the model should be searchable.
     *
     * Checks the $searchable property flag.
     * Override in model for custom logic.
     */
    public function shouldBeSearchable(): bool
    {
        return $this->searchable ?? true;
    }

    /**
     * Get the engine used to index the model.
     *
     * Uses the $searchEngine property.
     */
    public function searchableUsing(): Engine
    {
        if (isset($this->searchEngine)) {
            $engineName = $this->searchEngine instanceof BackedEnum
                ? $this->searchEngine->value
                : (string) $this->searchEngine;

            return resolve(EngineManager::class)->engine($engineName);
        }

        return resolve(EngineManager::class)->engine();
    }

    /**
     * Build search array for translatable models.
     *
     * Indexes each translatable field for each enabled language.
     * Example: title field becomes title_en, title_ar, etc.
     *
     * @return array<string, mixed>
     */
    protected function buildTranslatableSearchArray(): array
    {
        $array = ['id' => $this->id];
        $locales = $this->getEnabledLocales();
        $translatableFields = $this->getTranslatableFields();

        // Index translatable fields for each language
        foreach ($translatableFields as $translatableField) {
            foreach ($locales as $locale) {
                $key = Str::format('%s_%s', $translatableField, $locale);
                $array[$key] = $this->getTranslation($translatableField, $locale);
            }
        }

        // Add non-translatable searchable attributes
        $nonTranslatableAttributes = $this->getNonTranslatableSearchableAttributes();
        foreach ($nonTranslatableAttributes as $nonTranslatableAttribute) {
            if (isset($this->{$nonTranslatableAttribute})) {
                $array[$nonTranslatableAttribute] = $this->{$nonTranslatableAttribute};
            }
        }

        return $array;
    }

    /**
     * Build search array for non-translatable models.
     *
     * Uses $searchableAttributes if defined, otherwise all attributes.
     *
     * @return array<string, mixed>
     */
    protected function buildStandardSearchArray(): array
    {
        $array = $this->toArray();

        // If searchableAttributes is defined, only return those attributes
        if (! empty($this->searchableAttributes)) {
            return Arr::intersect_key($array, Arr::flip($this->searchableAttributes));
        }

        return $array;
    }

    /**
     * Get translatable fields from model.
     *
     * @return array<int, string>
     */
    protected function getTranslatableFields(): array
    {
        if (is_array($this->translatable)) {
            return $this->translatable;
        }

        return [];
    }

    /**
     * Get non-translatable searchable attributes.
     *
     * Returns attributes from $searchableAttributes that are not translatable.
     *
     * @return array<int, string>
     */
    protected function getNonTranslatableSearchableAttributes(): array
    {
        if (empty($this->searchableAttributes)) {
            return [];
        }

        $translatableFields = $this->getTranslatableFields();

        return Arr::diff($this->searchableAttributes, $translatableFields);
    }

    /**
     * Get all enabled locales from config.
     *
     * Returns array of enabled locale codes (e.g., ['en', 'ar']).
     *
     * @return array<int, string>
     */
    protected function getEnabledLocales(): array
    {
        return collect(config('localization.locales', []))
            ->filter(fn ($locale): mixed => $locale['enabled'] ?? false)
            ->keys()
            ->all();
    }

    /**
     * Convert datetime fields to timestamps.
     *
     * Makes datetime fields searchable as numbers.
     *
     * @param  array<string, mixed> $array
     * @return array<string, mixed>
     */
    protected function convertDatesToTimestamps(array $array): array
    {
        foreach ($array as $key => $value) {
            if (Reflection::implements($value, DateTimeInterface::class)) {
                $array[$key] = $value->getTimestamp();
            }
        }

        return $array;
    }

    /**
     * Check if model has translations enabled.
     */
    protected function isTranslatable(): bool
    {
        return is_array($this->translatable ?? null) || $this->translatable ?? false;
    }
}
