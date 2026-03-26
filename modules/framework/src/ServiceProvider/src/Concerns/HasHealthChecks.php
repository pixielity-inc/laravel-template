<?php

namespace Pixielity\ServiceProvider\Concerns;

use function count;
use function is_array;

use Pixielity\Contracts\Foundation\Application;
use Pixielity\ServiceProvider\Contracts\HasHealthChecks as HasHealthChecksContract;
use Pixielity\Support\Arr;
use Pixielity\Support\Reflection;
use Spatie\Health\Checks\Check;
use Spatie\Health\Facades\Health;

/**
 * Has Health Checks Trait.
 *
 * Provides health check registration functionality for module service providers.
 * Uses Laravel's service container tagging to collect health checks from all pixielity.
 *
 * ## Purpose:
 * This trait enables pixielity to register health checks that monitor the module's
 * operational status. Health checks are tagged in the service container and later
 * collected by the Health module to register with Spatie Health package.
 *
 * ## Architecture:
 * 1. Pixielity define health checks in `healthChecks()` method
 * 2. Health checks are tagged with 'health-checks' in the service container
 * 3. Health module collects all tagged checks and registers them
 *
 * ## Features:
 * - ✅ Service container tagging for discovery
 * - ✅ Decoupled health check registration
 * - ✅ Module-specific health checks
 * - ✅ Integration with Spatie Health package
 * - ✅ Lazy loading support
 *
 * ## Usage:
 * ```php
 * class MyServiceProvider extends BaseModuleServiceProvider implements HasHealthChecks
 * {
 *     protected function healthChecks(): array
 *     {
 *         return [
 *             \Spatie\Health\Checks\Checks\DatabaseCheck::new(),
 *             \Spatie\Health\Checks\Checks\CacheCheck::new(),
 *             \App\HealthChecks\MyModuleApiCheck::new(),
 *         ];
 *     }
 * }
 * ```
 *
 * ## Health Check Dashboard:
 * Access the health check dashboard at `/health` (if configured).
 *
 * ## Creating Custom Health Checks:
 * ```php
 * use Spatie\Health\Checks\Check;
 * use Spatie\Health\Checks\Result;
 *
 * class MyModuleApiCheck extends Check
 * {
 *     public function run(): Result
 *     {
 *         $result = Result::make();
 *
 *         try {
 *             // Check API connectivity
 *             $response = Http::get('https://api.example.com/status');
 *
 *             if ($response->successful()) {
 *                 return $result->ok();
 *             }
 *
 *             return $result->failed('API returned error');
 *         } catch (\Exception $e) {
 *             return $result->failed($e->getMessage());
 *         }
 *     }
 * }
 * ```
 *
 * ## How It Works:
 * ```
 * Module Service Provider (register phase)
 *   → healthChecks() returns array of checks
 *   → Checks are tagged with 'health-checks'
 *   → Service container stores tagged checks
 *
 * Health Service Provider (boot phase)
 *   → Resolves all 'health-checks' tagged services
 *   → Registers them with Health::checks()
 *   → Health checks are now active
 * ```
 *
 * @property string      $moduleName The name of the current module
 * @property Application $app        The application instance
 *
 * @since 1.0.0
 */
trait HasHealthChecks
{
    /**
     * Register health checks for this module.
     *
     * This method is called during the register() phase to tag health checks
     * in the service container. The Health module will later collect and
     * register all tagged checks.
     *
     * ## How It Works:
     * 1. Checks if module implements HasHealthChecks interface
     * 2. Gets health check instances from the healthChecks() method
     * 3. Tags each check instance directly with 'health-checks'
     * 4. Health module collects all tagged checks later
     *
     * ## Example Module Implementation:
     * ```php
     * protected function healthChecks(): array
     * {
     *     return [
     *         \Spatie\Health\Checks\Checks\DatabaseCheck::new(),
     *         \Pixielity\MyModule\HealthChecks\CustomCheck::new(),
     *     ];
     * }
     * ```
     */
    protected function collectHealthChecks(): void
    {
        // Check if module implements HasHealthChecks interface
        if (! Reflection::implements($this, HasHealthChecksContract::class)) {
            return;
        }

        $checks = $this->healthChecks();

        // Validate checks array
        if ($checks === [] || ! is_array($checks)) {
            return;
        }

        // Tag each health check instance directly for discovery by Health module
        // No need to bind to container - tagging works with instances directly
        foreach ($checks as $check) {
            $this->registerHealthCheck($check);
        }

        // Debug logging if enabled
        if (config('app.debug', false)) {
            logger()->debug('Registered health checks', [
                'module' => $this->moduleName ?? 'unknown',
                'count' => count($checks),
                'checks' => Arr::map($checks, fn ($check): string|false => $check::class),
            ]);
        }
    }

    /**
     * Register a health check with Spatie Health package.
     *
     * This method is called by the HasDiscovery trait to register
     * discovered health checks.
     *
     * @param Check $healthCheck Health check instance to register
     */
    protected function registerHealthCheck(Check $healthCheck): void
    {
        // Register the health check with Spatie Health
        Health::checks([
            $healthCheck,
        ]);
    }
}
