<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasHashable Interface.
 *
 * Defines the contract for models that support automatic hashing
 * of attributes (e.g., passwords).
 *
 *
 * @method self   addHashable($attributes = null)            Add attributes to hashable list
 * @method string makeHashValue(string $key, string $value)  Hash an attribute value
 * @method bool   checkHashValue(string $key, string $value) Verify a hashed attribute
 * @method array  getHashableAttributes()                    Get the list of hashable attributes
 * @method array  getOriginalHashValues()                    Get original values before hashing
 * @method mixed  getOriginalHashValue(string $attribute)    Get original value of specific attribute
 */
interface HasHashable
{
    /**
     * Add an attribute to the hashable attributes list.
     *
     * @param  array|string|null $attributes Attribute(s) to add to hashable list.
     * @return $this
     */
    public function addHashable($attributes = null);

    /**
     * Hash an attribute value and save it in the original locker.
     *
     * @param  string $key   Attribute name.
     * @param  string $value Value to hash.
     * @return string Hashed value.
     */
    public function makeHashValue($key, $value);

    /**
     * Check if the supplied plain value matches the stored hash value.
     *
     * @param  string $key   Attribute to check.
     * @param  string $value Value to check.
     * @return bool   True if value matches the hash, false otherwise.
     */
    public function checkHashValue($key, $value);

    /**
     * Get the list of hashable attributes.
     *
     * @return array Array of attribute names to hash.
     */
    public function getHashableAttributes();

    /**
     * Get the original values of any hashed attributes.
     *
     * @return array Original values before hashing.
     */
    public function getOriginalHashValues();

    /**
     * Get the original value of a specific hashed attribute.
     *
     * @param  string $attribute Attribute name.
     * @return mixed  Original value before hashing, or null if not found.
     */
    public function getOriginalHashValue($attribute);
}
