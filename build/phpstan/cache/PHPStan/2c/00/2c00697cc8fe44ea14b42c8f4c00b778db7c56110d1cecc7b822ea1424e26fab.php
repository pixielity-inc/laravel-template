<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Serializer/src/Serializer.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Serializer\Serializer
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-cdc503d90a691161ce8fdbbf2a1d1c9927447843e2fe929dc57a42988e2e8943',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Serializer\\Serializer',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Serializer/src/Serializer.php',
      ),
    ),
    'namespace' => 'Pixielity\\Serializer',
    'name' => 'Pixielity\\Serializer\\Serializer',
    'shortName' => 'Serializer',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Serializer.
 *
 * Provides methods to serialize data into various formats and unserialize
 * encoded data with security considerations.
 *
 * This implementation uses PHP\'s native serialization functions.
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
      1 => 
      array (
        'name' => 'Pixielity\\Container\\Attributes\\Bind',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\\Pixielity\\Contracts\\Framework\\Serializer\\Serializer::class',
            'attributes' => 
            array (
              'startLine' => 24,
              'endLine' => 24,
              'startTokenPos' => 63,
              'startFilePos' => 608,
              'endTokenPos' => 65,
              'endFilePos' => 632,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 23,
    'endLine' => 156,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Pixielity\\Contracts\\Framework\\Serializer\\Serializer',
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
      'serialize' => 
      array (
        'name' => 'serialize',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 31,
            'endColumn' => 41,
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
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'false',
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
 * Serialize data into a string format.
 *
 * This method takes a variable of mixed type (string, int, float, bool, array, or null),
 * and converts it into a serialized string using PHP\'s native serialize() function.
 * If the serialization fails, an InvalidArgumentException is thrown.
 *
 * @param  mixed  $data  Data to be serialized. Acceptable types are
 *                       string, int, float, bool, array, or null.
 * @return string|false The serialized string if successful, false on failure.
 *
 * @throws InvalidArgumentException If the data cannot be serialized.
 */',
        'startLine' => 40,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Serializer',
        'declaringClassName' => 'Pixielity\\Serializer\\Serializer',
        'implementingClassName' => 'Pixielity\\Serializer\\Serializer',
        'currentClassName' => 'Pixielity\\Serializer\\Serializer',
        'aliasName' => NULL,
      ),
      'unserialize' => 
      array (
        'name' => 'unserialize',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'allowedClasses' => 
          array (
            'name' => 'allowedClasses',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 81,
                'endLine' => 81,
                'startTokenPos' => 213,
                'startFilePos' => 3272,
                'endTokenPos' => 213,
                'endFilePos' => 3276,
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
            'startLine' => 81,
            'endLine' => 81,
            'startColumn' => 42,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Safely unserializes a string into its original data format.
 *
 * This method takes a serialized string and converts it back into its
 * original data type. It offers an option to allow or disallow classes during
 * the unserialization process for security and flexibility.
 *
 * Security Note:
 * - When $allowedClasses is false, no class instances will be created
 *   during unserialization, preventing potential security vulnerabilities.
 * - When $allowedClasses is true, all classes are allowed, which may pose
 *   security risks when unserializing data from untrusted sources.
 *
 * @param  string  $string  The serialized string to be unserialized.
 * @param  bool  $allowedClasses  Whether to allow class instances during unserialization.
 *                                `true` allows all classes; `false` disallows all classes.
 * @return mixed The unserialized data, which can be any valid PHP data type.
 *
 * @throws InvalidArgumentException If the unserialization fails due to invalid input.
 */',
        'startLine' => 81,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Serializer',
        'declaringClassName' => 'Pixielity\\Serializer\\Serializer',
        'implementingClassName' => 'Pixielity\\Serializer\\Serializer',
        'currentClassName' => 'Pixielity\\Serializer\\Serializer',
        'aliasName' => NULL,
      ),
      'isSerialized' => 
      array (
        'name' => 'isSerialized',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 34,
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
 * Check if a string is a valid serialized data.
 *
 * This method checks if the provided string is in a valid serialized format
 * without actually unserializing it, avoiding potential errors.
 *
 * @param  string  $string  The string to check.
 * @return bool True if the string is valid serialized data, false otherwise.
 */',
        'startLine' => 125,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Serializer',
        'declaringClassName' => 'Pixielity\\Serializer\\Serializer',
        'implementingClassName' => 'Pixielity\\Serializer\\Serializer',
        'currentClassName' => 'Pixielity\\Serializer\\Serializer',
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