<?php

namespace Pixielity\ServiceProvider\Concerns;

use Pixielity\Support\Str;

/**
 * Has Debugging Trait.
 *
 * Provides debugging and logging functionality for module service providers.
 *
 * ## Purpose:
 * This trait provides a centralized debugging mechanism for pixielity, making it
 * easy to log detailed information about module operations during development
 * and troubleshooting.
 *
 * ## Features:
 * - ✅ Conditional debug logging based on module or app debug mode
 * - ✅ Automatic module name prefixing for easy log filtering
 * - ✅ Context data support for structured logging
 * - ✅ Zero overhead when debug mode is disabled
 *
 * ## Debug Mode Activation:
 * Debug logs are enabled when either:
 * - The module's `$debug` property is set to `true`
 * - The application's debug mode is enabled (`$debugMode` property)
 *
 * ## Usage:
 * ```php
 * class MyServiceProvider extends BaseModuleServiceProvider
 * {
 *     // Enable debug logging for this module
 *     protected bool $debug = true;
 *
 *     public function boot(): void
 *     {
 *         parent::boot();
 *
 *         $this->debugLog('Custom operation started', [
 *             'operation' => 'data-sync',
 *             'records' => 100,
 *         ]);
 *     }
 * }
 * ```
 *
 * ## Log Format:
 * All debug logs are prefixed with `[Module: {ModuleName}]` for easy filtering:
 * ```
 * [2024-01-15 10:30:45] local.DEBUG: [Module: LocationTracking] Loading migrations {"path":"..."}
 * ```
 *
 * @property bool   $debug      Enable debug logging for this module
 * @property bool   $debugMode  Debug mode from app.debug config (injected in constructor)
 * @property string $moduleName The name of the current module
 *
 * @since 1.0.0
 */
trait HasDebugging
{
    /**
     * Debug mode flag from config.
     *
     * This property is automatically injected from app.debug config
     * via the _construct() method and can be used throughout the service provider.
     */
    protected bool $debugMode = false;

    /**
     * Enable debug logging.
     *
     * When enabled, the module will log detailed information about
     * resource loading operations. Useful for troubleshooting module issues.
     *
     * Debug logs are also enabled automatically when $debugMode is true.
     *
     * Default: false
     */
    protected bool $debug = false;

    /**
     * Custom constructor with dependency injection.
     *
     * This method is called automatically by the parent constructor
     * and supports automatic dependency injection via Laravel's container.
     */
    public function _construct(): void
    {
        $this->debugMode = config('app.debug', false);
    }

    /**
     * Log debug message if debug mode is enabled.
     *
     * Debug messages are logged when:
     * - The $debug property is true, OR
     * - The $debugMode property is true (from app.debug config)
     *
     * All debug logs include the module name prefix for easy filtering.
     *
     * @param string $message The debug message
     * @param array  $context Additional context data
     */
    protected function debugLog(string $message, array $context = []): void
    {
        // Only log if debug mode is enabled (module or app level)
        if ($this->debug || $this->debugMode) {
            // Prefix all logs with module name for easy filtering
            logger()->debug(Str::format('[Module: %s] %s', $this->moduleName, $message), $context);
        }
    }
}
