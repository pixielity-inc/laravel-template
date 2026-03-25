<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Attributes/Description.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Attributes\Description
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-187e72309388ed12aecfa615c6afd402d619e6d64ee00b7bb34bf64e7076ea82',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Attributes\\Description',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Attributes/Description.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Attributes',
    'name' => 'Pixielity\\Enum\\Attributes\\Description',
    'shortName' => 'Description',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Description Attribute.
 *
 * Attaches a description to an enum case.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Enum\\Attributes\\Description;
 * use Pixielity\\Enum\\Meta\\Meta;
 *
 * #[Meta([Description::class])]
 * enum Status: string
 * {
 *     use Enum;
 *
 *     #[Description(\'The item is currently active and available\')]
 *     case ACTIVE = \'active\';
 *
 *     #[Description(\'The item is currently inactive and unavailable\')]
 *     case INACTIVE = \'inactive\';
 * }
 *
 * Status::ACTIVE()->description(); // Returns \'The item is currently active and available\'
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
            'code' => '\\Attribute::TARGET_CLASS_CONSTANT',
            'attributes' => 
            array (
              'startLine' => 39,
              'endLine' => 39,
              'startTokenPos' => 30,
              'startFilePos' => 781,
              'endTokenPos' => 32,
              'endFilePos' => 812,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 39,
    'endLine' => 51,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Pixielity\\Enum\\Meta\\Property',
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
 * Get the default description when not specified.
 *
 * @return string Empty string as default
 */',
        'startLine' => 47,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Attributes',
        'declaringClassName' => 'Pixielity\\Enum\\Attributes\\Description',
        'implementingClassName' => 'Pixielity\\Enum\\Attributes\\Description',
        'currentClassName' => 'Pixielity\\Enum\\Attributes\\Description',
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