<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

use Illuminate\Support\Carbon;

/**
 * HasTimestamps Interface.
 *
 * Defines the contract for models that support timestamp functionality.
 * Provides methods for working with created_at and updated_at timestamps.
 *
 * This interface matches Laravel's built-in HasTimestamps concern methods.
 * Since there is no custom HasTimestamps trait in the Framework package,
 * this interface documents Laravel's timestamp functionality.
 *
 * @property Carbon|null $created_at The creation timestamp
 * @property Carbon|null $updated_at The last update timestamp
 * @property bool $timestamps Whether timestamps are enabled
 *
 * @see \Illuminate\Database\Eloquent\Concerns\HasTimestamps
 */
interface HasTimestamps
{
    /**
     * Update the model's update timestamp.
     *
     * @param  string|null  $attribute  Optional attribute to touch.
     * @return bool True if saved successfully, false otherwise.
     */
    public function touch($attribute = null);

    /**
     * Set the value of the "created at" attribute.
     *
     * @param  mixed  $value  The timestamp value.
     * @return self Returns this instance for method chaining.
     */
    public function setCreatedAt($value);

    /**
     * Set the value of the "updated at" attribute.
     *
     * @param  mixed  $value  The timestamp value.
     * @return self Returns this instance for method chaining.
     */
    public function setUpdatedAt($value);

    /**
     * Determine if the model uses timestamps.
     *
     * @return bool True if timestamps are enabled, false otherwise.
     */
    public function usesTimestamps();

    /**
     * Get the name of the "created at" column.
     *
     * @return string|null The column name, or null if not used.
     */
    public function getCreatedAtColumn();

    /**
     * Get the name of the "updated at" column.
     *
     * @return string|null The column name, or null if not used.
     */
    public function getUpdatedAtColumn();

    /**
     * Get a fresh timestamp for the model.
     *
     * @return Carbon Fresh timestamp instance.
     */
    public function freshTimestamp();

    /**
     * Get a fresh timestamp for the model as a string.
     *
     * @return string Fresh timestamp as string.
     */
    public function freshTimestampString();

    /**
     * Update the creation and update timestamps.
     *
     * @return self Returns this instance for method chaining.
     */
    public function updateTimestamps();
}
