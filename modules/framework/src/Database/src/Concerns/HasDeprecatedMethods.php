<?php

declare(strict_types=1);

namespace Pixielity\Database\Concerns;

use Deprecated;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Has Deprecated Methods Trait.
 *
 * Overrides common Eloquent methods to mark them as deprecated and encourage
 * the use of the Repository pattern instead of direct model manipulation.
 *
 * ## Why Deprecate Direct Model Methods?
 *
 * 1. **Consistency**: All data access goes through repositories
 * 2. **Testability**: Easier to mock repositories than models
 * 3. **Business Logic**: Keep business logic in services, not models
 * 4. **Caching**: Repositories can implement caching strategies
 * 5. **Criteria**: Use repository criteria for complex queries
 * 6. **Maintainability**: Centralized data access patterns
 *
 * ## Migration Path
 *
 * ### Before (Direct Model Usage):
 * ```php
 * $user = User::find(1);
 * $user->name = 'John Doe';
 * $user->save();
 *
 * $users = User::where('status', 'active')->get();
 * User::create(['name' => 'Jane']);
 * ```
 *
 * ### After (Repository Pattern):
 * ```php
 * $user = $userRepository->find(1);
 * $user = $userRepository->update(['name' => 'John Doe'], 1);
 *
 * $users = $userRepository->findWhere(['status' => 'active']);
 * $user = $userRepository->create(['name' => 'Jane']);
 * ```
 *
 * ## Exceptions
 *
 * Some methods are still allowed for specific use cases:
 * - `save()` - After using `$repository->make()` to create an instance
 * - Relationship methods - `$user->posts()->create()`
 * - Attribute accessors/mutators - `$user->full_name`
 *
 * @category   Concerns
 *
 * @since      2.0.0
 */
trait HasDeprecatedMethods
{
    /**
     * Create a new instance of the model.
     *
     *
     * @param  array  $attributes Model attributes
     * @return static Created model instance
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user = User::create(['name' => 'John', 'email' => 'john@example.com']);
     *
     * // ✅ Use repository instead
     * $user = $userRepository->create(['name' => 'John', 'email' => 'john@example.com']);
     * ```
     */
    #[Deprecated(message: 'Use repository->create() instead')]
    public static function create(array $attributes = []): static
    {
        return parent::create($attributes);
    }

    /**
     * Find a model by its primary key.
     *
     *
     * @param  mixed         $id      Primary key value
     * @param  array<string> $columns Columns to select
     * @return static|null   Model instance or null
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user = User::find(1);
     *
     * // ✅ Use repository instead
     * $user = $userRepository->find(1);
     * ```
     */
    #[Deprecated(message: 'Use repository->find() instead')]
    public static function find($id, $columns = ['*']): ?static
    {
        return parent::find($id, $columns);
    }

    /**
     * Find a model by its primary key or throw an exception.
     *
     *
     * @param  mixed         $id      Primary key value
     * @param  array<string> $columns Columns to select
     * @return static        Model instance
     *
     * @throws ModelNotFoundException
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user = User::findOrFail(1);
     *
     * // ✅ Use repository instead
     * $user = $userRepository->findOrFail(1);
     * ```
     */
    #[Deprecated(message: 'Use repository->findOrFail() instead')]
    public static function findOrFail($id, $columns = ['*']): static
    {
        return parent::findOrFail($id, $columns);
    }

    /**
     * Find multiple models by their primary keys.
     *
     *
     * @param  array         $ids     Array of primary key values
     * @param  array<string> $columns Columns to select
     * @return Collection    Collection of models
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $users = User::findMany([1, 2, 3]);
     *
     * // ✅ Use repository instead
     * $users = $userRepository->findWhereIn('id', [1, 2, 3]);
     * ```
     */
    #[Deprecated(message: 'Use repository->findWhereIn() instead')]
    public static function findMany($ids, $columns = ['*']): Collection
    {
        return parent::findMany($ids, $columns);
    }

    /**
     * Get the first record matching the attributes.
     *
     *
     * @param  array         $attributes Search attributes
     * @param  array<string> $columns    Columns to select
     * @return static|null   Model instance or null
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user = User::firstWhere('email', 'john@example.com');
     *
     * // ✅ Use repository instead
     * $user = $userRepository->findWhere(['email' => 'john@example.com'])->first();
     * ```
     */
    #[Deprecated(message: 'Use repository->findWhere()->first() instead')]
    public static function firstWhere($column, $operator = null, $value = null, $boolean = 'and'): ?static
    {
        return parent::firstWhere($column, $operator, $value, $boolean);
    }

    /**
     * Execute a query and get the first result or throw an exception.
     *
     *
     * @param  array<string> $columns Columns to select
     * @return static        Model instance
     *
     * @throws ModelNotFoundException
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user = User::where('status', 'active')->firstOrFail();
     *
     * // ✅ Use repository instead
     * $user = $userRepository->scopeQuery(fn($q) => $q->where('status', 'active'))->firstOrFail();
     * ```
     */
    #[Deprecated(message: 'Use repository->firstOrFail() instead')]
    public static function firstOrFail($columns = ['*']): static
    {
        return parent::firstOrFail($columns);
    }

    /**
     * Create or update a record matching the attributes.
     *
     *
     * @param  array  $attributes Attributes to match
     * @param  array  $values     Values to update/create
     * @return static Created or updated model
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user = User::updateOrCreate(
     *     ['email' => 'john@example.com'],
     *     ['name' => 'John Doe']
     * );
     *
     * // ✅ Use repository instead
     * $user = $userRepository->updateOrCreate(
     *     ['email' => 'john@example.com'],
     *     ['name' => 'John Doe']
     * );
     * ```
     */
    #[Deprecated(message: 'Use repository->updateOrCreate() instead')]
    public static function updateOrCreate(array $attributes, array $values = []): static
    {
        return parent::updateOrCreate($attributes, $values);
    }

    /**
     * Get the first record matching the attributes or create it.
     *
     *
     * @param  array  $attributes Attributes to match/create
     * @param  array  $values     Additional values for creation
     * @return static Model instance
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user = User::firstOrCreate(['email' => 'john@example.com']);
     *
     * // ✅ Use repository instead
     * $user = $userRepository->findWhere(['email' => 'john@example.com'])->first()
     *      ?? $userRepository->create(['email' => 'john@example.com']);
     * ```
     */
    #[Deprecated(message: 'Use repository with custom method instead')]
    public static function firstOrCreate(array $attributes = [], array $values = []): static
    {
        return parent::firstOrCreate($attributes, $values);
    }

    /**
     * Get all of the models from the database.
     *
     *
     * @param  array<string> $columns Columns to select
     * @return Collection    Collection of all models
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $users = User::all();
     *
     * // ✅ Use repository instead
     * $users = $userRepository->all();
     * ```
     */
    #[Deprecated(message: 'Use repository->all() instead')]
    public static function all($columns = ['*']): Collection
    {
        return parent::all($columns);
    }

    /**
     * Destroy the models for the given IDs.
     *
     *
     * @param  array|int $ids IDs to destroy
     * @return int       Number of deleted records
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * User::destroy([1, 2, 3]);
     *
     * // ✅ Use repository instead
     * foreach ([1, 2, 3] as $id) {
     *     $userRepository->delete($id);
     * }
     * // Or use service layer bulk delete
     * $userService->deleteMany([1, 2, 3]);
     * ```
     */
    #[Deprecated(message: 'Use repository->delete() in a loop or custom bulk delete method')]
    public static function destroy($ids): int
    {
        return parent::destroy($ids);
    }

    /**
     * Save the model to the database.
     *
     *
     * @param  array $options Save options
     * @return bool  True if saved successfully
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user->name = 'John';
     * $user->save();
     *
     * // ✅ Use repository instead
     * $userRepository->update(['name' => 'John'], $user->id);
     *
     * // ✅ Exception: After make()
     * $user = $userRepository->make(['name' => 'John']);
     * $user->status = 'active';
     * $user->save(); // OK in this case
     * ```
     */
    #[Deprecated(message: 'Use repository->create() or repository->update() instead')]
    public function save(array $options = []): bool
    {
        return parent::save($options);
    }

    /**
     * Delete the model from the database.
     *
     *
     * @return bool|null True if deleted successfully
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user->delete();
     *
     * // ✅ Use repository instead
     * $userRepository->delete($user->id);
     * ```
     */
    #[Deprecated(message: 'Use repository->delete() instead')]
    public function delete(): ?bool
    {
        return parent::delete();
    }

    /**
     * Force delete the model from the database.
     *
     *
     * @return bool|null True if deleted successfully
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user->forceDelete();
     *
     * // ✅ Use repository instead
     * $userRepository->forceDelete($user->id);
     * ```
     */
    #[Deprecated(message: 'Use repository with forceDelete scope instead')]
    public function forceDelete(): ?bool
    {
        return parent::forceDelete();
    }

    /**
     * Update the model in the database.
     *
     *
     * @param  array $attributes Attributes to update
     * @param  array $options    Update options
     * @return bool  True if updated successfully
     *
     * @example
     * ```php
     * // ❌ Deprecated
     * $user->update(['name' => 'John']);
     *
     * // ✅ Use repository instead
     * $userRepository->update(['name' => 'John'], $user->id);
     * ```
     */
    #[Deprecated(message: 'Use repository->update() instead')]
    public function update(array $attributes = [], array $options = []): bool
    {
        return parent::update($attributes, $options);
    }
}
