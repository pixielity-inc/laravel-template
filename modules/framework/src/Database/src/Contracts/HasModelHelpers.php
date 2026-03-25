<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

/**
 * HasModelHelpers Interface.
 *
 * Defines the contract for models that provide additional helper methods
 * for common operations like getting the table name statically.
 *
 *
 * @method static string getTableName() Get the table name associated with the model
 */
interface HasModelHelpers
{
    /**
     * Get the table name associated with the model.
     *
     * This static method allows you to retrieve the table name
     * without needing to instantiate the model. It respects
     * custom table names defined in the model's $table property.
     *
     * @return string The table name (e.g., 'users', 'facilities', 'visits')
     */
    public static function getTableName(): string;
}
