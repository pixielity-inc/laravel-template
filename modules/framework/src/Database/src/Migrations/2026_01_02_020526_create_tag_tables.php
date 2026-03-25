<?php

/**
 * Spatie Tags Tables Migration.
 *
 * This migration creates the necessary tables for Spatie's Laravel Tags package,
 * which provides a simple way to add tagging functionality to your Eloquent models.
 * Tags can be used for categorization, filtering, and organizing content.
 *
 * Tables Created:
 * - tags - Stores tag definitions with multilingual support
 * - taggables - Pivot table for polymorphic many-to-many relationships
 *
 * What are Tags?
 * Tags are labels that can be attached to any model to categorize and organize
 * content. They're perfect for blog posts, products, users, or any other content
 * that needs flexible categorization.
 *
 * Features:
 * - Multilingual tag names and slugs (JSON columns)
 * - Tag types for different categories
 * - Sortable tags with order_column
 * - Polymorphic relationships (tag any model)
 * - Tag clouds and popular tags
 * - Scoped queries for finding tagged models
 *
 * Common Use Cases:
 * - Blog post categories and tags
 * - Product tags and filters
 * - User skills and interests
 * - Document classification
 * - Content organization
 * - Search and filtering
 *
 * Configuration:
 * Tags are configured in config/tags.php
 *
 * Making a Model Taggable:
 * ```php
 * use Spatie\Tags\HasTags;
 *
 * class Post extends Model
 * {
 *     use HasTags;
 * }
 * ```
 *
 * Using Tags:
 * ```php
 * // Attach tags
 * $post->attachTag('laravel');
 * $post->attachTags(['php', 'web development']);
 *
 * // Detach tags
 * $post->detachTag('laravel');
 * $post->detachTags(['php', 'web development']);
 *
 * // Sync tags (replace all)
 * $post->syncTags(['laravel', 'php']);
 *
 * // Get tags
 * $tags = $post->tags;
 *
 * // Get tag names
 * $names = $post->tags->pluck('name');
 * ```
 *
 * Querying Tagged Models:
 * ```php
 * // Find posts with any of these tags
 * $posts = Post::withAnyTags(['laravel', 'php'])->get();
 *
 * // Find posts with all of these tags
 * $posts = Post::withAllTags(['laravel', 'php'])->get();
 *
 * // Find posts with specific tag type
 * $posts = Post::withAnyTags(['featured'], 'categories')->get();
 * ```
 *
 * Working with Tag Types:
 * ```php
 * // Attach tag with type
 * $post->attachTag('featured', 'categories');
 * $post->attachTag('beginner', 'difficulty');
 *
 * // Get tags of specific type
 * $categories = $post->tagsWithType('categories');
 * ```
 *
 * Tag Management:
 * ```php
 * use Spatie\Tags\Tag;
 *
 * // Create tag
 * $tag = Tag::create(['name' => ['en' => 'Laravel', 'ar' => 'لارافيل']]);
 *
 * // Find or create tag
 * $tag = Tag::findOrCreate('laravel');
 *
 * // Get popular tags
 * $popular = Tag::popular()->take(10)->get();
 *
 * // Get tag cloud
 * $cloud = Tag::withCount('posts')->get();
 * ```
 *
 * Multilingual Tags:
 * ```php
 * // Create multilingual tag
 * $tag = Tag::create([
 *     'name' => ['en' => 'Laravel', 'ar' => 'لارافيل'],
 *     'slug' => ['en' => 'laravel', 'ar' => 'laravel'],
 * ]);
 *
 * // Get translated name
 * $name = $tag->getTranslation('name', 'ar'); // 'لارافيل'
 * ```
 *
 * @see https://github.com/spatie/laravel-tags
 * @see config/tags.php
 *
 * @category   Tagging
 *
 * @since      1.0.0
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * Creates two tables:
     * 1. tags - Stores tag definitions
     * 2. taggables - Polymorphic pivot table
     */
    public function up(): void
    {
        // Tags table - stores tag definitions with multilingual support
        Schema::create('tags', function (Blueprint $blueprint): void {
            $blueprint->id();

            // Multilingual tag name (e.g., {"en": "Laravel", "ar": "لارافيل"})
            $blueprint->json('name');

            // Multilingual slug (e.g., {"en": "laravel", "ar": "laravel"})
            $blueprint->json('slug');

            // Tag type for categorization (e.g., 'categories', 'skills')
            $blueprint->string('type')->nullable();

            // For manual sorting of tags
            $blueprint->integer('order_column')->nullable();

            // Adding table timestamps
            $blueprint->timestamps();
        });

        // Taggables pivot table - polymorphic many-to-many relationship
        Schema::create('taggables', function (Blueprint $blueprint): void {
            $blueprint
                ->foreignId('tag_id')  // Reference to tags table
                ->constrained()
                // Delete pivot when tag is deleted
                ->cascadeOnDelete();

            // Polymorphic relation (taggable_id, taggable_type)
            $blueprint->morphs('taggable');

            // Ensure each tag can only be attached once to a model
            $blueprint->unique(['tag_id', 'taggable_id', 'taggable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drops both tables in correct order (pivot table first).
     */
    public function down(): void
    {
        Schema::dropIfExists('taggables');
        Schema::dropIfExists('tags');
    }
};
