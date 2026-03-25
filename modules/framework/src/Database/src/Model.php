<?php

declare(strict_types=1);

namespace Pixielity\Database;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;
use Override;
use Pixielity\Database\Concerns\HasDeprecatedMethods;
use Pixielity\Database\Concerns\HasModelExtender;
use Pixielity\Database\Contracts\ModelInterface;
use Pixielity\Database\Enums\SearchEngine;
use Pixielity\Foundation\Enums\DataType;

/**
 * Base Model.
 *
 * Abstract base class for all application models providing common functionality
 * with property-based configuration.
 *
 * ## 🎯 Philosophy
 * All features are conditionally applied based on property flags.
 * Zero overhead when disabled - traits check flags in boot methods.
 *
 * ## ✨ Available Features (18 Total)
 *
 * 1. **Search (Scout)** - Full-text search with multiple engines
 * 2. **Sortable** - Drag & drop ordering
 * 3. **Slugs** - SEO-friendly URLs
 * 4. **Tags** - Tagging system
 * 5. **Versions** - Version control & rollback
 * 6. **Translations** - Multi-language JSON fields
 * 7. **Auditing** - Audit trails (who/when/what changed)
 * 8. **Feature Flags** - Per-user feature toggles
 * 9. **Magic Methods** - Magento-style getters/setters (always enabled)
 * 10. **Purgeable** - Remove temporary attributes before save
 * 11. **Nullable** - Convert empty strings to NULL
 * 12. **Hashable** - Auto-hash passwords
 * 13. **Encryptable** - Auto-encrypt sensitive data
 * 14. **Defaultable** - Ensure only one default record
 * 15. **Base Identifier** - Random public-facing IDs
 * 16. **Validation** - Model-level validation before save
 * 17. **Filtering (Purity)** - Advanced query filtering via URL parameters
 * 18. **Sorting (Purity)** - Multi-field sorting via URL parameters
 *
 * ## 🚀 Quick Start
 *
 * ### Minimal Model:
 * ```php
 * class Post extends Model
 * {
 *     // protected $fillable = ['title', 'content'];
 * }
 *
 * // Magic methods work automatically!
 * $post->setTitle('Hello')->setContent('World')->save();
 * echo $post->getTitle(); // "Hello"
 *
 * // Search works automatically!
 * $posts = Post::search('laravel')->get();
 *
 * // Filtering and sorting work automatically!
 * $posts = Post::filter()->sort()->get();
 * // GET /api/posts?filters[status][$eq]=published&sort=-created_at
 * ```
 *
 * ### Enable Multiple Features:
 * ```php
 * class Post extends Model
 * {
 *     // protected bool|array $sluggable = true;
 *     // protected bool|array $sortable = true;
 *     // protected bool|array $taggable = true;
 *     // protected bool|array $versionable = true;
 *     // protected bool|array $translatable = ['title', 'content'];
 *     // protected bool $auditable = true;
 *     // protected bool $featurable = true;
 *     // protected array $rules = ['title' => 'required|min:3'];
 *     // protected array $filterFields = ['title', 'status', 'author'];
 *     // protected array $sortFields = ['title', 'created_at'];
 * }
 * ```
 *
 * ### Full Featured Model:
 * ```php
 * use Pixielity\Database\Contracts\Auditable;
 * use Pixielity\Database\Contracts\TranslatableInterface;
 * use Pixielity\Database\Enums\SearchEngine;
 * use Spatie\EloquentSortable\Sortable;
 *
 * class Post extends Model implements
 *     Auditable,
 *     TranslatableInterface,
 *     Sortable
 * {
 *     // Enable all features
 *     // protected bool $auditable = true;
 *     // protected bool|array $translatable = ['title', 'content'];
 *     // protected bool $searchable = true;
 *     protected SearchEngine $searchEngine = SearchEngine::MEILISEARCH();
 *     // protected array $searchableAttributes = ['status'];
 *     // protected bool|array $sortable = ['order_column_name' => 'order_column'];
 *     // protected bool|array $sluggable = ['source' => 'title'];
 *     // protected bool|array $taggable = true;
 *     // protected bool|array $versionable = ['attributes' => ['title', 'content']];
 *     // protected array $filterFields = ['title', 'status', 'author'];
 *     // protected array $sortFields = ['title', 'created_at', 'views'];
 * }
 * ```
 *
 * ## 📚 Property Reference
 *
 * ### Search Properties:
 * - `$searchable` (bool) - Enable/disable search (default: true)
 * - `$searchEngine` (SearchEngine) - Engine to use (default: COLLECTION)
 * - `$searchableAttributes` (array) - Fields to index (default: all)
 * - `$searchableIndex` (string|null) - Custom index name
 *
 * ### Sortable Properties:
 * - `$sortable` (bool|array) - Enable sorting
 *   - `['order_column_name' => 'order_column']`
 *   - `['sort_when_creating' => true]`
 *
 * ### Slug Properties:
 * - `$sluggable` (bool|array) - Enable slug generation
 *   - `['source' => 'title']`
 *   - `['saveTo' => 'slug']`
 *
 * ### Tag Properties:
 * - `$taggable` (bool|array) - Enable tagging
 *   - `['type' => 'posts']`
 *
 * ### Version Properties:
 * - `$versionable` (bool|array) - Enable versioning
 *   - `['attributes' => ['*']]`
 *
 * ### Translation Properties:
 * - `$translatable` (bool|array) - Enable translations
 *   - `['title', 'content']`
 *
 * ### Audit Properties:
 * - `$auditable` (bool) - Enable auditing (default: false)
 *
 * ### Feature Flag Properties:
 * - `$featurable` (bool) - Enable feature flags (default: false)
 *
 * ### Validation Properties:
 * - `$rules` (array) - Validation rules for create operations
 *   - `['email' => 'required|email', 'name' => 'required|min:3']`
 * - `$rulesUpdate` (array) - Validation rules for update operations (optional)
 *   - `['email' => 'required|email', 'name' => 'sometimes|min:3']`
 * - `$customMessages` (array) - Custom validation messages
 *   - `['email.required' => 'Email is required']`
 * - `$customAttributes` (array) - Custom attribute names
 *   - `['email' => 'email address']`
 *
 * ## 🎨 Usage Examples
 *
 * ### Search with Translations:
 * ```php
 * class Post extends Model implements TranslatableInterface
 * {
 *     // protected bool|array $translatable = ['title', 'content'];
 *     // protected bool $searchable = true;
 * }
 *
 * // Automatically indexes: title_en, title_ar, content_en, content_ar
 * Post::search('hello')->get();   // Searches English
 * Post::search('مرحبا')->get();    // Searches Arabic
 * ```
 *
 * ### Sortable with Slugs:
 * ```php
 * class MenuItem extends Model implements Sortable
 * {
 *     // protected bool|array $sortable = true;
 *     // protected bool|array $sluggable = true;
 * }
 *
 * $item->moveToStart();
 * echo $item->slug; // auto-generated
 * ```
 *
 * ### Audit with Versions:
 * ```php
 * class Document extends Model
 * {
 *     // protected bool $auditable = true;
 *     // protected bool|array $versionable = true;
 * }
 *
 * $doc->update(['title' => 'New']);
 * $audits = $doc->audits;
 * $versions = $doc->versions;
 * $doc->revertToVersion($versionId);
 * ```
 *
 * ### Model-Level Validation:
 * ```php
 * class User extends Model
 * {
 *     // protected array $rules = [
 *         'email' => 'required|email|unique:users',
 *         'password' => 'required|min:8',
 *     ];
 *
 *     // protected array $customMessages = [
 *         'email.required' => 'Email is required',
 *     ];
 * }
 *
 * $user = new User(['email' => 'invalid']);
 * $user->save(); // Throws ValidationException
 * $user->saveWithoutValidation(); // Skips validation
 * ```
 *
 * ## 🔧 Configuration Files
 *
 * - `config/scout.php` - Search engines
 * - `config/localization.php` - Languages
 * - `config/audit.php` - Auditing
 *
 * ## 📊 Performance
 *
 * - **Zero overhead when disabled** - Traits check property flags in boot()
 * - **Lazy loading** - Features only load when used
 * - **Cached attributes** - Composer caches attribute collection
 * - **Optimized queries** - All packages use efficient queries
 *
 * ## 📖 Documentation
 *
 * See `src/pixielity/laravel-Common/src/Database/README.md` for complete documentation.
 * See `src/pixielity/laravel-Common/src/Database/Examples/` for examples.
 *
 * @see HasModelExtender
 *
 * @category   Database
 *
 * @since      1.0.0
 */
abstract class Model extends BaseModel implements ModelInterface
{
    use HasDeprecatedMethods;
    use HasFactory;
    use HasModelExtender;

    /**
     * abstract class Model extends BaseModel implements ModelInterface
     * {
     *     use HasFactory;
     *     use HasModelExtender;
     *     use Filterable;
     *     use Sortable;.
     *     /**
     * Indicates if the IDs are auto-incrementing.
     */
    public $incrementing = true;

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    /**
     * The storage format of the model's date columns.
     *
     * @var string|null
     */
    protected $dateFormat;

    /**
     * The relationship counts that should be eager loaded on every query.
     *
     * @var array<int, string>
     */
    protected $withCount = [];

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = DataType::INT->value;

    /**
     * Enable/disable auditing for this model.
     */
    protected bool $auditable = false;

    /**
     * Enable/disable translations for this model.
     *
     * @var bool|array<int, string>
     */
    protected bool|array $translatable = false;

    /**
     * Enable/disable search indexing for this model.
     */
    protected bool $searchable = true;

    /**
     * Search engine to use for this model.
     */
    protected SearchEngine|string $searchEngine = SearchEngine::COLLECTION->value;

    /**
     * Attributes to index for search.
     *
     * @var array<int, string>
     */
    protected array $searchables = [];

    /**
     * Custom search index name.
     */
    protected ?string $searchableIndex = null;

    /**
     * Enable/disable base identifier generation (random public IDs).
     */
    protected bool $baseIdentifiable = true;

    /**
     * List of available filters for Purity filtering.
     * If not set, uses config('purity.filters').
     *
     * @var array<int, string>|null
     */
    protected ?array $filters = null;

    /**
     * List of fields available for filtering.
     * If not set, all table columns and relations are available.
     *
     * @var array<int|string, string>|null
     */
    protected ?array $filterFields = null;

    /**
     * Restrict specific filters to specific fields.
     * Format: ['field' => ['$eq', '$contains'], 'other_field:$eq,$gt'].
     *
     * @var array<string, array<int, string>|string>|null
     */
    protected ?array $restrictedFilters = null;

    /**
     * Rename filter fields for API (field => alias).
     * Example: ['created_at' => 'date', 'user_id' => 'author'].
     *
     * @var array<string, string>|null
     */
    protected ?array $renamedFilterFields = null;

    /**
     * List of fields available for sorting.
     * If not set, all table columns and relations are available.
     *
     * @var array<int, string>|null
     */
    protected ?array $sortFields = null;

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    #[Override]
    protected function casts(): array
    {
        return [];
    }
}
