<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Attributes/Meta.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Attributes\Meta
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-e7d643bcc8b073aa52598f49330329350889d4afeddd04ddf1fd7b50d688fca2',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Attributes\\Meta',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Attributes/Meta.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Attributes',
    'name' => 'Pixielity\\Enum\\Attributes\\Meta',
    'shortName' => 'Meta',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Meta Attribute.
 *
 * Declares which meta properties are available on an enum.
 * Must be applied to the enum class itself.
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
 *     use Enum;
 *
 *     #[Name(\'Active Status\')]
 *     #[Description(\'The item is active\')]
 *     case ACTIVE = \'active\';
 * }
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Attribute',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\\Attribute::TARGET_CLASS',
            'attributes' => 
            array (
              'startLine' => 38,
              'endLine' => 38,
              'startTokenPos' => 35,
              'startFilePos' => 718,
              'endTokenPos' => 37,
              'endFilePos' => 740,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 38,
    'endLine' => 68,
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
      'metaProperties' => 
      array (
        'declaringClassName' => 'Pixielity\\Enum\\Attributes\\Meta',
        'implementingClassName' => 'Pixielity\\Enum\\Attributes\\Meta',
        'name' => 'metaProperties',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * List of meta property classes.
 *
 * @var array<class-string<Property>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 33,
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
          'metaProperties' => 
          array (
            'name' => 'metaProperties',
            'default' => NULL,
            'type' => 
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 53,
            'endLine' => 53,
            'startColumn' => 33,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new Meta attribute.
 *
 * @param  string|array<class-string<Property>>  ...$metaProperties  Meta property classes
 */',
        'startLine' => 53,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Enum\\Attributes',
        'declaringClassName' => 'Pixielity\\Enum\\Attributes\\Meta',
        'implementingClassName' => 'Pixielity\\Enum\\Attributes\\Meta',
        'currentClassName' => 'Pixielity\\Enum\\Attributes\\Meta',
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