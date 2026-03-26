<?php

namespace Illuminate\Support\Facades;

/**
 * @method static bool supported(string $key, string $cipher)
 * @method static generateKey(string $cipher)
 * @method static encrypt(mixed $value, bool $serialize = true)
 * @method static encryptString(string $value)
 * @method static mixed decrypt(string $payload, bool $unserialize = true)
 * @method static decryptString(string $payload)
 * @method static bool appearsEncrypted(mixed $value)
 * @method static getKey()
 * @method static array getAllKeys()
 * @method static array getPreviousKeys()
 * @method static \Illuminate\Encryption\Encrypter previousKeys(array $keys)
 *
 * @see \Illuminate\Encryption\Encrypter
 */
class Crypt extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'encrypter';
    }
}
