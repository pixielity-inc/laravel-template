<?php

declare(strict_types=1);

namespace Pixielity\Database\Traits;

use Closure;
use DateTime;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Database\Connection;
use Illuminate\Database\Connectors\ConnectionFactory;
use Illuminate\Database\QueryException;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\SQLiteBuilder;
use Illuminate\Support\Str;
use Pixielity\Support\Arr;
use ReflectionClass;
use ReflectionProperty;

/**
 * In-Memory Model Trait.
 *
 * Allows Eloquent models to be backed by array data stored in SQLite database
 * (either in-memory or file-cached). This is useful for:
 *
 * - Static/seed data that doesn't change often
 * - Configuration data stored in code
 * - Testing with fixture data
 * - Small lookup tables
 * - Enum-like data structures
 *
 * ## Features:
 *
 * ### 1. Array-Based Data Source
 * Define your data as a simple PHP array in the model:
 * ```php
 * protected array $rows = [
 *     ['id' => 1, 'name' => 'Admin', 'level' => 10],
 *     ['id' => 2, 'name' => 'User', 'level' => 1],
 * ];
 * ```
 *
 * ### 2. Automatic Schema Detection
 * Schema is automatically inferred from data types:
 * - `int` → `integer` column
 * - `float` → `float` column
 * - `string` → `string` column
 * - `DateTime` → `dateTime` column
 *
 * ### 3. Custom Schema Definition
 * Override automatic detection with explicit schema:
 * ```php
 * protected array $schema = [
 *     'id' => 'integer',
 *     'name' => 'string',
 *     'level' => 'integer',
 *     'active' => 'boolean',
 * ];
 * ```
 *
 * ### 4. File-Based Caching
 * Data is cached in SQLite file for performance:
 * - Cache is invalidated when model file changes
 * - Automatic cache directory management
 * - Configurable cache location
 *
 * ### 5. In-Memory Fallback
 * Falls back to in-memory SQLite if caching unavailable:
 * - No file system access required
 * - Perfect for testing
 * - Automatic fallback on permission issues
 *
 * ## Usage:
 *
 * ### Basic Example:
 * ```php
 * use Pixielity\Database\Traits\InMemoryModel;
 * use Illuminate\Database\Eloquent\Model;
 *
 * class Role extends Model
 * {
 *     use InMemoryModel;
 *
 *     protected array $rows = [
 *         ['id' => 1, 'name' => 'Admin', 'level' => 10],
 *         ['id' => 2, 'name' => 'Editor', 'level' => 5],
 *         ['id' => 3, 'name' => 'User', 'level' => 1],
 *     ];
 * }
 *
 * // Use like any Eloquent model
 * $admin = Role::find(1);
 * $editors = Role::where('level', '>=', 5)->get();
 * ```
 *
 * ### With Custom Schema:
 * ```php
 * class Status extends Model
 * {
 *     use InMemoryModel;
 *
 *     protected array $rows = [
 *         ['id' => 1, 'name' => 'Active', 'color' => '#00FF00'],
 *         ['id' => 2, 'name' => 'Inactive', 'color' => '#FF0000'],
 *     ];
 *
 *     protected array $schema = [
 *         'id' => 'integer',
 *         'name' => 'string',
 *         'color' => 'string',
 *     ];
 * }
 * ```
 *
 * ### With Dynamic Data:
 * ```php
 * class Country extends Model
 * {
 *     use InMemoryModel;
 *
 *     public function getRows(): array
 *     {
 *         return json_decode(
 *             file_get_contents(resource_path('data/countries.json')),
 *             true
 *         );
 *     }
 * }
 * ```
 *
 * ### With Relationships:
 * ```php
 * class Category extends Model
 * {
 *     use InMemoryModel;
 *
 *     protected array $rows = [
 *         ['id' => 1, 'name' => 'Electronics'],
 *         ['id' => 2, 'name' => 'Books'],
 *     ];
 *
 *     public function products()
 *     {
 *         return $this->hasMany(Product::class);
 *     }
 * }
 * ```
 *
 * ## Configuration:
 *
 * ### Cache Location:
 * ```php
 * // config/database.php
 * 'Arr::backed' => [
 *     'cache_path' => storage_path('framework/cache/models'),
 *     'cache_prefix' => 'array-model',
 * ],
 * ```
 *
 * ### Per-Model Configuration:
 * ```php
 * class Role extends Model
 * {
 *     use InMemoryModel;
 *
 *     // Custom insert chunk size (default: 100)
 *     protected int $insertChunkSize = 50;
 *
 *     // Disable caching (always use in-memory)
 *     protected bool $shouldCache = false;
 * }
 * ```
 *
 * ## Performance:
 *
 * - **First Load**: ~50-100ms (creates SQLite file)
 * - **Cached Load**: ~1-5ms (reads from SQLite file)
 * - **In-Memory**: ~10-20ms (creates in-memory database)
 *
 * ## Caching Strategy:
 *
 * 1. **Cache Hit**: If cache file exists and is newer than model file
 * 2. **Cache Miss**: If cache file doesn't exist or is older than model file
 * 3. **Cache Rebuild**: Automatically rebuilds when model file changes
 * 4. **Fallback**: Uses in-memory SQLite if cache directory not writable
 *
 * ## Best Practices:
 *
 * ✅ **DO**:
 * - Use for static/seed data (roles, statuses, countries, etc.)
 * - Use for small lookup tables (< 10,000 rows)
 * - Use for testing with fixture data
 * - Define explicit schema for better performance
 *
 * ❌ **DON'T**:
 * - Use for large datasets (> 10,000 rows)
 * - Use for frequently changing data
 * - Use for user-generated content
 * - Use as replacement for proper database tables
 *
 * @category   Traits
 *
 * @since      1.0.0
 */
trait InMemoryModel
{
    /**
     * SQLite connection instance for this model.
     *
     * Each model using this trait gets its own SQLite connection to avoid
     * table name conflicts and ensure data isolation.
     */
    protected static ?Connection $inMemoryConnection = null;

    /**
     * Resolve the database connection for this model.
     *
     * Returns the SQLite connection specific to this model class.
     * Each model gets its own connection to avoid table conflicts.
     *
     * @param  string|null     $connection Connection name (ignored)
     * @return Connection|null SQLite connection instance
     */
    public static function resolveConnection($connection = null): ?Connection
    {
        return static::$inMemoryConnection;
    }

    /**
     * Boot the InMemoryModel trait.
     *
     * This method is automatically called by Laravel when the model is booted.
     * It sets up the SQLite connection and migrates the data.
     *
     * ## Process Flow:
     *
     * 1. **Check Cache Status**:
     *    - Cache file exists and up-to-date? → Use cached database
     *    - Cache file missing or stale? → Rebuild cache
     *    - Caching disabled? → Use in-memory database
     *
     * 2. **Setup Connection**:
     *    - Create SQLite connection (file or in-memory)
     *    - Register connection with Laravel
     *
     * 3. **Migrate Data**:
     *    - Create table with appropriate schema
     *    - Insert rows in chunks
     *    - Update cache timestamp
     *
     * ## Cache States:
     *
     * ### State 1: Cache Hit (Fast Path)
     * - Cache file exists
     * - Cache is newer than model file
     * - Action: Use existing cache file
     * - Performance: ~1-5ms
     *
     * ### State 2: Cache Miss (Rebuild Path)
     * - Cache file doesn't exist OR
     * - Cache is older than model file
     * - Action: Rebuild cache file
     * - Performance: ~50-100ms
     *
     * ### State 3: No Caching (In-Memory Path)
     * - Caching disabled OR
     * - Cache directory not writable
     * - Action: Use in-memory database
     * - Performance: ~10-20ms
     */
    public static function bootInMemoryModel(): void
    {
        $static = new static();

        $cachePath = $static->getCachePath();
        $modelPath = $static->getCacheReferencePath();

        // Define state handlers
        $states = [
            // State 1: Cache file exists and is up-to-date
            'cache-hit' => function () use ($cachePath): void {
                static::setSqliteConnection($cachePath);
            },
            // State 2: Cache file missing or stale - rebuild required
            'cache-miss' => function () use ($cachePath, $modelPath, $static): void {
                static::rebuildCache($cachePath, $modelPath, $static);
            },
            // State 3: No caching - use in-memory database
            'no-cache' => function () use ($static): void {
                static::setSqliteConnection(':memory:');
                $static->migrateData();
            },
        ];

        // Determine which state we're in and execute appropriate handler
        match (true) {
            ! $static->shouldUseCache() => $states['no-cache'](),
            file_exists($cachePath) && filemtime($modelPath) <= filemtime($cachePath) => $states['cache-hit'](),
            file_exists($static->getCacheDirectory()) && is_writable($static->getCacheDirectory()) => $states['cache-miss'](),
            default => $states['no-cache'](),
        };
    }

    /**
     * Rebuild the cache file.
     *
     * Creates a new SQLite cache file with fresh data from the model.
     * This is called when the cache is missing or stale.
     *
     * ## Process:
     * 1. Create empty cache file
     * 2. Setup SQLite connection
     * 3. Migrate data (create table + insert rows)
     * 4. Update file timestamp to match model file
     *
     * @param string $cachePath Path to cache file
     * @param string $modelPath Path to model file
     * @param self   $instance  Model instance
     */
    protected static function rebuildCache(string $cachePath, string $modelPath, self $instance): void
    {
        // Create empty cache file
        file_put_contents($cachePath, '');

        // Setup SQLite connection to cache file
        static::setSqliteConnection($cachePath);

        // Migrate data into cache
        $instance->migrateData();

        // Update cache file timestamp to match model file
        // This ensures cache is considered "fresh" until model changes
        touch($cachePath, filemtime($modelPath));
    }

    /**
     * Set up the SQLite connection.
     *
     * Creates a new SQLite connection and registers it with Laravel's
     * connection manager. Each model class gets its own connection.
     *
     * @param string $database Path to SQLite file or ':memory:'
     */
    protected static function setSqliteConnection(string $database): void
    {
        $config = [
            'driver' => 'sqlite',
            'database' => $database,
            'prefix' => '',
            'foreign_key_constraints' => true,
        ];

        // Create connection instance
        static::$inMemoryConnection = resolve(ConnectionFactory::class)->make($config);

        // Register connection with Laravel
        resolve(Repository::class)->set('database.connections.' . static::class, $config);
    }

    /**
     * Get the rows data for this model.
     *
     * Override this method to provide dynamic data from files, APIs, etc.
     * By default, returns the $rows property if it exists.
     *
     * ## Examples:
     *
     * ### From Property:
     * ```php
     * protected array $rows = [
     *     ['id' => 1, 'name' => 'Admin'],
     * ];
     * ```
     *
     * ### From File:
     * ```php
     * public function getRows(): array
     * {
     *     return json_decode(
     *         file_get_contents(resource_path('data/roles.json')),
     *         true
     *     );
     * }
     * ```
     *
     * ### From API:
     * ```php
     * public function getRows(): array
     * {
     *     return cache()->remember('api-data', 3600, function () {
     *         return Http::get('https://api.example.com/data')->json();
     *     });
     * }
     * ```
     *
     * @return array<int, array<string, mixed>> Array of row data
     */
    public function getRows(): array
    {
        return $this->rows ?? [];
    }

    /**
     * Get the schema definition for this model.
     *
     * Schema defines column types explicitly. If not provided, types are
     * automatically inferred from the first row of data.
     *
     * ## Supported Types:
     * - `integer` - Integer numbers
     * - `bigInteger` - Large integers
     * - `float` - Floating point numbers
     * - `double` - Double precision floats
     * - `decimal` - Decimal numbers
     * - `string` - Text strings
     * - `text` - Long text
     * - `boolean` - True/false values
     * - `date` - Date only
     * - `dateTime` - Date and time
     * - `timestamp` - Unix timestamp
     * - `time` - Time only
     * - `json` - JSON data
     *
     * ## Example:
     * ```php
     * protected array $schema = [
     *     'id' => 'integer',
     *     'name' => 'string',
     *     'email' => 'string',
     *     'active' => 'boolean',
     *     'level' => 'integer',
     *     'created_at' => 'dateTime',
     * ];
     * ```
     *
     * @return array<string, string> Column name => type mapping
     */
    public function getSchema(): array
    {
        return $this->schema ?? [];
    }

    /**
     * Migrate data into the SQLite database.
     *
     * Creates the table schema and inserts all rows.
     * This is called during cache rebuild or in-memory setup.
     *
     * ## Process:
     * 1. Get rows from model
     * 2. Create table with appropriate schema
     * 3. Insert rows in chunks for performance
     */
    public function migrateData(): void
    {
        $rows = $this->getRows();
        $tableName = $this->getTable();

        // Create table based on data availability
        if (count($rows) > 0) {
            // Create table from first row (infer schema)
            $this->createTableFromData($tableName, $rows[0]);
        } else {
            // Create table from explicit schema
            $this->createTableFromSchema($tableName);
        }

        // Insert rows in chunks for better performance
        $chunkSize = $this->getInsertChunkSize();

        foreach (Arr::chunk($rows, $chunkSize) as $chunk) {
            if (! empty($chunk)) {
                static::insert($chunk);
            }
        }
    }

    /**
     * Create table from data (infer schema from first row).
     *
     * Analyzes the first row to determine column types automatically.
     * Falls back to explicit schema if provided.
     *
     * ## Type Inference:
     * - `int` → `integer`
     * - `float` → `float`
     * - `string` → `string`
     * - `DateTime` → `dateTime`
     * - Default → `string`
     *
     * @param string               $tableName Table name
     * @param array<string, mixed> $firstRow  First row of data
     */
    public function createTableFromData(string $tableName, array $firstRow): void
    {
        $this->createTableSafely($tableName, function (Blueprint $blueprint) use ($firstRow): void {
            // Add auto-increment primary key if needed
            if ($this->incrementing && ! Arr::key_exists($this->primaryKey, $firstRow)) {
                $blueprint->increments($this->primaryKey);
            }

            $schema = $this->getSchema();

            // Create columns based on first row
            foreach ($firstRow as $column => $value) {
                // Infer type from value
                $type = match (true) {
                    is_int($value) => 'integer',
                    is_float($value) => 'float',
                    is_bool($value) => 'boolean',
                    $value instanceof DateTime => 'dateTime',
                    default => 'string',
                };

                // Handle primary key
                if ($column === $this->primaryKey && $type === 'integer') {
                    $blueprint->increments($this->primaryKey);

                    continue;
                }

                // Override with explicit schema if provided
                $type = $schema[$column] ?? $type;

                // Create column
                $blueprint->{$type}($column)->nullable();
            }

            // Add timestamps if model uses them
            if ($this->usesTimestamps()) {
                $hasCreatedAt = Arr::key_exists('created_at', $firstRow);
                $hasUpdatedAt = Arr::key_exists('updated_at', $firstRow);

                if (! $hasCreatedAt || ! $hasUpdatedAt) {
                    $blueprint->timestamps();
                }
            }

            // Allow custom modifications
            $this->afterMigrate($blueprint);
        });
    }

    /**
     * Create table from explicit schema (no data available).
     *
     * Uses the $schema property to create table structure when
     * no data rows are available.
     *
     * @param string $tableName Table name
     */
    public function createTableFromSchema(string $tableName): void
    {
        $this->createTableSafely($tableName, function (Blueprint $blueprint): void {
            $schema = $this->getSchema();

            // Add auto-increment primary key if needed
            if ($this->incrementing && ! Arr::key_exists($this->primaryKey, $schema)) {
                $blueprint->increments($this->primaryKey);
            }

            // Create columns from schema
            foreach ($schema as $column => $type) {
                // Handle primary key
                if ($column === $this->primaryKey && $type === 'integer') {
                    $blueprint->increments($this->primaryKey);

                    continue;
                }

                // Create column
                $blueprint->{$type}($column)->nullable();
            }

            // Add timestamps if model uses them
            if ($this->usesTimestamps()) {
                $hasCreatedAt = Arr::key_exists('created_at', $schema);
                $hasUpdatedAt = Arr::key_exists('updated_at', $schema);

                if (! $hasCreatedAt || ! $hasUpdatedAt) {
                    $blueprint->timestamps();
                }
            }

            // Allow custom modifications
            $this->afterMigrate($blueprint);
        });
    }

    /**
     * Determine if model uses timestamps.
     *
     * Overrides Laravel's default behavior to only enable timestamps
     * if explicitly set in the model class (not inherited).
     *
     * @return bool True if model uses timestamps
     */
    public function usesTimestamps(): bool
    {
        // Check if $timestamps property is defined in this class (not inherited)
        $reflectionProperty = new ReflectionProperty($this, 'timestamps');

        return $reflectionProperty->class === static::class
            ? parent::usesTimestamps()
            : false;
    }

    /**
     * Get the insert chunk size.
     *
     * Determines how many rows to insert at once.
     * Larger chunks are faster but use more memory.
     *
     * ## Configuration:
     * ```php
     * protected int $insertChunkSize = 50; // Default: 100
     * ```
     *
     * @return int Number of rows per insert batch
     */
    public function getInsertChunkSize(): int
    {
        return $this->insertChunkSize ?? 100;
    }

    /**
     * Get the connection name for this model.
     *
     * Returns the model class name as the connection name.
     * This ensures each model gets its own isolated connection.
     *
     * @return string Connection name (model class name)
     */
    public function getConnectionName(): string
    {
        return static::class;
    }

    /**
     * Get the file path used as cache reference.
     *
     * Returns the path to the model class file. This is used to determine
     * if the cache needs to be invalidated (when model file is modified).
     *
     * @return string Absolute path to model file
     */
    protected function getCacheReferencePath(): string
    {
        return new ReflectionClass(static::class)->getFileName();
    }

    /**
     * Determine if this model should use file-based caching.
     *
     * Caching is enabled when:
     * - Model has a $rows property (static data)
     * - $shouldCache property is not set to false
     *
     * Caching is disabled when:
     * - Data is dynamic (getRows() is overridden without $rows property)
     * - $shouldCache is explicitly set to false
     *
     * ## Example:
     * ```php
     * // Enable caching (default)
     * protected array $rows = [...];
     *
     * // Disable caching
     * protected bool $shouldCache = false;
     * ```
     *
     * @return bool True if caching should be used
     */
    protected function shouldUseCache(): bool
    {
        // Check if explicitly disabled
        if (property_exists($this, 'shouldCache') && $this->shouldCache === false) {
            return false;
        }

        // Enable caching if $rows property exists (static data)
        return property_exists(static::class, 'rows');
    }

    /**
     * Get the full cache file path.
     *
     * Combines cache directory and filename to create the full path
     * where the SQLite database file will be stored.
     *
     * ## Example Path:
     * ```
     * /var/www/storage/framework/cache/models/array-model-app-models-role.sqlite
     * ```
     *
     * @return string Absolute path to cache file
     */
    protected function getCachePath(): string
    {
        return implode(DIRECTORY_SEPARATOR, [
            $this->getCacheDirectory(),
            $this->getCacheFileName(),
        ]);
    }

    /**
     * Get the cache file name.
     *
     * Generates a unique filename based on the model class name.
     * Format: `{prefix}-{kebab-case-class-name}.sqlite`
     *
     * ## Examples:
     * - `App\Models\Role` → `array-model-app-models-role.sqlite`
     * - `App\Models\UserStatus` → `array-model-app-models-user-status.sqlite`
     *
     * @return string Cache filename
     */
    protected function getCacheFileName(): string
    {
        $prefix = config('database.Arr::backed.cache_prefix', 'array-model');
        $className = Str::kebab(Str::replace('\\', '-', static::class));

        return "{$prefix}-{$className}.sqlite";
    }

    /**
     * Get the cache directory path.
     *
     * Returns the directory where cache files are stored.
     * Defaults to Laravel's cache directory.
     *
     * ## Configuration:
     * ```php
     * // config/database.php
     * 'Arr::backed' => [
     *     'cache_path' => storage_path('framework/cache/models'),
     * ],
     * ```
     *
     * @return string Absolute path to cache directory
     */
    protected function getCacheDirectory(): string
    {
        $path = config(
            'database.Arr::backed.cache_path',
            storage_path('framework/cache')
        );

        return realpath($path) ?: $path;
    }

    /**
     * Handle related model instantiation.
     *
     * Ensures related models use the correct database connection.
     * This is important for relationships to work properly.
     *
     * @param  string $class Related model class name
     * @return mixed  Related model instance
     */
    protected function newRelatedInstance($class)
    {
        return tap(new $class(), function (object $instance): void {
            if (! $instance->getConnectionName()) {
                $instance->setConnection(
                    $this->getConnectionResolver()->getDefaultConnection()
                );
            }
        });
    }

    /**
     * Hook for custom table modifications.
     *
     * Override this method to add indexes, foreign keys, or other
     * custom schema modifications after the table is created.
     *
     * ## Example:
     * ```php
     * protected function afterMigrate(Blueprint $table): void
     * {
     *     $table->index('name');
     *     $table->unique('email');
     * }
     * ```
     *
     * @param Blueprint $blueprint Table blueprint
     */
    protected function afterMigrate(Blueprint $blueprint): void
    {
        // Override in model to add custom schema modifications
    }

    /**
     * Create table safely (handle race conditions).
     *
     * Wraps table creation in try-catch to handle race conditions
     * where multiple requests try to create the same table simultaneously.
     *
     * @param string  $tableName Table name
     * @param Closure $callback  Table definition callback
     *
     * @throws QueryException If table creation fails for reasons other than "already exists"
     */
    protected function createTableSafely(string $tableName, Closure $callback): void
    {
        /** @var SQLiteBuilder $schemaBuilder */
        $schemaBuilder = static::resolveConnection()->getSchemaBuilder();

        try {
            $schemaBuilder->create($tableName, $callback);
        } catch (QueryException $queryException) {
            // Check if error is due to table already existing (race condition)
            $isTableExistsError = Str::contains($queryException->getMessage(), [
                'already exists (SQL: create table',
                Str::format('table "%s" already exists', $tableName),
            ]);

            if ($isTableExistsError) {
                // This is expected in race conditions - multiple requests
                // may both see the need to create the table, but only one succeeds
                return;
            }

            // Re-throw if it's a different error
            throw $queryException;
        }
    }
}
