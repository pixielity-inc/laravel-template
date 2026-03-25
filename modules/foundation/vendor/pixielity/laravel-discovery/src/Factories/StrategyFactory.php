<?php

namespace Pixielity\Discovery\Factories;

use Illuminate\Container\Attributes\Singleton;
use Illuminate\Contracts\Foundation\Application;
use Pixielity\Container\Attributes\Bind;
use Pixielity\Discovery\Contracts\Discovery\DiscoveryStrategy;
use Pixielity\Discovery\Contracts\Discovery\NamespaceResolver;
use Pixielity\Discovery\Contracts\Discovery\StrategyFactory as StrategyFactoryContract;
use Pixielity\Discovery\Strategies\AttributeStrategy;
use Pixielity\Discovery\Strategies\DirectoryStrategy;
use Pixielity\Discovery\Strategies\InterfaceStrategy;
use Pixielity\Discovery\Strategies\MethodStrategy;
use Pixielity\Discovery\Strategies\ParentClassStrategy;
use Pixielity\Discovery\Strategies\PropertyStrategy;

/**
 * StrategyFactory - Creates discovery strategy instances with proper dependencies.
 *
 * This factory encapsulates the creation logic for all discovery strategies,
 * ensuring they receive their required dependencies through constructor injection.
 */
#[Singleton]
#[Bind(StrategyFactoryContract::class)]
class StrategyFactory implements StrategyFactoryContract
{
    /**
     * Create a new StrategyFactory instance.
     *
     * @param NamespaceResolver $namespaceResolver Namespace resolver
     * @param Application       $app               Laravel application instance
     */
    public function __construct(
        protected NamespaceResolver $namespaceResolver,
        protected Application $app
    ) {}

    /**
     * Create an attribute discovery strategy.
     *
     * @param  string            $attributeClass Fully qualified attribute class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createAttributeStrategy(string $attributeClass): DiscoveryStrategy
    {
        return new AttributeStrategy($attributeClass);
    }

    /**
     * Create a directory discovery strategy.
     *
     * @param  string|array<string> $directories Directory path(s) to scan
     * @return DiscoveryStrategy    The created strategy instance
     */
    public function createDirectoryStrategy(string|array $directories): DiscoveryStrategy
    {
        return new DirectoryStrategy(
            $directories,
            $this->namespaceResolver,
            $this->app
        );
    }

    /**
     * Create an interface discovery strategy.
     *
     * Creates a strategy that discovers classes implementing a specific interface.
     * The strategy is injected with this factory instance to enable directory
     * scanning capabilities via the directories() method.
     *
     * @param  string            $interface Fully qualified interface name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createInterfaceStrategy(string $interface): DiscoveryStrategy
    {
        return new InterfaceStrategy($interface, $this);
    }

    /**
     * Create a parent class discovery strategy.
     *
     * Creates a strategy that discovers classes extending a specific parent class.
     * The strategy is injected with this factory instance to enable directory
     * scanning capabilities via the directories() method.
     *
     * @param  string            $parentClass Fully qualified parent class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createParentClassStrategy(string $parentClass): DiscoveryStrategy
    {
        return new ParentClassStrategy($parentClass, $this);
    }

    /**
     * Create a method discovery strategy.
     *
     * Creates a strategy that discovers methods decorated with a specific attribute.
     * Uses the composer-attribute-collector package for fast attribute-based discovery.
     *
     * @param  string            $attributeClass Fully qualified attribute class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createMethodStrategy(string $attributeClass): DiscoveryStrategy
    {
        return new MethodStrategy($attributeClass);
    }

    /**
     * Create a property discovery strategy.
     *
     * Creates a strategy that discovers properties decorated with a specific attribute.
     * Uses the composer-attribute-collector package for fast attribute-based discovery.
     *
     * @param  string            $attributeClass Fully qualified attribute class name
     * @return DiscoveryStrategy The created strategy instance
     */
    public function createPropertyStrategy(string $attributeClass): DiscoveryStrategy
    {
        return new PropertyStrategy($attributeClass);
    }
}
