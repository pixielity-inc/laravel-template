<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/Enum.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\Traits\Enum
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-23b6ff879a42e27572837197f7c582fe1c9e0f59982fad265ac494c9695fab70',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\Traits\\Enum',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/Enum.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support\\Traits',
    'name' => 'Pixielity\\Support\\Traits\\Enum',
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
    'startLine' => 58,
    'endLine' => 61,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Pixielity\\Enum\\Enum',
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