<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;
use Illuminate\Database\Schema\Blueprint;
use Pixielity\Database\Providers\DatabaseServiceProvider;

/**
 * As Database Blueprint Attribute.
 *
 * Marks a class as containing Blueprint macros for automatic discovery and registration.
 * Classes with this attribute will be automatically discovered and their `register()` method
 * will be called during application bootstrap.
 *
 * ## Purpose:
 * - Automatic discovery of Blueprint macro classes
 * - Zero-configuration macro registration
 * - Decentralized macro organization
 *
 * ## Requirements:
 * The class MUST have an `__invoke()` method:
 * ```php
 * public function __invoke(): void
 * ```
 *
 * ## Usage:
 *
 * ### Basic Usage:
 * ```php
 * use Pixielity\Database\Attributes\AsDatabaseBlueprint;
 *
 * #[AsDatabaseBlueprint]
 * class BlueprintMacros
 * {
 *     public function __invoke(): void
 *     {
 *         Blueprint::macro('baseId', function() { ... });
 *     }
 * }
 * ```
 *
 * ### With Dependency Injection:
 * ```php
 * #[AsDatabaseBlueprint]
 * class CustomBlueprintMacros
 * {
 *     public function __construct(
 *         private ConfigRepository $config
 *     ) {}
 *
 *     public function __invoke(): void
 *     {
 *         Blueprint::macro('custom', function() {
 *             // Can use $this->config here
 *         });
 *     }
 * }
 * ```
 *
 * ### With Priority (Lower numbers register first):
 * ```php
 * #[AsDatabaseBlueprint(priority: 10)]
 * class CoreBlueprintMacros
 * {
 *     public function __invoke(): void { }
 * }
 *
 * #[AsDatabaseBlueprint(priority: 20)]
 * class ExtendedBlueprintMacros
 * {
 *     public function __invoke(): void { }
 * }
 * ```
 *
 * ### With Description:
 * ```php
 * #[AsDatabaseBlueprint(
 *     description: 'Core Blueprint macros for base functionality',
 *     priority: 10
 * )]
 * class CoreBlueprintMacros
 * {
 *     public function __invoke(): void { }
 * }
 * ```
 *
 * ## Discovery:
 * Classes are automatically discovered by the DatabaseServiceProvider using
 * the Discovery package. No manual registration needed.
 *
 * ## Registration Order:
 * Macros are registered in priority order (lowest first). Classes with the same
 * priority are registered in the order they are discovered.
 *
 * @see DatabaseServiceProvider
 * @see Blueprint
 * @since 1.0.0
 */
#[Attribute(Attribute::TARGET_CLASS)]
class AsDatabaseBlueprint
{
    /**
     * Create a new AsDatabaseBlueprint attribute instance.
     *
     * @param  string|null  $description  Optional description of what macros this class provides
     * @param  int  $priority  Registration priority (lower numbers register first)
     */
    public function __construct(
        public readonly ?string $description = null,
        public readonly int $priority = 100,
    ) {}
}
