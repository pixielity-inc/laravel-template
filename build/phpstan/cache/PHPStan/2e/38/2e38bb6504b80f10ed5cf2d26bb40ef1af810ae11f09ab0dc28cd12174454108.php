<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Attributes/Label.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Attributes\Label
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-6f9b3d86744e59f629032d768ec7c96da28617c0b307c9459d2863fad7639112',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Attributes\\Label',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Attributes/Label.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Attributes',
    'name' => 'Pixielity\\Enum\\Attributes\\Label',
    'shortName' => 'Label',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Label Attribute.
 *
 * Attaches a human-readable label to an enum case.
 * Useful for display purposes when the case name is not user-friendly.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Enum\\Attributes\\Label;
 * use Pixielity\\Enum\\Meta\\Meta;
 *
 * #[Meta([Label::class])]
 * enum Status: string
 * {
 *     use Enum;
 *
 *     #[Label(\'Active Status\')]
 *     case ACTIVE = \'active\';
 *
 *     #[Label(\'Inactive Status\')]
 *     case INACTIVE = \'inactive\';
 *
 *     #[Label(\'Pending Approval\')]
 *     case PENDING = \'pending\';
 * }
 *
 * Status::ACTIVE()->label();   // Returns \'Active Status\'
 * Status::PENDING()->label();  // Returns \'Pending Approval\'
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
              'startLine' => 44,
              'endLine' => 44,
              'startTokenPos' => 30,
              'startFilePos' => 873,
              'endTokenPos' => 32,
              'endFilePos' => 904,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 44,
    'endLine' => 58,
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
 * Get the default label when not specified.
 *
 * Returns null so the enum can fall back to humanizing the case name.
 *
 * @return string|null Null as default
 */',
        'startLine' => 54,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Attributes',
        'declaringClassName' => 'Pixielity\\Enum\\Attributes\\Label',
        'implementingClassName' => 'Pixielity\\Enum\\Attributes\\Label',
        'currentClassName' => 'Pixielity\\Enum\\Attributes\\Label',
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