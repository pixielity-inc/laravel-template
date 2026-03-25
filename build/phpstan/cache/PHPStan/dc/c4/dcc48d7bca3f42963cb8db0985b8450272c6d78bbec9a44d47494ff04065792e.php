<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Container/src/Providers/ContainerServiceProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Container\Providers\ContainerServiceProvider
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-cf048782f5e8e77f567cb47fc1088e9394242d6c08a1074d938b3fab2d1aa6bf',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Container/src/Providers/ContainerServiceProvider.php',
      ),
    ),
    'namespace' => 'Pixielity\\Container\\Providers',
    'name' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
    'shortName' => 'ContainerServiceProvider',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Container Service Provider.
 *
 * Registers container utilities and tagged class registration.
 *
 * ## Features:
 * - Tagged class registration
 * - Dependency injection utilities
 * - Container extensions
 *
 * ## Usage:
 *
 * ### Tagged Classes:
 * Classes can be automatically discovered and registered using tags.
 *
 * @category   Providers
 *
 * @since      1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 84,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Pixielity\\Support\\ServiceProvider',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Pixielity\\Container\\Concerns\\HasDiscovery',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'moduleName' => 
      array (
        'declaringClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'implementingClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'name' => 'moduleName',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'Container\'',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 57,
            'startFilePos' => 930,
            'endTokenPos' => 57,
            'endFilePos' => 940,
          ),
        ),
        'docComment' => '/**
 * The module name.
 *
 * Used for:
 * - Identifying the module in logs and error messages
 * - Namespacing translations: `trans(\'featureflags::message\')`
 * - Namespacing config: `config(\'featureflags.config_name\')`
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'moduleNamespace' => 
      array (
        'declaringClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'implementingClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'name' => 'moduleNamespace',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'Pixielity\\Container\'',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 70,
            'startFilePos' => 1187,
            'endTokenPos' => 70,
            'endFilePos' => 1207,
          ),
        ),
        'docComment' => '/**
 * The module namespace.
 *
 * Used for:
 * - Auto-discovering commands in `Pixielity\\Container\\Console\\Commands\\`
 * - Resolving class names for dependency injection
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 62,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'boot' => 
      array (
        'name' => 'boot',
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
 * Bootstrap any application services.
 *
 * This method is called after all service providers have been registered.
 * It\'s the place to perform any actions that depend on other services
 * being available.
 */',
        'startLine' => 60,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Container\\Providers',
        'declaringClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'implementingClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'currentClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'aliasName' => NULL,
      ),
      'register' => 
      array (
        'name' => 'register',
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
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Register any application services.
 *
 * This method is called during the registration phase, before boot().
 * Use this to bind services into the container.
 */',
        'startLine' => 72,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Container\\Providers',
        'declaringClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'implementingClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
        'currentClassName' => 'Pixielity\\Container\\Providers\\ContainerServiceProvider',
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