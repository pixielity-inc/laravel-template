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
 * with property-based OR attribute-based configuration.
 *
 * ## 🎯 Philosophy
 * All features are conditionally applied based on property flags OR PHP attributes.
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
 *     protected $fillable = ['title', 'content'];
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
 * ### Modern Attribute-Based Configuration (Recommended):
 * ```php
 * use Pixielity\Database\Attributes\{Auditable, Filterable, Searchable, Sortable, Translatable};
 *
 * #[Translatable(['title', 'content'])]
 * #[Searchable(fields: ['title', 'content'], engine: 'meilisearch')]
 * #[Filterable(fields: ['status', 'created_at', 'author_id'])]
 * #[Sortable(['title', 'created_at', 'views'])]
 * #[Auditable]
 * class Post extends Model
 * {
 *     use HasTranslations, HasSearch;
 *
 *     protected $fillable = ['title', 'content', 'status'];
 * }
 * ```
 *
 * ### Property-Based Configuration (Legacy, Still Supported):
 * ```php
 * class Post extends Model
 * {
 *     protected bool|array $translatable = ['title', 'content'];
 *     protected bool $searchable = true;
 *     protected array $searchableAttributes = ['title', 'content'];
 *     protected SearchEngine $searchEngine = SearchEngine::MEILISEARCH;
 *     protected bool $auditable = true;
 *     protected array $filterFields = ['status', 'created_at'];
 *     protected array $sortFields = ['title', 'created_at'];
 * }
 * ```
 *
 * ## 📚 Attribute Reference (Modern Approach)
 *
 * ### #[Translatable]
 * ```php
 * #[Translatable(['title', 'content', 'excerpt'])]
 * class Post extends Model
 * {
 *     use HasTranslations;
 * }
 * ```
 *
 * ### #[Searchable]
 * ```php
 * #[Searchable(
 *     fields: ['title', 'content'],
 *     engine: 'meilisearch',
 *     index: 'posts_v2'
 * )]
 * class Post extends Model
 * {
 *     use HasSearch;
 * }
 * ```
 *
 * ### #[Filterable]
 * ```php
 * #[Filterable(
 *     fields: ['title', 'status', 'created_at'],
 *     filters: ['$eq', '$contains', '$gt', '$lt'],
 *     restricted: [
 *         'title' => ['$eq', '$contains'],
 *         'status' => ['$eq', '$in'],
 *     ],
 *     renamed: ['created_at' => 'date']
 * )]
 * class Post extends Model {}
 * ```
 *
 * ### #[Sortable]
 * ```php
 * #[Sortable(
 *     fields: ['title', 'created_at', 'views'],
 *     renamed: ['created_at' => 'date']
 * )]
 * class Post extends Model {}
 * ```
 *
 * ### #[Auditable]
 * ```php
 * #[Auditable(
 *     events: ['created', 'updated', 'deleted'],
 *     exclude: ['views', 'last_viewed_at']
 * )]
 * class Post extends Model {}
 * ```
 *
 * ## 📚 Property Reference (Legacy)
 *
 * ### Search Properties:
 * - `$searchable` (bool) - Enable/disable search (default: true)
 * - `$searchEngine` (SearchEngine) - Engine to use (default: COLLECTION)
 * - `$searchableAttributes` (array) - Fields to index (default: all)
 * - `$searchableIndex` (string|null) - Custom index name
 *
 * ### Filter Properties:
 * - `$filters` (array|null) - Available filter operators
 * - `$filterFields` (array|null) - Fields available for filtering
 * - `$restrictedFilters` (array|null) - Restrict filters per field
 * - `$renamedFilterFields` (array|null) - Rename fields for API
 *
 * ### Sort Properties:
 * - `$sortFields` (array|null) - Fields available for sorting
 *
 * ### Translation Properties:
 * - `$translatable` (bool|array) - Enable translations
 *   - `['title', 'content']`
 *
 * ### Audit Properties:
 * - `$auditable` (bool) - Enable auditing (default: false)
 *
 * ## 🎨 Usage Examples
 *
 * ### Complete Modern Example:
 * ```php
 * use Pixielity\Database\Attributes\{Auditable, Filterable, Searchable, Sortable, Translatable};
 *
 * #[Translatable(['title', 'content'])]
 * #[Searchable(fields: ['title', 'content'], engine: 'meilisearch')]
 * #[Filterable(
 *     fields: ['status', 'author_id', 'created_at'],
 *     renamed: ['created_at' => 'date', 'author_id' => 'author']
 * )]
 * #[Sortable(fields: ['title', 'created_at', 'views'])]
 * #[Auditable]
 * class Post extends Model
 * {
 *     use HasTranslations, HasSearch;
 *
 *     protected $fillable = ['title', 'content', 'status', 'author_id'];
 * }
 *
 * // API Usage:
 * // GET /api/posts?filter[status][$eq]=published&filter[date][$gt]=2024-01-01&sort=-date
 * ```
 *
 * ### Search with Translations:
 * ```php
 * #[Translatable(['title', 'content'])]
 * #[Searchable(['title', 'content'])]
 * class Post extends Model
 * {
 *     use HasTranslations, HasSearch;
 * }
 *
 * // Automatically indexes: title_en, title_ar, content_en, content_ar
 * Post::search('hello')->get();   // Searches English
 * Post::search('مرحبا')->get();    // Searches Arabic
 * ```
 *
 * ## 🔧 Configuration Files
 *
 * - `config/scout.php` - Search engines
 * - `config/localization.php` - Languages
 * - `config/audit.php` - Auditing
 * - `config/purity.php` - Filtering and sorting
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
 * See `modules/framework/src/Database/src/Attributes/README.md` for attribute documentation.
 * See `modules/framework/src/Database/README.md` for complete documentation.
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
     * Search engine to use for this model.
     */
    protected SearchEngine|string $searchEngine = SearchEngine::COLLECTION->value;

    /**
     * Enable/disable base identifier generation (random public IDs).
     */
    protected bool $baseIdentifiable = true;

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
