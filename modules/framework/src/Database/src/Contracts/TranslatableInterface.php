<?php

namespace Pixielity\Database\Contracts;

use Illuminate\Database\Eloquent\Builder;

/**
 * Translatable Interface.
 *
 * Defines methods for models with translatable JSON columns.
 * All models that use the HasTranslations trait should implement this interface.
 *
 * ## Purpose:
 * - Provides type-safe methods for translation operations
 * - Defines query scopes for translatable columns
 * - Ensures consistent translation API across models
 * - Enables IDE autocomplete and type checking
 *
 * ## Usage:
 * ```php
 * use Pixielity\Database\Contracts\TranslatableInterface;
 * use Pixielity\Database\Traits\HasTranslations;
 *
 * class Facility extends Model implements TranslatableInterface
 * {
 *     use HasTranslations;
 *
 *     public array $translatable = ['name', 'address', 'description'];
 * }
 *
 * // Query scopes
 * Facility::orderByTranslatable('name')->get();
 * Facility::searchTranslatable('name', 'hospital')->get();
 *
 * // Helper methods
 * $facility->getTranslatable('name', 'ar');
 * $facility->setTranslatable('name', 'City Hospital', 'en');
 * ```
 *
 * ## Translatable Columns:
 * Translatable columns are stored as JSON in PostgreSQL with the following structure:
 * ```json
 * {
 *   "en": "City Hospital",
 *   "ar": "مستشفى المدينة",
 *   "fr": "Hôpital de la ville"
 * }
 * ```
 *
 * ## Supported Languages:
 * Languages are configured in config/localization.php and can be enabled/disabled
 * dynamically without code changes.
 *
 * @since 2.0.0
 */
interface TranslatableInterface
{
    /**
     * Scope to order by translatable column in user's language.
     *
     * Automatically uses the current application locale to sort results.
     * Respects user's language preference.
     *
     * ## PostgreSQL JSON Syntax:
     * Uses PostgreSQL's JSON arrow operator (->) to access nested values.
     *
     * @param Builder $builder   Query builder instance
     * @param string  $column    Column name (e.g., 'name', 'address', 'title')
     * @param string  $direction Sort direction ('asc' or 'desc')
     *
     * @example
     * ```php
     * // Sort by name in user's language
     * Facility::orderByTranslatable('name')->get();
     *
     * // Sort by address descending
     * Facility::orderByTranslatable('address', 'desc')->get();
     * ```
     */
    public function orderByTranslatable(
        Builder $builder,
        string $column,
        string $direction = 'asc'
    ): void;

    /**
     * Scope to search translatable column in all enabled languages.
     *
     * Searches in all enabled languages from config to ensure users can find
     * results regardless of which language they type in.
     *
     * ## Performance Note:
     * This creates an OR condition for each enabled locale. Consider adding
     * a full-text search index for better performance on large datasets.
     *
     * @param Builder $builder Query builder instance
     * @param string  $column  Column name (e.g., 'name', 'address', 'title')
     * @param string  $term    Search term
     *
     * @example
     * ```php
     * // Search name in all languages
     * Facility::searchTranslatable('name', 'hospital')->get();
     *
     * // Search address in all languages
     * Facility::searchTranslatable('address', 'street')->get();
     *
     * // Chain multiple searches
     * Facility::searchTranslatable('name', 'clinic')
     *     ->searchTranslatable('address', 'downtown')
     *     ->get();
     * ```
     */
    public function searchTranslatable(
        Builder $builder,
        string $column,
        string $term
    ): void;

    /**
     * Scope to filter by translatable column in user's language.
     *
     * Filters using the current application locale.
     * Use this for exact matches or specific comparisons.
     *
     * @param Builder $builder  Query builder instance
     * @param string  $column   Column name (e.g., 'name', 'address', 'title')
     * @param string  $operator Comparison operator (e.g., '=', 'ILIKE', '!=')
     * @param mixed   $value    Value to compare against
     *
     * @example
     * ```php
     * // Exact match in user's language
     * Facility::whereTranslatable('name', '=', 'City Hospital')->get();
     *
     * // Pattern match in user's language
     * Facility::whereTranslatable('name', 'ILIKE', '%clinic%')->get();
     * ```
     */
    public function whereTranslatable(
        Builder $builder,
        string $column,
        string $operator,
        $value
    ): void;

    /**
     * Scope to select translatable column in user's language.
     *
     * Adds a select for the translatable column in the current locale.
     * Useful for API responses or exports.
     *
     * @param Builder     $builder Query builder instance
     * @param string      $column  Column name (e.g., 'name', 'address', 'title')
     * @param string|null $alias   Optional alias for the selected column
     *
     * @example
     * ```php
     * // Select name in user's language
     * Facility::selectTranslatable('name')->get();
     *
     * // Select with alias
     * Facility::selectTranslatable('name', 'facility_name')->get();
     *
     * // Select multiple translatable columns
     * Facility::select(['id', 'status'])
     *     ->selectTranslatable('name')
     *     ->selectTranslatable('address')
     *     ->get();
     * ```
     */
    public function selectTranslatable(
        Builder $builder,
        string $column,
        ?string $alias = null
    ): void;

    /**
     * Scope to search multiple translatable columns.
     *
     * Searches across multiple columns in all enabled languages.
     * Useful for comprehensive search functionality.
     *
     * ## Performance Note:
     * This creates OR conditions for each column × locale combination.
     * For better performance, consider using PostgreSQL full-text search.
     *
     * @param Builder $builder Query builder instance
     * @param array   $columns Array of column names to search
     * @param string  $term    Search term
     *
     * @example
     * ```php
     * // Search in name and address
     * Facility::searchTranslatableColumns(['name', 'address'], 'hospital')->get();
     *
     * // Search in multiple columns
     * Facility::searchTranslatableColumns(['name', 'address', 'description'], 'clinic')->get();
     * ```
     */
    public function searchTranslatableColumns(
        Builder $builder,
        array $columns,
        string $term
    ): void;

    /**
     * Get translatable column value in specific language.
     *
     * Helper method to get a translatable column value in a specific language.
     * Falls back to the application's fallback locale if the requested language
     * is not available.
     *
     * ## Note:
     * This is a convenience wrapper. For Spatie's full functionality,
     * use `getTranslation()` method from Spatie\Translatable\HasTranslations.
     *
     * @param  string      $column Column name (e.g., 'name', 'address')
     * @param  string|null $locale Language code (e.g., 'en', 'ar'). Defaults to app locale.
     * @return string|null The translated value or null
     *
     * @example
     * ```php
     * $facility = Facility::find(1);
     *
     * // Get name in current locale
     * $name = $facility->getTranslatable('name');
     *
     * // Get name in specific language
     * $arabicName = $facility->getTranslatable('name', 'ar');
     * $englishName = $facility->getTranslatable('name', 'en');
     * ```
     */
    public function getTranslatable(string $column, ?string $locale = null): ?string;

    /**
     * Set translatable column value for specific language.
     *
     * Helper method to set a translatable column value in a specific language.
     *
     * ## Note:
     * This is a convenience wrapper. For Spatie's full functionality,
     * use `setTranslation()` method from Spatie\Translatable\HasTranslations.
     *
     * @param string      $column Column name (e.g., 'name', 'address')
     * @param string      $value  The value to set
     * @param string|null $locale Language code (e.g., 'en', 'ar'). Defaults to app locale.
     *
     * @example
     * ```php
     * $facility = new Facility();
     *
     * // Set name in English
     * $facility->setTranslatable('name', 'City Hospital', 'en');
     *
     * // Set name in Arabic
     * $facility->setTranslatable('name', 'مستشفى المدينة', 'ar');
     *
     * $facility->save();
     * ```
     */
    public function setTranslatable(string $column, string $value, ?string $locale = null): self;
}
