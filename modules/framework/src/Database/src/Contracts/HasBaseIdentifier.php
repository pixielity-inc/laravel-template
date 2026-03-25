<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * HasBaseIdentifier Interface.
 *
 * Defines the contract for models that support random public-facing identifiers.
 * Base identifiers provide secure, non-sequential IDs for public use.
 *
 *
 * @property string|null $baseid The base identifier value
 *
 * @method static static|null findByBaseId(string $identifier)                   Find model by base identifier
 * @method static static      findByBaseIdOrFail(string $identifier)             Find model by base identifier or fail
 * @method        bool        isBaseIdentifiable()                               Check if model has base identifier enabled
 * @method        string      getBaseIdColumn()                                  Get the base identifier column name
 * @method        mixed       scopeWhereBaseId(mixed $query, string $identifier) Scope to find by base identifier
 * @method        string      getRouteKeyName()                                  Get the route key for the model
 */
interface HasBaseIdentifier
{
    /**
     * Default base identifier column name.
     */
    public const BASEID = 'baseid';

    /**
     * Find a model by its base identifier.
     *
     * @param  string      $identifier Base identifier
     * @return static|null The model instance, or null if not found.
     */
    public static function findByBaseId(string $identifier);

    /**
     * Find a model by its base identifier or fail.
     *
     * @param  string $identifier Base identifier
     * @return static The model instance.
     *
     * @throws ModelNotFoundException
     */
    public static function findByBaseIdOrFail(string $identifier);

    /**
     * Check if model has base identifier enabled.
     *
     * @return bool True if base identifiable, false otherwise.
     */
    public function isBaseIdentifiable(): bool;

    /**
     * Get the base identifier column name.
     *
     * @return string The column name.
     */
    public function getBaseIdColumn(): string;

    /**
     * Scope to find by base identifier.
     *
     * @param  Builder $query      Query builder instance.
     * @param  string  $identifier Base identifier to search for.
     * @return Builder Modified query builder.
     */
    public function scopeWhereBaseId($query, string $identifier);

    /**
     * Get the route key for the model.
     *
     * Override to use base identifier in route model binding.
     *
     * @return string The route key name.
     */
    public function getRouteKeyName();
}
