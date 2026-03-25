<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Container/src/Concerns/HasDiscovery.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Container\Concerns\HasDiscovery
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-b668364dd873176997239b8bdd234c47ec8dc5023d500b731e96620d2ac2212a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Container/src/Concerns/HasDiscovery.php',
      ),
    ),
    'namespace' => 'Pixielity\\Container\\Concerns',
    'name' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
    'shortName' => 'HasDiscovery',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Has Discovery Trait.
 *
 * Provides automatic discovery and registration of classes marked with
 * the #[Tagged] attribute using the Discovery facade. This trait eliminates
 * manual class registration by automatically finding and registering all
 * classes decorated with the #[Tagged] attribute.
 *
 * ## Purpose:
 * Automatically discovers and registers classes with the #[Tagged] attribute,
 * eliminating the need for manual registration in service providers. Uses the
 * Discovery facade for efficient, cached attribute-based class discovery.
 *
 * ## Features:
 * - ✅ Automatic discovery using Discovery facade
 * - ✅ Attribute-based class registration
 * - ✅ Cached discovery for performance
 * - ✅ Groups classes by tag names
 * - ✅ Bulk registration with container
 *
 * ## How It Works:
 * 1. Uses Discovery facade to find all classes with #[Tagged] attribute
 * 2. Filters classes to ensure they exist (safety check)
 * 3. Extracts tag names from each #[Tagged] attribute instance
 * 4. Groups classes by their tag names
 * 5. Registers all classes with their tags using $app->tag()
 *
 * ## Usage Example:
 * ```php
 * use Pixielity\\Container\\Concerns\\HasDiscovery;
 * use Pixielity\\Support\\ServiceProvider;
 *
 * class MyServiceProvider extends ServiceProvider
 * {
 *     use HasDiscovery;
 *
 *     protected string $moduleName = \'MyModule\';
 *     protected string $moduleNamespace = \'Pixielity\\\\MyModule\';
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *
 *         // Auto-discover and register all tagged classes
 *         $this->discoverTaggedClasses();
 *     }
 * }
 * ```
 *
 * ## Tagged Class Example:
 * ```php
 * use Pixielity\\Container\\Attributes\\Tagged;
 *
 * #[Tagged(\'payment.processors\')]
 * class StripePaymentProcessor implements PaymentProcessorInterface
 * {
 *     // Implementation
 * }
 *
 * #[Tagged(\'payment.processors\')]
 * class PayPalPaymentProcessor implements PaymentProcessorInterface
 * {
 *     // Implementation
 * }
 *
 * // Later, retrieve all payment processors:
 * $processors = app()->tagged(\'payment.processors\');
 * ```
 *
 * ## Benefits Over Manual Registration:
 * - **No Manual Updates**: Add new tagged classes without updating service providers
 * - **Performance**: Uses composer\'s cached attribute data via Discovery
 * - **Monorepo Friendly**: Automatically discovers classes across packages
 * - **Type Safe**: Uses reflection to validate classes exist
 * - **Clean Code**: Eliminates boilerplate registration code
 *
 * @property Application $app The application instance
 *
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 95,
    'endLine' => 233,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'discoverTaggedClasses' => 
      array (
        'name' => 'discoverTaggedClasses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Discover and register all classes with #[Tagged] attribute.
 *
 * Uses the Discovery facade to find all classes decorated with the #[Tagged]
 * attribute across the entire application (packages and modules). Groups them
 * by tag name and registers them with the service container.
 *
 * ## Discovery Process:
 * 1. **Find Classes**: Discovery::attribute(Tagged::class) finds all classes
 * 2. **Safety Filter**: Ensures each class actually exists
 * 3. **Extract Tags**: Reads tag names from #[Tagged] attribute instances
 * 4. **Group by Tag**: Organizes classes by their tag names
 * 5. **Bulk Register**: Registers all classes with container using $app->tag()
 *
 * ## Performance:
 * - Uses composer\'s cached attribute collector data
 * - No filesystem scanning required
 * - Efficient bulk registration
 *
 * ## Example:
 * ```php
 * public function register(): void
 * {
 *     parent::register();
 *
 *     // Discovers and registers all classes with #[Tagged] attribute
 *     // across all packages and modules
 *     $this->discoverTaggedClasses();
 * }
 * ```
 *
 * ## What Gets Registered:
 * ```php
 * // These classes will be automatically discovered and registered:
 *
 * #[Tagged(\'repositories\')]
 * class UserRepository { }
 *
 * #[Tagged(\'repositories\')]
 * class PostRepository { }
 *
 * #[Tagged(\'services\')]
 * class EmailService { }
 *
 * // Access them later:
 * $repositories = app()->tagged(\'repositories\');
 * // Returns: [UserRepository::class, PostRepository::class]
 * ```
 */',
        'startLine' => 146,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Container\\Concerns',
        'declaringClassName' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
        'implementingClassName' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
        'currentClassName' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
        'aliasName' => NULL,
      ),
      'discoverBoundClasses' => 
      array (
        'name' => 'discoverBoundClasses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Discover and register all classes with #[Bind] attribute.
 *
 * This implements the "flipping" logic where the attribute is placed
 * on the concrete implementation and points to the abstract interface.
 *
 * ## Features:
 * - ✅ Automatic discovery of bindings
 * - ✅ Support for #[Singleton] mapping
 * - ✅ Environment-specific bindings
 *
 * ## Example:
 * ```php
 * #[Bind(DiscoveryManager::class)]
 * #[Singleton]
 * class DiscoveryManagerImplementation { ... }
 * ```
 */',
        'startLine' => 200,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Container\\Concerns',
        'declaringClassName' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
        'implementingClassName' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
        'currentClassName' => 'Pixielity\\Container\\Concerns\\HasDiscovery',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));