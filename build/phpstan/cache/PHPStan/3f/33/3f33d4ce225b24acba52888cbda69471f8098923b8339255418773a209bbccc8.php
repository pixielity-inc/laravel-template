<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Nameable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Concerns\Nameable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-6d580d342bdd97054f1ce66fe1910958edc8aa7106b1cf038b85be24efdce572',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Nameable.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Concerns',
    'name' => 'Pixielity\\Enum\\Concerns\\Nameable',
    'shortName' => 'Nameable',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Nameable Trait.
 *
 * Provides methods to get case names, with support for custom Label attributes.
 *
 * ## Features:
 * - Get raw case names (ACTIVE, INACTIVE, etc.)
 * - Get human-readable names from Label attribute if present
 * - Fallback to humanized case names if no attribute
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Enum\\Attributes\\Label;
 * use Pixielity\\Enum\\Meta\\Meta;
 *
 * #[Meta([Label::class])]
 * enum Status: string
 * {
 *     use Nameable;
 *
 *     #[Label(\'Active Status\')]
 *     case ACTIVE = \'active\';
 *
 *     case INACTIVE = \'inactive\';
 * }
 *
 * Status::caseNames();  // Returns [\'ACTIVE\', \'INACTIVE\']
 * Status::names();      // Returns [\'Active Status\', \'Inactive\']
 * Status::names(true);  // Returns [\'ACTIVE\' => \'Active Status\', \'INACTIVE\' => \'Inactive\']
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 49,
    'endLine' => 137,
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
      'caseNames' => 
      array (
        'name' => 'caseNames',
        'parameters' => 
        array (
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
 * Get an array of all raw case names.
 *
 * Returns the actual PHP case names (e.g., ACTIVE, INACTIVE).
 *
 * @return array<string> Array of case names
 */',
        'startLine' => 58,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'aliasName' => NULL,
      ),
      'names' => 
      array (
        'name' => 'names',
        'parameters' => 
        array (
          'keyed' => 
          array (
            'name' => 'keyed',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 72,
                'endLine' => 72,
                'startTokenPos' => 109,
                'startFilePos' => 1872,
                'endTokenPos' => 109,
                'endFilePos' => 1876,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
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
            'startColumn' => 34,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Get an array of human-readable names.
 *
 * If the Label attribute is present, uses that value.
 * Otherwise, humanizes the case name (ACTIVE -> Active).
 *
 * @param  bool  $keyed  If true, returns associative array [CASE_NAME => Human Name]
 * @return array<string>|array<string, string> Array of names or keyed array
 */',
        'startLine' => 72,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'aliasName' => NULL,
      ),
      'humanizeCaseName' => 
      array (
        'name' => 'humanizeCaseName',
        'parameters' => 
        array (
          'caseName' => 
          array (
            'name' => 'caseName',
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
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 48,
            'endColumn' => 63,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert case name to human-readable format.
 *
 * Examples:
 * - ACTIVE -> Active
 * - SOME_CASE -> Some Case
 * - SomeCase -> Some Case
 *
 * @param  string  $caseName  The case name to humanize
 * @return string Humanized name
 */',
        'startLine' => 115,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Nameable',
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