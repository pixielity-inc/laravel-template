<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasSortable Interface.
 *
 * Defines the contract for models that support drag-and-drop ordering.
 * Provides methods for managing model position/order in a list.
 *
 * This interface matches the public methods from the HasSortable trait.
 */
interface HasSortable
{
    /**
     * Check if model has sorting enabled.
     *
     * @return bool True if sortable, false otherwise.
     */
    public function isSortable(): bool;

    /**
     * Get sortable configuration.
     *
     * Returns the sortable configuration array.
     * If $sortable is true, returns default config.
     * If $sortable is array, returns that array.
     *
     * @return array<string, mixed> The sortable configuration
     */
    public function getSortableConfig(): array;

    /**
     * Determine the order column name.
     *
     * Overrides Spatie's method to use property-based configuration.
     *
     * @return string The order column name
     */
    public function determineOrderColumnName(): string;

    /**
     * Determine if the order column should be set when creating.
     *
     * Overrides Spatie's method to use property-based configuration.
     *
     * @return bool True if should sort when creating, false otherwise.
     */
    public function shouldSortWhenCreating(): bool;
}
