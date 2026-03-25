<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/LogDriver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\LogDriver
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-08879bd78256f10f4c5cb39f8119a0c4b301333b12b5836bdf431ec8e1f8c363',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/LogDriver.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\LogDriver',
    'shortName' => 'LogDriver',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Log Driver Enum.
 *
 * Defines the available log drivers/channels supported by Laravel.
 * Use this enum instead of hardcoded driver strings.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Foundation\\Enums\\LogDriver;
 *
 * // Check current log driver
 * if ($logDriver === LogDriver::DAILY()) {
 *     // Daily log-specific logic
 * }
 *
 * // In config
 * \'driver\' => LogDriver::DAILY(),
 * ```
 *
 * @since 1.0.0
 *
 * @method static string SINGLE() Returns the SINGLE enum instance
 * @method static string DAILY() Returns the DAILY enum instance
 * @method static string SLACK() Returns the SLACK enum instance
 * @method static string SYSLOG() Returns the SYSLOG enum instance
 * @method static string ERRORLOG() Returns the ERRORLOG enum instance
 * @method static string MONOLOG() Returns the MONOLOG enum instance
 * @method static string STACK() Returns the STACK enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 40,
    'endLine' => 125,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
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
      'supportsRotation' => 
      array (
        'name' => 'supportsRotation',
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
 * Check if this driver supports rotation.
 *
 * @return bool True if log rotation is supported
 */',
        'startLine' => 105,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'aliasName' => NULL,
      ),
      'isRemote' => 
      array (
        'name' => 'isRemote',
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
 * Check if this driver is remote.
 *
 * @return bool True if logs are sent to remote service
 */',
        'startLine' => 118,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\LogDriver',
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
      'SINGLE' => 
      array (
        'name' => 'SINGLE',
        'value' => 
        array (
          'code' => '\'single\'',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 68,
            'startFilePos' => 1292,
            'endTokenPos' => 68,
            'endFilePos' => 1299,
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
                'code' => '\'Single\'',
                'attributes' => 
                array (
                  'startLine' => 48,
                  'endLine' => 48,
                  'startTokenPos' => 51,
                  'startFilePos' => 1207,
                  'endTokenPos' => 51,
                  'endFilePos' => 1214,
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
                'code' => '\'Single log file without rotation.\'',
                'attributes' => 
                array (
                  'startLine' => 49,
                  'endLine' => 49,
                  'startTokenPos' => 58,
                  'startFilePos' => 1236,
                  'endTokenPos' => 58,
                  'endFilePos' => 1270,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Single log driver.
 * Single log file without rotation.
 */',
        'startLine' => 48,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'DAILY' => 
      array (
        'name' => 'DAILY',
        'value' => 
        array (
          'code' => '\'daily\'',
          'attributes' => 
          array (
            'startLine' => 58,
            'endLine' => 58,
            'startTokenPos' => 93,
            'startFilePos' => 1520,
            'endTokenPos' => 93,
            'endFilePos' => 1526,
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
                'code' => '\'Daily\'',
                'attributes' => 
                array (
                  'startLine' => 56,
                  'endLine' => 56,
                  'startTokenPos' => 76,
                  'startFilePos' => 1417,
                  'endTokenPos' => 76,
                  'endFilePos' => 1423,
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
                'code' => '\'Creates new log file each day with automatic cleanup.\'',
                'attributes' => 
                array (
                  'startLine' => 57,
                  'endLine' => 57,
                  'startTokenPos' => 83,
                  'startFilePos' => 1445,
                  'endTokenPos' => 83,
                  'endFilePos' => 1499,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Daily log driver.
 * Creates new log file each day with automatic cleanup.
 */',
        'startLine' => 56,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'SLACK' => 
      array (
        'name' => 'SLACK',
        'value' => 
        array (
          'code' => '\'slack\'',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 118,
            'startFilePos' => 1695,
            'endTokenPos' => 118,
            'endFilePos' => 1701,
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
                'code' => '\'Slack\'',
                'attributes' => 
                array (
                  'startLine' => 64,
                  'endLine' => 64,
                  'startTokenPos' => 101,
                  'startFilePos' => 1618,
                  'endTokenPos' => 101,
                  'endFilePos' => 1624,
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
                'code' => '\'Send logs to Slack webhook.\'',
                'attributes' => 
                array (
                  'startLine' => 65,
                  'endLine' => 65,
                  'startTokenPos' => 108,
                  'startFilePos' => 1646,
                  'endTokenPos' => 108,
                  'endFilePos' => 1674,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Slack log driver.
 * Send logs to Slack webhook.
 */',
        'startLine' => 64,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'SYSLOG' => 
      array (
        'name' => 'SYSLOG',
        'value' => 
        array (
          'code' => '\'syslog\'',
          'attributes' => 
          array (
            'startLine' => 74,
            'endLine' => 74,
            'startTokenPos' => 143,
            'startFilePos' => 1915,
            'endTokenPos' => 143,
            'endFilePos' => 1922,
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
                'code' => '\'Syslog\'',
                'attributes' => 
                array (
                  'startLine' => 72,
                  'endLine' => 72,
                  'startTokenPos' => 126,
                  'startFilePos' => 1815,
                  'endTokenPos' => 126,
                  'endFilePos' => 1822,
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
                'code' => '\'Write logs to system logger (Unix/Linux syslog).\'',
                'attributes' => 
                array (
                  'startLine' => 73,
                  'endLine' => 73,
                  'startTokenPos' => 133,
                  'startFilePos' => 1844,
                  'endTokenPos' => 133,
                  'endFilePos' => 1893,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Syslog log driver.
 * Write logs to system logger (Unix/Linux syslog).
 */',
        'startLine' => 72,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'ERRORLOG' => 
      array (
        'name' => 'ERRORLOG',
        'value' => 
        array (
          'code' => '\'errorlog\'',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 168,
            'startFilePos' => 2135,
            'endTokenPos' => 168,
            'endFilePos' => 2144,
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
                'code' => '\'Errorlog\'',
                'attributes' => 
                array (
                  'startLine' => 80,
                  'endLine' => 80,
                  'startTokenPos' => 151,
                  'startFilePos' => 2035,
                  'endTokenPos' => 151,
                  'endFilePos' => 2044,
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
                'code' => '"Write logs using PHP\'s error_log() function."',
                'attributes' => 
                array (
                  'startLine' => 81,
                  'endLine' => 81,
                  'startTokenPos' => 158,
                  'startFilePos' => 2066,
                  'endTokenPos' => 158,
                  'endFilePos' => 2111,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Errorlog log driver.
 * Write logs using PHP\\\'s error_log() function.
 */',
        'startLine' => 80,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'MONOLOG' => 
      array (
        'name' => 'MONOLOG',
        'value' => 
        array (
          'code' => '\'monolog\'',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 193,
            'startFilePos' => 2323,
            'endTokenPos' => 193,
            'endFilePos' => 2331,
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
                'code' => '\'Monolog\'',
                'attributes' => 
                array (
                  'startLine' => 88,
                  'endLine' => 88,
                  'startTokenPos' => 176,
                  'startFilePos' => 2240,
                  'endTokenPos' => 176,
                  'endFilePos' => 2248,
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
                'code' => '\'Custom Monolog configuration.\'',
                'attributes' => 
                array (
                  'startLine' => 89,
                  'endLine' => 89,
                  'startTokenPos' => 183,
                  'startFilePos' => 2270,
                  'endTokenPos' => 183,
                  'endFilePos' => 2300,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Monolog log driver.
 * Custom Monolog configuration.
 */',
        'startLine' => 88,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'STACK' => 
      array (
        'name' => 'STACK',
        'value' => 
        array (
          'code' => '\'stack\'',
          'attributes' => 
          array (
            'startLine' => 98,
            'endLine' => 98,
            'startTokenPos' => 218,
            'startFilePos' => 2558,
            'endTokenPos' => 218,
            'endFilePos' => 2564,
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
                'code' => '\'Stack\'',
                'attributes' => 
                array (
                  'startLine' => 96,
                  'endLine' => 96,
                  'startTokenPos' => 201,
                  'startFilePos' => 2452,
                  'endTokenPos' => 201,
                  'endFilePos' => 2458,
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
                'code' => '\'Combines multiple channels into single logging pipeline.\'',
                'attributes' => 
                array (
                  'startLine' => 97,
                  'endLine' => 97,
                  'startTokenPos' => 208,
                  'startFilePos' => 2480,
                  'endTokenPos' => 208,
                  'endFilePos' => 2537,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Stack log driver.
 * Combines multiple channels into single logging pipeline.
 */',
        'startLine' => 96,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
    ),
  ),
));