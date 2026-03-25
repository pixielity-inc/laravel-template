<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Enum.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Enum
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-aa64a9047deb36054fd64ff78dfe4bbf5dd3046ddced26a2464eb508f9a06027',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Enum',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Enum.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum',
    'name' => 'Pixielity\\Enum\\Enum',
    'shortName' => 'Enum',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Base Enum Trait.
 *
 * Provides a comprehensive set of helpers for PHP 8.1+ enums.
 * Combines multiple traits to make enums more powerful and easier to work with.
 *
 * ## Features:
 * - **CallableCases**: Call enum cases as methods `MyEnum::CASE()`
 * - **Nameable**: Get array of case names
 * - **Valuable**: Get array of case values
 * - **Optionable**: Get associative array of names => values
 * - **Metable**: Attach and retrieve metadata using attributes
 * - **Comparable**: Compare enums using `is()`, `isNot()`, `in()`, `notIn()`
 * - **Translatable**: Get translated labels and descriptions
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Enum\\Enum;
 * use Pixielity\\Enum\\Attributes\\Description;
 * use Pixielity\\Enum\\Attributes\\Label;
 *
 * #[Meta([Description::class, Label::class])]
 * enum Status: string
 * {
 *     use Enum;
 *
 *     #[Label(\'Active Status\')]
 *     #[Description(\'The item is currently active\')]
 *     case ACTIVE = \'active\';
 *
 *     #[Label(\'Inactive Status\')]
 *     #[Description(\'The item is currently inactive\')]
 *     case INACTIVE = \'inactive\';
 * }
 *
 * // Usage
 * Status::ACTIVE();              // Returns \'active\'
 * Status::names();               // Returns [\'ACTIVE\', \'INACTIVE\']
 * Status::values();              // Returns [\'active\', \'inactive\']
 * Status::options();             // Returns [\'ACTIVE\' => \'active\', \'INACTIVE\' => \'inactive\']
 * Status::ACTIVE()->label();       // Returns \'Active Status\'
 * Status::ACTIVE()->description(); // Returns \'The item is currently active\'
 * Status::ACTIVE()->label();       // Returns translated label
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 64,
    'endLine' => 73,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Pixielity\\Enum\\Concerns\\CallableCases',
      1 => 'Pixielity\\Enum\\Concerns\\Comparable',
      2 => 'Pixielity\\Enum\\Concerns\\Metable',
      3 => 'Pixielity\\Enum\\Concerns\\Nameable',
      4 => 'Pixielity\\Enum\\Concerns\\Optionable',
      5 => 'Pixielity\\Enum\\Concerns\\Translatable',
      6 => 'Pixielity\\Enum\\Concerns\\Valuable',
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