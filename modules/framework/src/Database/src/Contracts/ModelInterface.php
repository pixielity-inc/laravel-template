<?php

declare(strict_types=1);

namespace Pixielity\Database\Contracts;

use Illuminate\Contracts\Pagination\CursorPaginator;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Carbon;
use Prettus\Repository\Contracts\Transformable;

/**
 * Eloquent Model Interface.
 *
 * Defines the contract for Eloquent models with all trait interfaces,
 * standard database columns, common methods, and Laravel conventions.
 * This interface ensures consistency across all models in the application.
 *
 * Note: Trait-based features (HasDefaultable, HasEncryptable, etc.) are provided
 * by the base Model class through traits. They are not part of this interface
 * to avoid forcing all models to implement optional feature methods.
 *
 * @mixin Model
 * @mixin Builder
 * @mixin \Illuminate\Database\Query\Builder
 *
 * ## Properties
 *
 * @property int         $id         Primary key
 * @property Carbon|null $created_at Creation timestamp
 * @property Carbon|null $updated_at Last update timestamp
 * @property-read string $table Table name
 * @property-read string $primaryKey Primary key column name
 * @property-read string $keyType Primary key type
 * @property-read bool $incrementing Whether ID auto-increments
 * @property-read bool $exists Whether model exists in database
 * @property-read bool $wasRecentlyCreated Whether model was just created
 * @property-read array $fillable Mass assignable attributes
 * @property-read array $guarded Guarded attributes
 * @property-read array $hidden Hidden attributes for serialization
 * @property-read array $visible Visible attributes for serialization
 * @property-read array $appends Accessors to append to array form
 * @property-read array $casts Attribute casts
 * @property-read array $dates Date attributes
 * @property-read array $with Relations to eager load
 * @property-read array $withCount Relationship counts to eager load
 * @property-read array $touches Relations to touch on save
 * @property-read int $perPage Pagination per page
 * @property-read bool $timestamps Whether to use timestamps
 * @property-read string|null $dateFormat Date storage format
 * @property-read string $connection Database connection name
 *
 * ## Query Builder Methods
 *
 * @method static Builder query()                                                                                                                  Begin querying the model
 * @method static Builder where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')                     Add a where clause
 * @method static Builder whereIn(string $column, mixed $values, string $boolean = 'and', bool $not = false)                                       Add a where in clause
 * @method static Builder whereNotIn(string $column, mixed $values, string $boolean = 'and')                                                       Add a where not in clause
 * @method static Builder whereNull(string|array $columns, string $boolean = 'and', bool $not = false)                                             Add a where null clause
 * @method static Builder whereNotNull(string|array $columns, string $boolean = 'and')                                                             Add a where not null clause
 * @method static Builder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false)                                  Add a where between clause
 * @method static Builder whereDate(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and')       Add a where date clause
 * @method static Builder whereTime(string $column, string $operator, \DateTimeInterface|string|null $value = null, string $boolean = 'and')       Add a where time clause
 * @method static Builder whereYear(string $column, string $operator, \DateTimeInterface|string|int|null $value = null, string $boolean = 'and')   Add a where year clause
 * @method static Builder whereMonth(string $column, string $operator, \DateTimeInterface|string|int|null $value = null, string $boolean = 'and')  Add a where month clause
 * @method static Builder whereDay(string $column, string $operator, \DateTimeInterface|string|int|null $value = null, string $boolean = 'and')    Add a where day clause
 * @method static Builder whereColumn(string|array $first, string|null $operator = null, string|null $second = null, string|null $boolean = 'and') Add a where column clause
 * @method static Builder whereHas(string $relation, \Closure|null $callback = null, string $operator = '>=', int $count = 1)                      Add a relationship count / exists condition
 * @method static Builder whereDoesntHave(string $relation, \Closure|null $callback = null)                                                        Add a relationship count / exists condition
 * @method static Builder orWhere(string|\Closure $column, mixed $operator = null, mixed $value = null)                                            Add an or where clause
 * @method static Builder orderBy((string|\Closure|Expression) $column, string $direction = 'asc')                                                 Add an order by clause
 * @method static Builder latest(string $column = 'created_at')                                                                                    Order by column descending
 * @method static Builder oldest(string $column = 'created_at')                                                                                    Order by column ascending
 * @method static Builder limit(int $value)                                                                                                        Set the limit
 * @method static Builder offset(int $value)                                                                                                       Set the offset
 * @method static Builder skip(int $value)                                                                                                         Alias for offset
 * @method static Builder take(int $value)                                                                                                         Alias for limit
 * @method static Builder with(array|string $relations)                                                                                            Eager load relations
 * @method static Builder withCount(array|string $relations)                                                                                       Eager load relation counts
 * @method static Builder has(string $relation, string $operator = '>=', int $count = 1, string $boolean = 'and', \Closure|null $callback = null)  Add a relationship count condition
 * @method static Builder doesntHave(string $relation, string $boolean = 'and', \Closure|null $callback = null)                                    Add a relationship count condition
 *
 * ## Retrieval Methods
 * @method static Collection|static[]  all(array|string $columns = ['*'])                                                                                                   Get all models
 * @method static static|null          find(mixed $id, array|string $columns = ['*'])                                                                                       Find a model by its primary key
 * @method static Collection           findMany((array|Arrayable) $ids, array|string $columns = ['*'])                                                                      Find multiple models by their primary keys
 * @method static static               findOrFail(mixed $id, array|string $columns = ['*'])                                                                                 Find a model by its primary key or throw an exception
 * @method static static               findOrNew(mixed $id, array|string $columns = ['*'])                                                                                  Find a model by its primary key or return new instance
 * @method static static               firstOrNew(array $attributes = [], array $values = [])                                                                               Get the first record matching the attributes or instantiate it
 * @method static static               firstOrCreate(array $attributes = [], array $values = [])                                                                            Get the first record matching the attributes or create it
 * @method static static               updateOrCreate(array $attributes, array $values = [])                                                                                Create or update a record matching the attributes
 * @method static static               firstOr(array|\Closure $columns = ['*'], \Closure|null $callback = null)                                                             Get the first record or execute callback
 * @method static static               firstOrFail(array|string $columns = ['*'])                                                                                           Get the first record or throw an exception
 * @method static static               firstWhere(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')                            Get the first record matching the query
 * @method static static               sole(array|string $columns = ['*'])                                                                                                  Get the sole record matching the query
 * @method static Collection           get(array|string $columns = ['*'])                                                                                                   Execute the query and get all results
 * @method static mixed                value(string $column)                                                                                                                Get a single column's value from the first result
 * @method static Collection           pluck(string $column, string|null $key = null)                                                                                       Get an array with the values of a given column
 * @method static LengthAwarePaginator paginate((int|null) $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)                Paginate the results
 * @method static Paginator            simplePaginate((int|null) $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)          Simple pagination
 * @method static CursorPaginator      cursorPaginate((int|null) $perPage = null, array|string $columns = ['*'], string $cursorName = 'cursor', string|null $cursor = null) Cursor pagination
 * @method static int                  count(string $columns = '*')                                                                                                         Get the count of records
 * @method static mixed                min(string $column)                                                                                                                  Get the minimum value of a column
 * @method static mixed                max(string $column)                                                                                                                  Get the maximum value of a column
 * @method static mixed                sum(string $column)                                                                                                                  Get the sum of a column
 * @method static mixed                avg(string $column)                                                                                                                  Get the average of a column
 * @method static bool                 exists()                                                                                                                             Determine if any rows exist
 * @method static bool                 doesntExist()                                                                                                                        Determine if no rows exist
 *
 * ## Persistence Methods
 * @method static static   create(array $attributes = [])                                                      Create and save a new model
 * @method static static   forceCreate(array $attributes) Create and save a new model (bypass mass assignment)
 * @method static int      update(array $values)                                                               Update records in the database
 * @method static int      increment(string $column, float|int $amount = 1, array $extra = [])                 Increment a column's value
 * @method static int      decrement(string $column, float|int $amount = 1, array $extra = [])                 Decrement a column's value
 * @method static mixed    delete()                                                                            Delete records from the database
 * @method static mixed    forceDelete() Force delete records (bypass soft deletes)
 * @method static int|null restore()                                                                           Restore soft-deleted records
 * @method static bool     truncate()                                                                          Truncate the table
 *
 * ## Relationship Methods
 * @method HasOne        hasOne(string $related, string|null $foreignKey = null, string|null $localKey = null)                                                                                                                                                 Define a one-to-one relationship
 * @method HasMany       hasMany(string $related, string|null $foreignKey = null, string|null $localKey = null)                                                                                                                                                Define a one-to-many relationship
 * @method BelongsTo     belongsTo(string $related, string|null $foreignKey = null, string|null $ownerKey = null, string|null $relation = null)                                                                                                                Define an inverse one-to-one or many relationship
 * @method BelongsToMany belongsToMany(string $related, string|null $table = null, string|null $foreignPivotKey = null, string|null $relatedPivotKey = null, string|null $parentKey = null, string|null $relatedKey = null, string|null $relation = null)      Define a many-to-many relationship
 * @method MorphTo       morphTo((string|null) $name = null, string|null $type = null, string|null $id = null, string|null $ownerKey = null)                                                                                                                   Define a polymorphic, inverse one-to-one or many relationship
 * @method MorphOne      morphOne(string $related, string $name, string|null $type = null, string|null $id = null, string|null $localKey = null)                                                                                                               Define a polymorphic one-to-one relationship
 * @method MorphMany     morphMany(string $related, string $name, string|null $type = null, string|null $id = null, string|null $localKey = null)                                                                                                              Define a polymorphic one-to-many relationship
 * @method MorphToMany   morphToMany(string $related, string $name, string|null $table = null, string|null $foreignPivotKey = null, string|null $relatedPivotKey = null, string|null $parentKey = null, string|null $relatedKey = null, bool $inverse = false) Define a polymorphic many-to-many relationship
 *
 * ## Scopes
 * @method static Builder scopes(array|string $scopes)                               Apply the given scopes
 * @method static Builder withGlobalScope(string $identifier, Scope|\Closure $scope) Register a global scope
 * @method static Builder withoutGlobalScope((Scope|string) $scope)                  Remove a global scope
 * @method static Builder withoutGlobalScopes(array|null $scopes = null)             Remove all global scopes
 *
 * ## Events
 * @method static void  observe(object|array|string $classes)            Register observers
 * @method static mixed fireModelEvent(string $event, bool $halt = true) Fire the given event for the model
 * @method static void  retrieved(\Closure|string $callback)             Register a retrieved model event
 * @method static void  creating(\Closure|string $callback)              Register a creating model event
 * @method static void  created(\Closure|string $callback)               Register a created model event
 * @method static void  updating(\Closure|string $callback)              Register an updating model event
 * @method static void  updated(\Closure|string $callback)               Register an updated model event
 * @method static void  saving(\Closure|string $callback)                Register a saving model event
 * @method static void  saved(\Closure|string $callback)                 Register a saved model event
 * @method static void  deleting(\Closure|string $callback)              Register a deleting model event
 * @method static void  deleted(\Closure|string $callback)               Register a deleted model event
 * @method static void  restoring(\Closure|string $callback)             Register a restoring model event
 * @method static void  restored(\Closure|string $callback)              Register a restored model event
 * @method static void  replicating(\Closure|string $callback)           Register a replicating model event
 *
 * ## Filter and Sort
 * @method static Builder filter((array|null) $params = null)                  Apply Purity filters from request query parameters
 * @method static Builder sort((array|null) $params = null)                    Apply Purity sorting from request query parameters
 * @method static Builder filterBy((array|string) $filters)                    Restrict filters to specific operators
 * @method static Builder filterFields((array|string) $fields)                 Restrict filterable fields
 * @method static Builder restrictedFilters((array|string) $restrictedFilters) Set field-specific filter restrictions
 * @method static Builder renamedFilterFields(array $renamedFilterFields)      Rename filter fields for API
 * @method static Builder sortFields((array|string) $fields)
 */
interface ModelInterface extends HasBaseIdentifier, HasFeatures, HasMagicMethods, HasModelHelpers, /* HasSearch, */ HasSlug, HasSortable, /* HasTags, */ HasTimestamps, /* HasTranslations, */ HasVersions, Transformable
{
    /**
     * Get the primary key for the model.
     *
     * @return string The primary key column name.
     */
    public function getKeyName();

    /**
     * Get the value of the model's primary key.
     *
     * @return mixed The primary key value.
     */
    public function getKey();

    /**
     * Get the table associated with the model.
     *
     * @return string The table name.
     */
    public function getTable();

    /**
     * Get the database connection for the model.
     *
     * @return Connection The database connection.
     */
    public function getConnection();

    /**
     * Get all of the current attributes on the model.
     *
     * @return array<string, mixed> The model attributes.
     */
    public function getAttributes();

    /**
     * Get an attribute from the model.
     *
     * @param  string $key The attribute key.
     * @return mixed  The attribute value.
     */
    public function getAttribute(string $key);

    /**
     * Set a given attribute on the model.
     *
     * @param  string $key   The attribute key.
     * @param  mixed  $value The attribute value.
     * @return mixed  The set value.
     */
    public function setAttribute(string $key, mixed $value);

    /**
     * Fill the model with an array of attributes.
     *
     * @param  array<string, mixed> $attributes The attributes to fill.
     * @return static               Returns this instance for method chaining.
     */
    public function fill(array $attributes);

    /**
     * Save the model to the database.
     *
     * @param  array<string, mixed> $options Save options.
     * @return bool                 True if saved successfully, false otherwise.
     */
    public function save(array $options = []);

    /**
     * Update the model in the database.
     *
     * @param  array<string, mixed> $attributes The attributes to update.
     * @param  array<string, mixed> $options    Update options.
     * @return bool                 True if updated successfully, false otherwise.
     */
    public function update(array $attributes = [], array $options = []);

    /**
     * Delete the model from the database.
     *
     * @return bool|null True if deleted successfully, null if model doesn't exist.
     */
    public function delete();

    /**
     * Convert the model instance to an array.
     *
     * @return array<string, mixed> The model as an array.
     */
    public function toArray();

    /**
     * Convert the model instance to JSON.
     *
     * @param  int    $options JSON encoding options.
     * @return string The model as JSON.
     */
    public function toJson($options = 0);

    /**
     * Get a new query builder for the model's table.
     *
     * @return Builder The query builder instance.
     */
    public function newQuery();

    /**
     * Create a new instance of the model.
     *
     * @param  array<string, mixed> $attributes The model attributes.
     * @param  bool                 $exists     Whether the model exists in database.
     * @return static               A new model instance.
     */
    public function newInstance(array $attributes = [], bool $exists = false);

    /**
     * Refresh the model from the database.
     *
     * @return static Returns this instance for method chaining.
     */
    public function refresh();

    /**
     * Replicate the model into a new instance.
     *
     * @param  array<int, string>|null $except Attributes to exclude from replication.
     * @return static                  The replicated model instance.
     */
    public function replicate(?array $except = null);

    /**
     * Determine if the model uses timestamps.
     *
     * @return bool True if timestamps are used, false otherwise.
     */
    public function usesTimestamps();

    /**
     * Get the fillable attributes for the model.
     *
     * @return array<int, string> The fillable attributes.
     */
    public function getFillable();

    /**
     * Get the guarded attributes for the model.
     *
     * @return array<int, string> The guarded attributes.
     */
    public function getGuarded();

    /**
     * Get the hidden attributes for the model.
     *
     * @return array<int, string> The hidden attributes.
     */
    public function getHidden();

    /**
     * Get the visible attributes for the model.
     *
     * @return array<int, string> The visible attributes.
     */
    public function getVisible();

    /**
     * Get the casts array.
     *
     * @return array<string, string> The attribute casts.
     */
    public function getCasts();

    /**
     * Determine if the model or any given attribute(s) have been modified.
     *
     * @param  array<string>|string|null $attributes Attributes to check.
     * @return bool                      True if modified, false otherwise.
     */
    public function isDirty(array|string|null $attributes = null);

    /**
     * Determine if the model and all given attribute(s) have remained the same.
     *
     * @param  array<string>|string|null $attributes Attributes to check.
     * @return bool                      True if clean, false otherwise.
     */
    public function isClean(array|string|null $attributes = null);
}
