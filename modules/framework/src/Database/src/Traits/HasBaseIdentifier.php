<?php

declare(strict_types=1);

namespace Pixielity\Database\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Pixielity\Database\Contracts\HasBaseIdentifier as HasBaseIdentifierInterface;
use Pixielity\Support\Str;

/**
 * Has Base Identifier Trait.
 *
 * Generates random base64-encoded identifiers for models, used as random lookup keys
 * that are immune to enumeration attacks. Perfect for public-facing URLs.
 *
 * ## Property-Based Configuration:
 * ```php
 * protected bool $baseIdentifiable = true;
 * ```
 *
 * ## Features:
 * - Random, unpredictable identifiers
 * - URL-safe (no special characters)
 * - Immune to enumeration attacks
 * - Shorter than UUIDs
 * - Indexed for fast lookups
 * - Hides business metrics
 *
 * ## Usage:
 *
 * ### Basic Setup:
 * ```php
 * class User extends Model
 * {
 *     protected bool $baseIdentifiable = true;
 * }
 *
 * // Migration
 * $table->string('base_id', 32)->unique()->index();
 * ```
 *
 * ### Creating Records:
 * ```php
 * $user = User::create(['name' => 'John', 'email' => 'john@example.com']);
 * echo $user->base_id;  // "Xy9kL2mN4pQ8rT5vW"
 * ```
 *
 * ### Finding by Base ID:
 * ```php
 * $user = User::findByBaseId('Xy9kL2mN4pQ8rT5vW');
 * ```
 *
 * ### Using in URLs:
 * ```php
 * // Route
 * Route::get('/users/{base_id}', [UserController::class, 'show']);
 *
 * // Controller
 * public function show($base_id)
 * {
 *     $user = User::findByBaseId($base_id);
 *     return view('users.show', compact('user'));
 * }
 *
 * // View
 * <a href="{{ route('users.show', $user->base_id) }}">View Profile</a>
 * // Generates: /users/Xy9kL2mN4pQ8rT5vW
 * ```
 *
 * ## Why Use Base Identifiers?
 *
 * ### Security:
 * - **Prevents enumeration attacks**: Can't guess other IDs
 * - **Hides business metrics**: Can't tell how many records exist
 * - **Unpredictable**: Random generation prevents scraping
 *
 * ### Privacy:
 * - **Obscures internal structure**: Doesn't reveal database IDs
 * - **GDPR friendly**: Harder to correlate data
 *
 * ### User Experience:
 * - **Shorter than UUIDs**: 16-20 chars vs 36 chars
 * - **URL-safe**: No special characters to encode
 * - **Memorable-ish**: Shorter = easier to share
 *
 * ## Real-World Examples:
 * - YouTube: `dQw4w9WgXcQ`
 * - Stripe: `pi_3MtwBwLkdIwHu0C`
 * - Bitly: `3xYz9Kl`
 * - Google Drive: `1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms`
 *
 * ## Comparison:
 *
 * | Method | Length | Example | Security | Performance |
 * |--------|--------|---------|----------|-------------|
 * | Sequential ID | 1-10 | `12345` | ❌ Low | ✅ Fast |
 * | UUID | 36 | `550e8400-e29b-41d4-a716-446655440000` | ✅ High | ⚠️ Slower |
 * | Base ID | 16-20 | `Xy9kL2mN4pQ8rT5vW` | ✅ High | ✅ Fast |
 *
 * ## Custom Column Name:
 * ```php
 * class User extends Model
 * {
 *     protected bool $baseIdentifiable = true;
 *
 *     const BASEID = 'public_id';  // Custom column name
 * }
 * ```
 *
 * @category   Database
 *
 * @since      1.0.0
 */
trait HasBaseIdentifier
{
    /**
     * Boot the HasBaseIdentifier trait.
     */
    public static function bootHasBaseIdentifier(): void
    {
        static::creating(function ($model): void {
            if ($model->isBaseIdentifiable()) {
                $model->generateBaseIdentifier();
            }
        });
    }

    /**
     * Find a model by its base identifier.
     *
     * @param  string  $identifier  Base identifier
     */
    public static function findByBaseId(string $identifier): ?static
    {
        $column = static::getBaseIdColumnStatic();

        return static::where($column, $identifier)->first();
    }

    /**
     * Find a model by its base identifier or fail.
     *
     * @param  string  $identifier  Base identifier
     *
     * @throws ModelNotFoundException
     */
    public static function findByBaseIdOrFail(string $identifier): static
    {
        $column = static::getBaseIdColumnStatic();

        return static::where($column, $identifier)->firstOrFail();
    }

    /**
     * Get the base identifier column name (static version).
     *
     * @psalm-suppress UndefinedConstant
     */
    protected static function getBaseIdColumnStatic(): string
    {
        // @phpstan-ignore-next-line - static::BASEID may not exist on all models
        return \defined('static::BASEID') ? static::BASEID : HasBaseIdentifierInterface::BASEID;
    }

    /**
     * Check if model has base identifier enabled.
     */
    public function isBaseIdentifiable(): bool
    {
        return $this->baseIdentifiable === true;
    }

    /**
     * Get the base identifier column name.
     */
    public function getBaseIdColumn(): string
    {
        return static::getBaseIdColumnStatic();
    }

    /**
     * Get the route key for the model.
     *
     * Override to use base identifier in route model binding.
     *
     * @return string
     */
    public function getRouteKeyName(): mixed
    {
        if ($this->isBaseIdentifiable()) {
            return $this->getBaseIdColumn();
        }

        return parent::getRouteKeyName();
    }

    /**
     * Scope to find by base identifier.
     *
     * @param  Builder  $query
     */
    public function scopeWhereBaseId($query, string $identifier): Builder
    {
        $column = $this->getBaseIdColumn();

        return $query->where($column, $identifier);
    }

    /**
     * Generate a unique base identifier.
     */
    protected function generateBaseIdentifier(): void
    {
        $column = $this->getBaseIdColumn();

        // Skip if already set
        if (! empty($this->{$column})) {
            return;
        }

        // Generate unique identifier
        do {
            $identifier = $this->createBaseIdentifier();
        } while ($this->baseIdentifierExists($identifier));

        $this->{$column} = $identifier;
    }

    /**
     * Create a random base identifier.
     *
     * @param  int<1, max>  $length  Length of identifier (default: 16)
     */
    protected function createBaseIdentifier(int $length = 16): string
    {
        // Generate random bytes and encode to base64

        $bytes = random_bytes($length);
        $encoded = base64_encode($bytes);

        // Make URL-safe: replace +/ with -_ and remove padding
        $urlSafe = strtr($encoded, '+/', '-_');
        $urlSafe = Str::rtrim($urlSafe, '=');

        // Trim to desired length
        return Str::substr($urlSafe, 0, $length);
    }

    /**
     * Check if base identifier already exists.
     *
     * @param  string  $identifier  Identifier to check
     */
    protected function baseIdentifierExists(string $identifier): bool
    {
        $column = $this->getBaseIdColumn();

        return static::where($column, $identifier)->exists();
    }
}
