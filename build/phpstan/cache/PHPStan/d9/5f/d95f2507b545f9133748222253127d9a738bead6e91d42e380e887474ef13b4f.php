<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/Handler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Exceptions\Handler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-5c1efe2c7b4cb0407c99b07cd832eeec39909ada8f07cdfc94eb995ddeca3295',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/Handler.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Exceptions',
    'name' => 'Pixielity\\Foundation\\Exceptions\\Handler',
    'shortName' => 'Handler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Common Module Exception Handler.
 *
 * This is the application\'s main exception handler that extends Laravel\'s base
 * exception handler. It provides custom error handling for both web and API requests,
 * including styled error pages and JSON API responses.
 *
 * ## Key Features:
 * - Custom styled error pages with translations (401, 402, 404, 419, 429, 500, 503)
 * - API-friendly JSON error responses with proper status codes
 * - Automatic detection of API vs web requests
 * - Validation error formatting (422 status)
 * - Debug information in development mode
 * - Secure error messages in production
 * - Translatable error messages
 *
 * ## Error Page Rendering:
 * For web requests, this handler uses the `RenderCustomErrorViews` class to display
 * custom styled error pages from the Common module instead of Laravel\'s default pages.
 * These pages are:
 * - Fully translatable (English and Arabic)
 * - Styled with shadcn/ui design system
 * - Responsive and accessible
 * - Consistent with application branding
 *
 * ## API Error Responses:
 * For API requests (routes starting with \'api/\' or expecting JSON), this handler
 * returns structured JSON responses with:
 * - `success`: Always false for errors
 * - `message`: Translated error message
 * - `errors`: Validation errors (for 422 responses)
 * - `debug`: Exception details (only in debug mode)
 *
 * ## Registration:
 * This handler is registered in `CommonServiceProvider::registerBindings()` as a
 * singleton binding that overrides Laravel\'s default exception handler.
 *
 * ## Usage Example:
 * ```php
 * // The handler is automatically used for all exceptions
 * // No manual invocation needed
 *
 * // For custom exceptions, just throw them:
 * throw new \\Exception(\'Something went wrong\');
 *
 * // For API responses:
 * // GET /api/v1/users/999 (non-existent)
 * // Response: {"success": false, "message": "Not Found"}
 *
 * // For web requests:
 * // GET /non-existent-page
 * // Response: Custom 404 error page with styling
 * ```
 *
 * ## Exception Types Handled:
 * - `AuthenticationException`: 401 Unauthorized
 * - `AuthorizationException`: 403 Forbidden
 * - `ValidationException`: 422 Unprocessable Entity
 * - `HttpException`: Various HTTP status codes
 * - `Throwable`: 500 Internal Server Error (fallback)
 *
 * @see ExceptionHandler
 * @see RenderCustomErrorViews
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 95,
    'endLine' => 563,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
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
      'levels' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'name' => 'levels',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Illuminate\\Database\\QueryException::class => \'critical\', \\Illuminate\\Auth\\AuthenticationException::class => \'warning\']',
          'attributes' => 
          array (
            'startLine' => 113,
            'endLine' => 116,
            'startTokenPos' => 150,
            'startFilePos' => 3969,
            'endTokenPos' => 170,
            'endFilePos' => 4073,
          ),
        ),
        'docComment' => '/**
 * A list of exception types with their corresponding custom log levels.
 *
 * This allows you to customize which log level is used for specific exception types.
 * For example, you might want to log authentication failures as \'warning\' instead of \'error\'.
 *
 * @var array<class-string<Throwable>, LogLevel::*>
 *
 * @example
 * ```php
 * protected $levels = [
 *     \\Illuminate\\Auth\\AuthenticationException::class => \'warning\',
 *     \\Illuminate\\Database\\QueryException::class => \'critical\',
 * ];
 * ```
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 113,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dontReport' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'name' => 'dontReport',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Illuminate\\Validation\\ValidationException::class, \\Illuminate\\Auth\\AuthenticationException::class]',
          'attributes' => 
          array (
            'startLine' => 134,
            'endLine' => 137,
            'startTokenPos' => 181,
            'startFilePos' => 4623,
            'endTokenPos' => 193,
            'endFilePos' => 4705,
          ),
        ),
        'docComment' => '/**
 * A list of the exception types that are not reported.
 *
 * Exceptions in this list will not be logged or sent to error tracking services.
 * This is useful for expected exceptions that don\'t indicate actual errors.
 *
 * @var array<int, class-string<Throwable>>
 *
 * @example
 * ```php
 * protected $dontReport = [
 *     \\Illuminate\\Auth\\AuthenticationException::class,
 *     \\Illuminate\\Validation\\ValidationException::class,
 * ];
 * ```
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dontFlash' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'name' => 'dontFlash',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'password\', \'current_password\', \'password_confirmation\']',
          'attributes' => 
          array (
            'startLine' => 148,
            'endLine' => 152,
            'startTokenPos' => 204,
            'startFilePos' => 5112,
            'endTokenPos' => 215,
            'endFilePos' => 5199,
          ),
        ),
        'docComment' => '/**
 * A list of the inputs that are never flashed to the session on validation exceptions.
 *
 * When a validation exception occurs, Laravel flashes the input to the session
 * so it can be repopulated in the form. However, sensitive fields like passwords
 * should never be flashed for security reasons.
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 148,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'apiPrefix' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'name' => 'apiPrefix',
        'modifiers' => 130,
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
          0 => 
          array (
            'name' => 'Illuminate\\Container\\Attributes\\Config',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'api.prefix\'',
                'attributes' => 
                array (
                  'startLine' => 165,
                  'endLine' => 165,
                  'startTokenPos' => 235,
                  'startFilePos' => 5705,
                  'endTokenPos' => 235,
                  'endFilePos' => 5716,
                ),
              ),
              1 => 
              array (
                'code' => '\'api\'',
                'attributes' => 
                array (
                  'startLine' => 165,
                  'endLine' => 165,
                  'startTokenPos' => 238,
                  'startFilePos' => 5719,
                  'endTokenPos' => 238,
                  'endFilePos' => 5723,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 165,
        'endLine' => 166,
        'startColumn' => 9,
        'endColumn' => 44,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'apiVersion' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'name' => 'apiVersion',
        'modifiers' => 130,
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
          0 => 
          array (
            'name' => 'Illuminate\\Container\\Attributes\\Config',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'api.version\'',
                'attributes' => 
                array (
                  'startLine' => 167,
                  'endLine' => 167,
                  'startTokenPos' => 254,
                  'startFilePos' => 5790,
                  'endTokenPos' => 254,
                  'endFilePos' => 5802,
                ),
              ),
              1 => 
              array (
                'code' => '\'v1\'',
                'attributes' => 
                array (
                  'startLine' => 167,
                  'endLine' => 167,
                  'startTokenPos' => 257,
                  'startFilePos' => 5805,
                  'endTokenPos' => 257,
                  'endFilePos' => 5808,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 167,
        'endLine' => 168,
        'startColumn' => 9,
        'endColumn' => 45,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'debugMode' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'name' => 'debugMode',
        'modifiers' => 130,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
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
                'code' => '\'app.debug\'',
                'attributes' => 
                array (
                  'startLine' => 169,
                  'endLine' => 169,
                  'startTokenPos' => 273,
                  'startFilePos' => 5876,
                  'endTokenPos' => 273,
                  'endFilePos' => 5886,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 169,
        'endLine' => 170,
        'startColumn' => 9,
        'endColumn' => 42,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sentryRegistry' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'name' => 'sentryRegistry',
        'modifiers' => 130,
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
                  'name' => 'Pixielity\\Sentry\\Services\\SentryContextRegistry',
                  'isIdentifier' => false,
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
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 171,
        'endLine' => 171,
        'startColumn' => 9,
        'endColumn' => 72,
        'isPromoted' => true,
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
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 9,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'apiPrefix' => 
          array (
            'name' => 'apiPrefix',
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
            'isPromoted' => true,
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
                    'code' => '\'api.prefix\'',
                    'attributes' => 
                    array (
                      'startLine' => 165,
                      'endLine' => 165,
                      'startTokenPos' => 235,
                      'startFilePos' => 5705,
                      'endTokenPos' => 235,
                      'endFilePos' => 5716,
                    ),
                  ),
                  1 => 
                  array (
                    'code' => '\'api\'',
                    'attributes' => 
                    array (
                      'startLine' => 165,
                      'endLine' => 165,
                      'startTokenPos' => 238,
                      'startFilePos' => 5719,
                      'endTokenPos' => 238,
                      'endFilePos' => 5723,
                    ),
                  ),
                ),
              ),
            ),
            'startLine' => 165,
            'endLine' => 166,
            'startColumn' => 9,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'apiVersion' => 
          array (
            'name' => 'apiVersion',
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
            'isPromoted' => true,
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
                    'code' => '\'api.version\'',
                    'attributes' => 
                    array (
                      'startLine' => 167,
                      'endLine' => 167,
                      'startTokenPos' => 254,
                      'startFilePos' => 5790,
                      'endTokenPos' => 254,
                      'endFilePos' => 5802,
                    ),
                  ),
                  1 => 
                  array (
                    'code' => '\'v1\'',
                    'attributes' => 
                    array (
                      'startLine' => 167,
                      'endLine' => 167,
                      'startTokenPos' => 257,
                      'startFilePos' => 5805,
                      'endTokenPos' => 257,
                      'endFilePos' => 5808,
                    ),
                  ),
                ),
              ),
            ),
            'startLine' => 167,
            'endLine' => 168,
            'startColumn' => 9,
            'endColumn' => 45,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'debugMode' => 
          array (
            'name' => 'debugMode',
            'default' => NULL,
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
            'isPromoted' => true,
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
                    'code' => '\'app.debug\'',
                    'attributes' => 
                    array (
                      'startLine' => 169,
                      'endLine' => 169,
                      'startTokenPos' => 273,
                      'startFilePos' => 5876,
                      'endTokenPos' => 273,
                      'endFilePos' => 5886,
                    ),
                  ),
                ),
              ),
            ),
            'startLine' => 169,
            'endLine' => 170,
            'startColumn' => 9,
            'endColumn' => 42,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'sentryRegistry' => 
          array (
            'name' => 'sentryRegistry',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 171,
                'endLine' => 171,
                'startTokenPos' => 297,
                'startFilePos' => 6002,
                'endTokenPos' => 297,
                'endFilePos' => 6005,
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
                      'name' => 'Pixielity\\Sentry\\Services\\SentryContextRegistry',
                      'isIdentifier' => false,
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 9,
            'endColumn' => 72,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new exception handler instance.
 *
 * @param  Container  $container  The service container
 * @param  string  $apiPrefix  The API route prefix (e.g., \'api\')
 * @param  string  $apiVersion  The API version (e.g., \'v1\')
 * @param  bool  $debugMode  Whether debug mode is enabled
 * @param  SentryContextRegistry|null  $sentryRegistry  Optional Sentry context registry
 */',
        'startLine' => 163,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
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
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Register the exception handling callbacks for the application.
 *
 * This method is called during the application bootstrap process and allows
 * you to register custom exception reporting and rendering logic.
 *
 * ## Available Methods:
 * - `reportable()`: Register a callback for reporting specific exception types
 * - `renderable()`: Register a callback for rendering specific exception types
 * - `stop()`: Stop reporting specific exception types
 */',
        'startLine' => 187,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 231,
            'endLine' => 231,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 231,
            'endLine' => 231,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Render an exception into an HTTP response.
 *
 * This is the main entry point for exception rendering. It determines whether
 * the request is an API request or a web request and delegates to the appropriate
 * handler method.
 *
 * ## Request Type Detection:
 * - API Request: URL starts with \'api/\' OR request expects JSON response
 * - Web Request: All other requests
 *
 * ## Response Types:
 * - API: JSON response with error details
 * - Web: HTML error page (custom or Laravel default)
 *
 * @param  Request  $request  The incoming HTTP request
 * @param  Throwable  $e  The exception that was thrown
 * @return Response The HTTP response
 */',
        'startLine' => 230,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'handleApiException' => 
      array (
        'name' => 'handleApiException',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 294,
            'endLine' => 294,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'throwable' => 
          array (
            'name' => 'throwable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 294,
            'endLine' => 294,
            'startColumn' => 50,
            'endColumn' => 69,
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
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle API exceptions and return JSON response.
 *
 * This method converts exceptions into structured JSON responses suitable for
 * API consumption. It provides consistent error formatting across all API endpoints.
 *
 * ## Response Structure:
 * ```json
 * {
 *   "success": false,
 *   "message": "Error message",
 *   "errors": {}, // Only for validation errors
 *   "debug": {}    // Only in debug mode
 * }
 * ```
 *
 * ## Status Codes:
 * - 401: Authentication required (AuthenticationException)
 * - 403: Permission denied (AuthorizationException)
 * - 422: Validation failed (ValidationException)
 * - 4xx/5xx: HTTP exceptions (HttpException)
 * - 500: Internal server error (all other exceptions)
 *
 * ## Debug Information:
 * When `app.debug` is enabled, the response includes:
 * - Exception class name
 * - File and line number where exception occurred
 * - Stack trace (first 5 frames)
 *
 * ## Translation:
 * All error messages use the `foundation::exceptions` translation namespace,
 * allowing for multilingual error messages.
 *
 * ## Sentry Integration:
 * Exceptions are automatically reported to Sentry via the register() method.
 * No need to manually report here as it\'s handled globally.
 *
 * @param  Request  $request  The incoming HTTP request
 * @param  Throwable  $throwable  The exception that was thrown
 * @return JsonResponse JSON response with error details
 */',
        'startLine' => 294,
        'endLine' => 367,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'setCustomFingerprint' => 
      array (
        'name' => 'setCustomFingerprint',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Sentry\\State\\Scope',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 385,
            'endLine' => 385,
            'startColumn' => 45,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'throwable' => 
          array (
            'name' => 'throwable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 385,
            'endLine' => 385,
            'startColumn' => 59,
            'endColumn' => 78,
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
 * Set custom fingerprint for better error grouping in Sentry.
 *
 * Fingerprinting helps Sentry group similar errors together.
 * By default, Sentry groups by exception type and stack trace,
 * but custom fingerprinting allows more intelligent grouping.
 *
 * ## Examples:
 * - Group all validation errors together
 * - Group errors by HTTP status code
 * - Group errors by custom error codes
 * - Group errors by affected resource
 *
 * @param  Scope  $scope  Sentry scope
 * @param  Throwable  $throwable  Exception
 */',
        'startLine' => 385,
        'endLine' => 461,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'prepareResponse' => 
      array (
        'name' => 'prepareResponse',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 489,
            'endLine' => 489,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 489,
            'endLine' => 489,
            'startColumn' => 50,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Prepare a response for the given exception.
 *
 * This method is called by Laravel\'s exception handler to convert an exception
 * into an HTTP response. We override it to apply our custom error view rendering
 * for web requests and to handle custom exceptions with getStatusCode().
 *
 * ## Process Flow:
 * 1. Check if exception has getStatusCode() method (custom exceptions)
 * 2. Convert to HttpException if needed for proper status code handling
 * 3. Call parent to get the default Laravel response
 * 4. Apply custom error view rendering via RenderCustomErrorViews
 * 5. Return the customized response
 *
 * ## Custom Error Views:
 * The RenderCustomErrorViews class checks if we have a custom view for the
 * status code (401, 402, 404, 419, 429, 500, 503) and renders it if available.
 * Otherwise, it returns the original Laravel response.
 *
 * @param  Request  $request  The incoming HTTP request
 * @param  Throwable  $e  The exception that was thrown
 * @return Response The HTTP response
 *
 * @see RenderCustomErrorViews
 */',
        'startLine' => 488,
        'endLine' => 523,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderHttpException' => 
      array (
        'name' => 'renderHttpException',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 534,
            'endLine' => 534,
            'startColumn' => 44,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Render the given HttpException.
 *
 * Override to safely handle config access when config is not bound.
 *
 * @param  HttpException  $e
 * @return Response
 */',
        'startLine' => 533,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\Handler',
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