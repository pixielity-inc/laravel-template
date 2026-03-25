<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/ServiceUnavailableException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Exceptions\ServiceUnavailableException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-a5c3854dd17275c8f326b0a186284b256d1927badc5299a6a2bcc3e5fefb8137',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/ServiceUnavailableException.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Exceptions',
    'name' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
    'shortName' => 'ServiceUnavailableException',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Service Unavailable Exception (HTTP 503).
 *
 * Thrown when the server is temporarily unable to handle the request due to
 * maintenance, overload, or other temporary conditions. This indicates that
 * the condition is temporary and the service should be available again soon.
 *
 * ## HTTP Status Code: 503 Service Unavailable
 *
 * ## Use Cases:
 * - Server maintenance mode
 * - Database connection failures
 * - External service dependencies down
 * - Server overload/capacity issues
 * - Scheduled downtime
 * - Circuit breaker pattern (when service is degraded)
 *
 * ## Response Headers:
 * - **Retry-After**: When the service is expected to be available (optional)
 * - **X-Service-Status**: Additional status information (optional)
 *
 * ## Usage Examples:
 *
 * ### Basic Usage:
 * ```php
 * throw new ServiceUnavailableException();
 * // Returns: 503 with "Service temporarily unavailable" message
 * ```
 *
 * ### With Custom Message:
 * ```php
 * throw new ServiceUnavailableException(
 *     \'The application is currently undergoing maintenance. Please try again in 30 minutes.\'
 * );
 * ```
 *
 * ### With Retry-After Header:
 * ```php
 * throw new ServiceUnavailableException(
 *     \'Service temporarily unavailable\',
 *     300 // Retry after 5 minutes
 * );
 * ```
 *
 * ### In Maintenance Mode:
 * ```php
 * if (app()->isDownForMaintenance()) {
 *     throw new ServiceUnavailableException(
 *         \'Application is down for maintenance. We will be back soon!\',
 *         3600 // Retry after 1 hour
 *     );
 * }
 * ```
 *
 * ### Database Connection Failure:
 * ```php
 * try {
 *     DB::connection()->getPdo();
 * } catch (\\Exception $e) {
 *     throw new ServiceUnavailableException(
 *         \'Database connection failed. Please try again later.\',
 *         60
 *     );
 * }
 * ```
 *
 * ### External Service Dependency:
 * ```php
 * if (!$paymentGateway->isAvailable()) {
 *     throw new ServiceUnavailableException(
 *         \'Payment service is temporarily unavailable. Please try again later.\',
 *         120
 *     );
 * }
 * ```
 *
 * ### Circuit Breaker Pattern:
 * ```php
 * if ($circuitBreaker->isOpen()) {
 *     throw new ServiceUnavailableException(
 *         \'Service is temporarily degraded. Please try again shortly.\',
 *         30
 *     );
 * }
 * ```
 *
 * ## Response Format:
 * ```json
 * {
 *   "success": false,
 *   "error": {
 *     "code": "SERVICE_UNAVAILABLE",
 *     "message": "Service temporarily unavailable. Please try again later.",
 *     "retry_after": 300
 *   }
 * }
 * ```
 *
 * ## Client Handling:
 * Clients should:
 * 1. Check for Retry-After header
 * 2. Wait before retrying (respect the retry-after value)
 * 3. Implement exponential backoff for repeated failures
 * 4. Show user-friendly maintenance messages
 * 5. Consider fallback mechanisms
 *
 * ## Best Practices:
 * - Always provide a clear reason for unavailability
 * - Include Retry-After header when possible
 * - Log service unavailability events for monitoring
 * - Implement health checks to detect issues early
 * - Use circuit breakers for external dependencies
 * - Provide status page for extended outages
 *
 * ## Difference from 500 Internal Server Error:
 * - **503**: Temporary condition, service will recover
 * - **500**: Unexpected error, may require code fix
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/503
 * @see https://tools.ietf.org/html/rfc7231#section-6.6.4
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 131,
    'endLine' => 165,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpException',
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
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'Service temporarily unavailable. Please try again later.\'',
              'attributes' => 
              array (
                'startLine' => 141,
                'endLine' => 141,
                'startTokenPos' => 47,
                'startFilePos' => 4032,
                'endTokenPos' => 47,
                'endFilePos' => 4089,
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
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 9,
            'endColumn' => 84,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'retryAfter' => 
          array (
            'name' => 'retryAfter',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 142,
                'endLine' => 142,
                'startTokenPos' => 57,
                'startFilePos' => 4119,
                'endTokenPos' => 57,
                'endFilePos' => 4122,
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
                      'name' => 'int',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 142,
            'endLine' => 142,
            'startColumn' => 9,
            'endColumn' => 31,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'headers' => 
          array (
            'name' => 'headers',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 143,
                'endLine' => 143,
                'startTokenPos' => 66,
                'startFilePos' => 4150,
                'endTokenPos' => 67,
                'endFilePos' => 4151,
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 9,
            'endColumn' => 27,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new Service Unavailable exception.
 *
 * @param  string  $message  The error message to display
 * @param  int|null  $retryAfter  Number of seconds to wait before retrying (optional)
 * @param  array  $headers  Additional HTTP headers to include in response
 */',
        'startLine' => 140,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
        'aliasName' => NULL,
      ),
      'getRetryAfter' => 
      array (
        'name' => 'getRetryAfter',
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
                  'name' => 'int',
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
 * Get the retry-after value in seconds.
 *
 * @return int|null Number of seconds to wait before retrying, or null if not specified
 */',
        'startLine' => 159,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\ServiceUnavailableException',
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