<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Create Cache Tables Migration.
 *
 * Creates the cache and cache_locks tables for Laravel's cache system.
 * These tables are used when the cache driver is set to 'database'.
 *
 * ## Tables Created:
 * - `cache` - Stores cached data with expiration times
 * - `cache_locks` - Stores cache locks for atomic operations
 *
 * ## Cache Table Structure:
 * - `key` (string, primary) - Unique cache key identifier
 * - `value` (mediumText) - Serialized cached value
 * - `expiration` (bigInteger, indexed) - Unix timestamp when cache expires
 *
 * ## Cache Locks Table Structure:
 * - `key` (string, primary) - Unique lock key identifier
 * - `owner` (string) - Lock owner identifier
 * - `expiration` (bigInteger, indexed) - Unix timestamp when lock expires
 *
 * ## Configuration:
 * Set in config/cache.php:
 * ```php
 * 'default' => env('CACHE_DRIVER', 'database'),
 * 'stores' => [
 *     'database' => [
 *         'driver' => 'database',
 *         'table' => 'cache',
 *         'connection' => null,
 *         'lock_connection' => null,
 *     ],
 * ],
 * ```
 *
 * ## Usage:
 * ```php
 * // Store cache
 * Cache::put('key', 'value', now()->addMinutes(10));
 *
 * // Retrieve cache
 * $value = Cache::get('key');
 *
 * // Atomic locks
 * Cache::lock('process')->get(function () {
 *     // Critical section
 * });
 * ```
 *
 * @see https://laravel.com/docs/cache Laravel Cache Documentation
 * @since 1.0.0
 */
return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * Creates the cache and cache_locks tables for database-backed caching.
     */
    public function up(): void
    {
        // Create cache table for storing cached data
        Schema::create('cache', function (Blueprint $table) {
            // Primary key - unique cache identifier
            $table->string('key')->primary();

            // Serialized cached value (supports large data)
            $table->mediumText('value');

            // Unix timestamp for cache expiration (indexed for cleanup queries)
            $table->bigInteger('expiration')->index();
        });

        // Create cache_locks table for atomic lock operations
        Schema::create('cache_locks', function (Blueprint $table) {
            // Primary key - unique lock identifier
            $table->string('key')->primary();

            // Lock owner identifier (process/request ID)
            $table->string('owner');

            // Unix timestamp for lock expiration (indexed for cleanup queries)
            $table->bigInteger('expiration')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drops the cache and cache_locks tables.
     */
    public function down(): void
    {
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
