<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasEncryptable Interface.
 *
 * Defines the contract for models that support automatic encryption/decryption
 * of sensitive attributes (e.g., SSN, credit card numbers).
 *
 *
 * @method array  getEncryptableAttributes()                       Get the list of encryptable attributes
 * @method string makeEncryptableValue(string $key, string $value) Encrypt an attribute value
 * @method string getEncryptableValue(string $key)                 Decrypt an attribute value
 * @method array  getOriginalEncryptableValues()                   Get original values before encryption
 * @method mixed  getOriginalEncryptableValue(string $attribute)   Get original value of specific attribute
 */
interface HasEncryptable
{
    /**
     * Encrypt an attribute value and save it in the original locker.
     *
     * @param  string $key   Attribute name.
     * @param  string $value Value to encrypt.
     * @return string Encrypted value.
     */
    public function makeEncryptableValue($key, $value);

    /**
     * Decrypt an attribute value.
     *
     * @param  string $key Attribute name.
     * @return string Decrypted value.
     */
    public function getEncryptableValue($key);

    /**
     * Get the list of encryptable attributes.
     *
     * @return array Array of attribute names to encrypt.
     */
    public function getEncryptableAttributes();

    /**
     * Get the original values of any encrypted attributes.
     *
     * @return array Original values before encryption.
     */
    public function getOriginalEncryptableValues();

    /**
     * Get the original value of a specific encrypted attribute.
     *
     * @param  string $attribute Attribute name.
     * @return mixed  Original value before encryption, or null if not found.
     */
    public function getOriginalEncryptableValue($attribute);
}
