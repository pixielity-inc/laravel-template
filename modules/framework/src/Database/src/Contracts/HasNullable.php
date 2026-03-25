<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasNullable Interface.
 *
 * Defines the contract for models that support automatic conversion
 * of empty strings to NULL values.
 *
 *
 * @method static void  bootHasNullable()       Boot the HasNullable trait
 * @method        bool  isNullable()            Check if model has nullable enabled
 * @method        array getNullableAttributes() Get the list of nullable attributes
 */
interface HasNullable
{
    /**
     * Boot the HasNullable trait.
     */
    public static function bootHasNullable(): void;

    /**
     * Check if model has nullable enabled.
     *
     * @return bool True if nullable is enabled, false otherwise.
     */
    public function isNullable(): bool;

    /**
     * Get the list of nullable attributes.
     *
     * @return array<int, string> Array of attribute names to nullify.
     */
    public function getNullableAttributes(): array;
}
