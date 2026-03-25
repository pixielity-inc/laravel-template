<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/CallableCases.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Concerns\CallableCases
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-366ce0f57f56a6a3d76bdc500c7b8f469acd0360c02fc0b61912b5378d451919',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Concerns\\CallableCases',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/CallableCases.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Concerns',
    'name' => 'Pixielity\\Enum\\Concerns\\CallableCases',
    'shortName' => 'CallableCases',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Invokable Cases Trait.
 *
 * Allows enum cases to be invoked as methods, returning their value or name.
 *
 * ## Features:
 * - Call cases statically: `MyEnum::CASE()` returns the value
 * - Invoke instances: `$enum()` returns the value
 * - Works with both backed and pure enums
 *
 * ## Usage:
 * ```php
 * enum Status: string
 * {
 *     use CallableCases;
 *
 *     case ACTIVE = \'active\';
 *     case INACTIVE = \'inactive\';
 * }
 *
 * Status::ACTIVE();  // Returns \'active\'
 * $status = Status::ACTIVE();
 * $status();         // Returns \'active\'
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 40,
    'endLine' => 78,
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
      '__invoke' => 
      array (
        'name' => '__invoke',
        'parameters' => 
        array (
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
 * Return the enum\'s value when it\'s invoked as a function.
 *
 * For backed enums, returns the value. For pure enums, returns the name.
 *
 * @return mixed The enum value or name
 */',
        'startLine' => 49,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\CallableCases',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\CallableCases',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\CallableCases',
        'aliasName' => NULL,
      ),
      '__callStatic' => 
      array (
        'name' => '__callStatic',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 55,
            'endColumn' => 65,
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
 * Return the enum\'s value or name when called statically.
 *
 * This magic method allows calling enum cases as static methods:
 * `MyEnum::CASE()` instead of `MyEnum::CASE->value`
 *
 * @param  string  $name  The case name
 * @param  array<mixed>  $args  Arguments (unused)
 * @return mixed The enum value or name
 *
 * @throws UndefinedCaseException If the case doesn\'t exist
 */',
        'startLine' => 66,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\CallableCases',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\CallableCases',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\CallableCases',
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