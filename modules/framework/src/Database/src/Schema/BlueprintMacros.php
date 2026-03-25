<?php

declare(strict_types=1);

namespace Pixielity\Database\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Fluent;
use Pixielity\Database\Attributes\AsDatabaseBlueprint;
use Pixielity\Database\Contracts\HasBaseIdentifier;
use Pixielity\Support\Str;

/**
 * Base ID Blueprint Macros.
 *
 * Custom Blueprint macros for adding base_id columns to database tables.
 * Base IDs provide secure, non-sequential public-facing identifiers that
 * prevent enumeration attacks and hide internal database IDs.
 *
 * ## Available Macros:
 * - `baseId()` - Add a base_id column for public-facing identifiers
 *
 * ## Registration:
 * This class is automatically discovered and registered via the
 * #[AsDatabaseBlueprint] attribute. No manual registration is required.
 *
 * ## Usage Examples:
 *
 * ### Basic Usage:
 * ```php
 * Schema::create('users', function (Blueprint $table) {
 *     $table->id();
 *     $table->baseId(); // Adds base_id column with defaults
 *     $table->string('email')->unique();
 *     $table->timestamps();
 * });
 * ```
 *
 * ### Custom Column Name:
 * ```php
 * Schema::create('posts', function (Blueprint $table) {
 *     $table->id();
 *     $table->baseId('public_id'); // Custom column name
 *     $table->string('title');
 *     $table->timestamps();
 * });
 * ```
 *
 * ### Not Nullable:
 * ```php
 * Schema::create('products', function (Blueprint $table) {
 *     $table->id();
 *     $table->baseId()->nullable(false); // Required on insert
 *     $table->string('name');
 *     $table->timestamps();
 * });
 * ```
 *
 * ### Custom Length:
 * ```php
 * Schema::create('orders', function (Blueprint $table) {
 *     $table->id();
 *     $table->baseId(HasBaseIdentifier::BASEID, 64); // Longer base_id
 *     $table->decimal('total');
 *     $table->timestamps();
 * });
 * ```
 *
 * ## Generated SQL:
 *
 * ### MySQL:
 * ```sql
 * `base_id` VARCHAR(32) NULL,
 * UNIQUE KEY `users_base_id_unique` (`base_id`),
 * KEY `users_base_id_index` (`base_id`)
 * ```
 *
 * ### PostgreSQL:
 * ```sql
 * "base_id" VARCHAR(32) NULL,
 * CONSTRAINT "users_base_id_unique" UNIQUE ("base_id"),
 * CREATE INDEX "users_base_id_index" ON "users" ("base_id")
 * ```
 *
 * ## Why BaseID?
 * BaseIDs provide public-facing identifiers that:
 * - Hide internal auto-increment IDs from users
 * - Prevent enumeration attacks (can't guess other IDs)
 * - Are URL-safe and human-readable
 * - Can be generated using base64 encoding
 * - Shorter than UUIDs (16-20 chars vs 36 chars)
 * - Faster lookups than UUIDs (indexed string vs UUID type)
 *
 * ## Security Benefits:
 * - **Prevents enumeration**: Random IDs prevent scraping/guessing
 * - **Hides metrics**: Can't tell how many records exist
 * - **GDPR friendly**: Harder to correlate data across systems
 * - **Unpredictable**: No sequential pattern to exploit
 *
 * @see HasBaseIdentifier For the trait that generates base_ids
 * @see \Pixielity\Database\Model For the base model that uses base_ids
 * @since 1.0.0
 */
#[AsDatabaseBlueprint(
    description: 'Base ID Blueprint macros for secure public identifiers',
    priority: 10
)]
class BlueprintMacros
{
    /**
     * Default base_id column length.
     *
     * 32 characters is enough for base64-encoded random strings
     * while keeping the column size reasonable for indexing.
     */
    public const DEFAULT_BASEID_LENGTH = 32;

    /**
     * Register all base_id Blueprint macros.
     *
     * This method is automatically called by the DatabaseServiceProvider
     * via the #[AsDatabaseBlueprint] attribute discovery system.
     */
    public function __invoke(): void
    {
        $this->registerBaseIdMacro();
    }

    /**
     * Register the baseId macro.
     *
     * Adds a base_id column for public-facing identifiers.
     * This creates a string column that is:
     * - 32 characters long by default (configurable)
     * - Unique (enforced at database level)
     * - Indexed (for fast lookups)
     * - Nullable by default (can be generated after creation)
     *
     * ## Column Properties:
     * - **Type**: VARCHAR/STRING
     * - **Length**: 32 characters (default)
     * - **Nullable**: Yes (default)
     * - **Unique**: Yes (database constraint)
     * - **Indexed**: Yes (for performance)
     *
     * ## Parameters:
     * - `$column`: Column name (default: 'base_id' from HasBaseIdentifier::BASEID)
     * - `$length`: Column length (default: 32 characters)
     *
     * ## Usage Examples:
     *
     * ### Basic Usage (Recommended):
     * ```php
     * Schema::create('users', function (Blueprint $table) {
     *     $table->id();
     *     $table->baseId(); // Uses HasBaseIdentifier::BASEID constant
     *     $table->timestamps();
     * });
     * ```
     *
     * ### Custom Column Name:
     * ```php
     * $table->baseId('public_id');
     * ```
     *
     * ### Not Nullable:
     * ```php
     * $table->baseId()->nullable(false);
     * ```
     *
     * ### Custom Length:
     * ```php
     * $table->baseId(HasBaseIdentifier::BASEID, 64);
     * ```
     *
     * ### Chaining Methods:
     * ```php
     * $table->baseId()
     *     ->nullable(false)
     *     ->comment('Public-facing identifier');
     * ```
     *
     * ## Generated SQL (MySQL):
     * ```sql
     * `base_id` VARCHAR(32) NULL,
     * UNIQUE KEY `users_base_id_unique` (`base_id`),
     * KEY `users_base_id_index` (`base_id`)
     * ```
     *
     * ## Performance Considerations:
     * - The unique constraint ensures no duplicate base_ids
     * - The index provides fast lookups by base_id
     * - VARCHAR(32) is optimal for base64-encoded 24-byte random strings
     */
    protected function registerBaseIdMacro(): void
    {
        // Capture the constant value before the closure
        // Inside the closure, 'self' refers to Blueprint, not BlueprintMacros
        $defaultLength = self::DEFAULT_BASEID_LENGTH;
        $defaultColumn = HasBaseIdentifier::BASEID;

        Blueprint::macro(
            Str::camel(HasBaseIdentifier::BASEID),

            /**
             * Add a base_id column to the table.
             *
             * @param  string|null $column Column name (default: HasBaseIdentifier::BASEID)
             * @param  int|null    $length Column length (default: 32)
             * @return Fluent      Column definition for method chaining
             */
            fn (?string $column = null, ?int $length = null): Fluent => $this
                ->string($column ?? $defaultColumn, $length ?? $defaultLength)
                ->nullable()
                ->unique()
                ->index()
        );
    }
}
