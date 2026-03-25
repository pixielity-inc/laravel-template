<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/CacheDriver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\CacheDriver
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-ca3d0990b0ea1da185c07f27814fa1af35fc537a9a878b114f93e0b54449e398',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/CacheDriver.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
    'shortName' => 'CacheDriver',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Cache Driver Enum.
 *
 * Defines the available cache drivers supported by Laravel.
 * Use this enum instead of hardcoded driver strings.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Foundation\\Enums\\CacheDriver;
 *
 * // Check current cache driver
 * if ($cacheDriver === CacheDriver::REDIS()) {
 *     cache()->tags([\'users\'])->flush();
 * }
 *
 * // In config comparison
 * if (config(\'cache.default\') === CacheDriver::REDIS()) {
 *     // Redis-specific logic
 * }
 * ```
 *
 * @method static string ARRAY() Returns the ARRAY enum instance
 * @method static string DATABASE() Returns the DATABASE enum instance
 * @method static string FILE() Returns the FILE enum instance
 * @method static string MEMCACHED() Returns the MEMCACHED enum instance
 * @method static string REDIS() Returns the REDIS enum instance
 * @method static string DYNAMODB() Returns the DYNAMODB enum instance
 * @method static string OCTANE() Returns the OCTANE enum instance
 * @method static string NULL() Returns the NULL enum instance
 *
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 43,
    'endLine' => 150,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
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
      'supportsTags' => 
      array (
        'name' => 'supportsTags',
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
 * Check if this driver supports cache tags.
 *
 * @return bool True if tags are supported
 */',
        'startLine' => 117,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'aliasName' => NULL,
      ),
      'isPersistent' => 
      array (
        'name' => 'isPersistent',
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
 * Check if this driver is persistent.
 *
 * @return bool True if cache persists across requests
 */',
        'startLine' => 130,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'aliasName' => NULL,
      ),
      'isDistributed' => 
      array (
        'name' => 'isDistributed',
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
 * Check if this driver is distributed.
 *
 * @return bool True if cache is shared across servers
 */',
        'startLine' => 143,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CacheDriver',
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
      'ARRAY' => 
      array (
        'name' => 'ARRAY',
        'value' => 
        array (
          'code' => '\'array\'',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 68,
            'startFilePos' => 1491,
            'endTokenPos' => 68,
            'endFilePos' => 1497,
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
                  'startLine' => 51,
                  'endLine' => 51,
                  'startTokenPos' => 51,
                  'startFilePos' => 1374,
                  'endTokenPos' => 51,
                  'endFilePos' => 1380,
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
                'code' => '\'Array cache driver (in-memory, non-persistent). Useful for testing.\'',
                'attributes' => 
                array (
                  'startLine' => 52,
                  'endLine' => 52,
                  'startTokenPos' => 58,
                  'startFilePos' => 1402,
                  'endTokenPos' => 58,
                  'endFilePos' => 1470,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Array cache driver (in-memory, non-persistent).
 * Useful for testing.
 */',
        'startLine' => 51,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'DATABASE' => 
      array (
        'name' => 'DATABASE',
        'value' => 
        array (
          'code' => '\'database\'',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 61,
            'startTokenPos' => 93,
            'startFilePos' => 1708,
            'endTokenPos' => 93,
            'endFilePos' => 1717,
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
                'code' => '\'Database\'',
                'attributes' => 
                array (
                  'startLine' => 59,
                  'endLine' => 59,
                  'startTokenPos' => 76,
                  'startFilePos' => 1598,
                  'endTokenPos' => 76,
                  'endFilePos' => 1607,
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
                'code' => '\'Database cache driver. Stores cache in database table.\'',
                'attributes' => 
                array (
                  'startLine' => 60,
                  'endLine' => 60,
                  'startTokenPos' => 83,
                  'startFilePos' => 1629,
                  'endTokenPos' => 83,
                  'endFilePos' => 1684,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Database cache driver.
 * Stores cache in database table.
 */',
        'startLine' => 59,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'FILE' => 
      array (
        'name' => 'FILE',
        'value' => 
        array (
          'code' => '\'file\'',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 118,
            'startFilePos' => 1904,
            'endTokenPos' => 118,
            'endFilePos' => 1909,
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
                'code' => '\'File\'',
                'attributes' => 
                array (
                  'startLine' => 67,
                  'endLine' => 67,
                  'startTokenPos' => 101,
                  'startFilePos' => 1810,
                  'endTokenPos' => 101,
                  'endFilePos' => 1815,
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
                'code' => '\'File cache driver. Stores cache in filesystem.\'',
                'attributes' => 
                array (
                  'startLine' => 68,
                  'endLine' => 68,
                  'startTokenPos' => 108,
                  'startFilePos' => 1837,
                  'endTokenPos' => 108,
                  'endFilePos' => 1884,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * File cache driver.
 * Stores cache in filesystem.
 */',
        'startLine' => 67,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'MEMCACHED' => 
      array (
        'name' => 'MEMCACHED',
        'value' => 
        array (
          'code' => '\'memcached\'',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 143,
            'startFilePos' => 2116,
            'endTokenPos' => 143,
            'endFilePos' => 2126,
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
                'code' => '\'Memcached\'',
                'attributes' => 
                array (
                  'startLine' => 75,
                  'endLine' => 75,
                  'startTokenPos' => 126,
                  'startFilePos' => 2007,
                  'endTokenPos' => 126,
                  'endFilePos' => 2017,
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
                'code' => '\'Memcached cache driver. Distributed memory caching.\'',
                'attributes' => 
                array (
                  'startLine' => 76,
                  'endLine' => 76,
                  'startTokenPos' => 133,
                  'startFilePos' => 2039,
                  'endTokenPos' => 133,
                  'endFilePos' => 2091,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Memcached cache driver.
 * Distributed memory caching.
 */',
        'startLine' => 75,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
      'REDIS' => 
      array (
        'name' => 'REDIS',
        'value' => 
        array (
          'code' => '\'redis\'',
          'attributes' => 
          array (
            'startLine' => 86,
            'endLine' => 86,
            'startTokenPos' => 168,
            'startFilePos' => 2406,
            'endTokenPos' => 168,
            'endFilePos' => 2412,
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
                'code' => '\'Redis\'',
                'attributes' => 
                array (
                  'startLine' => 84,
                  'endLine' => 84,
                  'startTokenPos' => 151,
                  'startFilePos' => 2268,
                  'endTokenPos' => 151,
                  'endFilePos' => 2274,
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
                'code' => '\'Redis cache driver. In-memory data structure store. Supports tags and atomic operations.\'',
                'attributes' => 
                array (
                  'startLine' => 85,
                  'endLine' => 85,
                  'startTokenPos' => 158,
                  'startFilePos' => 2296,
                  'endTokenPos' => 158,
                  'endFilePos' => 2385,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Redis cache driver.
 * In-memory data structure store.
 * Supports tags and atomic operations.
 */',
        'startLine' => 84,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'DYNAMODB' => 
      array (
        'name' => 'DYNAMODB',
        'value' => 
        array (
          'code' => '\'dynamodb\'',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 193,
            'startFilePos' => 2617,
            'endTokenPos' => 193,
            'endFilePos' => 2626,
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
                'code' => '\'DynamoDB\'',
                'attributes' => 
                array (
                  'startLine' => 92,
                  'endLine' => 92,
                  'startTokenPos' => 176,
                  'startFilePos' => 2510,
                  'endTokenPos' => 176,
                  'endFilePos' => 2519,
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
                'code' => '\'DynamoDB cache driver. AWS DynamoDB as cache store.\'',
                'attributes' => 
                array (
                  'startLine' => 93,
                  'endLine' => 93,
                  'startTokenPos' => 183,
                  'startFilePos' => 2541,
                  'endTokenPos' => 183,
                  'endFilePos' => 2593,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * DynamoDB cache driver.
 * AWS DynamoDB as cache store.
 */',
        'startLine' => 92,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'OCTANE' => 
      array (
        'name' => 'OCTANE',
        'value' => 
        array (
          'code' => '\'octane\'',
          'attributes' => 
          array (
            'startLine' => 102,
            'endLine' => 102,
            'startTokenPos' => 218,
            'startFilePos' => 2829,
            'endTokenPos' => 218,
            'endFilePos' => 2836,
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
                'code' => '\'Octane\'',
                'attributes' => 
                array (
                  'startLine' => 100,
                  'endLine' => 100,
                  'startTokenPos' => 201,
                  'startFilePos' => 2725,
                  'endTokenPos' => 201,
                  'endFilePos' => 2732,
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
                'code' => '\'Octane cache driver. Laravel Octane in-memory cache.\'',
                'attributes' => 
                array (
                  'startLine' => 101,
                  'endLine' => 101,
                  'startTokenPos' => 208,
                  'startFilePos' => 2754,
                  'endTokenPos' => 208,
                  'endFilePos' => 2807,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Octane cache driver.
 * Laravel Octane in-memory cache.
 */',
        'startLine' => 100,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'NULL' => 
      array (
        'name' => 'NULL',
        'value' => 
        array (
          'code' => '\'null\'',
          'attributes' => 
          array (
            'startLine' => 110,
            'endLine' => 110,
            'startTokenPos' => 243,
            'startFilePos' => 3045,
            'endTokenPos' => 243,
            'endFilePos' => 3050,
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
                'code' => '\'Null\'',
                'attributes' => 
                array (
                  'startLine' => 108,
                  'endLine' => 108,
                  'startTokenPos' => 226,
                  'startFilePos' => 2940,
                  'endTokenPos' => 226,
                  'endFilePos' => 2945,
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
                'code' => '\'Null cache driver. Disables caching (useful for testing).\'',
                'attributes' => 
                array (
                  'startLine' => 109,
                  'endLine' => 109,
                  'startTokenPos' => 233,
                  'startFilePos' => 2967,
                  'endTokenPos' => 233,
                  'endFilePos' => 3025,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Null cache driver.
 * Disables caching (useful for testing).
 */',
        'startLine' => 108,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
    ),
  ),
));