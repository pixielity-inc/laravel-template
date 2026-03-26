<?php

namespace Pixielity\Database\Concerns;

use Pixielity\Support\Reflection;
use Pixielity\Support\Str;

/**
 * Model Helper Trait.
 *
 * Provides utility methods for working with Eloquent models.
 * This trait adds convenient static methods that can be called
 * without instantiating the model.
 *
 * ## Usage:
 * ```php
 * use Pixielity\Database\Traits\ModelHelper;
 *
 * class Facility extends Model implements Importable, Exportable
 * {
 *     use ModelHelper;
 * }
 *
 * // Get table name without instantiating
 * $tableName = Facility::getTableName(); // Returns: 'facilities'
 *
 * // Useful in queries, migrations, or seeders
 * DB::table(Facility::getTableName())->where(...)->get();
 * ```
 *
 * ## Features:
 * - Get table name statically
 * - No need to instantiate model
 * - Useful for raw queries and migrations
 * - Respects custom table names
 *
 * ## Benefits:
 * - Cleaner code when you need table name
 * - Type-safe (no hardcoded strings)
 * - Works with custom table names
 * - IDE autocomplete support
 *
 * @method static getTableName() Get the table name associated with the model
 */
trait ModelHelper
{
    /**
     * Get the table name associated with the model.
     *
     * This static method allows you to retrieve the table name
     * without needing to instantiate the model. It respects
     * custom table names defined in the model's $table property.
     *
     * ## Examples:
     * ```php
     * // Get table name
     * $table = User::getTableName(); // 'users'
     * $table = Facility::getTableName(); // 'facilities'
     *
     * // Use in raw queries
     * DB::table(Facility::getTableName())
     *     ->where(ModelInterface::STATUS, 'active')
     *     ->get();
     *
     * // Use in migrations
     * Schema::table(User::getTableName(), function (Blueprint $table) {
     *     $table->string('new_column');
     * });
     *
     * // Use in seeders
     * DB::table(Facility::getTableName())->insert([...]);
     * ```
     *
     * ## Why Use This?
     * Instead of hardcoding table names:
     * ```php
     * // ❌ Bad: Hardcoded string
     * DB::table('facilities')->where(...);
     *
     * // ✅ Good: Type-safe, refactor-friendly
     * DB::table(Facility::getTableName())->where(...);
     * ```
     *
     * @return string The table name (e.g., 'users', 'facilities', 'visits')
     */
    public static function getTableName(): string
    {
        // Use reflection to get table property without instantiation
        $defaults = Reflection::getDefaultProperties(static::class);

        // If $table property is set, use it
        if (isset($defaults['table'])) {
            return $defaults['table'];
        }

        // Otherwise, use Laravel's default naming convention
        // Convert class name to snake_case plural
        $className = Reflection::getShortName(static::class);

        return Str::snake(Str::pluralStudly($className));
    }
}
