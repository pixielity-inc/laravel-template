# Database Package

Enhanced database utilities and traits for Laravel applications.

## Features

### 1. InMemoryModel Trait

Create Eloquent models backed by array data stored in SQLite (in-memory or file-cached).

### 2. DataObjectModel Base Class

Eloquent model with DataObject integration for magic getter/setter support.

### 3. InMemoryDataModel Base Class

Combines InMemoryModel + DataObjectModel for the best of both worlds.

Perfect for:

- Static/seed data (roles, statuses, countries)
- Configuration data stored in code
- Testing with fixture data
- Small lookup tables
- Enum-like data structures

## Installation

The package is part of the Pixielity framework and is automatically available.

## Quick Start

### Option 1: InMemoryModel Trait (Basic)

```php
use Pixielity\Database\Traits\InMemoryModel;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use InMemoryModel;

    protected array $rows = [
        ['id' => 1, 'name' => 'Admin', 'level' => 10],
        ['id' => 2, 'name' => 'Editor', 'level' => 5],
        ['id' => 3, 'name' => 'User', 'level' => 1],
    ];
}

// Use like any Eloquent model
$admin = Role::find(1);
$editors = Role::where('level', '>=', 5)->get();
$all = Role::all();
```

### With Custom Schema

```php
class Status extends Model
{
    use ArrayBackedModel;

    protected array $rows = [
        ['id' => 1, 'name' => 'Active', 'color' => '#00FF00', 'active' => true],
        ['id' => 2, 'name' => 'Inactive', 'color' => '#FF0000', 'active' => false],
    ];

    protected array $schema = [
        'id' => 'integer',
        'name' => 'string',
        'color' => 'string',
        'active' => 'boolean',
    ];
}
```

### With Dynamic Data

```php
class Country extends Model
{
    use ArrayBackedModel;

    public function getRows(): array
    {
        return json_decode(
            file_get_contents(resource_path('data/countries.json')),
            true
        );
    }

    protected array $schema = [
        'id' => 'integer',
        'code' => 'string',
        'name' => 'string',
    ];
}
```

### With Relationships

```php
class Category extends Model
{
    use ArrayBackedModel;

    protected array $rows = [
        ['id' => 1, 'name' => 'Electronics'],
        ['id' => 2, 'name' => 'Books'],
        ['id' => 3, 'name' => 'Clothing'],
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

// Use relationships normally
$category = Category::find(1);
$products = $category->products;
```

## Configuration

### Global Configuration

```php
// config/database.php

'array_backed' => [
    // Cache directory for SQLite files
    'cache_path' => storage_path('framework/cache/models'),

    // Cache file prefix
    'cache_prefix' => 'array-model',
],
```

### Per-Model Configuration

```php
class Role extends Model
{
    use ArrayBackedModel;

    // Custom insert chunk size (default: 100)
    protected int $insertChunkSize = 50;

    // Disable caching (always use in-memory)
    protected bool $shouldCache = false;

    // Custom data
    protected array $rows = [...];

    // Custom schema
    protected array $schema = [...];
}
```

## Schema Types

Supported column types:

| Type         | Description      | Example               |
| ------------ | ---------------- | --------------------- |
| `integer`    | Integer numbers  | `1`, `42`, `-10`      |
| `bigInteger` | Large integers   | `9223372036854775807` |
| `float`      | Floating point   | `3.14`, `2.5`         |
| `double`     | Double precision | `3.141592653589793`   |
| `decimal`    | Decimal numbers  | `19.99`, `100.50`     |
| `string`     | Text strings     | `"Hello"`, `"World"`  |
| `text`       | Long text        | Large text content    |
| `boolean`    | True/false       | `true`, `false`       |
| `date`       | Date only        | `2024-01-01`          |
| `dateTime`   | Date and time    | `2024-01-01 12:00:00` |
| `timestamp`  | Unix timestamp   | `1704067200`          |
| `time`       | Time only        | `12:00:00`            |
| `json`       | JSON data        | `{"key": "value"}`    |

## Automatic Type Inference

If you don't provide a schema, types are automatically inferred:

```php
protected array $rows = [
    [
        'id' => 1,              // → integer
        'name' => 'Admin',      // → string
        'level' => 10,          // → integer
        'rate' => 99.99,        // → float
        'active' => true,       // → boolean
        'created_at' => new DateTime(), // → dateTime
    ],
];
```

## Caching Strategy

### Cache States

1. **Cache Hit** (Fast - ~1-5ms)
    - Cache file exists
    - Cache is newer than model file
    - Uses existing SQLite file

2. **Cache Miss** (Rebuild - ~50-100ms)
    - Cache file doesn't exist OR
    - Cache is older than model file
    - Rebuilds SQLite file

3. **No Cache** (In-Memory - ~10-20ms)
    - Caching disabled OR
    - Cache directory not writable
    - Uses in-memory SQLite

### Cache Invalidation

Cache is automatically invalidated when:

- Model file is modified
- `$rows` property changes
- `getRows()` method changes

### Manual Cache Clear

```bash
# Clear all array-backed model caches
rm storage/framework/cache/array-model-*.sqlite

# Clear specific model cache
rm storage/framework/cache/array-model-app-models-role.sqlite
```

## Advanced Usage

### Custom Table Modifications

```php
class Role extends Model
{
    use ArrayBackedModel;

    protected array $rows = [...];

    protected function afterMigrate(Blueprint $table): void
    {
        // Add indexes
        $table->index('name');
        $table->index('level');

        // Add unique constraints
        $table->unique('name');
    }
}
```

### Loading from External Sources

```php
class Currency extends Model
{
    use ArrayBackedModel;

    public function getRows(): array
    {
        // From API with caching
        return cache()->remember('currencies', 3600, function () {
            return Http::get('https://api.example.com/currencies')->json();
        });
    }

    protected array $schema = [
        'code' => 'string',
        'name' => 'string',
        'symbol' => 'string',
        'rate' => 'float',
    ];
}
```

### With Timestamps

```php
class Status extends Model
{
    use ArrayBackedModel;

    // Enable timestamps
    public $timestamps = true;

    protected array $rows = [
        [
            'id' => 1,
            'name' => 'Active',
            'created_at' => '2024-01-01 00:00:00',
            'updated_at' => '2024-01-01 00:00:00',
        ],
    ];
}
```

### Disable Caching

```php
class DynamicData extends Model
{
    use ArrayBackedModel;

    // Disable caching (always use in-memory)
    protected bool $shouldCache = false;

    public function getRows(): array
    {
        // Fetch fresh data every time
        return Http::get('https://api.example.com/data')->json();
    }
}
```

## Performance Tips

### ✅ DO

- Use for static data (< 10,000 rows)
- Define explicit schema for better performance
- Use appropriate chunk sizes for large datasets
- Enable caching for static data
- Use indexes for frequently queried columns

### ❌ DON'T

- Use for large datasets (> 10,000 rows)
- Use for frequently changing data
- Use for user-generated content
- Use as replacement for proper database tables
- Disable caching for static data

## Benchmarks

| Operation     | Cache Hit | Cache Miss | In-Memory |
| ------------- | --------- | ---------- | --------- |
| First Load    | -         | ~50-100ms  | ~10-20ms  |
| Subsequent    | ~1-5ms    | -          | ~10-20ms  |
| Query (find)  | ~0.1ms    | ~0.1ms     | ~0.1ms    |
| Query (where) | ~0.5ms    | ~0.5ms     | ~0.5ms    |

_Benchmarks based on 1,000 rows on average hardware_

## Testing

```php
use Tests\TestCase;

class RoleTest extends TestCase
{
    public function test_can_query_roles()
    {
        $admin = Role::where('name', 'Admin')->first();

        $this->assertNotNull($admin);
        $this->assertEquals(10, $admin->level);
    }

    public function test_can_use_relationships()
    {
        $category = Category::find(1);
        $products = $category->products;

        $this->assertInstanceOf(Collection::class, $products);
    }
}
```

## Troubleshooting

### Cache Directory Not Writable

**Error**: Falls back to in-memory database

**Solution**:

```bash
chmod 755 storage/framework/cache
```

### Table Already Exists

**Error**: `QueryException: table "..." already exists`

**Solution**: This is usually a race condition and is handled automatically. If it persists:

```bash
rm storage/framework/cache/array-model-*.sqlite
```

### Memory Issues with Large Datasets

**Error**: `Allowed memory size exhausted`

**Solution**:

- Reduce dataset size
- Increase `insertChunkSize`
- Use proper database table instead

## Comparison with Alternatives

### vs. Database Seeders

| Feature     | ArrayBackedModel | Seeders                |
| ----------- | ---------------- | ---------------------- |
| Setup       | Automatic        | Manual                 |
| Performance | Fast (cached)    | Slow (runs every time) |
| Testing     | Easy             | Complex                |
| Maintenance | Simple           | Requires migrations    |

### vs. Config Files

| Feature       | ArrayBackedModel | Config              |
| ------------- | ---------------- | ------------------- |
| Querying      | Full Eloquent    | Manual array search |
| Relationships | Yes              | No                  |
| Caching       | Automatic        | Manual              |
| Type Safety   | Yes              | No                  |

### vs. Regular Models

| Feature     | ArrayBackedModel | Regular Model       |
| ----------- | ---------------- | ------------------- |
| Setup       | Simple           | Requires migrations |
| Performance | Fast             | Depends on DB       |
| Scalability | Limited          | Unlimited           |
| Best For    | Static data      | Dynamic data        |

## Examples

See the `examples/` directory for complete working examples:

- `examples/RoleModel.php` - Basic usage
- `examples/CountryModel.php` - With external data
- `examples/StatusModel.php` - With custom schema
- `examples/CategoryModel.php` - With relationships

## License

MIT License

## Credits

Inspired by [calebporzio/sushi](https://github.com/calebporzio/sushi) with enhancements:

- Better documentation
- Enhanced caching strategy
- Improved error handling
- More configuration options
- Better type inference
- Laravel 11+ compatibility
