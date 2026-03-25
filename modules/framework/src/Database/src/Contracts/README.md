# Database Contracts (Interfaces)

Comprehensive interfaces for all database model traits and functionality.

## Overview

This directory contains all interfaces that define contracts for database model traits. Each trait has a corresponding interface that documents its public API with comprehensive PHPDoc annotations for excellent IDE support.

## Interface List

### Core Model Interface

- **ModelInterface** - Main interface extending all trait interfaces with full Eloquent method documentation

### Feature Interfaces

1. **HasSlug** - SEO-friendly URL slugs
2. **HasTags** - Tagging system
3. **HasSorting** - Query-level sorting
4. **HasSortable** - Drag-and-drop ordering
5. **HasFeatures** - Feature flags
6. **HasTimestamps** - Timestamp management
7. **HasTranslations** - Multi-language support
8. **HasBaseIdentifier** - Random public IDs
9. **HasDefaultable** - Single default record
10. **HasEncryptable** - Auto-encrypt sensitive data
11. **HasHashable** - Auto-hash passwords
12. **HasMagicMethods** - Magento-style getters/setters
13. **HasNullable** - Convert empty strings to NULL
14. **HasPurgeable** - Remove temporary attributes
15. **HasSearch** - Full-text search (Scout)
16. **HasValidation** - Model-level validation
17. **HasVersions** - Version control & rollback
18. **HasModelHelpers** - Additional helper methods
19. **Auditable** - Audit trails (from Common module)

## PHPDoc Annotations

Each interface includes comprehensive annotations:

### @property and @property-read

Documents properties available on models implementing the interface.

```php
/**
 * @property string|null $slug The slug value
 * @property-read array $tags Collection of tags
 */
```

### @method

Documents all public methods with full signatures.

```php
/**
 * @method string|null getSlug() Get the slug value
 * @method self setSlug(string $slug) Set the slug value
 * @method bool hasSlug() Check if the model has a slug
 */
```

### @mixin

Documents trait/class mixins for IDE autocomplete.

```php
/**
 * @mixin \Illuminate\Database\Eloquent\Model
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
```

## ModelInterface Features

The main `ModelInterface` extends all trait interfaces and includes:

### 1. All Trait Interfaces

Extends all 19 trait interfaces ensuring models implement all features.

### 2. Eloquent Core Methods

- Primary key methods (`getKey()`, `getKeyName()`)
- Table methods (`getTable()`, `getConnection()`)
- Attribute methods (`getAttribute()`, `setAttribute()`, `getAttributes()`)
- Persistence methods (`save()`, `update()`, `delete()`, `restore()`)
- Serialization methods (`toArray()`, `toJson()`)

### 3. Query Builder Methods

Complete documentation of all Eloquent query builder methods:

- Where clauses (`where()`, `whereIn()`, `whereNull()`, etc.)
- Ordering (`orderBy()`, `latest()`, `oldest()`)
- Limiting (`limit()`, `offset()`, `take()`, `skip()`)
- Eager loading (`with()`, `withCount()`)
- Relationships (`has()`, `whereHas()`, `doesntHave()`)

### 4. Retrieval Methods

- `all()`, `find()`, `findMany()`, `findOrFail()`
- `first()`, `firstOrFail()`, `firstOrNew()`, `firstOrCreate()`
- `get()`, `paginate()`, `simplePaginate()`, `cursorPaginate()`
- Aggregates (`count()`, `sum()`, `avg()`, `min()`, `max()`)

### 5. Persistence Methods

- `create()`, `forceCreate()`
- `update()`, `increment()`, `decrement()`
- `delete()`, `forceDelete()`, `restore()`, `truncate()`

### 6. Relationship Methods

- `hasOne()`, `hasMany()`, `belongsTo()`, `belongsToMany()`
- `morphTo()`, `morphOne()`, `morphMany()`, `morphToMany()`

### 7. Event Methods

- `creating()`, `created()`, `updating()`, `updated()`
- `saving()`, `saved()`, `deleting()`, `deleted()`
- `restoring()`, `restored()`, `replicating()`

### 8. Scope Methods

- `scopes()`, `withGlobalScope()`, `withoutGlobalScope()`

## Usage Example

```php
use Pixielity\Database\Contracts\ModelInterface;

class Post extends Model implements ModelInterface
{
    // All trait interfaces are automatically satisfied
    // IDE provides full autocomplete for all methods

    protected bool $sluggable = true;
    protected bool $taggable = true;
    protected bool $searchable = true;
    protected array $translatable = ['title', 'content'];
}

// IDE autocomplete works perfectly
$post = Post::create(['title' => 'Hello World']);
$post->setSlug('hello-world');
$post->attachTags(['laravel', 'php']);
$post->setTranslation('title', 'Hola Mundo', 'es');
$post->save();

// Query builder methods
$posts = Post::where('status', 'published')
    ->whereHas('tags', fn($q) => $q->where('name', 'laravel'))
    ->with(['tags', 'author'])
    ->latest()
    ->paginate(15);
```

## Benefits

### 1. Type Safety

All methods have proper type hints and return types.

### 2. IDE Support

Comprehensive PHPDoc provides excellent autocomplete and inline documentation.

### 3. Documentation

Each interface serves as living documentation for its trait.

### 4. Contract Enforcement

Interfaces ensure traits implement required methods.

### 5. Consistency

All models follow the same patterns and conventions.

## Implementation Guidelines

### 1. Always Implement ModelInterface

```php
class YourModel extends Model implements ModelInterface
{
    // Your model code
}
```

### 2. Enable Features via Properties

```php
protected bool $sluggable = true;
protected bool $taggable = true;
protected array $translatable = ['title'];
```

### 3. Use Type Hints

```php
public function getSlug(): ?string
{
    return $this->slug;
}
```

### 4. Return Self for Chaining

```php
public function setSlug(string $slug): self
{
    $this->slug = $slug;
    return $this;
}
```

## Testing

All interfaces can be tested using PHPUnit:

```php
public function test_model_implements_interface(): void
{
    $model = new Post();

    $this->assertInstanceOf(ModelInterface::class, $model);
    $this->assertInstanceOf(HasSlug::class, $model);
    $this->assertInstanceOf(HasTags::class, $model);
}
```

## Contributing

When adding new traits:

1. Create a corresponding interface in this directory
2. Add comprehensive PHPDoc annotations
3. Extend ModelInterface with the new interface
4. Update this README

## Related Documentation

- [Model Documentation](../README.md)
- [Trait Documentation](../Traits/README.md)
- [Usage Examples](../Examples/README.md)
