<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/ServiceProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\ServiceProvider
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-50a5290df1eec52b2b9534f13134008c0a7e54bed9a13121aea3b3f8eebf4ca3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\ServiceProvider',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/ServiceProvider.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support',
    'name' => 'Pixielity\\Support\\ServiceProvider',
    'shortName' => 'ServiceProvider',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
 * Support Service Provider.
 *
 * Convenience alias for Pixielity\\ServiceProvider\\Providers\\ServiceProvider.
 * Provides a shorter import path for service providers in the Support package.
 *
 * ## Usage Options:
 *
 * ### Option 1: Extend this class (Recommended for standard modules)
 * ```php
 * use Pixielity\\Support\\ServiceProvider;
 *
 * class MyServiceProvider extends ServiceProvider
 * {
 *     protected string $moduleName = \'MyModule\';
 *     protected string $moduleNamespace = \'Pixielity\\MyModule\';
 *
 *     public function boot(): void
 *     {
 *         parent::boot();
 *         // Your boot logic
 *     }
 * }
 * ```
 *
 * ### Option 2: Extend Pixielity ServiceProvider directly
 * ```php
 * use Pixielity\\ServiceProvider\\Providers\\ServiceProvider;
 *
 * class MyServiceProvider extends ServiceProvider
 * {
 *     // Same as Option 1
 * }
 * ```
 *
 * ### Option 3: Use ProvidesServices trait (For custom base classes)
 * ```php
 * use Illuminate\\Support\\ServiceProvider;
 * use Pixielity\\ServiceProvider\\Concerns\\ProvidesServices;
 *
 * class MyServiceProvider extends ServiceProvider
 * {
 *     use ProvidesServices;
 *
 *     protected string $moduleName = \'MyModule\';
 *     protected string $moduleNamespace = \'Pixielity\\MyModule\';
 *
 *     public function __construct($app)
 *     {
 *         parent::__construct($app);
 *         $this->initializeServiceProvider();
 *     }
 *
 *     public function boot(): void
 *     {
 *         $this->bootApplication();
 *     }
 *
 *     public function register(): void
 *     {
 *         parent::register();
 *         $this->registerApplication();
 *     }
 * }
 * ```
 *
 * ## Features Provided:
 * - Automatic migration loading
 * - Automatic route registration
 * - Automatic command discovery
 * - Config file merging
 * - View loading
 * - Translation loading
 * - Asset publishing
 * - Middleware registration
 * - Observer registration
 * - Policy registration
 * - Health checks
 * - Lifecycle events
 *
 * @see BaseServiceProvider
 * @see ProvidesServices
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 94,
    'endLine' => 94,
    'startColumn' => 1,
    'endColumn' => 61,
    'parentClassName' => 'Illuminate\\Support\\ServiceProvider',
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