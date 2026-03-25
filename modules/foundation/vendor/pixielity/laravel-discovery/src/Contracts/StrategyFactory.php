<?php

namespace Pixielity\Discovery\Contracts\Discovery;

/**
 * StrategyFactoryInterface - Contract for creating discovery strategies.
 *
 * Defines the interface for factory classes that create discovery strategy instances.
 * This allows proper dependency injection instead of manual container resolution.
 *
 * ## Container Binding:
 * - #[Bind]: Automatically binds this interface to StrategyFactory implementation
 * - #[Singleton]: Shared instance across the application lifecycle
 *
 * The #[Singleton] attribute ensures a single strategy factory instance is used
 * throughout the application, maintaining consistent strategy creation.
 */
interface StrategyFactory
{
    /**
     * Create an attribute discovery strategy.
     *
     * @param  string            $attributeClass Fully qualified attribute class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createAttributeStrategy(string $attributeClass): DiscoveryStrategy;

    /**
     * Create a directory discovery strategy.
     *
     * @param  string|array<string> $directories Directory path(s) to scan
     * @return DiscoveryStrategy    The created strategy instance
     */
    public function createDirectoryStrategy(string|array $directories): DiscoveryStrategy;

    /**
     * Create an interface discovery strategy.
     *
     * @param  string            $interface Fully qualified interface name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createInterfaceStrategy(string $interface): DiscoveryStrategy;

    /**
     * Create a parent class discovery strategy.
     *
     * @param  string            $parentClass Fully qualified parent class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createParentClassStrategy(string $parentClass): DiscoveryStrategy;

    /**
     * Create a method discovery strategy.
     *
     * @param  string            $attributeClass Fully qualified attribute class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createMethodStrategy(string $attributeClass): DiscoveryStrategy;

    /**
     * Create a property discovery strategy.
     *
     * @param  string            $attributeClass Fully qualified attribute class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createPropertyStrategy(string $attributeClass): DiscoveryStrategy;
}
