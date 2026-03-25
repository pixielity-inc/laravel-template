<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Metable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Concerns\Metable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-6a0252ed858c575c0efb5649a7b8010eb6b046415d47dae80d89b01b69ce290c',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Concerns\\Metable',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Metable.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Concerns',
    'name' => 'Pixielity\\Enum\\Concerns\\Metable',
    'shortName' => 'Metable',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Metable Trait.
 *
 * Allows attaching metadata to enum cases using PHP attributes.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Enum\\Attributes\\Description;
 * use Pixielity\\Enum\\Attributes\\Name;
 * use Pixielity\\Enum\\Meta\\Meta;
 *
 * #[Meta([Description::class, Name::class])]
 * enum Status: string
 * {
 *     use Metable;
 *
 *     #[Name(\'Active Status\')]
 *     #[Description(\'Item is active\')]
 *     case ACTIVE = \'active\';
 * }
 *
 * Status::ACTIVE()->name();        // Returns \'Active Status\'
 * Status::ACTIVE()->description(); // Returns \'Item is active\'
 * Status::fromMeta(new Name(\'Active Status\')); // Returns Status::ACTIVE()
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
    'endLine' => 98,
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
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'property' => 
          array (
            'name' => 'property',
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
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
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 46,
            'endColumn' => 61,
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
 * Magic method to access meta properties.
 *
 * Allows calling meta property methods directly on the enum instance.
 * For example: `$enum->description()` or `$enum->name()`
 *
 * @param  string  $property  The property name
 * @param  array<mixed>  $arguments  Method arguments (unused)
 * @return mixed The meta property value or null
 */',
        'startLine' => 53,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'aliasName' => NULL,
      ),
      'tryFromMeta' => 
      array (
        'name' => 'tryFromMeta',
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
                'name' => 'Pixielity\\Enum\\Meta\\Property',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 40,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'static',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Try to get the first case with this meta property value.
 *
 * @param  Property  $metaProperty  The meta property to search for
 * @return static|null The matching case or null
 */',
        'startLine' => 72,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'aliasName' => NULL,
      ),
      'fromMeta' => 
      array (
        'name' => 'fromMeta',
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
                'name' => 'Pixielity\\Enum\\Meta\\Property',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 37,
            'endColumn' => 58,
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
 * Get the first case with this meta property value.
 *
 * @param  Property  $metaProperty  The meta property to search for
 * @return static The matching case
 *
 * @throws ValueError If no case matches
 */',
        'startLine' => 91,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Metable',
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