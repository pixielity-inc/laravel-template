<?php

/**
 * Overtrue Versionable Table Migration.
 *
 * This migration creates the versions table for Overtrue's Laravel Versionable
 * package, which provides version control functionality for Eloquent models.
 * Track changes, revert to previous versions, and maintain a complete history.
 *
 * Table Created:
 * - versions - Stores model version snapshots
 *
 * What is Versionable?
 * Versionable allows you to keep a history of model changes by creating snapshots
 * whenever a model is updated. You can view, compare, and revert to any previous
 * version of your models.
 *
 * Features:
 * - Automatic version creation on model updates
 * - Store complete model state as JSON
 * - Track which user made changes
 * - Rollback to previous versions
 * - Compare versions
 * - Version history
 * - Soft delete support for versions
 * - UUID support for version IDs
 *
 * Common Use Cases:
 * - Document revision history
 * - Audit trails for important data
 * - Undo/redo functionality
 * - Content management systems
 * - Legal compliance (data history)
 * - Debugging data changes
 *
 * Configuration:
 * Versionable is configured in config/versionable.php
 *
 * Making a Model Versionable:
 * ```php
 * use Overtrue\LaravelVersionable\Versionable;
 *
 * class Post extends Model
 * {
 *     use Versionable;
 *
 *     // Optionally specify which attributes to version
 *     protected $versionable = ['title', 'content', 'status'];
 *
 *     // Or version all attributes (default)
 *     // protected $versionable = ['*'];
 * }
 * ```
 *
 * Using Versions:
 * ```php
 * // Get all versions
 * $versions = $post->versions;
 *
 * // Get latest version
 * $latest = $post->lastVersion;
 *
 * // Revert to specific version
 * $post->revertToVersion($versionId);
 *
 * // Get version by ID
 * $version = $post->versions()->find($versionId);
 *
 * // Get version contents
 * $contents = $version->contents; // Array of model attributes
 * ```
 *
 * Version Comparison:
 * ```php
 * // Get differences between versions
 * $version1 = $post->versions()->find(1);
 * $version2 = $post->versions()->find(2);
 *
 * $diff = Arr::diff_assoc(
 *     $version2->contents,
 *     $version1->contents
 * );
 * ```
 *
 * Accessing Version User:
 * ```php
 * // Get user who created the version
 * $user = $version->user;
 *
 * // Get all versions by specific user
 * $userVersions = $post->versions()
 *     ->where('user_id', $userId)
 *     ->get();
 * ```
 *
 * Pruning Old Versions:
 * ```php
 * // Keep only last 10 versions
 * $post->versions()
 *     ->orderBy('created_at', 'desc')
 *     ->skip(10)
 *     ->delete();
 * ```
 *
 * @see https://github.com/overtrue/laravel-versionable
 * @see config/versionable.php
 *
 * @category   Versioning
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
     * Creates the versions table for storing model version snapshots.
     * Supports both UUID and auto-incrementing IDs based on configuration.
     */
    public function up(): void
    {
        Schema::create('versions', function (Blueprint $blueprint): void {
            $uuid = config('versionable.uuid');

            // Primary key - UUID or auto-increment based on config
            $uuid ? $blueprint->uuid('id')->primary() : $blueprint->bigIncrements('id');

            // User who created this version - NULLABLE to support system operations
            $blueprint->unsignedBigInteger(config('versionable.user_foreign_key', 'user_id'))->nullable();

            // Polymorphic relation to versionable model
            $uuid ? $blueprint->uuidMorphs('versionable') : $blueprint->morphs('versionable');

            // Version contents - complete model state as JSON
            $blueprint->json('contents')->nullable();

            // Adding table timestamps
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drops the versions table.
     */
    public function down(): void
    {
        Schema::dropIfExists('versions');
    }
};
