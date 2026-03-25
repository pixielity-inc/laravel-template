<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/Singleton.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\Traits\Singleton
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-8cebf5512d74deee9dd9404f1a9579a97adf7abfaa721aa1e95a9f5baa703aea',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\Traits\\Singleton',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/Singleton.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support\\Traits',
    'name' => 'Pixielity\\Support\\Traits\\Singleton',
    'shortName' => 'Singleton',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Singleton trait provides a simple interface for treating a class as a singleton.
 * It ensures that only one instance of a class exists and provides global access to that instance.
 *
 * Usage:
 * - Access the singleton instance via `YourClass::instance()`.
 * - Reset the instance and its state via `YourClass::reset()`.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 111,
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
      'instance' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'name' => 'instance',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var ?static The single instance of the class.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 31,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs the singleton instance.
 *
 * The constructor is protected to prevent direct instantiation from outside the class.
 * It calls the `init()` method, which can be overridden to perform additional initialization.
 */',
        'startLine' => 28,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 34,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prevents cloning of the singleton instance.
 *
 * This method is triggered if an attempt is made to clone the singleton instance.
 * It throws an error to prevent the creation of multiple instances.
 *
 * @ignore
 */',
        'startLine' => 41,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'aliasName' => NULL,
      ),
      '__wakeup' => 
      array (
        'name' => '__wakeup',
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
 * Prevents unserializing of the singleton instance.
 *
 * This method is triggered if an attempt is made to unserialize the singleton instance.
 * It throws an error to prevent the creation of multiple instances.
 *
 * @ignore
 */',
        'startLine' => 54,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'aliasName' => NULL,
      ),
      'instance' => 
      array (
        'name' => 'instance',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the singleton instance of the class.
 *
 * If the instance does not exist, it creates a new one.
 *
 * @return static The singleton instance of the class.
 */',
        'startLine' => 66,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 49,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'aliasName' => NULL,
      ),
      'forgetInstance' => 
      array (
        'name' => 'forgetInstance',
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
 * Clears the singleton instance.
 *
 * This method sets the static instance property to null, effectively removing the reference
 * to the current instance. This is useful for resetting or reinitializing the singleton.
 */',
        'startLine' => 83,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 49,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'aliasName' => NULL,
      ),
      'reset' => 
      array (
        'name' => 'reset',
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
 * Resets the singleton instance to its default state.
 *
 * This method clears the current singleton instance and reinitializes it.
 * Override this method in a subclass to reset specific properties or perform
 * additional reset logic if needed.
 */',
        'startLine' => 95,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'aliasName' => NULL,
      ),
      'init' => 
      array (
        'name' => 'init',
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
 * Initializes the singleton instance.
 *
 * This method is called by the constructor and can be overridden in subclasses
 * to perform additional initialization tasks. By default, it does nothing.
 */',
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Singleton',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Singleton',
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