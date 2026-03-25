<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/SessionDriver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\SessionDriver
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-793fd4bb88e822291fcec3a5f8d2f74703b27ee6987388f2fdb7fc45d8c4ad00',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/SessionDriver.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
    'shortName' => 'SessionDriver',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Session Driver Enum.
 *
 * Defines the available session drivers supported by Laravel.
 * Use this enum instead of hardcoded driver strings.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Foundation\\Enums\\SessionDriver;
 *
 * // Check current session driver
 * if ($sessionDriver === SessionDriver::REDIS()) {
 *     // Redis session-specific logic
 * }
 * ```
 *
 * @since 1.0.0
 *
 * @method static string FILE() Returns the FILE enum instance
 * @method static string COOKIE() Returns the COOKIE enum instance
 * @method static string DATABASE() Returns the DATABASE enum instance
 * @method static string MEMCACHED() Returns the MEMCACHED enum instance
 * @method static string REDIS() Returns the REDIS enum instance
 * @method static string DYNAMODB() Returns the DYNAMODB enum instance
 * @method static string ARRAY() Returns the ARRAY enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 37,
    'endLine' => 119,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
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
 * Check if this driver is persistent across requests.
 *
 * @return bool True if sessions persist
 */',
        'startLine' => 99,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
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
 * @return bool True if sessions are shared across servers
 */',
        'startLine' => 112,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\SessionDriver',
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
      'FILE' => 
      array (
        'name' => 'FILE',
        'value' => 
        array (
          'code' => '\'file\'',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 68,
            'startFilePos' => 1280,
            'endTokenPos' => 68,
            'endFilePos' => 1285,
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
                  'startLine' => 45,
                  'endLine' => 45,
                  'startTokenPos' => 51,
                  'startFilePos' => 1181,
                  'endTokenPos' => 51,
                  'endFilePos' => 1186,
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
                'code' => '\'File session driver. Stores sessions in filesystem.\'',
                'attributes' => 
                array (
                  'startLine' => 46,
                  'endLine' => 46,
                  'startTokenPos' => 58,
                  'startFilePos' => 1208,
                  'endTokenPos' => 58,
                  'endFilePos' => 1260,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * File session driver.
 * Stores sessions in filesystem.
 */',
        'startLine' => 45,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'COOKIE' => 
      array (
        'name' => 'COOKIE',
        'value' => 
        array (
          'code' => '\'cookie\'',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 93,
            'startFilePos' => 1504,
            'endTokenPos' => 93,
            'endFilePos' => 1511,
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
                'code' => '\'Cookie\'',
                'attributes' => 
                array (
                  'startLine' => 53,
                  'endLine' => 53,
                  'startTokenPos' => 76,
                  'startFilePos' => 1392,
                  'endTokenPos' => 76,
                  'endFilePos' => 1399,
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
                'code' => '\'Cookie session driver. Stores sessions in encrypted cookies.\'',
                'attributes' => 
                array (
                  'startLine' => 54,
                  'endLine' => 54,
                  'startTokenPos' => 83,
                  'startFilePos' => 1421,
                  'endTokenPos' => 83,
                  'endFilePos' => 1482,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Cookie session driver.
 * Stores sessions in encrypted cookies.
 */',
        'startLine' => 53,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'DATABASE' => 
      array (
        'name' => 'DATABASE',
        'value' => 
        array (
          'code' => '\'database\'',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 118,
            'startFilePos' => 1732,
            'endTokenPos' => 118,
            'endFilePos' => 1741,
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
                  'startLine' => 61,
                  'endLine' => 61,
                  'startTokenPos' => 101,
                  'startFilePos' => 1617,
                  'endTokenPos' => 101,
                  'endFilePos' => 1626,
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
                'code' => '\'Database session driver. Stores sessions in database table.\'',
                'attributes' => 
                array (
                  'startLine' => 62,
                  'endLine' => 62,
                  'startTokenPos' => 108,
                  'startFilePos' => 1648,
                  'endTokenPos' => 108,
                  'endFilePos' => 1708,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Database session driver.
 * Stores sessions in database table.
 */',
        'startLine' => 61,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'MEMCACHED' => 
      array (
        'name' => 'MEMCACHED',
        'value' => 
        array (
          'code' => '\'memcached\'',
          'attributes' => 
          array (
            'startLine' => 70,
            'endLine' => 70,
            'startTokenPos' => 143,
            'startFilePos' => 1889,
            'endTokenPos' => 143,
            'endFilePos' => 1899,
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
                  'startLine' => 68,
                  'endLine' => 68,
                  'startTokenPos' => 126,
                  'startFilePos' => 1806,
                  'endTokenPos' => 126,
                  'endFilePos' => 1816,
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
                'code' => '\'Memcached session driver.\'',
                'attributes' => 
                array (
                  'startLine' => 69,
                  'endLine' => 69,
                  'startTokenPos' => 133,
                  'startFilePos' => 1838,
                  'endTokenPos' => 133,
                  'endFilePos' => 1864,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Memcached session driver.
 */',
        'startLine' => 68,
        'endLine' => 70,
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
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 168,
            'startFilePos' => 2031,
            'endTokenPos' => 168,
            'endFilePos' => 2037,
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
                  'startLine' => 75,
                  'endLine' => 75,
                  'startTokenPos' => 151,
                  'startFilePos' => 1960,
                  'endTokenPos' => 151,
                  'endFilePos' => 1966,
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
                'code' => '\'Redis session driver.\'',
                'attributes' => 
                array (
                  'startLine' => 76,
                  'endLine' => 76,
                  'startTokenPos' => 158,
                  'startFilePos' => 1988,
                  'endTokenPos' => 158,
                  'endFilePos' => 2010,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Redis session driver.
 */',
        'startLine' => 75,
        'endLine' => 77,
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
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 193,
            'startFilePos' => 2181,
            'endTokenPos' => 193,
            'endFilePos' => 2190,
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
                  'startLine' => 82,
                  'endLine' => 82,
                  'startTokenPos' => 176,
                  'startFilePos' => 2101,
                  'endTokenPos' => 176,
                  'endFilePos' => 2110,
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
                'code' => '\'DynamoDB session driver.\'',
                'attributes' => 
                array (
                  'startLine' => 83,
                  'endLine' => 83,
                  'startTokenPos' => 183,
                  'startFilePos' => 2132,
                  'endTokenPos' => 183,
                  'endFilePos' => 2157,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * DynamoDB session driver.
 */',
        'startLine' => 82,
        'endLine' => 84,
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
            'startLine' => 92,
            'endLine' => 92,
            'startTokenPos' => 218,
            'startFilePos' => 2411,
            'endTokenPos' => 218,
            'endFilePos' => 2417,
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
                  'startLine' => 90,
                  'endLine' => 90,
                  'startTokenPos' => 201,
                  'startFilePos' => 2299,
                  'endTokenPos' => 201,
                  'endFilePos' => 2305,
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
                'code' => '\'Array session driver. In-memory, non-persistent (for testing).\'',
                'attributes' => 
                array (
                  'startLine' => 91,
                  'endLine' => 91,
                  'startTokenPos' => 208,
                  'startFilePos' => 2327,
                  'endTokenPos' => 208,
                  'endFilePos' => 2390,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Array session driver.
 * In-memory, non-persistent (for testing).
 */',
        'startLine' => 90,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
    ),
  ),
));