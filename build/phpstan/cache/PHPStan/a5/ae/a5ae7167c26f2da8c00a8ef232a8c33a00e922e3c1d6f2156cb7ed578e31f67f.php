<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Meta/Reflection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Meta\Reflection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-91d437fc744a37c2fa58d2ce3b17a5df926b93c781326b56ce6efb4baeb8934a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Meta\\Reflection',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Meta/Reflection.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Meta',
    'name' => 'Pixielity\\Enum\\Meta\\Reflection',
    'shortName' => 'Reflection',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Meta Reflection Helper.
 *
 * Provides reflection utilities for working with enum metadata.
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
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
    ),
    'immediateMethods' => 
    array (
      'metaProperties' => 
      array (
        'name' => 'metaProperties',
        'parameters' => 
        array (
          'enum' => 
          array (
            'name' => 'enum',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 43,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the meta properties enabled on an enum.
 *
 * Checks the enum class and its traits for Meta attributes.
 *
 * @param  UnitEnum  $enum  The enum instance
 * @return array<class-string<Property>> Array of meta property class names
 */',
        'startLine' => 35,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'aliasName' => NULL,
      ),
      'metaValue' => 
      array (
        'name' => 'metaValue',
        'parameters' => 
        array (
          'metaProperty' => 
          array (
            'name' => 'metaProperty',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 38,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'enum' => 
          array (
            'name' => 'enum',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 60,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value of a meta property on an enum case.
 *
 * @param  class-string<Property>  $metaProperty  The meta property class
 * @param  UnitEnum  $enum  The enum instance
 * @return mixed The meta property value or default value
 */',
        'startLine' => 62,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'aliasName' => NULL,
      ),
      'parseMetaProperties' => 
      array (
        'name' => 'parseMetaProperties',
        'parameters' => 
        array (
          'reflectionClass' => 
          array (
            'name' => 'reflectionClass',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'ReflectionClass',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 51,
            'endColumn' => 82,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parse meta properties from a reflection class.
 *
 * @param  ReflectionClass<object>  $reflectionClass  The reflection class
 * @return array<class-string<Property>> Array of meta property class names
 */',
        'startLine' => 97,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Reflection',
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