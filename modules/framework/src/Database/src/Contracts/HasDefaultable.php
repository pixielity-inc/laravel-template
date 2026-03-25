<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasDefaultable Interface.
 *
 * Defines the contract for models that support a single default record.
 * Ensures only one record can be marked as default at a time.
 *
 *
 * @property bool $is_default Whether this is the default record
 *
 * @method static static|null getDefault()  Get the default record
 * @method        void        makeDefault() Set this record as the default
 */
interface HasDefaultable
{
    /**
     * Get the default record.
     *
     * Returns the default product type. If no default is found,
     * finds the first record and makes it the default.
     *
     * @return static|null The default record, or null if none exists.
     */
    public static function getDefault();

    /**
     * Set this record as the default.
     *
     * Automatically unsets any other default records.
     *
     * @return void
     */
    public function makeDefault();
}
