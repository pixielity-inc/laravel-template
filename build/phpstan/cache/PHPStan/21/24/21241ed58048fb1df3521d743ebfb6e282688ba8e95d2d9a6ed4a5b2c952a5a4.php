<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Meta/Property.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Meta\Property
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-0f31b02ea414e8df348cb9ed76f91fce9b9033463097a408a817b3af18099984',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Meta\\Property',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Meta/Property.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Meta',
    'name' => 'Pixielity\\Enum\\Meta\\Property',
    'shortName' => 'Property',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => '/**
* Abstract Meta Property Class.
*
* Base class for all meta properties that can be attached to enum cases.
*
* ## Creating Custom Meta Properties:
* ```php
* use Pixielity\\Enum\\Meta\\Property;
* use Attribute;
use Pixielity\\Support\\Str;
*
* #[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
* class Color extends Property
* {
*     protected function transform(mixed $value): mixed
*     {
*         return "text-{$value}-500"; // Transform color name
*     }
*
*     public static function defaultValue(): mixed
*     {
*         return \'gray\'; // Default color
*     }
* }
* ```
*
* @author  Pixielity Development Team
*
* @since   1.0.0
*/',
    'attributes' => 
    array (
    ),
    'startLine' => 41,
    'endLine' => 122,
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
      'value' => 
      array (
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'name' => 'value',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The meta property value.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 24,
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
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new meta property instance.
 *
 * @param  mixed  $value  The property value
 */',
        'startLine' => 53,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 33,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'aliasName' => NULL,
      ),
      'defaultValue' => 
      array (
        'name' => 'defaultValue',
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
 * Get the default value for this meta property.
 *
 * Override this method to provide a default value when the
 * attribute is not present on an enum case.
 *
 * @return mixed The default value
 */',
        'startLine' => 66,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'aliasName' => NULL,
      ),
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 76,
            'endLine' => 76,
            'startColumn' => 33,
            'endColumn' => 44,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new instance of this meta property.
 *
 * @param  mixed  $value  The property value
 */',
        'startLine' => 76,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'aliasName' => NULL,
      ),
      'method' => 
      array (
        'name' => 'method',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the name of the accessor method.
 *
 * By default, uses the class name in camelCase.
 * Override by defining a static $method property in your class.
 *
 * Examples:
 * - Description -> description()
 * - Name -> name()
 * - CustomProperty -> customProperty()
 *
 * @return string The method name
 */',
        'startLine' => 94,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'aliasName' => NULL,
      ),
      'transform' => 
      array (
        'name' => 'transform',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 34,
            'endColumn' => 45,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Transform the value during instantiation.
 *
 * Override this method to modify the value when the attribute is created.
 * Useful for formatting, validation, or conversion.
 *
 * @param  mixed  $value  The raw value
 * @return mixed The transformed value
 */',
        'startLine' => 118,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Enum\\Meta',
        'declaringClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'implementingClassName' => 'Pixielity\\Enum\\Meta\\Property',
        'currentClassName' => 'Pixielity\\Enum\\Meta\\Property',
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