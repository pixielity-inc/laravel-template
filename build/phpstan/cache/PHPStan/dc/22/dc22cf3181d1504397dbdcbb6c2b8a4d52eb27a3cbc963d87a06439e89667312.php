<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Translatable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Concerns\Translatable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-daa227f2ef97aa2e659e165018359033875157492633bbd7852bd11fb17db947',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Translatable.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Concerns',
    'name' => 'Pixielity\\Enum\\Concerns\\Translatable',
    'shortName' => 'Translatable',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Translatable Trait.
 *
 * Provides translation support for enum cases using Laravel\'s translation system.
 *
 * ## Features:
 * - Get translated labels for enum cases
 * - Get translated descriptions
 * - Fallback to case name if translation not found
 * - Supports custom translation keys
 *
 * ## Translation File Structure:
 * ```php
 * // resources/lang/en/enums.php
 * return [
 *     \'Status\' => [
 *         \'ACTIVE\' => [
 *             \'label\' => \'Active\',
 *             \'description\' => \'The item is currently active\',
 *         ],
 *         \'INACTIVE\' => [
 *             \'label\' => \'Inactive\',
 *             \'description\' => \'The item is currently inactive\',
 *         ],
 *     ],
 * ];
 * ```
 *
 * ## Usage:
 * ```php
 * enum Status: string
 * {
 *     use Translatable;
 * use Pixielity\\Support\\Str;
 *
 *     case ACTIVE = \'active\';
 *     case INACTIVE = \'inactive\';
 * }
 *
 * Status::ACTIVE()->label();       // Returns translated label or \'Active\'
 * Status::ACTIVE()->trans();        // Alias for label()
 * Status::ACTIVE()->transDescription(); // Returns translated description
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 62,
    'endLine' => 200,
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
      'labels' => 
      array (
        'name' => 'labels',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 70,
                'startFilePos' => 1744,
                'endTokenPos' => 70,
                'endFilePos' => 1747,
              ),
            ),
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
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 35,
            'endColumn' => 56,
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
 * Get all translated labels for all cases.
 *
 * @param  string|null  $locale  Optional locale override
 * @return array<string, string> Array of case name => translated label
 */',
        'startLine' => 70,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'aliasName' => NULL,
      ),
      'label' => 
      array (
        'name' => 'label',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 90,
                'endLine' => 90,
                'startTokenPos' => 143,
                'startFilePos' => 2287,
                'endTokenPos' => 143,
                'endFilePos' => 2290,
              ),
            ),
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
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 27,
            'endColumn' => 48,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the translated label for this enum case.
 *
 * Looks for translation in: `enums.{EnumName}.{CASE_NAME}.label`
 * Falls back to humanized case name if not found.
 *
 * @param  string|null  $locale  Optional locale override
 * @return string The translated label
 */',
        'startLine' => 90,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'aliasName' => NULL,
      ),
      'trans' => 
      array (
        'name' => 'trans',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 118,
                'endLine' => 118,
                'startTokenPos' => 310,
                'startFilePos' => 3177,
                'endTokenPos' => 310,
                'endFilePos' => 3180,
              ),
            ),
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
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
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
            'startColumn' => 27,
            'endColumn' => 48,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias for label() method.
 *
 * @param  string|null  $locale  Optional locale override
 * @return string The translated label
 */',
        'startLine' => 118,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'aliasName' => NULL,
      ),
      'transDescription' => 
      array (
        'name' => 'transDescription',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 132,
                'endLine' => 132,
                'startTokenPos' => 345,
                'startFilePos' => 3614,
                'endTokenPos' => 345,
                'endFilePos' => 3617,
              ),
            ),
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
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 132,
            'endLine' => 132,
            'startColumn' => 38,
            'endColumn' => 59,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the translated description for this enum case.
 *
 * Looks for translation in: `enums.{EnumName}.{CASE_NAME}.description`
 * Returns empty string if not found.
 *
 * @param  string|null  $locale  Optional locale override
 * @return string The translated description
 */',
        'startLine' => 132,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'aliasName' => NULL,
      ),
      'getTranslationKey' => 
      array (
        'name' => 'getTranslationKey',
        'parameters' => 
        array (
          'suffix' => 
          array (
            'name' => 'suffix',
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
            'startLine' => 159,
            'endLine' => 159,
            'startColumn' => 42,
            'endColumn' => 55,
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
 * Get the translation key for this enum case.
 *
 * @param  string  $suffix  The translation key suffix (label, description, etc.)
 * @return string The full translation key
 */',
        'startLine' => 159,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'aliasName' => NULL,
      ),
      'humanizeName' => 
      array (
        'name' => 'humanizeName',
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
 * Convert case name to human-readable format.
 *
 * Examples:
 * - ACTIVE -> Active
 * - SOME_CASE -> Some Case
 * - SomeCase -> Some Case
 *
 * @return string Humanized name
 */',
        'startLine' => 176,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Translatable',
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