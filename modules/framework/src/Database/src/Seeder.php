<?php

namespace Pixielity\Database;

use Illuminate\Container\Attributes\Config;
use Illuminate\Database\Seeder as BaseSeeder;
use Pixielity\Support\Reflection;
use ReflectionProperty;

use function usort;

/**
 * Base Database Seeder for Module System.
 *
 * Automatically discovers and runs all module seeders registered via ServiceProvider.
 * Module seeders are collected during application boot and stored in config('app.module_seeders').
 *
 * ## How It Works:
 * 1. Each ServiceProvider registers its DatabaseSeeder in config during boot
 * 2. This base class reads all registered seeders from config
 * 3. Sorts them by priority (lower numbers run first)
 * 4. Calls each seeder using Laravel's standard $this->call() method
 *
 * ## Seeder Priority:
 * Module seeders can define a priority to control execution order:
 *
 * ```php
 * class UsersDatabaseSeeder extends Seeder
 * {
 *     public static int $priority = 10; // Runs early
 * }
 * ```
 *
 * Default priority is 100. Lower numbers run first.
 *
 * ## Recommended Priority Values:
 * - 10: Core/foundational data (Users, Roles, Permissions)
 * - 20: Reference data (Countries, Cities, Settings)
 * - 30: Business entities (Facilities, Licenses, Shifts)
 * - 40: Dependent entities (Checklists, Compliance Rules)
 * - 50: Transactional data (Visits, Incidents)
 * - 100: Default (no specific order required)
 *
 * ## Performance:
 * Control seeding volume via SEEDER_COUNT environment variable:
 * - SEEDER_COUNT=10 (fast, minimal data)
 * - SEEDER_COUNT=50 (default, good for testing)
 * - SEEDER_COUNT=100 (slow, comprehensive data)
 */
abstract class Seeder extends BaseSeeder
{
    /**
     * Seeder constructor.
     * Initializes the seeder count from environment variable.
     *
     * @param int                      $seederCount         Number of records to seed
     * @param array<int, class-string> $moduleSeederClasses Registered module seeders
     */
    public function __construct(
        #[Config('database.seeder_count')]
        protected int $seederCount = 50,

        /**
         * Registered module seeder classes.
         */
        #[Config('app.module_seeders')]
        protected array $moduleSeederClasses = []
    ) {}

    /**
     * Seed the application's database.
     *
     * Automatically calls all registered module seeders in priority order.
     */
    public function run(): void
    {
        // Get all registered module seeders
        if ($this->moduleSeederClasses === []) {
            return;
        }

        // Sort by priority
        usort($this->moduleSeederClasses, fn (string $a, string $b): int => $this->getSeederPriority($a) <=> $this->getSeederPriority($b));

        // Call all module seeders
        $this->call($this->moduleSeederClasses);
    }

    /**
     * Get the priority of a seeder class.
     *
     * @param class-string $seederClass
     */
    private function getSeederPriority(string $seederClass): int
    {
        if (Reflection::propertyExists($seederClass, 'priority')) {
            $reflectionProperty = Reflection::getProperty($seederClass, 'priority');
            if (Reflection::implements($reflectionProperty, ReflectionProperty::class) && $reflectionProperty->isStatic()) {
                return $seederClass::$priority;
            }
        }

        return 100;  // Default priority
    }
}
