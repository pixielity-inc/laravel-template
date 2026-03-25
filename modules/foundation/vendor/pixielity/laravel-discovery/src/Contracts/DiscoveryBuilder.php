<?php

namespace Pixielity\Discovery\Contracts\Discovery;

use Illuminate\Support\Collection;

/**
 * DiscoveryBuilder - Fluent builder for configuring discovery operations.
 *
 * This class provides a chainable interface for building complex discovery queries
 * with filters, validators, and caching. It follows the Builder pattern to allow
 * flexible configuration of discovery operations.
 *
 * ## Features:
 * - **Filtering**: Filter discovered classes by attribute properties or custom callbacks
 * - **Validation**: Validate classes (instantiable, extends, implements)
 * - **Caching**: Cache discovery results for improved performance
 * - **Registration**: Register discovered classes with custom callbacks
 *
 * ## Usage Examples:
 *
 * ```php
 * // Simple discovery with caching
 * $classes = Discovery::attribute(AsCard::class)
 *     ->cached('pulse-cards')
 *     ->get();
 *
 * // Complex discovery with filters and validators
 * $classes = Discovery::directories('packages/*\/src/Commands')
 *     ->extending(Command::class)
 *     ->instantiable()
 *     ->where('enabled', true)
 *     ->cached('commands')
 *     ->get();
 *
 * // Register discovered classes
 * Discovery::attribute(ServiceProvider::class)
 *     ->register(function ($class, $metadata) {
 *         app()->register($class);
 *     });
 * ```
 */
interface DiscoveryBuilder
{
    /**
     * Set the discovery strategy.
     *
     * This method is typically called by the DiscoveryManager when creating
     * a builder instance. It sets the strategy that will be used to discover classes.
     *
     * @param  DiscoveryStrategy $discoveryStrategy Discovery strategy to use
     * @return $this             Fluent interface
     */
    public function setStrategy(DiscoveryStrategy $discoveryStrategy): self;

    /**
     * Filter by attribute property value.
     *
     * Filters discovered classes based on a property value in their attribute.
     * Only works with attribute-based discovery strategies.
     *
     * @param  string $property Property name to check
     * @param  mixed  $value    Expected value
     * @return $this  Fluent interface
     *
     * @example
     * ```php
     * Discovery::attribute(AsCard::class)
     *     ->where('enabled', true)
     *     ->get();
     * ```
     */
    public function where(string $property, mixed $value): self;

    /**
     * Filter with custom callback.
     *
     * Applies a custom filter function to discovered classes. The callback
     * receives the class name and should return true to keep the class.
     *
     * @param  callable(class-string): bool $callback Filter function
     * @return $this                        Fluent interface
     *
     * @example
     * ```php
     * Discovery::directories('packages/*\/src')
     *     ->filter(fn($class) => Str::contains($class, 'Service'))
     *     ->get();
     * ```
     */
    public function filter(callable $callback): self;

    /**
     * Filter classes that have a specific attribute.
     *
     * Filters discovered classes to only include those that have the specified
     * attribute on the class itself. This is useful when discovering by directory
     * and you want to further filter by attribute presence.
     *
     * @param  class-string $attributeClass Fully qualified attribute class name
     * @return $this        Fluent interface
     *
     * @example
     * ```php
     * Discovery::directories('packages/*\/src/Commands')
     *     ->hasAttribute(AsCommand::class)
     *     ->get();
     * ```
     */
    public function hasAttribute(string $attributeClass): self;

    /**
     * Filter classes that have methods with a specific attribute.
     *
     * Filters discovered classes to only include those that have at least one
     * method decorated with the specified attribute. This is useful for finding
     * classes that contain route handlers, event listeners, etc.
     *
     * @param  class-string $attributeClass Fully qualified attribute class name
     * @return $this        Fluent interface
     *
     * @example
     * ```php
     * Discovery::directories('packages/*\/src/Controllers')
     *     ->hasMethodWith(Route::class)
     *     ->get();
     * ```
     */
    public function hasMethodWith(string $attributeClass): self;

    /**
     * Filter classes that have properties with a specific attribute.
     *
     * Filters discovered classes to only include those that have at least one
     * property decorated with the specified attribute. This is useful for finding
     * classes with validation rules, serialization hints, etc.
     *
     * @param  class-string $attributeClass Fully qualified attribute class name
     * @return $this        Fluent interface
     *
     * @example
     * ```php
     * Discovery::directories('packages/*\/src/Models')
     *     ->hasPropertyWith(Validate::class)
     *     ->get();
     * ```
     */
    public function hasPropertyWith(string $attributeClass): self;

    /**
     * Only include classes extending a parent.
     *
     * Validates that discovered classes extend the specified parent class.
     * This is useful for ensuring type safety when discovering classes.
     *
     * @param  class-string $parentClass Parent class name
     * @return $this        Fluent interface
     *
     * @example
     * ```php
     * Discovery::directories('packages/*\/src/Commands')
     *     ->extending(Command::class)
     *     ->get();
     * ```
     */
    public function extending(string $parentClass): self;

    /**
     * Only include classes implementing an interface.
     *
     * Validates that discovered classes implement the specified interface.
     * This is useful for ensuring type safety when discovering classes.
     *
     * @param  class-string $interface Interface name
     * @return $this        Fluent interface
     *
     * @example
     * ```php
     * Discovery::directories('packages/*\/src/Health')
     *     ->implementing(HealthCheckInterface::class)
     *     ->get();
     * ```
     */
    public function implementing(string $interface): self;

    /**
     * Only include classes implementing an interface (alias for implementing).
     *
     * Validates that discovered classes implement the specified interface.
     * This is a shorter alias for the implementing() method.
     *
     * @param  class-string $interface Interface name
     * @return $this        Fluent interface
     *
     * @example
     * ```php
     * Discovery::attribute(SentryContext::class)
     *     ->implements(SentryContextInterface::class)
     *     ->get();
     * ```
     */
    public function implements(string $interface): self;

    /**
     * Only include instantiable classes.
     *
     * Validates that discovered classes can be instantiated (not abstract or interface).
     * This is useful when you need to create instances of discovered classes.
     *
     * @return $this Fluent interface
     *
     * @example
     * ```php
     * Discovery::attribute(ServiceProvider::class)
     *     ->instantiable()
     *     ->get();
     * ```
     */
    public function instantiable(): self;

    /**
     * Specify directories to scan (for directory strategy).
     *
     * This method only works when using a DirectoryStrategy. It allows
     * changing the directories to scan after the strategy is created.
     *
     * @param  string|array<string> $directories Directory path(s) to scan
     * @return $this                Fluent interface
     */
    public function directories(string|array $directories): self;

    /**
     * Set custom namespace pattern.
     *
     * This method only works when using a DirectoryStrategy. It allows
     * customizing how file paths are converted to class names.
     *
     * @param  string $pattern Pattern with placeholders ({package}, {module}, {class}, {namespace})
     * @return $this  Fluent interface
     *
     * @example
     * ```php
     * Discovery::directories('packages/*\/src')
     *     ->withNamespacePattern('Pixielity\{package}\{namespace}\{class}')
     *     ->get();
     * ```
     */
    public function withNamespacePattern(string $pattern): self;

    /**
     * Enable caching with optional key.
     *
     * Enables caching of discovery results. If no key is provided, a key
     * is generated from the strategy's cache key and the applied filters.
     *
     * @param  string|null $key Cache key (auto-generated if null)
     * @return $this       Fluent interface
     *
     * @example
     * ```php
     * Discovery::attribute(AsCard::class)
     *     ->cached('pulse-cards')
     *     ->get();
     * ```
     */
    public function cached(?string $key = null): self;

    /**
     * Register discovered classes with callback.
     *
     * Discovers classes and executes a callback for each one. The callback
     * receives the class name and metadata. Returns the array of discovered classes.
     *
     * @param  callable(class-string, array<string, mixed>): void $callback Registration function
     * @return array<int, class-string>                           Registered class names
     *
     * @example
     * ```php
     * Discovery::attribute(ServiceProvider::class)
     *     ->register(function ($class, $metadata) {
     *         app()->register($class);
     *     });
     * ```
     */
    public function register(callable $callback): array;

    /**
     * Get discovered classes with metadata.
     *
     * Executes the discovery process and returns a collection of classes with metadata.
     * If caching is enabled, results are retrieved from cache or stored
     * in cache after discovery.
     *
     * Note: We always call discover() even when cache exists to ensure the strategy's
     * internal state (like attribute instances) is properly initialized for metadata retrieval.
     *
     * @return Collection<class-string, array<string, mixed>> Collection of classes with metadata
     */
    public function get(): Collection;

    /**
     * Get only class names without metadata.
     *
     * Returns a simple collection of class names without metadata.
     * Useful when you only need the class names.
     *
     * @return Collection<int, class-string> Collection of fully qualified class names
     */
    public function classes(): Collection;

    /**
     * Get file paths of discovered classes.
     *
     * Returns the file paths where the discovered classes are located,
     * instead of the class names. Useful when you need directory paths
     * for external tools (like Spatie's route-attributes).
     *
     * For directory-based discovery, this returns the unique directory paths.
     * For other strategies, this returns the file paths of the discovered classes.
     *
     * @return Collection<int, string> Collection of file/directory paths
     *
     * @example
     * ```php
     * // Get controller directories for route-attributes
     * $dirs = Discovery::directories([
     *     'packages/*\/src/Controllers',
     *     'modules/*\/src/Controllers',
     * ])->paths()->unique()->all();
     * ```
     */
    public function paths(): Collection;

    /**
     * Convert to array format (for config compatibility).
     *
     * Returns discovered classes as an associative array where keys are
     * class names and values are metadata arrays. Useful for configuration
     * files or serialization.
     *
     * @return array<class-string, array<string, mixed>> Associative array of classes with metadata
     *
     * @example
     * ```php
     * $config = Discovery::attribute(AsCard::class)->toArray();
     * // ['App\Pulse\Cards\MyCard' => ['class' => '...', 'attribute' => '...']]
     * ```
     */
    public function toArray(): array;
}
