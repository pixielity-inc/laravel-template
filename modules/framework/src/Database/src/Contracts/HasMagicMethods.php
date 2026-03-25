<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasMagicMethods Interface.
 *
 * Defines the contract for models that support Magento-style magic methods.
 * Provides getX(), setX(), hasX(), and unsX() methods for all attributes.
 *
 *
 * @method mixed  __call(string $method, array $args)                     Handle dynamic method calls
 * @method mixed  getData(string|null $key = null, mixed $default = null) Get attribute data
 * @method static setData(string|array $key, mixed $value = null)         Set attribute data
 * @method bool   hasData(string $key)                                    Check if attribute has data
 * @method static unsetData(string|array|null $key = null)                Unset attribute data
 * @method static addData(array $data)                                    Add data to the model
 * @method mixed  getOriginalData(string|null $key = null)                Get original data
 * @method bool   dataHasChanged(string|array|null $keys = null)          Check if data has changed
 * @method array  getChangedData()                                        Get only changed data
 */
interface HasMagicMethods
{
    /**
     * Handle dynamic method calls for magic getters/setters.
     *
     * Supports:
     * - getAttributeName() - Get attribute value
     * - setAttributeName($value) - Set attribute value
     * - hasAttributeName() - Check if attribute exists
     * - unsAttributeName() - Unset attribute
     *
     * IMPORTANT: Do not add type hints to parameters!
     * This method must match Laravel's Eloquent Model::__call($method, $parameters) signature.
     *
     * @param  string $method     The method name.
     * @param  mixed  $parameters The method arguments (no type hint - must match parent).
     * @return mixed  The method result.
     *
     * @noRector \Rector\TypeDeclaration\Rector\ClassMethod\ParamTypeByMethodCallTypeRector
     *
     * @phpstan-ignore-next-line
     *
     * @psalm-suppress MethodSignatureMismatch
     */
    public function __call($method, $parameters);

    /**
     * Get data from the model.
     *
     * Magento-style data getter with optional key and default value.
     *
     * @param  string|null $key     The attribute key, or null for all data.
     * @param  mixed       $default The default value if key doesn't exist.
     * @return mixed       The attribute value or all data.
     */
    public function getData(?string $key = null, mixed $default = null): mixed;

    /**
     * Set data on the model.
     *
     * Magento-style data setter supporting both single and bulk assignment.
     *
     * @param  string|array $key   The attribute key or array of key-value pairs.
     * @param  mixed        $value The value to set (ignored if $key is array).
     * @return static       Returns this instance for method chaining.
     */
    public function setData(string|array $key, mixed $value = null): static;

    /**
     * Check if model has data for a key.
     *
     * @param  string $key The attribute key to check.
     * @return bool   True if attribute exists and is not null, false otherwise.
     */
    public function hasData(string $key): bool;

    /**
     * Unset data from the model.
     *
     * @param  string|array|null $key Attribute key(s) to unset (null = unset all).
     * @return static            Returns this instance for method chaining.
     */
    public function unsetData(string|array|null $key = null): static;

    /**
     * Add data to the model (merge with existing).
     *
     * Similar to setData but merges instead of replacing.
     *
     * @param  array  $data Data to merge.
     * @return static Returns this instance for method chaining.
     */
    public function addData(array $data): static;

    /**
     * Get original data (before changes).
     *
     * @param  string|null $key Attribute key (null = get all original).
     * @return mixed       The original value or all original data.
     */
    public function getOriginalData(?string $key = null): mixed;

    /**
     * Check if data has changed.
     *
     * @param  string|array|null $keys Attribute key(s) to check (null = check any).
     * @return bool              True if changed, false otherwise.
     */
    public function dataHasChanged(string|array|null $keys = null): bool;

    /**
     * Get only changed data.
     *
     * @return array Array of changed attributes and their new values.
     */
    public function getChangedData(): array;
}
