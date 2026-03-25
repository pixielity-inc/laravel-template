<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/TooManyRequestsException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Exceptions\TooManyRequestsException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-9d0f5b54673d24586fbeef774acf419ec842240ec6e8b2940e10a4aa953c0d9f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/TooManyRequestsException.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Exceptions',
    'name' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
    'shortName' => 'TooManyRequestsException',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Too Many Requests Exception (HTTP 429).
 *
 * Thrown when a client has sent too many requests in a given time period.
 * This exception is typically used in conjunction with rate limiting middleware
 * to protect APIs from abuse and ensure fair resource allocation.
 *
 * ## HTTP Status Code: 429 Too Many Requests
 *
 * ## Use Cases:
 * - API rate limiting exceeded
 * - Too many login attempts
 * - Spam prevention
 * - DDoS protection
 * - Resource quota exceeded
 *
 * ## Response Headers:
 * - **Retry-After**: Number of seconds to wait before retrying
 * - **X-RateLimit-Limit**: Maximum requests allowed
 * - **X-RateLimit-Remaining**: Requests remaining (0 when exceeded)
 * - **X-RateLimit-Reset**: Unix timestamp when limit resets
 *
 * ## Usage Examples:
 *
 * ### Basic Usage:
 * ```php
 * throw new TooManyRequestsException();
 * // Returns: 429 with "Too many requests" message and 60s retry
 * ```
 *
 * ### Custom Message and Retry Time:
 * ```php
 * throw new TooManyRequestsException(
 *     \'Rate limit exceeded. Please slow down.\',
 *     120 // Retry after 2 minutes
 * );
 * ```
 *
 * ### In Rate Limiting Middleware:
 * ```php
 * if ($rateLimiter->tooManyAttempts($key, $maxAttempts)) {
 *     $retryAfter = $rateLimiter->availableIn($key);
 *     throw new TooManyRequestsException(
 *         \'Too many requests. Please try again later.\',
 *         $retryAfter
 *     );
 * }
 * ```
 *
 * ### In Login Controller:
 * ```php
 * if ($this->hasTooManyLoginAttempts($request)) {
 *     $seconds = $this->limiter->availableIn($this->throttleKey($request));
 *     throw new TooManyRequestsException(
 *         \'Too many login attempts. Please try again later.\',
 *         $seconds
 *     );
 * }
 * ```
 *
 * ## Response Format:
 * ```json
 * {
 *   "success": false,
 *   "error": {
 *     "code": "RATE_LIMIT_EXCEEDED",
 *     "message": "Too many requests. Please try again later.",
 *     "retry_after": 60
 *   }
 * }
 * ```
 *
 * ## Client Handling:
 * Clients should:
 * 1. Read the Retry-After header
 * 2. Wait the specified number of seconds
 * 3. Implement exponential backoff for repeated failures
 * 4. Display user-friendly error messages
 *
 * ## Best Practices:
 * - Always include Retry-After header
 * - Provide clear error messages
 * - Log rate limit violations for monitoring
 * - Consider implementing exponential backoff
 * - Whitelist trusted IPs if needed
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/429
 * @see https://tools.ietf.org/html/rfc6585#section-4
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 100,
    'endLine' => 132,
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
              'code' => '\'Too many requests. Please try again later.\'',
              'attributes' => 
              array (
                'startLine' => 110,
                'endLine' => 110,
                'startTokenPos' => 52,
                'startFilePos' => 3122,
                'endTokenPos' => 52,
                'endFilePos' => 3165,
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
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 9,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'retryAfter' => 
          array (
            'name' => 'retryAfter',
            'default' => 
            array (
              'code' => '60',
              'attributes' => 
              array (
                'startLine' => 111,
                'endLine' => 111,
                'startTokenPos' => 61,
                'startFilePos' => 3194,
                'endTokenPos' => 61,
                'endFilePos' => 3195,
              ),
            ),
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
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 9,
            'endColumn' => 28,
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
                'startLine' => 112,
                'endLine' => 112,
                'startTokenPos' => 70,
                'startFilePos' => 3223,
                'endTokenPos' => 71,
                'endFilePos' => 3224,
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
            'startLine' => 112,
            'endLine' => 112,
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
 * Create a new Too Many Requests exception.
 *
 * @param  string  $message  The error message to display
 * @param  int  $retryAfter  Number of seconds to wait before retrying
 * @param  array  $headers  Additional HTTP headers to include in response
 */',
        'startLine' => 109,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
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
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the retry-after value in seconds.
 *
 * @return int Number of seconds to wait before retrying
 */',
        'startLine' => 128,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\TooManyRequestsException',
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