<?php

declare(strict_types=1);

namespace Pixielity\Database;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Override;
use Pixielity\Support\Arr;
use Pixielity\Support\Str;
use Pixielity\Support\Traits\DataObject;
use Throwable;

/**
 * DataObject Model.
 *
 * Base Eloquent model that uses the DataObject trait for enhanced
 * attribute management with magic getter/setter support.
 *
 * ## Features:
 *
 * ### 1. Magic Getters/Setters (from DataObject trait)
 * Access attributes using camelCase methods:
 * ```php
 * $user->setFirstName('John');  // Sets 'first_name'
 * $name = $user->getFirstName(); // Gets 'first_name'
 * $hasName = $user->hasFirstName(); // Checks if 'first_name' exists
 * $user->unsFirstName(); // Unsets 'first_name'
 * ```
 *
 * ### 2. Dot Notation Access
 * Access nested attributes using dot notation:
 * ```php
 * $user->setData('profile.address.city', 'New York');
 * $city = $user->getData('profile.address.city');
 * ```
 *
 * ### 3. Fluent Interface
 * Chain method calls:
 * ```php
 * $user->setFirstName('John')
 *      ->setLastName('Doe')
 *      ->setEmail('john@example.com')
 *      ->save();
 * ```
 *
 * ### 4. Enhanced Data Manipulation
 * Use DataObject methods for advanced operations:
 * ```php
 * // Get multiple attributes
 * $data = $user->getData(['first_name', 'last_name', 'email']);
 *
 * // Add data without overwriting
 * $user->addData(['phone' => '123-456-7890']);
 *
 * // Unset multiple attributes
 * $user->unsetData(['temp_field', 'cache_field']);
 *
 * // Check if empty
 * if ($user->isEmpty()) {
 *     // Handle empty model
 * }
 * ```
 *
 * ## Usage:
 *
 * ### Basic Model:
 * ```php
 * use Pixielity\Database\DataObjectModel;
 *
 * class User extends DataObjectModel
 * {
 *     protected $fillable = ['first_name', 'last_name', 'email'];
 * }
 *
 * // Use magic methods
 * $user = new User();
 * $user->setFirstName('John')
 *      ->setLastName('Doe')
 *      ->setEmail('john@example.com');
 *
 * // Access via magic getters
 * echo $user->getFirstName(); // "John"
 * echo $user->getEmail(); // "john@example.com"
 *
 * // Check existence
 * if ($user->hasEmail()) {
 *     // Email is set
 * }
 * ```
 *
 * @category   Models
 *
 * @since      1.0.0
 *
 * @method mixed getData(string|array $key = '', ?int $index = null) Get attribute(s) value
 * @method self  setData(string|array $key, mixed $value = null) Set attribute(s)     value
 * @method self  addData(array $data)                                                 Add data without overwriting
 * @method self  unsetData(null|string|array $key = null) Unset attribute(s)
 * @method bool  hasData(string $key = '')                                            Check if attribute exists
 * @method bool  isEmpty()                                                            Check if model has no attributes
 * @method self  each(callable $callback)                                             Iterate over attributes
 * @method mixed getDataByKey(string $key)                                            Get attribute by exact key
 * @method mixed getDataByPath(string $path) Get attribute by path (a/b/c)
 * @method self  key(mixed ...$keys)                                                  Build dynamic key for chaining
 */
class DataObjectModel extends Model
{
    use DataObject {
        __call as dataObjectCall;
    }
    use HasFactory;

    /**
     * Handle dynamic method calls.
     *
     * Tries DataObject methods first, then falls back to Eloquent's __call.
     * This ensures proper method resolution order:
     * 1. DataObject magic methods (get*, set*, has*, uns*)
     * 2. Eloquent scopes, relations, and other magic methods
     *
     * @param  string $method     Method name
     * @param  array  $parameters Method parameters
     * @return mixed
     */
    #[Override]
    public function __call($method, $parameters)
    {
        // Check if DataObject can handle this method
        if ($this->getDataObject()->hasMethod($method)) {
            $result = $this->dataObjectCall($method, $parameters);

            // Sync attributes after setter methods
            if ($this->isSetterMethod($method)) {
                $this->syncFromDataObject();
            }

            return $result;
        }

        // Fall back to Eloquent's __call for scopes, relations, etc.
        return parent::__call($method, $parameters);
    }

    /**
     * Get an attribute from the model.
     *
     * Syncs DataObject before getting to ensure consistency.
     *
     * @param  string $key Attribute key
     * @return mixed
     */
    #[Override]
    public function getAttribute($key)
    {
        $this->syncToDataObject();

        return parent::getAttribute($key);
    }

    /**
     * Set a given attribute on the model.
     *
     * Syncs to DataObject after setting to keep them in sync.
     *
     * @param  string $key   Attribute key
     * @param  mixed  $value Attribute value
     * @return mixed
     */
    #[Override]
    public function setAttribute($key, $value)
    {
        $result = parent::setAttribute($key, $value);
        $this->syncToDataObject();

        return $result;
    }

    /**
     * Convert the model instance to an array.
     *
     * Syncs from DataObject before converting to include any changes
     * made through DataObject methods.
     *
     * @return array<string, mixed>
     */
    #[Override]
    public function toArray()
    {
        $this->syncFromDataObject();

        return parent::toArray();
    }

    /**
     * Save the model to the database.
     *
     * Syncs from DataObject before saving to ensure all changes
     * made through DataObject methods are persisted.
     *
     * @param  array<string, mixed> $options Save options
     * @return bool
     */
    #[Override]
    public function save(array $options = [])
    {
        $this->syncFromDataObject();

        return parent::save($options);
    }

    /**
     * Get all of the current attributes on the model.
     *
     * Syncs from DataObject before returning to include any changes.
     *
     * @return array<string, mixed>
     */
    #[Override]
    public function getAttributes()
    {
        $this->syncFromDataObject();

        return parent::getAttributes();
    }

    /**
     * Fill the model with an array of attributes.
     *
     * Syncs to DataObject after filling to keep them in sync.
     *
     * @param  array<string, mixed> $attributes Attributes to fill
     * @return $this
     */
    #[Override]
    public function fill(array $attributes)
    {
        $result = parent::fill($attributes);
        $this->syncToDataObject();

        return $result;
    }

    /**
     * Reload the current model instance with fresh attributes from the database.
     *
     * Resets DataObject after refresh to ensure consistency.
     *
     * @return $this
     */
    #[Override]
    public function refresh()
    {
        $result = parent::refresh();

        // Reset DataObject to force re-sync on next access
        $this->dataObject = null;

        return $result;
    }

    /**
     * Check if method is a setter method that modifies data.
     *
     * @param string $method Method name
     */
    protected function isSetterMethod(string $method): bool
    {
        if (Str::startsWith($method, 'set')) {
            return true;
        }
        if (Str::startsWith($method, 'uns')) {
            return true;
        }

        return Str::startsWith($method, 'add');
    }

    /**
     * Sync DataObject with model attributes before operations.
     *
     * Ensures DataObject has the latest attribute values from the model.
     * Only syncs if DataObject instance exists to avoid unnecessary overhead.
     */
    protected function syncToDataObject(): void
    {
        if ($this->dataObject instanceof \Pixielity\Support\DataObject && ! empty($this->attributes)) {
            try {
                $this->dataObject->setData($this->attributes);
            } catch (Throwable $e) {
                // Log error but don't break the application
                if (function_exists('logger')) {
                    logger()->warning('Failed to sync to DataObject', [
                        'model' => static::class,
                        'error' => $e->getMessage(),
                    ]);
                }
            }
        }
    }

    /**
     * Sync model attributes from DataObject after operations.
     *
     * Merges DataObject data back into model attributes.
     * Only syncs if DataObject instance exists and has data.
     */
    protected function syncFromDataObject(): void
    {
        if ($this->dataObject instanceof \Pixielity\Support\DataObject) {
            try {
                $dataObjectData = $this->dataObject->toArray();
                if ($dataObjectData !== []) {
                    $this->attributes = Arr::merge($this->attributes, $dataObjectData);
                }
            } catch (Throwable $e) {
                // Log error but don't break the application
                if (function_exists('logger')) {
                    logger()->warning('Failed to sync from DataObject', [
                        'model' => static::class,
                        'error' => $e->getMessage(),
                    ]);
                }
            }
        }
    }
}
