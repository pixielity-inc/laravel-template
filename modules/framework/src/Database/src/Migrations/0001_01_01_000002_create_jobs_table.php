<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Create Jobs Tables Migration.
 *
 * Creates the jobs, job_batches, and failed_jobs tables for Laravel's queue system.
 * These tables are used when the queue driver is set to 'database'.
 *
 * ## Tables Created:
 * - `jobs` - Stores pending queue jobs
 * - `job_batches` - Stores batch job information
 * - `failed_jobs` - Stores failed job records for debugging
 *
 * ## Jobs Table Structure:
 * - `id` (bigInteger, primary, auto-increment) - Unique job identifier
 * - `queue` (string, indexed) - Queue name for job routing
 * - `payload` (longText) - Serialized job data and metadata
 * - `attempts` (unsignedTinyInteger) - Number of execution attempts
 * - `reserved_at` (unsignedInteger, nullable) - Unix timestamp when job was reserved
 * - `available_at` (unsignedInteger) - Unix timestamp when job becomes available
 * - `created_at` (unsignedInteger) - Unix timestamp when job was created
 *
 * ## Job Batches Table Structure:
 * - `id` (string, primary) - Unique batch identifier (UUID)
 * - `name` (string) - Human-readable batch name
 * - `total_jobs` (integer) - Total number of jobs in batch
 * - `pending_jobs` (integer) - Number of pending jobs
 * - `failed_jobs` (integer) - Number of failed jobs
 * - `failed_job_ids` (longText) - Serialized array of failed job IDs
 * - `options` (mediumText, nullable) - Serialized batch options
 * - `cancelled_at` (integer, nullable) - Unix timestamp when batch was cancelled
 * - `created_at` (integer) - Unix timestamp when batch was created
 * - `finished_at` (integer, nullable) - Unix timestamp when batch finished
 *
 * ## Failed Jobs Table Structure:
 * - `id` (bigInteger, primary, auto-increment) - Unique failed job identifier
 * - `uuid` (string, unique) - Unique UUID for failed job
 * - `connection` (text) - Queue connection name
 * - `queue` (text) - Queue name
 * - `payload` (longText) - Serialized job data
 * - `exception` (longText) - Exception message and stack trace
 * - `failed_at` (timestamp) - Timestamp when job failed
 *
 * ## Configuration:
 * Set in config/queue.php:
 * ```php
 * 'default' => env('QUEUE_CONNECTION', 'database'),
 * 'connections' => [
 *     'database' => [
 *         'driver' => 'database',
 *         'table' => 'jobs',
 *         'queue' => 'default',
 *         'retry_after' => 90,
 *         'after_commit' => false,
 *     ],
 * ],
 * 'failed' => [
 *     'driver' => 'database-uuids',
 *     'database' => env('DB_CONNECTION', 'mysql'),
 *     'table' => 'failed_jobs',
 * ],
 * ```
 *
 * ## Usage:
 * ```php
 * // Dispatch a job
 * ProcessPodcast::dispatch($podcast);
 *
 * // Dispatch to specific queue
 * ProcessPodcast::dispatch($podcast)->onQueue('processing');
 *
 * // Batch jobs
 * Bus::batch([
 *     new ProcessPodcast($podcast1),
 *     new ProcessPodcast($podcast2),
 * ])->dispatch();
 *
 * // Retry failed jobs
 * php artisan queue:retry all
 * ```
 *
 * @see https://laravel.com/docs/queues Laravel Queue Documentation
 * @see https://laravel.com/docs/queues#job-batching Job Batching Documentation
 * @since 1.0.0
 */
return new class() extends Migration
{
    /**
     * Run the migrations.
     *
     * Creates the jobs, job_batches, and failed_jobs tables for queue management.
     */
    public function up(): void
    {
        // Create jobs table for pending queue jobs
        Schema::create('jobs', function (Blueprint $table) {
            // Primary key - unique job identifier
            $table->id();

            // Queue name for job routing (indexed for fast queue queries)
            $table->string('queue')->index();

            // Serialized job data including class, method, and parameters
            $table->longText('payload');

            // Number of times this job has been attempted
            $table->unsignedTinyInteger('attempts');

            // Unix timestamp when job was reserved by a worker (null if not reserved)
            $table->unsignedInteger('reserved_at')->nullable();

            // Unix timestamp when job becomes available for processing
            $table->unsignedInteger('available_at');

            // Unix timestamp when job was created
            $table->unsignedInteger('created_at');
        });

        // Create job_batches table for batch job tracking
        Schema::create('job_batches', function (Blueprint $table) {
            // Primary key - unique batch identifier (UUID)
            $table->string('id')->primary();

            // Human-readable batch name
            $table->string('name');

            // Total number of jobs in this batch
            $table->integer('total_jobs');

            // Number of jobs still pending execution
            $table->integer('pending_jobs');

            // Number of jobs that have failed
            $table->integer('failed_jobs');

            // Serialized array of failed job IDs for retry
            $table->longText('failed_job_ids');

            // Serialized batch options (callbacks, etc.)
            $table->mediumText('options')->nullable();

            // Unix timestamp when batch was cancelled (null if not cancelled)
            $table->integer('cancelled_at')->nullable();

            // Unix timestamp when batch was created
            $table->integer('created_at');

            // Unix timestamp when batch finished (null if still running)
            $table->integer('finished_at')->nullable();
        });

        // Create failed_jobs table for debugging failed jobs
        Schema::create('failed_jobs', function (Blueprint $table) {
            // Primary key - unique failed job identifier
            $table->id();

            // Unique UUID for this failed job (for retry operations)
            $table->string('uuid')->unique();

            // Queue connection name (e.g., 'database', 'redis')
            $table->text('connection');

            // Queue name where job failed
            $table->text('queue');

            // Serialized job data (same as jobs.payload)
            $table->longText('payload');

            // Exception message and full stack trace for debugging
            $table->longText('exception');

            // Timestamp when job failed (defaults to current time)
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * Drops the jobs, job_batches, and failed_jobs tables.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_batches');
        Schema::dropIfExists('failed_jobs');
    }
};
