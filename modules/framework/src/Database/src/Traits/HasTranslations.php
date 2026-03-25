<?php

namespace Pixielity\Database\Traits;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

use function is_array;

use Pixielity\Foundation\Enums\ContainerToken;
use Pixielity\Support\Str;

/**
 * Has Translations Trait.
 *
 * Extends Spatie's HasTranslations with additional query scopes and helpers
 * for working with JSON translatable columns in PostgreSQL.
 *
 * ## Property-Based Configuration:
 * ```php
 * protected bool|array $translatable = ['name', 'description'];  // Enable & define fields
 * // Or just enable: protected bool $translatable = true;
 * ```
 *
 * ## Features:
 * - All Spatie HasTranslations functionality
 * - PostgreSQL JSON query scopes for sorting and filtering
 * - Multi-language search across all enabled locales
 * - Helper methods for getting/setting translations
 * - Uses Laravel 12 #[Scope] attribute pattern
 *
 * ## Usage:
 *
 * ```php
 * use Pixielity\Database\Contracts\TranslatableInterface;
 * use Pixielity\Database\Traits\HasTranslations;
 *
 * class Facility extends Model implements TranslatableInterface
 * {
 *     use HasTranslations;
 *
 *     protected bool|array $translatable = ['name', 'address', 'description'];
 * }
 *
 * // Sort by user's language
 * Facility::orderByTranslatable('name')->get();
 *
 * // Search in all enabled languages
 * Facility::searchTranslatable('name', 'hospital')->get();
 *
 * // Get translation (from Spatie)
 * $facility->getTranslation('name', 'ar');
 * ```
 *
 * ## Supported Languages:
 * Dynamically reads from config/localization.php
 * All enabled locales are automatically supported for search and display.
 *
 * @see \Pixielity\Database\Contracts\TranslatableInterface
 * @see BaseHasTranslations
 *
 * @version 2.0.0
 *
 * @since 2024-12-31
 */
trait HasTranslations
{
    use \Spatie\Translatable\HasTranslations;

    /**
     * Initialize the HasTranslations trait.
     *
     * Only applies translations if enabled via property.
     */
    public function initializeHasTranslations(): void
    {
        // Check if model has translations enabled via property
        if (! $this->isTranslatable()) {
            return;
        }

        // Call parent initialization logic
        parent::initializeHasTranslations();
    }

    /**
     * Check if model has translations enabled.
     */
    public function isTranslatable(): bool
    {
        return is_array($this->translatable ?? null) || $this->translatable ?? false;
    }

    /**
     * Get translatable fields.
     *
     * @return array<int, string>
     */
    public function getTranslatableFields(): array
    {
        if (is_array($this->translatable ?? null)) {
            return $this->translatable;
        }

        return [];
    }

    /**
     * Get the translatable attributes.
     *
     * Overrides Spatie's method to use our property-based configuration.
     *
     * @return array<int, string>
     */
    public function getTranslatableAttributes(): array
    {
        return $this->getTranslatableFields();
    }

    /**
     * Get translatable column value in specific language.
     *
     * Helper method to get a translatable column value in a specific language.
     * Falls back to the application's fallback locale if the requested language
     * is not available.
     *
     * ## Note:
     * This is a convenience wrapper. For Spatie's full functionality,
     * use `getTranslation()` method from BaseHasTranslations.
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
    public function getTranslatable(string $column, ?string $locale = null): ?string
    {
        $locale ??= resolve(ContainerToken::APP())->getLocale();
        $fallback = config('app.fallback_locale', 'en');

        $value = $this->{$column};

        if (is_array($value)) {
            return $value[$locale] ?? $value[$fallback] ?? null;
        }

        return $value;
    }

    /**
     * Set translatable column value for specific language.
     *
     * Helper method to set a translatable column value in a specific language.
     *
     * ## Note:
     * This is a convenience wrapper. For Spatie's full functionality,
     * use `setTranslation()` method from BaseHasTranslations.
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
    public function setTranslatable(string $column, string $value, ?string $locale = null): self
    {
        $locale ??= resolve(ContainerToken::APP())->getLocale();

        $current = $this->{$column} ?? [];

        if (! is_array($current)) {
            $current = [];
        }

        $current[$locale] = $value;
        $this->{$column} = $current;

        return $this;
    }

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
    #[Scope]
    protected function orderByTranslatable(
        Builder $builder,
        string $column,
        string $direction = 'asc'
    ): void {
        $locale = resolve(ContainerToken::APP())->getLocale();

        $builder->orderBy(Str::format('%s->%s', $column, $locale), $direction);
    }

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
    #[Scope]
    protected function searchTranslatable(
        Builder $builder,
        string $column,
        string $term
    ): void {
        // Get all enabled locales from config
        $locales = $this->getEnabledLocales();

        $builder->where(function (\Illuminate\Contracts\Database\Query\Builder $builder) use ($column, $term, $locales): void {
            foreach ($locales as $index => $locale) {
                if ($index === 0) {
                    $builder->where(Str::format('%s->%s', $column, $locale), 'ILIKE', Str::format('%%%s%%', $term));
                } else {
                    $builder->orWhere(Str::format('%s->%s', $column, $locale), 'ILIKE', Str::format('%%%s%%', $term));
                }
            }
        });
    }

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
    #[Scope]
    protected function whereTranslatable(
        Builder $builder,
        string $column,
        string $operator,
        $value
    ): void {
        $locale = resolve(ContainerToken::APP())->getLocale();

        $builder->where(Str::format('%s->%s', $column, $locale), $operator, $value);
    }

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
    #[Scope]
    protected function selectTranslatable(
        Builder $builder,
        string $column,
        ?string $alias = null
    ): void {
        $locale = resolve(ContainerToken::APP())->getLocale();
        $alias ??= $column;

        $builder->addSelect([
            $alias => Str::format('%s->%s', $column, $locale),
        ]);
    }

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
    #[Scope]
    protected function searchTranslatableColumns(
        Builder $builder,
        array $columns,
        string $term
    ): void {
        // Get all enabled locales from config
        $locales = $this->getEnabledLocales();

        $builder->where(function (\Illuminate\Contracts\Database\Query\Builder $builder) use ($columns, $term, $locales): void {
            foreach ($columns as $column) {
                foreach ($locales as $locale) {
                    $builder->orWhere(Str::format('%s->%s', $column, $locale), 'ILIKE', Str::format('%%%s%%', $term));
                }
            }
        });
    }

    /**
     * Get all enabled locales from config.
     *
     * Returns array of enabled locale codes (e.g., ['en', 'ar', 'fr']).
     *
     * ## Configuration:
     * Reads from config/localization.php:
     * ```php
     * 'locales' => [
     *     'en' => ['enabled' => true, 'name' => 'English'],
     *     'ar' => ['enabled' => true, 'name' => 'Arabic'],
     *     'fr' => ['enabled' => false, 'name' => 'French'],
     * ]
     * ```
     *
     * @return array Array of enabled locale codes
     */
    protected function getEnabledLocales(): array
    {
        return collect(config('localization.locales', []))
            ->filter(fn ($locale): mixed => $locale['enabled'] ?? false)
            ->keys()
            ->all();
    }
}
