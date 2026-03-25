<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/CastType.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\CastType
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-75f3cef9b0766b6036b396a9a57542465f170c1411591274383c10c1ac99b23a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\CastType',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/CastType.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\CastType',
    'shortName' => 'CastType',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Cast Type Enum.
 *
 * Defines all available Eloquent cast types for model attributes.
 * Use these constants instead of magic strings in model $casts arrays.
 *
 * ## Benefits:
 * - IDE autocomplete support
 * - Prevents typos in cast type strings
 * - Centralized cast type definitions
 * - Self-documenting code
 *
 * ## Usage:
 *
 * ```php
 * use Pixielity\\Foundation\\Enums\\CastType;
 *
 * protected $casts = [
 *     self::EMAIL_VERIFIED_AT => CastType::DATETIME(),
 *     self::IS_ACTIVE => CastType::BOOLEAN(),
 *     self::SETTINGS => CastType::ARRAY(),
 * ];
 * ```
 *
 * @method static string INTEGER() Returns the INTEGER enum instance
 * @method static string INT() Returns the INT enum instance
 * @method static string FLOAT() Returns the FLOAT enum instance
 * @method static string DOUBLE() Returns the DOUBLE enum instance
 * @method static string REAL() Returns the REAL enum instance
 * @method static string STRING() Returns the STRING enum instance
 * @method static string BOOLEAN() Returns the BOOLEAN enum instance
 * @method static string BOOL() Returns the BOOL enum instance
 * @method static string DATETIME() Returns the DATETIME enum instance
 * @method static string IMMUTABLE_DATETIME() Returns the IMMUTABLE_DATETIME enum instance
 * @method static string DATE() Returns the DATE enum instance
 * @method static string IMMUTABLE_DATE() Returns the IMMUTABLE_DATE enum instance
 * @method static string TIMESTAMP() Returns the TIMESTAMP enum instance
 * @method static string TIME() Returns the TIME enum instance
 * @method static string ARRAY() Returns the ARRAY enum instance
 * @method static string OBJECT() Returns the OBJECT enum instance
 * @method static string COLLECTION() Returns the COLLECTION enum instance
 * @method static string JSON() Returns the JSON enum instance
 * @method static string ENCRYPTED() Returns the ENCRYPTED enum instance
 * @method static string ENCRYPTED_ARRAY() Returns the ENCRYPTED_ARRAY enum instance
 * @method static string ENCRYPTED_COLLECTION() Returns the ENCRYPTED_COLLECTION enum instance
 * @method static string ENCRYPTED_OBJECT() Returns the ENCRYPTED_OBJECT enum instance
 * @method static string HASHED() Returns the HASHED enum instance
 * @method static string DECIMAL() Returns the DECIMAL enum instance
 *
 * @see https://laravel.com/docs/eloquent-mutators#attribute-casting
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 66,
    'endLine' => 254,
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
      'name' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'name' => 'name',
        'modifiers' => 2177,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'value' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'name' => 'value',
        'modifiers' => 2177,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
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
      'withPrecision' => 
      array (
        'name' => 'withPrecision',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 35,
            'endColumn' => 48,
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
 * Get decimal cast with specified precision.
 *
 * @param  int  $precision  Number of decimal places (0-30)
 * @return string Decimal cast string with precision
 *
 * @example CastType::DECIMAL()->withPrecision(2) // Returns \'decimal:2\'
 */',
        'startLine' => 180,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'aliasName' => NULL,
      ),
      'withFormat' => 
      array (
        'name' => 'withFormat',
        'parameters' => 
        array (
          'format' => 
          array (
            'name' => 'format',
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
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 32,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get datetime cast with custom format.
 *
 * @param  string  $format  PHP date format string
 * @return string Datetime cast string with format
 *
 * @example CastType::DATETIME()->withFormat(\'Y-m-d\') // Returns \'datetime:Y-m-d\'
 */',
        'startLine' => 197,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'aliasName' => NULL,
      ),
      'isDateTime' => 
      array (
        'name' => 'isDateTime',
        'parameters' => 
        array (
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
 * Check if this is a date/time cast type.
 *
 * @return bool True if date/time type
 */',
        'startLine' => 211,
        'endLine' => 221,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'aliasName' => NULL,
      ),
      'isEncrypted' => 
      array (
        'name' => 'isEncrypted',
        'parameters' => 
        array (
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
 * Check if this is an encrypted cast type.
 *
 * @return bool True if encrypted type
 */',
        'startLine' => 228,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'aliasName' => NULL,
      ),
      'isNumeric' => 
      array (
        'name' => 'isNumeric',
        'parameters' => 
        array (
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
 * Check if this is a numeric cast type.
 *
 * @return bool True if numeric type
 */',
        'startLine' => 243,
        'endLine' => 253,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'aliasName' => NULL,
      ),
      'cases' => 
      array (
        'name' => 'cases',
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
        'docComment' => NULL,
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'aliasName' => NULL,
      ),
      'from' => 
      array (
        'name' => 'from',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
                      'name' => 'int',
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
            'startLine' => NULL,
            'endLine' => NULL,
            'startColumn' => -1,
            'endColumn' => -1,
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
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'aliasName' => NULL,
      ),
      'tryFrom' => 
      array (
        'name' => 'tryFrom',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
                      'name' => 'int',
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
            'startLine' => NULL,
            'endLine' => NULL,
            'startColumn' => -1,
            'endColumn' => -1,
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
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CastType',
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
    'backingType' => 
    array (
      'name' => 'string',
      'isIdentifier' => true,
    ),
    'cases' => 
    array (
      'INTEGER' => 
      array (
        'name' => 'INTEGER',
        'value' => 
        array (
          'code' => '\'integer\'',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 80,
            'startFilePos' => 2763,
            'endTokenPos' => 80,
            'endFilePos' => 2771,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Integer\'',
                'attributes' => 
                array (
                  'startLine' => 71,
                  'endLine' => 71,
                  'startTokenPos' => 63,
                  'startFilePos' => 2693,
                  'endTokenPos' => 63,
                  'endFilePos' => 2701,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to integer.\'',
                'attributes' => 
                array (
                  'startLine' => 72,
                  'endLine' => 72,
                  'startTokenPos' => 70,
                  'startFilePos' => 2723,
                  'endTokenPos' => 70,
                  'endFilePos' => 2740,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 71,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'INT' => 
      array (
        'name' => 'INT',
        'value' => 
        array (
          'code' => '\'int\'',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 103,
            'startFilePos' => 2857,
            'endTokenPos' => 103,
            'endFilePos' => 2861,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Int\'',
                'attributes' => 
                array (
                  'startLine' => 75,
                  'endLine' => 75,
                  'startTokenPos' => 86,
                  'startFilePos' => 2787,
                  'endTokenPos' => 86,
                  'endFilePos' => 2791,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to integer (alias).\'',
                'attributes' => 
                array (
                  'startLine' => 76,
                  'endLine' => 76,
                  'startTokenPos' => 93,
                  'startFilePos' => 2813,
                  'endTokenPos' => 93,
                  'endFilePos' => 2838,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 75,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'FLOAT' => 
      array (
        'name' => 'FLOAT',
        'value' => 
        array (
          'code' => '\'float\'',
          'attributes' => 
          array (
            'startLine' => 81,
            'endLine' => 81,
            'startTokenPos' => 126,
            'startFilePos' => 2948,
            'endTokenPos' => 126,
            'endFilePos' => 2954,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Float\'',
                'attributes' => 
                array (
                  'startLine' => 79,
                  'endLine' => 79,
                  'startTokenPos' => 109,
                  'startFilePos' => 2877,
                  'endTokenPos' => 109,
                  'endFilePos' => 2883,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to float/double.\'',
                'attributes' => 
                array (
                  'startLine' => 80,
                  'endLine' => 80,
                  'startTokenPos' => 116,
                  'startFilePos' => 2905,
                  'endTokenPos' => 116,
                  'endFilePos' => 2927,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 79,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'DOUBLE' => 
      array (
        'name' => 'DOUBLE',
        'value' => 
        array (
          'code' => '\'double\'',
          'attributes' => 
          array (
            'startLine' => 85,
            'endLine' => 85,
            'startTokenPos' => 149,
            'startFilePos' => 3055,
            'endTokenPos' => 149,
            'endFilePos' => 3062,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Double\'',
                'attributes' => 
                array (
                  'startLine' => 83,
                  'endLine' => 83,
                  'startTokenPos' => 132,
                  'startFilePos' => 2970,
                  'endTokenPos' => 132,
                  'endFilePos' => 2977,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to double (alias for float).\'',
                'attributes' => 
                array (
                  'startLine' => 84,
                  'endLine' => 84,
                  'startTokenPos' => 139,
                  'startFilePos' => 2999,
                  'endTokenPos' => 139,
                  'endFilePos' => 3033,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 83,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'REAL' => 
      array (
        'name' => 'REAL',
        'value' => 
        array (
          'code' => '\'real\'',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 172,
            'startFilePos' => 3164,
            'endTokenPos' => 172,
            'endFilePos' => 3169,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Real\'',
                'attributes' => 
                array (
                  'startLine' => 87,
                  'endLine' => 87,
                  'startTokenPos' => 155,
                  'startFilePos' => 3078,
                  'endTokenPos' => 155,
                  'endFilePos' => 3083,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to real number (alias for float).\'',
                'attributes' => 
                array (
                  'startLine' => 88,
                  'endLine' => 88,
                  'startTokenPos' => 162,
                  'startFilePos' => 3105,
                  'endTokenPos' => 162,
                  'endFilePos' => 3144,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 87,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'STRING' => 
      array (
        'name' => 'STRING',
        'value' => 
        array (
          'code' => '\'string\'',
          'attributes' => 
          array (
            'startLine' => 93,
            'endLine' => 93,
            'startTokenPos' => 195,
            'startFilePos' => 3252,
            'endTokenPos' => 195,
            'endFilePos' => 3259,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'String\'',
                'attributes' => 
                array (
                  'startLine' => 91,
                  'endLine' => 91,
                  'startTokenPos' => 178,
                  'startFilePos' => 3185,
                  'endTokenPos' => 178,
                  'endFilePos' => 3192,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to string.\'',
                'attributes' => 
                array (
                  'startLine' => 92,
                  'endLine' => 92,
                  'startTokenPos' => 185,
                  'startFilePos' => 3214,
                  'endTokenPos' => 185,
                  'endFilePos' => 3230,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 91,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'BOOLEAN' => 
      array (
        'name' => 'BOOLEAN',
        'value' => 
        array (
          'code' => '\'boolean\'',
          'attributes' => 
          array (
            'startLine' => 97,
            'endLine' => 97,
            'startTokenPos' => 218,
            'startFilePos' => 3345,
            'endTokenPos' => 218,
            'endFilePos' => 3353,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Boolean\'',
                'attributes' => 
                array (
                  'startLine' => 95,
                  'endLine' => 95,
                  'startTokenPos' => 201,
                  'startFilePos' => 3275,
                  'endTokenPos' => 201,
                  'endFilePos' => 3283,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to boolean.\'',
                'attributes' => 
                array (
                  'startLine' => 96,
                  'endLine' => 96,
                  'startTokenPos' => 208,
                  'startFilePos' => 3305,
                  'endTokenPos' => 208,
                  'endFilePos' => 3322,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 95,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'BOOL' => 
      array (
        'name' => 'BOOL',
        'value' => 
        array (
          'code' => '\'bool\'',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 101,
            'startTokenPos' => 241,
            'startFilePos' => 3441,
            'endTokenPos' => 241,
            'endFilePos' => 3446,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Bool\'',
                'attributes' => 
                array (
                  'startLine' => 99,
                  'endLine' => 99,
                  'startTokenPos' => 224,
                  'startFilePos' => 3369,
                  'endTokenPos' => 224,
                  'endFilePos' => 3374,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to boolean (alias).\'',
                'attributes' => 
                array (
                  'startLine' => 100,
                  'endLine' => 100,
                  'startTokenPos' => 231,
                  'startFilePos' => 3396,
                  'endTokenPos' => 231,
                  'endFilePos' => 3421,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 99,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'DATETIME' => 
      array (
        'name' => 'DATETIME',
        'value' => 
        array (
          'code' => '\'datetime\'',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 266,
            'startFilePos' => 3574,
            'endTokenPos' => 266,
            'endFilePos' => 3583,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Datetime\'',
                'attributes' => 
                array (
                  'startLine' => 104,
                  'endLine' => 104,
                  'startTokenPos' => 249,
                  'startFilePos' => 3485,
                  'endTokenPos' => 249,
                  'endFilePos' => 3494,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to Carbon datetime instance.\'',
                'attributes' => 
                array (
                  'startLine' => 105,
                  'endLine' => 105,
                  'startTokenPos' => 256,
                  'startFilePos' => 3516,
                  'endTokenPos' => 256,
                  'endFilePos' => 3550,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 104,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'IMMUTABLE_DATETIME' => 
      array (
        'name' => 'IMMUTABLE_DATETIME',
        'value' => 
        array (
          'code' => '\'immutable_datetime\'',
          'attributes' => 
          array (
            'startLine' => 110,
            'endLine' => 110,
            'startTokenPos' => 289,
            'startFilePos' => 3718,
            'endTokenPos' => 289,
            'endFilePos' => 3737,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Immutable Datetime\'',
                'attributes' => 
                array (
                  'startLine' => 108,
                  'endLine' => 108,
                  'startTokenPos' => 272,
                  'startFilePos' => 3599,
                  'endTokenPos' => 272,
                  'endFilePos' => 3618,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to immutable Carbon datetime instance.\'',
                'attributes' => 
                array (
                  'startLine' => 109,
                  'endLine' => 109,
                  'startTokenPos' => 279,
                  'startFilePos' => 3640,
                  'endTokenPos' => 279,
                  'endFilePos' => 3684,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 108,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 51,
      ),
      'DATE' => 
      array (
        'name' => 'DATE',
        'value' => 
        array (
          'code' => '\'date\'',
          'attributes' => 
          array (
            'startLine' => 114,
            'endLine' => 114,
            'startTokenPos' => 312,
            'startFilePos' => 3845,
            'endTokenPos' => 312,
            'endFilePos' => 3850,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Date\'',
                'attributes' => 
                array (
                  'startLine' => 112,
                  'endLine' => 112,
                  'startTokenPos' => 295,
                  'startFilePos' => 3753,
                  'endTokenPos' => 295,
                  'endFilePos' => 3758,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to Carbon date instance (without time).\'',
                'attributes' => 
                array (
                  'startLine' => 113,
                  'endLine' => 113,
                  'startTokenPos' => 302,
                  'startFilePos' => 3780,
                  'endTokenPos' => 302,
                  'endFilePos' => 3825,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 112,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'IMMUTABLE_DATE' => 
      array (
        'name' => 'IMMUTABLE_DATE',
        'value' => 
        array (
          'code' => '\'immutable_date\'',
          'attributes' => 
          array (
            'startLine' => 118,
            'endLine' => 118,
            'startTokenPos' => 335,
            'startFilePos' => 3973,
            'endTokenPos' => 335,
            'endFilePos' => 3988,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Immutable Date\'',
                'attributes' => 
                array (
                  'startLine' => 116,
                  'endLine' => 116,
                  'startTokenPos' => 318,
                  'startFilePos' => 3866,
                  'endTokenPos' => 318,
                  'endFilePos' => 3881,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to immutable Carbon date instance.\'',
                'attributes' => 
                array (
                  'startLine' => 117,
                  'endLine' => 117,
                  'startTokenPos' => 325,
                  'startFilePos' => 3903,
                  'endTokenPos' => 325,
                  'endFilePos' => 3943,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 116,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'TIMESTAMP' => 
      array (
        'name' => 'TIMESTAMP',
        'value' => 
        array (
          'code' => '\'timestamp\'',
          'attributes' => 
          array (
            'startLine' => 122,
            'endLine' => 122,
            'startTokenPos' => 358,
            'startFilePos' => 4093,
            'endTokenPos' => 358,
            'endFilePos' => 4103,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Timestamp\'',
                'attributes' => 
                array (
                  'startLine' => 120,
                  'endLine' => 120,
                  'startTokenPos' => 341,
                  'startFilePos' => 4004,
                  'endTokenPos' => 341,
                  'endFilePos' => 4014,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to Unix timestamp integer.\'',
                'attributes' => 
                array (
                  'startLine' => 121,
                  'endLine' => 121,
                  'startTokenPos' => 348,
                  'startFilePos' => 4036,
                  'endTokenPos' => 348,
                  'endFilePos' => 4068,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 120,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
      'TIME' => 
      array (
        'name' => 'TIME',
        'value' => 
        array (
          'code' => '\'datetime:H:i\'',
          'attributes' => 
          array (
            'startLine' => 126,
            'endLine' => 126,
            'startTokenPos' => 381,
            'startFilePos' => 4212,
            'endTokenPos' => 381,
            'endFilePos' => 4225,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Time\'',
                'attributes' => 
                array (
                  'startLine' => 124,
                  'endLine' => 124,
                  'startTokenPos' => 364,
                  'startFilePos' => 4119,
                  'endTokenPos' => 364,
                  'endFilePos' => 4124,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to datetime with time-only format (H:i).\'',
                'attributes' => 
                array (
                  'startLine' => 125,
                  'endLine' => 125,
                  'startTokenPos' => 371,
                  'startFilePos' => 4146,
                  'endTokenPos' => 371,
                  'endFilePos' => 4192,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 124,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'ARRAY' => 
      array (
        'name' => 'ARRAY',
        'value' => 
        array (
          'code' => '\'array\'',
          'attributes' => 
          array (
            'startLine' => 131,
            'endLine' => 131,
            'startTokenPos' => 406,
            'startFilePos' => 4336,
            'endTokenPos' => 406,
            'endFilePos' => 4342,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Array\'',
                'attributes' => 
                array (
                  'startLine' => 129,
                  'endLine' => 129,
                  'startTokenPos' => 389,
                  'startFilePos' => 4267,
                  'endTokenPos' => 389,
                  'endFilePos' => 4273,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast JSON to array.\'',
                'attributes' => 
                array (
                  'startLine' => 130,
                  'endLine' => 130,
                  'startTokenPos' => 396,
                  'startFilePos' => 4295,
                  'endTokenPos' => 396,
                  'endFilePos' => 4315,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 129,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'OBJECT' => 
      array (
        'name' => 'OBJECT',
        'value' => 
        array (
          'code' => '\'object\'',
          'attributes' => 
          array (
            'startLine' => 135,
            'endLine' => 135,
            'startTokenPos' => 429,
            'startFilePos' => 4441,
            'endTokenPos' => 429,
            'endFilePos' => 4448,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Object\'',
                'attributes' => 
                array (
                  'startLine' => 133,
                  'endLine' => 133,
                  'startTokenPos' => 412,
                  'startFilePos' => 4358,
                  'endTokenPos' => 412,
                  'endFilePos' => 4365,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast JSON to object (stdClass).\'',
                'attributes' => 
                array (
                  'startLine' => 134,
                  'endLine' => 134,
                  'startTokenPos' => 419,
                  'startFilePos' => 4387,
                  'endTokenPos' => 419,
                  'endFilePos' => 4419,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 133,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'COLLECTION' => 
      array (
        'name' => 'COLLECTION',
        'value' => 
        array (
          'code' => '\'collection\'',
          'attributes' => 
          array (
            'startLine' => 139,
            'endLine' => 139,
            'startTokenPos' => 452,
            'startFilePos' => 4556,
            'endTokenPos' => 452,
            'endFilePos' => 4567,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Collection\'',
                'attributes' => 
                array (
                  'startLine' => 137,
                  'endLine' => 137,
                  'startTokenPos' => 435,
                  'startFilePos' => 4464,
                  'endTokenPos' => 435,
                  'endFilePos' => 4475,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast JSON to Laravel Collection.\'',
                'attributes' => 
                array (
                  'startLine' => 138,
                  'endLine' => 138,
                  'startTokenPos' => 442,
                  'startFilePos' => 4497,
                  'endTokenPos' => 442,
                  'endFilePos' => 4530,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 137,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
      'JSON' => 
      array (
        'name' => 'JSON',
        'value' => 
        array (
          'code' => '\'json\'',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 475,
            'startFilePos' => 4651,
            'endTokenPos' => 475,
            'endFilePos' => 4656,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'JSON\'',
                'attributes' => 
                array (
                  'startLine' => 141,
                  'endLine' => 141,
                  'startTokenPos' => 458,
                  'startFilePos' => 4583,
                  'endTokenPos' => 458,
                  'endFilePos' => 4588,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to JSON string.\'',
                'attributes' => 
                array (
                  'startLine' => 142,
                  'endLine' => 142,
                  'startTokenPos' => 465,
                  'startFilePos' => 4610,
                  'endTokenPos' => 465,
                  'endFilePos' => 4631,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 141,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'ENCRYPTED' => 
      array (
        'name' => 'ENCRYPTED',
        'value' => 
        array (
          'code' => '\'encrypted\'',
          'attributes' => 
          array (
            'startLine' => 148,
            'endLine' => 148,
            'startTokenPos' => 500,
            'startFilePos' => 4801,
            'endTokenPos' => 500,
            'endFilePos' => 4811,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Encrypted\'',
                'attributes' => 
                array (
                  'startLine' => 146,
                  'endLine' => 146,
                  'startTokenPos' => 483,
                  'startFilePos' => 4695,
                  'endTokenPos' => 483,
                  'endFilePos' => 4705,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '"Encrypt/decrypt value using Laravel\'s encrypter."',
                'attributes' => 
                array (
                  'startLine' => 147,
                  'endLine' => 147,
                  'startTokenPos' => 490,
                  'startFilePos' => 4727,
                  'endTokenPos' => 490,
                  'endFilePos' => 4776,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 146,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
      'ENCRYPTED_ARRAY' => 
      array (
        'name' => 'ENCRYPTED_ARRAY',
        'value' => 
        array (
          'code' => '\'encrypted:array\'',
          'attributes' => 
          array (
            'startLine' => 152,
            'endLine' => 152,
            'startTokenPos' => 523,
            'startFilePos' => 4925,
            'endTokenPos' => 523,
            'endFilePos' => 4941,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Encrypted Array\'',
                'attributes' => 
                array (
                  'startLine' => 150,
                  'endLine' => 150,
                  'startTokenPos' => 506,
                  'startFilePos' => 4827,
                  'endTokenPos' => 506,
                  'endFilePos' => 4843,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Encrypt/decrypt array value.\'',
                'attributes' => 
                array (
                  'startLine' => 151,
                  'endLine' => 151,
                  'startTokenPos' => 513,
                  'startFilePos' => 4865,
                  'endTokenPos' => 513,
                  'endFilePos' => 4894,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 150,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 45,
      ),
      'ENCRYPTED_COLLECTION' => 
      array (
        'name' => 'ENCRYPTED_COLLECTION',
        'value' => 
        array (
          'code' => '\'encrypted:collection\'',
          'attributes' => 
          array (
            'startLine' => 156,
            'endLine' => 156,
            'startTokenPos' => 546,
            'startFilePos' => 5070,
            'endTokenPos' => 546,
            'endFilePos' => 5091,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Encrypted Collection\'',
                'attributes' => 
                array (
                  'startLine' => 154,
                  'endLine' => 154,
                  'startTokenPos' => 529,
                  'startFilePos' => 4957,
                  'endTokenPos' => 529,
                  'endFilePos' => 4978,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Encrypt/decrypt collection value.\'',
                'attributes' => 
                array (
                  'startLine' => 155,
                  'endLine' => 155,
                  'startTokenPos' => 536,
                  'startFilePos' => 5000,
                  'endTokenPos' => 536,
                  'endFilePos' => 5034,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 154,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 55,
      ),
      'ENCRYPTED_OBJECT' => 
      array (
        'name' => 'ENCRYPTED_OBJECT',
        'value' => 
        array (
          'code' => '\'encrypted:object\'',
          'attributes' => 
          array (
            'startLine' => 160,
            'endLine' => 160,
            'startTokenPos' => 569,
            'startFilePos' => 5208,
            'endTokenPos' => 569,
            'endFilePos' => 5225,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Encrypted Object\'',
                'attributes' => 
                array (
                  'startLine' => 158,
                  'endLine' => 158,
                  'startTokenPos' => 552,
                  'startFilePos' => 5107,
                  'endTokenPos' => 552,
                  'endFilePos' => 5124,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Encrypt/decrypt object value.\'',
                'attributes' => 
                array (
                  'startLine' => 159,
                  'endLine' => 159,
                  'startTokenPos' => 559,
                  'startFilePos' => 5146,
                  'endTokenPos' => 559,
                  'endFilePos' => 5176,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 158,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 47,
      ),
      'HASHED' => 
      array (
        'name' => 'HASHED',
        'value' => 
        array (
          'code' => '\'hashed\'',
          'attributes' => 
          array (
            'startLine' => 165,
            'endLine' => 165,
            'startTokenPos' => 594,
            'startFilePos' => 5357,
            'endTokenPos' => 594,
            'endFilePos' => 5364,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Hashed\'',
                'attributes' => 
                array (
                  'startLine' => 163,
                  'endLine' => 163,
                  'startTokenPos' => 577,
                  'startFilePos' => 5261,
                  'endTokenPos' => 577,
                  'endFilePos' => 5268,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '"Hash value using Laravel\'s hasher (one-way)."',
                'attributes' => 
                array (
                  'startLine' => 164,
                  'endLine' => 164,
                  'startTokenPos' => 584,
                  'startFilePos' => 5290,
                  'endTokenPos' => 584,
                  'endFilePos' => 5335,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 163,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'DECIMAL' => 
      array (
        'name' => 'DECIMAL',
        'value' => 
        array (
          'code' => '\'decimal\'',
          'attributes' => 
          array (
            'startLine' => 170,
            'endLine' => 170,
            'startTokenPos' => 619,
            'startFilePos' => 5543,
            'endTokenPos' => 619,
            'endFilePos' => 5551,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Decimal\'',
                'attributes' => 
                array (
                  'startLine' => 168,
                  'endLine' => 168,
                  'startTokenPos' => 602,
                  'startFilePos' => 5400,
                  'endTokenPos' => 602,
                  'endFilePos' => 5408,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Cast to decimal with precision. Use withPrecision() method for specifying decimal places.\'',
                'attributes' => 
                array (
                  'startLine' => 169,
                  'endLine' => 169,
                  'startTokenPos' => 609,
                  'startFilePos' => 5430,
                  'endTokenPos' => 609,
                  'endFilePos' => 5520,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 168,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
    ),
  ),
));