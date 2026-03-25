<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasPurgeable Interface.
 *
 * Defines the contract for models that support automatic removal
 * of temporary attributes before saving (e.g., password_confirmation).
 *
 *
 * @method void  initializePurgeable()                            Initialize the purgeable trait
 * @method void  addPurgeable(string|array $attributes)           Add attributes to purgeable list
 * @method array purgeAttributes(mixed $attributesToPurge = null) Remove purgeable attributes
 * @method array getPurgeableAttributes()                         Get the list of purgeable attributes
 * @method array getOriginalPurgeValues()                         Get original values of purged attributes
 * @method mixed getOriginalPurgeValue(mixed $attribute)          Get original value of a purged attribute
 * @method void  restorePurgedValues()                            Restore purged values
 */
interface HasPurgeable
{
    /**
     * Initialize the purgeable trait for a model.
     *
     * @return void
     */
    public function initializePurgeable();

    /**
     * Add attributes to the purgeable list.
     *
     * @param string|array<int, string> $attributes Attribute name(s) to add.
     */
    public function addPurgeable(string|array $attributes): void;

    /**
     * Remove purgeable attributes from the model.
     *
     * Specify attributesToPurge, if unspecified, $purgeable property is used.
     *
     * @param  mixed $attributesToPurge Attributes to purge (null = use $purgeable property).
     * @return array The cleaned attributes array.
     */
    public function purgeAttributes($attributesToPurge = null);

    /**
     * Get the list of purgeable attributes.
     *
     * @return array Array of attribute names to purge.
     */
    public function getPurgeableAttributes();

    /**
     * Get the original values of any purged attributes.
     *
     * @return array Array of original purged values.
     */
    public function getOriginalPurgeValues();

    /**
     * Get the original value of a purged attribute.
     *
     * @param  mixed $attribute The attribute name to get.
     * @return mixed The original value or null if not found.
     */
    public function getOriginalPurgeValue($attribute);

    /**
     * Restore the original values of any purged attributes.
     *
     * @return void
     */
    public function restorePurgedValues();
}
