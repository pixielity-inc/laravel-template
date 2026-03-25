<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/MailDriver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\MailDriver
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-f6251fd896ed9f61846372fb9047d0951b9607fc5011a24c87f0bd20bd088e63',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/MailDriver.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\MailDriver',
    'shortName' => 'MailDriver',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Mail Driver Enum.
 *
 * Defines the available mail drivers/transports supported by Laravel.
 * Use this enum instead of hardcoded transport strings.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Foundation\\Enums\\MailDriver;
 *
 * // Check current mail driver
 * if ($mailDriver === MailDriver::SMTP()) {
 *     // SMTP-specific logic
 * }
 *
 * // In config
 * \'transport\' => MailDriver::SMTP(),
 * ```
 *
 * @since 1.0.0
 *
 * @method static string SMTP() Returns the SMTP enum instance
 * @method static string SES() Returns the SES enum instance
 * @method static string POSTMARK() Returns the POSTMARK enum instance
 * @method static string RESEND() Returns the RESEND enum instance
 * @method static string SENDMAIL() Returns the SENDMAIL enum instance
 * @method static string LOG() Returns the LOG enum instance
 * @method static string ARRAY() Returns the ARRAY enum instance
 * @method static string FAILOVER() Returns the FAILOVER enum instance
 * @method static string ROUNDROBIN() Returns the ROUNDROBIN enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 42,
    'endLine' => 156,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
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
      'isTestDriver' => 
      array (
        'name' => 'isTestDriver',
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
 * Check if this driver is for testing.
 *
 * @return bool True if driver is for testing
 */',
        'startLine' => 123,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'aliasName' => NULL,
      ),
      'isCloudService' => 
      array (
        'name' => 'isCloudService',
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
 * Check if this driver is a cloud service.
 *
 * @return bool True if driver uses cloud service
 */',
        'startLine' => 136,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'aliasName' => NULL,
      ),
      'supportsMultipleMailers' => 
      array (
        'name' => 'supportsMultipleMailers',
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
 * Check if this driver supports multiple mailers.
 *
 * @return bool True if driver can use multiple mailers
 */',
        'startLine' => 149,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\MailDriver',
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
      'SMTP' => 
      array (
        'name' => 'SMTP',
        'value' => 
        array (
          'code' => '\'smtp\'',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 68,
            'startFilePos' => 1440,
            'endTokenPos' => 68,
            'endFilePos' => 1445,
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
                'code' => '\'SMTP\'',
                'attributes' => 
                array (
                  'startLine' => 50,
                  'endLine' => 50,
                  'startTokenPos' => 51,
                  'startFilePos' => 1355,
                  'endTokenPos' => 51,
                  'endFilePos' => 1360,
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
                'code' => '\'Universal option for any SMTP server.\'',
                'attributes' => 
                array (
                  'startLine' => 51,
                  'endLine' => 51,
                  'startTokenPos' => 58,
                  'startFilePos' => 1382,
                  'endTokenPos' => 58,
                  'endFilePos' => 1420,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * SMTP mail driver.
 * Universal option for any SMTP server.
 */',
        'startLine' => 50,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'SES' => 
      array (
        'name' => 'SES',
        'value' => 
        array (
          'code' => '\'ses\'',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 93,
            'startFilePos' => 1619,
            'endTokenPos' => 93,
            'endFilePos' => 1623,
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
                'code' => '\'Amazon SES\'',
                'attributes' => 
                array (
                  'startLine' => 58,
                  'endLine' => 58,
                  'startTokenPos' => 76,
                  'startFilePos' => 1541,
                  'endTokenPos' => 76,
                  'endFilePos' => 1552,
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
                'code' => '\'AWS Simple Email Service.\'',
                'attributes' => 
                array (
                  'startLine' => 59,
                  'endLine' => 59,
                  'startTokenPos' => 83,
                  'startFilePos' => 1574,
                  'endTokenPos' => 83,
                  'endFilePos' => 1600,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Amazon SES mail driver.
 * AWS Simple Email Service.
 */',
        'startLine' => 58,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'POSTMARK' => 
      array (
        'name' => 'POSTMARK',
        'value' => 
        array (
          'code' => '\'postmark\'',
          'attributes' => 
          array (
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 118,
            'startFilePos' => 1844,
            'endTokenPos' => 118,
            'endFilePos' => 1853,
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
                'code' => '\'Postmark\'',
                'attributes' => 
                array (
                  'startLine' => 66,
                  'endLine' => 66,
                  'startTokenPos' => 101,
                  'startFilePos' => 1740,
                  'endTokenPos' => 101,
                  'endFilePos' => 1749,
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
                'code' => '\'Excellent deliverability and detailed analytics.\'',
                'attributes' => 
                array (
                  'startLine' => 67,
                  'endLine' => 67,
                  'startTokenPos' => 108,
                  'startFilePos' => 1771,
                  'endTokenPos' => 108,
                  'endFilePos' => 1820,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Postmark mail driver.
 * Excellent deliverability and detailed analytics.
 */',
        'startLine' => 66,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'RESEND' => 
      array (
        'name' => 'RESEND',
        'value' => 
        array (
          'code' => '\'resend\'',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 143,
            'startFilePos' => 2074,
            'endTokenPos' => 143,
            'endFilePos' => 2081,
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
                'code' => '\'Resend\'',
                'attributes' => 
                array (
                  'startLine' => 74,
                  'endLine' => 74,
                  'startTokenPos' => 126,
                  'startFilePos' => 1971,
                  'endTokenPos' => 126,
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
                'code' => '\'Modern email API with developer-friendly interface.\'',
                'attributes' => 
                array (
                  'startLine' => 75,
                  'endLine' => 75,
                  'startTokenPos' => 133,
                  'startFilePos' => 2000,
                  'endTokenPos' => 133,
                  'endFilePos' => 2052,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Resend mail driver.
 * Modern email API with developer-friendly interface.
 */',
        'startLine' => 74,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'SENDMAIL' => 
      array (
        'name' => 'SENDMAIL',
        'value' => 
        array (
          'code' => '\'sendmail\'',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 168,
            'startFilePos' => 2260,
            'endTokenPos' => 168,
            'endFilePos' => 2269,
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
                'code' => '\'Sendmail\'',
                'attributes' => 
                array (
                  'startLine' => 82,
                  'endLine' => 82,
                  'startTokenPos' => 151,
                  'startFilePos' => 2177,
                  'endTokenPos' => 151,
                  'endFilePos' => 2186,
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
                'code' => '\'Uses local sendmail binary.\'',
                'attributes' => 
                array (
                  'startLine' => 83,
                  'endLine' => 83,
                  'startTokenPos' => 158,
                  'startFilePos' => 2208,
                  'endTokenPos' => 158,
                  'endFilePos' => 2236,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Sendmail mail driver.
 * Uses local sendmail binary.
 */',
        'startLine' => 82,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'LOG' => 
      array (
        'name' => 'LOG',
        'value' => 
        array (
          'code' => '\'log\'',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 92,
            'startTokenPos' => 193,
            'startFilePos' => 2475,
            'endTokenPos' => 193,
            'endFilePos' => 2479,
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
                'code' => '\'Log\'',
                'attributes' => 
                array (
                  'startLine' => 90,
                  'endLine' => 90,
                  'startTokenPos' => 176,
                  'startFilePos' => 2381,
                  'endTokenPos' => 176,
                  'endFilePos' => 2385,
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
                'code' => '\'Writes emails to log file (development/testing).\'',
                'attributes' => 
                array (
                  'startLine' => 91,
                  'endLine' => 91,
                  'startTokenPos' => 183,
                  'startFilePos' => 2407,
                  'endTokenPos' => 183,
                  'endFilePos' => 2456,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Log mail driver.
 * Writes emails to log file (development/testing).
 */',
        'startLine' => 90,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'ARRAY' => 
      array (
        'name' => 'ARRAY',
        'value' => 
        array (
          'code' => '\'array\'',
          'attributes' => 
          array (
            'startLine' => 100,
            'endLine' => 100,
            'startTokenPos' => 218,
            'startFilePos' => 2667,
            'endTokenPos' => 218,
            'endFilePos' => 2673,
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
                  'startLine' => 98,
                  'endLine' => 98,
                  'startTokenPos' => 201,
                  'startFilePos' => 2581,
                  'endTokenPos' => 201,
                  'endFilePos' => 2587,
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
                'code' => '\'Stores emails in memory for testing.\'',
                'attributes' => 
                array (
                  'startLine' => 99,
                  'endLine' => 99,
                  'startTokenPos' => 208,
                  'startFilePos' => 2609,
                  'endTokenPos' => 208,
                  'endFilePos' => 2646,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Array mail driver.
 * Stores emails in memory for testing.
 */',
        'startLine' => 98,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'FAILOVER' => 
      array (
        'name' => 'FAILOVER',
        'value' => 
        array (
          'code' => '\'failover\'',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 243,
            'startFilePos' => 2922,
            'endTokenPos' => 243,
            'endFilePos' => 2931,
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
                'code' => '\'Failover\'',
                'attributes' => 
                array (
                  'startLine' => 106,
                  'endLine' => 106,
                  'startTokenPos' => 226,
                  'startFilePos' => 2804,
                  'endTokenPos' => 226,
                  'endFilePos' => 2813,
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
                'code' => '\'Automatically falls back to secondary mailer if primary fails.\'',
                'attributes' => 
                array (
                  'startLine' => 107,
                  'endLine' => 107,
                  'startTokenPos' => 233,
                  'startFilePos' => 2835,
                  'endTokenPos' => 233,
                  'endFilePos' => 2898,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Failover mail driver.
 * Automatically falls back to secondary mailer if primary fails.
 */',
        'startLine' => 106,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'ROUNDROBIN' => 
      array (
        'name' => 'ROUNDROBIN',
        'value' => 
        array (
          'code' => '\'roundrobin\'',
          'attributes' => 
          array (
            'startLine' => 116,
            'endLine' => 116,
            'startTokenPos' => 268,
            'startFilePos' => 3188,
            'endTokenPos' => 268,
            'endFilePos' => 3199,
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
                'code' => '\'Round Robin\'',
                'attributes' => 
                array (
                  'startLine' => 114,
                  'endLine' => 114,
                  'startTokenPos' => 251,
                  'startFilePos' => 3065,
                  'endTokenPos' => 251,
                  'endFilePos' => 3077,
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
                'code' => '\'Distributes emails across multiple mailers for load balancing.\'',
                'attributes' => 
                array (
                  'startLine' => 115,
                  'endLine' => 115,
                  'startTokenPos' => 258,
                  'startFilePos' => 3099,
                  'endTokenPos' => 258,
                  'endFilePos' => 3162,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Round Robin mail driver.
 * Distributes emails across multiple mailers for load balancing.
 */',
        'startLine' => 114,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
    ),
  ),
));