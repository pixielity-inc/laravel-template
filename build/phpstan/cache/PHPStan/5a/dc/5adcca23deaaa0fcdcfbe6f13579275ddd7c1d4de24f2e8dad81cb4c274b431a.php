<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/QueueDriver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\QueueDriver
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-923c464bf7ad2a3ec9b183c4d6e80e9b2930d0e6bbfb7d03c5c062c457166e73',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/QueueDriver.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
    'shortName' => 'QueueDriver',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Queue Driver Enum.
 *
 * Defines the available queue drivers supported by Laravel.
 * Use this enum instead of hardcoded driver strings.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Foundation\\Enums\\QueueDriver;
 *
 * // Check current queue driver
 * if ($queueDriver === QueueDriver::REDIS()) {
 *     // Redis queue-specific logic
 * }
 * ```
 *
 * @since 1.0.0
 *
 * @method static string SYNC() Returns the SYNC enum instance
 * @method static string DATABASE() Returns the DATABASE enum instance
 * @method static string BEANSTALKD() Returns the BEANSTALKD enum instance
 * @method static string SQS() Returns the SQS enum instance
 * @method static string REDIS() Returns the REDIS enum instance
 * @method static string NULL() Returns the NULL enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 110,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
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
      'isAsync' => 
      array (
        'name' => 'isAsync',
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
 * Check if this driver is asynchronous.
 *
 * @return bool True if jobs are processed asynchronously
 */',
        'startLine' => 90,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'aliasName' => NULL,
      ),
      'supportsDelay' => 
      array (
        'name' => 'supportsDelay',
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
 * Check if this driver supports delayed jobs.
 *
 * @return bool True if delayed jobs are supported
 */',
        'startLine' => 103,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\QueueDriver',
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
      'SYNC' => 
      array (
        'name' => 'SYNC',
        'value' => 
        array (
          'code' => '\'sync\'',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 68,
            'startFilePos' => 1207,
            'endTokenPos' => 68,
            'endFilePos' => 1212,
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
                'code' => '\'Sync\'',
                'attributes' => 
                array (
                  'startLine' => 44,
                  'endLine' => 44,
                  'startTokenPos' => 51,
                  'startFilePos' => 1098,
                  'endTokenPos' => 51,
                  'endFilePos' => 1103,
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
                'code' => '\'Sync queue driver. Executes jobs immediately (synchronously).\'',
                'attributes' => 
                array (
                  'startLine' => 45,
                  'endLine' => 45,
                  'startTokenPos' => 58,
                  'startFilePos' => 1125,
                  'endTokenPos' => 58,
                  'endFilePos' => 1187,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Sync queue driver.
 * Executes jobs immediately (synchronously).
 */',
        'startLine' => 44,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'DATABASE' => 
      array (
        'name' => 'DATABASE',
        'value' => 
        array (
          'code' => '\'database\'',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 93,
            'startFilePos' => 1421,
            'endTokenPos' => 93,
            'endFilePos' => 1430,
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
                  'startLine' => 52,
                  'endLine' => 52,
                  'startTokenPos' => 76,
                  'startFilePos' => 1312,
                  'endTokenPos' => 76,
                  'endFilePos' => 1321,
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
                'code' => '\'Database queue driver. Stores jobs in database table.\'',
                'attributes' => 
                array (
                  'startLine' => 53,
                  'endLine' => 53,
                  'startTokenPos' => 83,
                  'startFilePos' => 1343,
                  'endTokenPos' => 83,
                  'endFilePos' => 1397,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Database queue driver.
 * Stores jobs in database table.
 */',
        'startLine' => 52,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'BEANSTALKD' => 
      array (
        'name' => 'BEANSTALKD',
        'value' => 
        array (
          'code' => '\'beanstalkd\'',
          'attributes' => 
          array (
            'startLine' => 61,
            'endLine' => 61,
            'startTokenPos' => 118,
            'startFilePos' => 1578,
            'endTokenPos' => 118,
            'endFilePos' => 1589,
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
                'code' => '\'Beanstalkd\'',
                'attributes' => 
                array (
                  'startLine' => 59,
                  'endLine' => 59,
                  'startTokenPos' => 101,
                  'startFilePos' => 1494,
                  'endTokenPos' => 101,
                  'endFilePos' => 1505,
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
                'code' => '\'Beanstalkd queue driver.\'',
                'attributes' => 
                array (
                  'startLine' => 60,
                  'endLine' => 60,
                  'startTokenPos' => 108,
                  'startFilePos' => 1527,
                  'endTokenPos' => 108,
                  'endFilePos' => 1552,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Beanstalkd queue driver.
 */',
        'startLine' => 59,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
      'SQS' => 
      array (
        'name' => 'SQS',
        'value' => 
        array (
          'code' => '\'sqs\'',
          'attributes' => 
          array (
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 143,
            'startFilePos' => 1730,
            'endTokenPos' => 143,
            'endFilePos' => 1734,
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
                'code' => '\'Amazon SQS\'',
                'attributes' => 
                array (
                  'startLine' => 66,
                  'endLine' => 66,
                  'startTokenPos' => 126,
                  'startFilePos' => 1653,
                  'endTokenPos' => 126,
                  'endFilePos' => 1664,
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
                'code' => '\'Amazon SQS queue driver.\'',
                'attributes' => 
                array (
                  'startLine' => 67,
                  'endLine' => 67,
                  'startTokenPos' => 133,
                  'startFilePos' => 1686,
                  'endTokenPos' => 133,
                  'endFilePos' => 1711,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Amazon SQS queue driver.
 */',
        'startLine' => 66,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'REDIS' => 
      array (
        'name' => 'REDIS',
        'value' => 
        array (
          'code' => '\'redis\'',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 168,
            'startFilePos' => 1862,
            'endTokenPos' => 168,
            'endFilePos' => 1868,
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
                  'startLine' => 73,
                  'endLine' => 73,
                  'startTokenPos' => 151,
                  'startFilePos' => 1793,
                  'endTokenPos' => 151,
                  'endFilePos' => 1799,
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
                'code' => '\'Redis queue driver.\'',
                'attributes' => 
                array (
                  'startLine' => 74,
                  'endLine' => 74,
                  'startTokenPos' => 158,
                  'startFilePos' => 1821,
                  'endTokenPos' => 158,
                  'endFilePos' => 1841,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Redis queue driver.
 */',
        'startLine' => 73,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'NULL' => 
      array (
        'name' => 'NULL',
        'value' => 
        array (
          'code' => '\'null\'',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 193,
            'startFilePos' => 2079,
            'endTokenPos' => 193,
            'endFilePos' => 2084,
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
                  'startLine' => 81,
                  'endLine' => 81,
                  'startTokenPos' => 176,
                  'startFilePos' => 1973,
                  'endTokenPos' => 176,
                  'endFilePos' => 1978,
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
                'code' => '\'Null queue driver. Discards all jobs (useful for testing).\'',
                'attributes' => 
                array (
                  'startLine' => 82,
                  'endLine' => 82,
                  'startTokenPos' => 183,
                  'startFilePos' => 2000,
                  'endTokenPos' => 183,
                  'endFilePos' => 2059,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Null queue driver.
 * Discards all jobs (useful for testing).
 */',
        'startLine' => 81,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
    ),
  ),
));