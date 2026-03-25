<?php

declare(strict_types=1);

namespace Pixielity\Database;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Pixielity\Database\Traits\InMemoryModel;

/**
 * In-Memory Data Model.
 *
 * Combines DataObjectModel with InMemoryModel trait to create models that:
 * - Are backed by array data stored in SQLite (in-memory or cached)
 * - Have DataObject magic getter/setter support
 * - Support dot notation and fluent interface
 *
 * ## Features:
 *
 * ### 1. Array-Based Data (from InMemoryModel)
 * Define data as PHP arrays:
 * ```php
 * protected array $rows = [
 *     ['id' => 1, 'name' => 'Admin', 'level' => 10],
 *     ['id' => 2, 'name' => 'User', 'level' => 1],
 * ];
 * ```
 *
 * ### 2. Magic Methods (from DataObjectModel)
 * Access attributes with camelCase methods:
 * ```php
 * $role->setName('Admin');
 * $name = $role->getName();
 * $hasName = $role->hasName();
 * ```
 *
 * ### 3. Automatic Caching
 * Data is cached in SQLite for performance
 *
 * ### 4. Full Eloquent Support
 * Use like any Eloquent model with queries, relationships, etc.
 *
 * ## Usage:
 *
 * ### Basic Example:
 * ```php
 * use Pixielity\Database\InMemoryDataModel;
 *
 * class Role extends InMemoryDataModel
 * {
 *     protected array $rows = [
 *         ['id' => 1, 'name' => 'Admin', 'level' => 10],
 *         ['id' => 2, 'name' => 'Editor', 'level' => 5],
 *         ['id' => 3, 'name' => 'User', 'level' => 1],
 *     ];
 * }
 *
 * // Query like normal Eloquent
 * $admin = Role::find(1);
 * $editors = Role::where('level', '>=', 5)->get();
 *
 * // Use magic methods
 * echo $admin->getName(); // "Admin"
 * echo $admin->getLevel(); // 10
 *
 * // Fluent interface
 * $role = new Role();
 * $role->setName('Moderator')
 *      ->setLevel(7);
 * ```
 *
 * ### With Custom Schema:
 * ```php
 * class Status extends InMemoryDataModel
 * {
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
 *
 *     // Custom method using magic getters
 *     public function isActive(): bool
 *     {
 *         return $this->getName() === 'Active';
 *     }
 * }
 *
 * $status = Status::find(1);
 * echo $status->getName(); // "Active"
 * echo $status->getColor(); // "#00FF00"
 * if ($status->isActive()) {
 *     // Status is active
 * }
 * ```
 *
 * ### With Dynamic Data:
 * ```php
 * class Country extends InMemoryDataModel
 * {
 *     public function getRows(): array
 *     {
 *         return json_decode(
 *             file_get_contents(resource_path('data/countries.json')),
 *             true
 *         );
 *     }
 *
 *     protected array $schema = [
 *         'id' => 'integer',
 *         'code' => 'string',
 *         'name' => 'string',
 *     ];
 * }
 *
 * $country = Country::where('code', 'US')->first();
 * echo $country->getName(); // "United States"
 * echo $country->getCode(); // "US"
 * ```
 *
 * ### With Relationships:
 * ```php
 * class Category extends InMemoryDataModel
 * {
 *     protected array $rows = [
 *         ['id' => 1, 'name' => 'Electronics'],
 *         ['id' => 2, 'name' => 'Books'],
 *     ];
 *
 *     public function products()
 *         return $this->hasMany(Product::class);
 *     }
 * }
 *
 * $category = Category::find(1);
 * echo $category->getName(); // "Electronics"
 * $products = $category->products; // Related products
 * ```
 *
 * ### With Nested Data:
 * ```php
 * class Config extends InMemoryDataModel
 * {
 *     protected array $rows = [
 *         [
 *             'id' => 1,
 *             'key' => 'app',
 *             'settings' => json_encode([
 *                 'name' => 'My App',
 *                 'version' => '1.0.0',
 *             ]),
 *         ],
 *     ];
 *
 *     protected array $schema = [
 *         'id' => 'integer',
 *         'key' => 'string',
 *         'settings' => 'json',
 *     ];
 *
 *     // Access nested data
 *     public function getSetting(string $key): mixed
 *     {
 *         $settings = $this->getSettings();
 *         return $settings[$key] ?? null;
 *     }
 * }
 *
 * $config = Config::where('key', 'app')->first();
 * echo $config->getSetting('name'); // "My App"
 * ```
 *
 * ## Advanced Usage:
 *
 * ### Combining Magic Methods with Eloquent:
 * ```php
 * class Permission extends InMemoryDataModel
 * {
 *     protected array $rows = [
 *         ['id' => 1, 'name' => 'create_posts', 'label' => 'Create Posts'],
 *         ['id' => 2, 'name' => 'edit_posts', 'label' => 'Edit Posts'],
 *         ['id' => 3, 'name' => 'delete_posts', 'label' => 'Delete Posts'],
 *     ];
 *
 *     // Scope using magic getter
 *     public function scopeForPosts($query)
 *     {
 *         return $query->where('name', 'like', '%_posts');
 *     }
 *
 *     // Accessor using magic getter
 *     public function getDisplayNameAttribute(): string
 *     {
 *         return $this->getLabel() . ' (' . $this->getName() . ')';
 *     }
 * }
 *
 * // Use scope
 * $postPermissions = Permission::forPosts()->get();
 *
 * // Use accessor
 * $permission = Permission::find(1);
 * echo $permission->display_name; // "Create Posts (create_posts)"
 * ```
 *
 * ### With Validation:
 * ```php
 * class Priority extends InMemoryDataModel
 * {
 *     protected array $rows = [
 *         ['id' => 1, 'name' => 'Low', 'value' => 1],
 *         ['id' => 2, 'name' => 'Medium', 'value' => 5],
 *         ['id' => 3, 'name' => 'High', 'value' => 10],
 *     ];
 *
 *     public static function rules(): array
 *     {
 *         return [
 *             'name' => 'required|string|max:50',
 *             'value' => 'required|integer|min:1|max:10',
 *         ];
 *     }
 *
 *     public function isHighPriority(): bool
 *     {
 *         return $this->getValue() >= 10;
 *     }
 * }
 * ```
 *
 * ## Configuration:
 *
 * ### Cache Settings:
 * ```php
 * // config/database.php
 * 'backed' => [
 *     'cache_path' => storage_path('framework/cache/models'),
 *     'cache_prefix' => 'array-model',
 * ],
 * ```
 *
 * ### Per-Model Settings:
 * ```php
 * class Role extends InMemoryDataModel
 * {
 *     // Disable caching
 *     protected bool $shouldCache = false;
 *
 *     // Custom chunk size
 *     protected int $insertChunkSize = 50;
 *
 *     // Data
 *     protected array $rows = [...];
 * }
 * ```
 *
 * ## Benefits:
 *
 * ### 1. Clean Code
 * ```php
 * // Instead of:
 * $role->name = 'Admin';
 * $role->level = 10;
 *
 * // Use fluent interface:
 * $role->setName('Admin')
 *      ->setLevel(10);
 * ```
 *
 * ### 2. Type Safety
 * ```php
 * // Magic methods provide better IDE support
 * $role->setName('Admin'); // IDE knows this sets 'name'
 * $name = $role->getName(); // IDE knows this returns string
 * ```
 *
 * ### 3. Performance
 * - Cached SQLite database (~1-5ms)
 * - No database migrations needed
 * - Perfect for static data
 *
 * ### 4. Flexibility
 * - Combine with any Eloquent feature
 * - Use relationships normally
 * - Add custom methods easily
 *
 * ## Best Practices:
 *
 * ✅ **DO**:
 * - Use for static/seed data with magic methods
 * - Define explicit schema for better performance
 * - Use magic methods for cleaner code
 * - Combine with Eloquent features
 *
 * ❌ **DON'T**:
 * - Use for large datasets (> 10,000 rows)
 * - Use for frequently changing data
 * - Override trait methods without understanding
 * - Use as replacement for proper database tables
 *
 * ## Performance:
 *
 * Same as InMemoryModel:
 * - First Load: ~50-100ms (creates SQLite file)
 * - Cached Load: ~1-5ms (reads from SQLite file)
 * - In-Memory: ~10-20ms (creates in-memory database)
 * - Magic Methods: Negligible overhead (~0.01ms)
 *
 * @category   Models
 *
 * @since      1.0.0
 * @see DataObjectModel For DataObject magic methods documentation
 * @see InMemoryModel For in-memory model documentation
 */
class InMemoryDataModel extends DataObjectModel
{
    use HasFactory;
    use InMemoryModel;
}
