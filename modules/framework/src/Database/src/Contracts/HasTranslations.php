<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasTranslations Interface.
 *
 * Defines the contract for models that support multi-language translations.
 * Translations are typically stored as JSON in the database.
 *
 * This interface matches the public methods from the HasTranslations trait,
 * which extends Spatie's HasTranslations with additional query scopes and helpers.
 *
 * Note: Scope methods (orderByTranslatable, searchTranslatable, etc.) are not included
 * in the interface as they are query builder extensions, not model methods.
 *
 * @property-read array $translatable Array of translatable attributes
 *
 * @see \Pixielity\Database\Traits\HasTranslations
 */
interface HasTranslations
{
    /**
     * Initialize the HasTranslations trait.
     *
     * Only applies translations if enabled via property.
     */
    public function initializeHasTranslations(): void;

    /**
     * Check if model has translations enabled.
     *
     * @return bool True if translations are enabled, false otherwise.
     */
    public function isTranslatable(): bool;

    /**
     * Get translatable fields.
     *
     * @return array<int, string> Array of translatable field names.
     */
    public function getTranslatableFields(): array;

    /**
     * Get the translatable attributes.
     *
     * Overrides Spatie's method to use property-based configuration.
     *
     * @return array<int, string> Array of translatable attribute names.
     */
    public function getTranslatableAttributes(): array;

    /**
     * Get translatable column value in specific language.
     *
     * Helper method to get a translatable column value in a specific language.
     * Falls back to the application's fallback locale if the requested language
     * is not available.
     *
     * @param  string      $column Column name (e.g., 'name', 'address').
     * @param  string|null $locale Language code (e.g., 'en', 'ar'). Defaults to app locale.
     * @return string|null The translated value or null.
     */
    public function getTranslatable(string $column, ?string $locale = null): ?string;

    /**
     * Set translatable column value for specific language.
     *
     * Helper method to set a translatable column value in a specific language.
     *
     * @param  string      $column Column name (e.g., 'name', 'address').
     * @param  string      $value  The value to set.
     * @param  string|null $locale Language code (e.g., 'en', 'ar'). Defaults to app locale.
     * @return self        Returns this instance for method chaining.
     */
    public function setTranslatable(string $column, string $value, ?string $locale = null): self;
}
