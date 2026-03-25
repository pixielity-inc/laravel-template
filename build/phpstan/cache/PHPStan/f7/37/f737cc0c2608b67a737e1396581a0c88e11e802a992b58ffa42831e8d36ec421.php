<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/EmailValidator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\EmailValidator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-16c243f8dc2b1c63e3106dc43162b4cb0f8b81d7ce7e1eacfcaeebf5c3a06a05',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\EmailValidator',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/EmailValidator.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support',
    'name' => 'Pixielity\\Support\\EmailValidator',
    'shortName' => 'EmailValidator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Email Validator.
 *
 * Provides comprehensive email validation similar to Magento\'s EmailAddress validator.
 * This class validates email addresses using multiple strategies:
 * - Basic format validation (RFC 5322)
 * - DNS MX record validation (optional)
 * - Disposable email detection
 * - Domain validation
 * - Length validation
 *
 * ## Features:
 * - RFC 5322 compliant email validation
 * - DNS MX record checking
 * - Disposable email domain filtering
 * - Configurable validation options
 * - Detailed error messages
 *
 * ## Usage:
 *
 * ### Basic Validation:
 * ```php
 * $validator = new EmailValidator();
 *
 * if ($validator->isValid(\'user@example.com\')) {
 *     // Email is valid
 * }
 *
 * // Get validation errors
 * $errors = $validator->getMessages();
 * ```
 *
 * ### With Options:
 * ```php
 * $validator = new EmailValidator([
 *     \'checkMx\' => true,              // Check DNS MX records
 *     \'checkDisposable\' => true,      // Check for disposable emails
 *     \'allowLocal\' => false,          // Disallow local addresses (no domain)
 *     \'maxLength\' => 254,             // Maximum email length
 * ]);
 *
 * $isValid = $validator->isValid(\'user@example.com\');
 * ```
 *
 * ### Static Validation:
 * ```php
 * // Quick validation
 * if (EmailValidator::validate(\'user@example.com\')) {
 *     // Email is valid
 * }
 * ```
 *
 * @category   Support
 *
 * @since      1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 68,
    'endLine' => 410,
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
      'ERROR_INVALID_FORMAT' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'ERROR_INVALID_FORMAT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'invalid_format\'',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 53,
            'startFilePos' => 1807,
            'endTokenPos' => 53,
            'endFilePos' => 1822,
          ),
        ),
        'docComment' => '/**
 * Validation error constants.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 57,
      ),
      'ERROR_TOO_LONG' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'ERROR_TOO_LONG',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'too_long\'',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 66,
            'startFilePos' => 1939,
            'endTokenPos' => 66,
            'endFilePos' => 1948,
          ),
        ),
        'docComment' => '/**
 * Error when email is too long.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 45,
      ),
      'ERROR_NO_MX_RECORD' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'ERROR_NO_MX_RECORD',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'no_mx_record\'',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 79,
            'startFilePos' => 2073,
            'endTokenPos' => 79,
            'endFilePos' => 2086,
          ),
        ),
        'docComment' => '/**
 * Error when no MX record is found.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'ERROR_DISPOSABLE' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'ERROR_DISPOSABLE',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'disposable\'',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 96,
            'startTokenPos' => 92,
            'startFilePos' => 2221,
            'endTokenPos' => 92,
            'endFilePos' => 2232,
          ),
        ),
        'docComment' => '/**
 * Error when email is from a disposable domain.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 49,
      ),
      'ERROR_LOCAL_NOT_ALLOWED' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'ERROR_LOCAL_NOT_ALLOWED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'local_not_allowed\'',
          'attributes' => 
          array (
            'startLine' => 103,
            'endLine' => 103,
            'startTokenPos' => 105,
            'startFilePos' => 2378,
            'endTokenPos' => 105,
            'endFilePos' => 2396,
          ),
        ),
        'docComment' => '/**
 * Error when local email addresses are not allowed.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 103,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 63,
      ),
      'ERROR_IP_NOT_ALLOWED' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'ERROR_IP_NOT_ALLOWED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'ip_not_allowed\'',
          'attributes' => 
          array (
            'startLine' => 110,
            'endLine' => 110,
            'startTokenPos' => 118,
            'startFilePos' => 2530,
            'endTokenPos' => 118,
            'endFilePos' => 2545,
          ),
        ),
        'docComment' => '/**
 * Error when IP addresses are not allowed.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 57,
      ),
    ),
    'immediateProperties' => 
    array (
      'messages' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'messages',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 117,
            'endLine' => 117,
            'startTokenPos' => 131,
            'startFilePos' => 2672,
            'endTokenPos' => 132,
            'endFilePos' => 2673,
          ),
        ),
        'docComment' => '/**
 * Validation error messages.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'options',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[
    \'checkMx\' => false,
    // Check DNS MX records
    \'checkDisposable\' => true,
    // Check for disposable email domains
    \'allowLocal\' => false,
    // Allow local addresses (no domain)
    \'maxLength\' => 254,
    // Maximum email length (RFC 5321)
    \'allowIp\' => false,
]',
          'attributes' => 
          array (
            'startLine' => 124,
            'endLine' => 130,
            'startTokenPos' => 145,
            'startFilePos' => 2791,
            'endTokenPos' => 192,
            'endFilePos' => 3118,
          ),
        ),
        'docComment' => '/**
 * Validation options.
 *
 * @var array<string, mixed>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 124,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'messageTemplates' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'name' => 'messageTemplates',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[self::ERROR_INVALID_FORMAT => \'Invalid email address format\', self::ERROR_TOO_LONG => \'Email address is too long (maximum %d characters)\', self::ERROR_NO_MX_RECORD => \'No MX record found for domain\', self::ERROR_DISPOSABLE => \'Disposable email addresses are not allowed\', self::ERROR_LOCAL_NOT_ALLOWED => \'Local email addresses are not allowed\', self::ERROR_IP_NOT_ALLOWED => \'IP addresses are not allowed as email domain\']',
          'attributes' => 
          array (
            'startLine' => 137,
            'endLine' => 144,
            'startTokenPos' => 205,
            'startFilePos' => 3251,
            'endTokenPos' => 261,
            'endFilePos' => 3729,
          ),
        ),
        'docComment' => '/**
 * Error message templates.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 6,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 153,
                'endLine' => 153,
                'startTokenPos' => 279,
                'startFilePos' => 3954,
                'endTokenPos' => 280,
                'endFilePos' => 3955,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 9,
            'endColumn' => 27,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'appDomain' => 
          array (
            'name' => 'appDomain',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 155,
                'endLine' => 155,
                'startTokenPos' => 296,
                'startFilePos' => 4018,
                'endTokenPos' => 296,
                'endFilePos' => 4019,
              ),
            ),
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
              0 => 
              array (
                'name' => 'Illuminate\\Container\\Attributes\\Config',
                'isRepeated' => false,
                'arguments' => 
                array (
                  0 => 
                  array (
                    'code' => '\'APP_DOMAIN\'',
                    'attributes' => 
                    array (
                      'startLine' => 154,
                      'endLine' => 154,
                      'startTokenPos' => 286,
                      'startFilePos' => 3975,
                      'endTokenPos' => 286,
                      'endFilePos' => 3986,
                    ),
                  ),
                ),
              ),
            ),
            'startLine' => 154,
            'endLine' => 155,
            'startColumn' => 9,
            'endColumn' => 30,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructor.
 *
 * @param  array<string, mixed>  $options  Validation options
 * @param  string  $appDomain  Application domain
 */',
        'startLine' => 152,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
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
            'startLine' => 185,
            'endLine' => 185,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 185,
                'endLine' => 185,
                'startTokenPos' => 426,
                'startFilePos' => 5384,
                'endTokenPos' => 427,
                'endFilePos' => 5385,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 185,
            'endLine' => 185,
            'startColumn' => 52,
            'endColumn' => 70,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Static validation helper.
 *
 * Quick validation without creating an instance.
 *
 * @param  string  $email  Email address to validate
 * @param  array<string, mixed>  $options  Validation options
 * @return bool True if valid, false otherwise
 */',
        'startLine' => 185,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'validateWithMx' => 
      array (
        'name' => 'validateWithMx',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
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
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 43,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validate email with MX record check.
 *
 * @param  string  $email  Email address to validate
 * @return bool True if valid with MX record, false otherwise
 */',
        'startLine' => 198,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'validateNotDisposable' => 
      array (
        'name' => 'validateNotDisposable',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
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
            'startLine' => 209,
            'endLine' => 209,
            'startColumn' => 50,
            'endColumn' => 62,
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
 * Validate email and check for disposable domains.
 *
 * @param  string  $email  Email address to validate
 * @return bool True if valid and not disposable, false otherwise
 */',
        'startLine' => 209,
        'endLine' => 212,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'validateStrict' => 
      array (
        'name' => 'validateStrict',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
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
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 43,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validate email with all checks enabled.
 *
 * @param  string  $email  Email address to validate
 * @return bool True if valid with all checks, false otherwise
 */',
        'startLine' => 220,
        'endLine' => 228,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'isValid' => 
      array (
        'name' => 'isValid',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
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
            'startLine' => 236,
            'endLine' => 236,
            'startColumn' => 29,
            'endColumn' => 41,
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
 * Validate an email address.
 *
 * @param  string  $email  Email address to validate
 * @return bool True if valid, false otherwise
 */',
        'startLine' => 236,
        'endLine' => 308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'getMessages' => 
      array (
        'name' => 'getMessages',
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
 * Get validation error messages.
 *
 * @return array<string, string> Error messages
 */',
        'startLine' => 315,
        'endLine' => 318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'getMessage' => 
      array (
        'name' => 'getMessage',
        'parameters' => 
        array (
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
        'docComment' => '/**
 * Get the first validation error message.
 *
 * @return string|null First error message or null if no errors
 */',
        'startLine' => 325,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'setOptions' => 
      array (
        'name' => 'setOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 336,
            'endLine' => 336,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set validation options.
 *
 * @param  array<string, mixed>  $options  Validation options
 * @return $this
 */',
        'startLine' => 336,
        'endLine' => 341,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'getOptions' => 
      array (
        'name' => 'getOptions',
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
 * Get validation options.
 *
 * @return array<string, mixed> Validation options
 */',
        'startLine' => 348,
        'endLine' => 351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'isDisposable' => 
      array (
        'name' => 'isDisposable',
        'parameters' => 
        array (
          'email' => 
          array (
            'name' => 'email',
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
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 37,
            'endColumn' => 49,
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
 * Check if email is from a disposable domain.
 *
 * @param  string  $email  Email address
 * @return bool True if disposable, false otherwise
 */',
        'startLine' => 359,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'hasMxRecord' => 
      array (
        'name' => 'hasMxRecord',
        'parameters' => 
        array (
          'domain' => 
          array (
            'name' => 'domain',
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
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 36,
            'endColumn' => 49,
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
 * Check if domain has MX records.
 *
 * @param  string  $domain  Domain name
 * @return bool True if MX records exist, false otherwise
 */',
        'startLine' => 377,
        'endLine' => 384,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'isIpAddress' => 
      array (
        'name' => 'isIpAddress',
        'parameters' => 
        array (
          'domain' => 
          array (
            'name' => 'domain',
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
            'startLine' => 392,
            'endLine' => 392,
            'startColumn' => 36,
            'endColumn' => 49,
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
 * Check if domain is an IP address.
 *
 * @param  string  $domain  Domain name
 * @return bool True if IP address, false otherwise
 */',
        'startLine' => 392,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
        'aliasName' => NULL,
      ),
      'addMessage' => 
      array (
        'name' => 'addMessage',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startLine' => 406,
            'endLine' => 406,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
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
            'startLine' => 406,
            'endLine' => 406,
            'startColumn' => 48,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a validation error message.
 *
 * @param  string  $key  Message key
 * @param  string  $message  Error message
 */',
        'startLine' => 406,
        'endLine' => 409,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\EmailValidator',
        'implementingClassName' => 'Pixielity\\Support\\EmailValidator',
        'currentClassName' => 'Pixielity\\Support\\EmailValidator',
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