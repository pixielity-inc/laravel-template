<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/CaseConverter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\CaseConverter
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-10f208e53692ec663e090dc0c73bdc12a026a77d12da5dfb1482e4b0999f12c5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\CaseConverter',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/CaseConverter.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support',
    'name' => 'Pixielity\\Support\\CaseConverter',
    'shortName' => 'CaseConverter',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * CaseConverter - Array Key Case Transformation Utility.
 *
 * Provides functionality to convert array keys between different naming conventions
 * (snake_case and camelCase) while preserving the structure and values. Handles
 * nested arrays and collections recursively.
 *
 * ## Features:
 * - Convert between snake_case and camelCase
 * - Recursive conversion for nested structures
 * - Preserves metadata keys
 * - Works with arrays and Collections
 * - Handles indexed and associative arrays
 *
 * ## Use Cases:
 * - API response transformation
 * - Database to frontend data conversion
 * - Standardizing data formats across layers
 * - Converting between different coding conventions
 *
 * ## Examples:
 * ```php
 * $converter = app(CaseConverter::class);
 *
 * // Convert to snake_case
 * $data = [\'firstName\' => \'John\', \'lastName\' => \'Doe\'];
 * $result = $converter->convert(CaseConverter::CASE_SNAKE, $data);
 * // [\'first_name\' => \'John\', \'last_name\' => \'Doe\']
 *
 * // Convert to camelCase
 * $data = [\'first_name\' => \'John\', \'last_name\' => \'Doe\'];
 * $result = $converter->convert(CaseConverter::CASE_CAMEL, $data);
 * // [\'firstName\' => \'John\', \'lastName\' => \'Doe\']
 *
 * // Nested arrays
 * $data = [
 *     \'user_info\' => [
 *         \'first_name\' => \'John\',
 *         \'contact_details\' => [\'email_address\' => \'john@example.com\']
 *     ]
 * ];
 * $result = $converter->convert(CaseConverter::CASE_CAMEL, $data);
 * // [
 * //     \'userInfo\' => [
 * //         \'firstName\' => \'John\',
 * //         \'contactDetails\' => [\'emailAddress\' => \'john@example.com\']
 * //     ]
 * // ]
 * ```
 *
 * @see Str::snake() For snake_case conversion
 * @see Str::camel() For camelCase conversion
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Illuminate\\Container\\Attributes\\Singleton',
        'isRepeated' => false,
        'arguments' => 
        array (
        ),
      ),
    ),
    'startLine' => 63,
    'endLine' => 214,
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
      'CASE_SNAKE' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\CaseConverter',
        'implementingClassName' => 'Pixielity\\Support\\CaseConverter',
        'name' => 'CASE_SNAKE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'snake\'',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 47,
            'startFilePos' => 2010,
            'endTokenPos' => 47,
            'endFilePos' => 2016,
          ),
        ),
        'docComment' => '/**
 * The case constant representing snake_case.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'CASE_CAMEL' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\CaseConverter',
        'implementingClassName' => 'Pixielity\\Support\\CaseConverter',
        'name' => 'CASE_CAMEL',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'camel\'',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 60,
            'startFilePos' => 2115,
            'endTokenPos' => 60,
            'endFilePos' => 2121,
          ),
        ),
        'docComment' => '/**
 * The case constant representing camelCase.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'METADATA' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\CaseConverter',
        'implementingClassName' => 'Pixielity\\Support\\CaseConverter',
        'name' => 'METADATA',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'metadata\'',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 73,
            'startFilePos' => 2213,
            'endTokenPos' => 73,
            'endFilePos' => 2222,
          ),
        ),
        'docComment' => '/**
 * Constant for the metadata attribute.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'convert' => 
      array (
        'name' => 'convert',
        'parameters' => 
        array (
          'case' => 
          array (
            'name' => 'case',
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
            'startLine' => 135,
            'endLine' => 135,
            'startColumn' => 29,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Pixielity\\Support\\Collection',
                      'isIdentifier' => false,
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
            'startLine' => 135,
            'endLine' => 135,
            'startColumn' => 43,
            'endColumn' => 64,
            'parameterIndex' => 1,
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
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Pixielity\\Support\\Collection',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert array keys to specified case (snake_case or camelCase).
 *
 * This method recursively converts all keys in an array or Collection to the
 * specified case format. It handles nested structures, preserves metadata keys,
 * and maintains the distinction between indexed and associative arrays.
 *
 * ## Examples:
 * ```php
 * // Convert to snake_case
 * $converter->convert(CaseConverter::CASE_SNAKE, [
 *     \'firstName\' => \'John\',
 *     \'userDetails\' => [\'emailAddress\' => \'john@example.com\']
 * ]);
 * // [\'first_name\' => \'John\', \'user_details\' => [\'email_address\' => \'john@example.com\']]
 *
 * // Convert to camelCase
 * $converter->convert(CaseConverter::CASE_CAMEL, [
 *     \'first_name\' => \'John\',
 *     \'user_details\' => [\'email_address\' => \'john@example.com\']
 * ]);
 * // [\'firstName\' => \'John\', \'userDetails\' => [\'emailAddress\' => \'john@example.com\']]
 *
 * // Indexed arrays are preserved
 * $converter->convert(CaseConverter::CASE_SNAKE, [
 *     \'userList\' => [
 *         [\'firstName\' => \'John\'],
 *         [\'firstName\' => \'Jane\']
 *     ]
 * ]);
 * // [\'user_list\' => [[\'first_name\' => \'John\'], [\'first_name\' => \'Jane\']]]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is total number of keys
 * - Space complexity: O(n) for the converted array
 * - Recursive processing for nested structures
 *
 * ## Notes:
 * - Metadata keys are preserved and not converted
 * - Indexed arrays (numeric keys) are handled differently from associative arrays
 * - Works with both arrays and Laravel Collections
 * - Original data is not modified
 *
 * @param  string  $case  The target case: CASE_SNAKE or CASE_CAMEL
 * @param  array<string,mixed>|Collection  $data  The data to convert
 * @return array<string,mixed>|Collection The data with converted keys
 *
 * @throws InvalidArgumentException If case is not CASE_SNAKE or CASE_CAMEL
 *
 * @see Str::snake() For snake_case string conversion
 * @see Str::camel() For camelCase string conversion
 * @since 1.0.0
 */',
        'startLine' => 135,
        'endLine' => 178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\CaseConverter',
        'implementingClassName' => 'Pixielity\\Support\\CaseConverter',
        'currentClassName' => 'Pixielity\\Support\\CaseConverter',
        'aliasName' => NULL,
      ),
      'isMetadata' => 
      array (
        'name' => 'isMetadata',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
                      'name' => 'int',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 33,
            'endColumn' => 47,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if a key represents metadata that should not be converted.
 *
 * Metadata keys are special keys that should preserve their original format
 * and not be subject to case conversion. Currently, only the \'metadata\' key
 * is treated as metadata.
 *
 * ## Examples:
 * ```php
 * $converter->isMetadata(\'metadata\');  // true
 * $converter->isMetadata(\'user_data\'); // false
 * $converter->isMetadata(\'firstName\'); // false
 * ```
 *
 * ## Performance:
 * - Time complexity: O(1)
 * - Space complexity: O(1)
 * - Simple equality check
 *
 * ## Notes:
 * - Currently only \'metadata\' is considered metadata
 * - Can be extended to support more metadata keys
 * - Used internally during conversion process
 *
 * @param  int|string  $key  The key to check
 * @return bool True if the key is metadata, false otherwise
 *
 * @since 1.0.0
 */',
        'startLine' => 209,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\CaseConverter',
        'implementingClassName' => 'Pixielity\\Support\\CaseConverter',
        'currentClassName' => 'Pixielity\\Support\\CaseConverter',
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