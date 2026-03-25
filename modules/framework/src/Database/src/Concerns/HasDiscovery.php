<?php

declare(strict_types=1);

namespace Pixielity\Database\Concerns;

use Pixielity\Database\Attributes\AsDatabaseBlueprint;
use Pixielity\Discovery\Facades\Discovery;
use Pixielity\Foundation\Contracts\ApplicationInterface;
use Pixielity\Support\Reflection;

/**
 * Has Discovery Trait - Database Module.
 *
 * Provides automatic discovery and registration of database-related classes
 * using attributes. Discovers Blueprint macros, repositories, models, and
 * other database components.
 *
 * ## Purpose:
 * Automatically discovers and registers database classes decorated with
 * specific attributes, eliminating manual registration in service providers.
 *
 * ## Features:
 * - ✅ Automatic Blueprint macro discovery via #[AsDatabaseBlueprint]
 * - ✅ Priority-based macro registration
 * - ✅ Cached discovery for performance
 * - ✅ Dependency injection support
 * - ✅ Zero-configuration setup
 *
 * ## How It Works:
 * 1. Uses Discovery facade to find classes with database attributes
 * 2. Sorts by priority (lower numbers first)
 * 3. Instantiates classes with dependency injection
 * 4. Invokes registration methods
 *
 * ## Usage Example:
 * ```php
 * use Pixielity\Database\Concerns\HasDiscovery;
 * use Pixielity\Support\ServiceProvider;
 *
 * class DatabaseServiceProvider extends ServiceProvider
 * {
 *     use HasDiscovery;
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *
 *         // Auto-discover and register Blueprint macros
 *         $this->discoverBlueprintMacros();
 *     }
 * }
 * ```
 *
 * ## Blueprint Macro Example:
 * ```php
 * use Pixielity\Database\Attributes\AsDatabaseBlueprint;
 * use Illuminate\Database\Schema\Blueprint;
 *
 * #[AsDatabaseBlueprint(priority: 10)]
 * class CustomBlueprintMacros
 * {
 *     public function __invoke(): void
 *     {
 *         Blueprint::macro('status', function() {
 *             return $this->string('status', 50)->default('active');
 *         });
 *     }
 * }
 * ```
 *
 * ## Benefits:
 * - **No Manual Updates**: Add new macros without updating service providers
 * - **Performance**: Uses composer's cached attribute data
 * - **Priority Control**: Control registration order with priority parameter
 * - **Type Safe**: Uses reflection to validate classes exist
 * - **Clean Code**: Eliminates boilerplate registration code
 *
 * @property ApplicationInterface $app The application instance
 *
 * @since 1.0.0
 */
trait HasDiscovery
{
    /**
     * Discover and register all Blueprint macro classes.
     *
     * Finds all classes decorated with #[AsDatabaseBlueprint] attribute,
     * sorts them by priority, and invokes their registration methods.
     *
     * ## Discovery Process:
     * 1. **Find Classes**: Discovery::attribute(AsDatabaseBlueprint::class)
     * 2. **Sort by Priority**: Lower numbers register first
     * 3. **Instantiate**: Create instances with dependency injection
     * 4. **Invoke**: Call __invoke() method to register macros
     *
     * ## Priority System:
     * - 10: Core/foundational macros (baseId, timestamps)
     * - 20: Common macros (status, slug)
     * - 30: Business-specific macros
     * - 100: Default (no specific order)
     *
     * ## Example:
     * ```php
     * public function register(): void
     * {
     *     parent::register();
     *
     *     // Discovers and registers all Blueprint macros
     *     $this->discoverBlueprintMacros();
     * }
     * ```
     *
     * ## What Gets Registered:
     * ```php
     * // These classes will be automatically discovered:
     *
     * #[AsDatabaseBlueprint(priority: 10)]
     * class CoreBlueprintMacros
     * {
     *     public function __invoke(): void
     *     {
     *         Blueprint::macro('baseId', fn() => ...);
     *     }
     * }
     *
     * #[AsDatabaseBlueprint(priority: 20)]
     * class ExtendedBlueprintMacros
     * {
     *     public function __invoke(): void
     *     {
     *         Blueprint::macro('status', fn() => ...);
     *     }
     * }
     * ```
     */
    protected function discoverBlueprintMacros(): void
    {
        // Discover all classes with #[AsDatabaseBlueprint] attribute
        $blueprintClasses = Discovery::attribute(AsDatabaseBlueprint::class)
            ->get()
            ->filter(fn (array $metadata): bool => Reflection::exists($metadata['class']))
            ->sortBy(fn (array $metadata) => $metadata['attribute']->priority ?? 100)
            ->pluck('class');

        // Register each Blueprint macro class
        foreach ($blueprintClasses as $blueprintClass) {
            // Skip if class doesn't exist (safety check)
            if (! class_exists($blueprintClass)) {
                continue;
            }

            // Instantiate with dependency injection and invoke
            $instance = $this->app->make($blueprintClass);

            // Call __invoke() method to register macros
            if (method_exists($instance, '__invoke')) {
                $instance();
            }
        }
    }
}
