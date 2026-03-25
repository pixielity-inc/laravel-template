<?php

namespace Pixielity\Database\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Pixielity\Support\Facades\Json;

/**
 * Class JsonCast.
 *
 * This class is responsible for casting attributes to and from JSON.
 * It implements the CastsAttributes interface to define custom casting logic.
 *
 * Methods:
 * - `get`: Decodes a JSON string into an array.
 * - `set`: Encodes an array into a JSON string for storage.
 */
class JsonCast implements CastsAttributes
{
    /**
     * Cast the given value from storage to its appropriate type.
     *
     * @param  Model      $model      The model instance.
     * @param  string     $key        The attribute key.
     * @param  mixed      $value      The stored value.
     * @param  array      $attributes The model's attributes.
     * @return array|null The decoded JSON value as an array, or null if the value is empty.
     */
    public function get($model, $key, $value, $attributes)
    {
        return $value ? Json::decode($value) : null;
    }

    /**
     * Prepare the given value for storage as a JSON string.
     *
     * @param  Model  $model      The model instance.
     * @param  string $key        The attribute key.
     * @param  mixed  $value      The value to be stored.
     * @param  array  $attributes The model's attributes.
     * @return string The encoded JSON string.
     */
    public function set($model, $key, $value, $attributes)
    {
        return Json::encode($value);
    }
}
