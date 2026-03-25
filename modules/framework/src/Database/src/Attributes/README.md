# Database Attributes

PHP attributes for database models and components.

## Model Attributes

### Translatable

Marks a model as having translatable fields. Modern alternative to `protected array $translatable`.

**Usage:**

```php
use Pixielity\Database\Attributes\Translatable;
use Pixielity\Database\Model;
use Pixielity\Database\Traits\HasTranslations;

// Basic usage
#[Translatable]
class Post extends Model
{
    use HasTranslations;
    
    protected array $translatable = ['title', 'content'];
}

// With fields in attribute
#[Translatable(['title', 'content', 'excerpt'])]
class Post extends Model
{
    use HasTranslations;
    // No need for $translatable property
}
```

**Priority:**
1. Fields from `#[Translatable]` attribute
2. Fields from `$translatable` property

---

### Searchable

Marks a model as searchable via Laravel Scout. Modern alternative to `protected bool $searchable`.

**Usage:**

```php
use Pixielity\Database\Attributes\Searchable;
use Pixielity\Database\Model;
use Pixielity\Database\Traits\HasSearch;

// Basic usage (all fields)
#[Searchable]
class Post extends Model
{
    use HasSearch;
}

// With specific fields
#[Searchable(['title', 'content', 'excerpt'])]
class Post extends Model
{
    use HasSearch;
}

// With search engine
#[Searchable(
    fields: ['title', 'content'],
    engine: 'meilisearch'
)]
class Post extends Model
{
    use HasSearch;
}

// Complete configuration
#[Searchable(
    fields: ['title', 'content'],
    engine: 'meilisearch',
    index: 'posts_v2'
)]
class Post extends Model
{
    use HasSearch;
}

// Disabled
#[Searchable(enabled: false)]
class Post extends Model
{
    use HasSearch;
}
```

**Available Engines:**
- `collection` - In-memory (default, no external service)
- `database` - Database LIKE queries
- `meilisearch` - Meilisearch (fast, typo-tolerant)
- `algolia` - Algolia (powerful, hosted)
- `typesense` - Typesense (open-source)

**Priority:**
1. Settings from `#[Searchable]` attribute
2. Settings from `$searchable` / `$searchableAttributes` / `$searchEngine` properties

---

### Combined Usage

```php
#[Translatable(['title', 'content'])]
#[Searchable(fields: ['title', 'excerpt'], engine: 'meilisearch')]
#[Filterable(fields: ['status', 'created_at'], renamed: ['created_at' => 'date'])]
#[Sortable(fields: ['title', 'created_at', 'views'])]
#[Auditable]
class Post extends Model
{
    use HasTranslations, HasSearch;
}
```

---

### Filterable

Marks a model as filterable via Purity filtering system. Modern alternative to `protected array $filterFields`.

**Usage:**

```php
use Pixielity\Database\Attributes\Filterable;
use Pixielity\Database\Model;

// Basic usage (all fields, all filters)
#[Filterable]
class Post extends Model {}

// With specific fields
#[Filterable(fields: ['title', 'status', 'created_at'])]
class Post extends Model {}

// With custom filters
#[Filterable(
    filters: ['$eq', '$contains', '$gt', '$lt'],
    fields: ['title', 'status', 'created_at']
)]
class Post extends Model {}

// With restricted filters per field
#[Filterable(
    fields: ['title', 'status', 'views', 'created_at'],
    restricted: [
        'title' => ['$eq', '$contains'],
        'status' => ['$eq', '$in'],
        'views' => ['$gt', '$lt', '$between'],
    ]
)]
class Post extends Model {}

// With field renaming
#[Filterable(
    fields: ['created_at', 'user_id'],
    renamed: [
        'created_at' => 'date',
        'user_id' => 'author',
    ]
)]
class Post extends Model {}
```

**Available Filters:**
- `$eq`, `$ne` - Equals, not equals
- `$gt`, `$gte`, `$lt`, `$lte` - Comparisons
- `$in`, `$notIn` - In array, not in array
- `$contains`, `$startsWith`, `$endsWith` - String matching
- `$between` - Between two values
- `$null`, `$notNull` - Null checks

**API Usage:**
```
GET /api/posts?filter[status][$eq]=published&filter[date][$gt]=2024-01-01
```

**Priority:**
1. Settings from `#[Filterable]` attribute
2. Settings from `$filters` / `$filterFields` properties

---

### Sortable

Marks a model as sortable via Purity sorting system. Modern alternative to `protected array $sortFields`.

**Usage:**

```php
use Pixielity\Database\Attributes\Sortable;
use Pixielity\Database\Model;

// Basic usage (all fields)
#[Sortable]
class Post extends Model {}

// With specific fields
#[Sortable(['title', 'status', 'views', 'created_at'])]
class Post extends Model {}

// With field renaming
#[Sortable(
    fields: ['title', 'created_at', 'user_id'],
    renamed: [
        'created_at' => 'date',
        'user_id' => 'author',
    ]
)]
class Post extends Model {}
```

**API Usage:**
```
GET /api/posts?sort=created_at          // Ascending
GET /api/posts?sort=-created_at         // Descending
GET /api/posts?sort=status,-created_at  // Multiple sorts
```

**Priority:**
1. Settings from `#[Sortable]` attribute
2. Settings from `$sortFields` property

---

### Auditable

Marks a model as auditable for change tracking. Modern alternative to `protected bool $auditable`.

**Usage:**

```php
use Pixielity\Database\Attributes\Auditable;
use Pixielity\Database\Model;

// Basic usage
#[Auditable]
class Post extends Model {}

// With specific events
#[Auditable(events: ['created', 'updated', 'deleted'])]
class Post extends Model {}

// With excluded fields
#[Auditable(exclude: ['views', 'last_viewed_at'])]
class Post extends Model {}

// Complete configuration
#[Auditable(
    events: ['created', 'updated', 'deleted', 'restored'],
    exclude: ['views', 'updated_at']
)]
class Post extends Model {}

// Disabled
#[Auditable(enabled: false)]
class Post extends Model {}
```

**Available Events:**
- `created`, `updated`, `deleted`, `restored`, `retrieved`

**Priority:**
1. Settings from `#[Auditable]` attribute
2. Settings from `$auditable` property

## Blueprint Attributes

### AsDatabaseBlueprint

Marks a class as containing Blueprint macros for automatic discovery and registration.

**Usage:**

```php
use Pixielity\Database\Attributes\AsDatabaseBlueprint;
use Illuminate\Database\Schema\Blueprint;

#[AsDatabaseBlueprint(
    description: 'Custom Blueprint macros',
    priority: 20
)]
class CustomBlueprint
{
    public function __invoke(): void
    {
        Blueprint::macro('status', function() {
            return $this->string('status', 50)->default('active');
        });
    }
}
```

**Priority System:**
- 10: Core/foundational macros
- 20: Common macros
- 30: Business-specific macros
- 100: Default

---

## Factory Attributes

### UseFactory

Automatically injects model factories into services via constructor parameters.

**Usage:**

```php
use Pixielity\Database\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserService
{
    public function __construct(
        #[UseFactory(User::class)]
        private Factory $userFactory
    ) {}
    
    public function createTestUser(): User
    {
        return $this->userFactory->create();
    }
}
```

---

## Benefits of Attributes

### Discoverability
- Easy to find models with specific features
- IDE autocomplete and validation
- Static analysis support

### Explicit Intent
- Clear declaration at class level
- Self-documenting code
- Reduces magic behavior

### Modern PHP
- Follows PHP 8+ patterns
- Type-safe configuration
- Better than doc comments

### Flexibility
- Can combine multiple attributes
- Attribute takes precedence over properties
- Backward compatible with property-based config

---

## Migration Guide

### From Properties to Attributes

**Before:**
```php
class Post extends Model
{
    use HasTranslations, HasSearch;
    
    protected array $translatable = ['title', 'content'];
    protected bool $searchable = true;
    protected array $searchableAttributes = ['title', 'excerpt'];
    protected string $searchEngine = 'meilisearch';
    protected string $searchableIndex = 'posts_v2';
}
```

**After:**
```php
#[Translatable(['title', 'content'])]
#[Searchable(
    fields: ['title', 'excerpt'],
    engine: 'meilisearch',
    index: 'posts_v2'
)]
class Post extends Model
{
    use HasTranslations, HasSearch;
}
```

### Gradual Migration

You can use both approaches simultaneously. Attributes take precedence:

```php
#[Translatable(['title', 'content', 'excerpt'])]
class Post extends Model
{
    use HasTranslations;
    
    // This will be ignored (attribute takes precedence)
    protected array $translatable = ['title', 'content'];
}
```

---

## Related Documentation

- [HasTranslations Trait](../Traits/HasTranslations.php)
- [HasSearch Trait](../Traits/HasSearch.php)
- [Blueprint Macros](../Schema/README.md)
