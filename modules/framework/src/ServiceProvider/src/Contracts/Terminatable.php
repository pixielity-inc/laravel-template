<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Contracts;

/**
 * Terminatable Contract.
 *
 * Defines the contract for service providers that need to perform cleanup
 * operations when the application is terminating.
 *
 * ## Purpose:
 * - Provide a hook for cleanup operations during application shutdown
 * - Enable graceful resource cleanup (connections, files, locks)
 * - Support long-running processes and background jobs
 * - Allow modules to perform final operations before shutdown
 *
 * ## When to Use:
 * Implement this interface when your module needs to:
 * - Close database connections
 * - Release file locks
 * - Flush buffers or caches
 * - Send final metrics or logs
 * - Clean up temporary resources
 * - Gracefully shutdown background workers
 *
 * ## Usage Example:
 * ```php
 * use Pixielity\ServiceProvider\Providers\ServiceProvider;
 * use Pixielity\ServiceProvider\Contracts\Terminatable;
 *
 * class MyServiceProvider extends ServiceProvider implements Terminatable
 * {
 *     protected string $moduleName = 'MyModule';
 *     protected string $moduleNamespace = 'Pixielity\MyModule';
 *
 *     public function terminating(): void
 *     {
 *         // Close connections
 *         $this->app->make(MyConnection::class)->close();
 *
 *         // Flush logs
 *         logger()->info('Module shutting down');
 *
 *         // Release locks
 *         Cache::lock('my-module-lock')->release();
 *     }
 * }
 * ```
 *
 * ## Execution Flow:
 * ```
 * Application Shutdown
 *   → Kernel::terminate()
 *   → ServiceProvider::terminating() (if implements Terminatable)
 *   → Cleanup operations
 *   → Process exits
 * ```
 *
 * ## Best Practices:
 * - Keep terminating() fast (< 100ms)
 * - Don't throw exceptions (catch and log)
 * - Don't start new operations
 * - Only cleanup resources
 * - Use try-catch for safety
 *
 * ## Example with Error Handling:
 * ```php
 * public function terminating(): void
 * {
 *     try {
 *         $this->closeConnections();
 *         $this->flushBuffers();
 *         $this->releaseResources();
 *     } catch (Throwable $e) {
 *         logger()->error('Error during termination', [
 *             'error' => $e->getMessage(),
 *         ]);
 *     }
 * }
 * ```
 *
 * @since 1.0.0
 * @see \Pixielity\ServiceProvider\Concerns\HasModuleLifecycle
 */
interface Terminatable
{
    /**
     * Perform cleanup operations when the application is terminating.
     *
     * This method is called during application shutdown, after the response
     * has been sent to the client. Use it to perform cleanup operations
     * that don't need to block the response.
     *
     * ## Execution Context:
     * - Called after response sent to client
     * - Called before process exits
     * - May not be called on fatal errors
     * - May not be called on SIGKILL
     *
     * ## Implementation Notes:
     * - Should be fast (< 100ms)
     * - Should not throw exceptions
     * - Should not start new operations
     * - Should only cleanup resources
     * - Should use try-catch for safety
     *
     * ## Common Operations:
     * - Close database connections
     * - Release file locks
     * - Flush buffers
     * - Send final metrics
     * - Clean up temporary files
     * - Gracefully shutdown workers
     *
     * @return void
     */
    public function terminating(): void;
}
