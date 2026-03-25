<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/GatewayTimeoutException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Exceptions\GatewayTimeoutException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-bad6e25468ba1a58616f1264726100657d18f845945e78d7537ca8547d41e652',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Exceptions\\GatewayTimeoutException',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/GatewayTimeoutException.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Exceptions',
    'name' => 'Pixielity\\Foundation\\Exceptions\\GatewayTimeoutException',
    'shortName' => 'GatewayTimeoutException',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Gateway Timeout Exception (HTTP 504).
 *
 * Thrown when a server acting as a gateway or proxy did not receive a timely
 * response from an upstream server. This typically occurs when making requests
 * to external APIs or services that take too long to respond.
 *
 * ## HTTP Status Code: 504 Gateway Timeout
 *
 * ## Use Cases:
 * - External API timeout
 * - Database query timeout
 * - Microservice communication timeout
 * - Third-party service timeout
 * - Upstream server not responding
 * - Network connectivity issues
 *
 * ## Common Scenarios:
 * - Payment gateway taking too long
 * - Email service timeout
 * - File storage service timeout
 * - Search service timeout
 * - Authentication service timeout
 *
 * ## Usage Examples:
 *
 * ### Basic Usage:
 * ```php
 * throw new GatewayTimeoutException();
 * // Returns: 504 with "Gateway timeout" message
 * ```
 *
 * ### With Custom Message:
 * ```php
 * throw new GatewayTimeoutException(
 *     \'Payment gateway did not respond in time. Please try again.\'
 * );
 * ```
 *
 * ### External API Timeout:
 * ```php
 * try {
 *     $response = Http::timeout(5)->get(\'https://api.example.com/data\');
 * } catch (ConnectionException $e) {
 *     throw new GatewayTimeoutException(
 *         \'External API did not respond in time. Please try again later.\'
 *     );
 * }
 * ```
 *
 * ### Database Query Timeout:
 * ```php
 * try {
 *     DB::statement(\'SET SESSION max_execution_time=5000\');
 *     $results = DB::select(\'SELECT * FROM large_table WHERE ...\');
 * } catch (QueryException $e) {
 *     if ($e->getCode() === \'70100\') { // MySQL timeout error
 *         throw new GatewayTimeoutException(
 *             \'Database query took too long. Please refine your search.\'
 *         );
 *     }
 * }
 * ```
 *
 * ### Microservice Communication:
 * ```php
 * $response = Http::timeout(10)->post(\'http://user-service/api/users\', $data);
 *
 * if ($response->failed()) {
 *     throw new GatewayTimeoutException(
 *         \'User service did not respond in time.\'
 *     );
 * }
 * ```
 *
 * ### Payment Gateway Timeout:
 * ```php
 * try {
 *     $payment = $paymentGateway->charge($amount);
 * } catch (TimeoutException $e) {
 *     throw new GatewayTimeoutException(
 *         \'Payment processing timed out. Please check your payment status or try again.\'
 *     );
 * }
 * ```
 *
 * ### With Retry Information:
 * ```php
 * throw new GatewayTimeoutException(
 *     \'Service timeout. Please try again.\',
 *     [\'Retry-After\' => \'30\']
 * );
 * ```
 *
 * ## Response Format:
 * ```json
 * {
 *   "success": false,
 *   "error": {
 *     "code": "GATEWAY_TIMEOUT",
 *     "message": "Gateway timeout. The upstream service did not respond in time.",
 *     "suggestion": "Please try again later or contact support if the issue persists."
 *   }
 * }
 * ```
 *
 * ## Client Handling:
 * Clients should:
 * 1. Retry the request after a delay
 * 2. Implement exponential backoff
 * 3. Show user-friendly timeout messages
 * 4. Consider idempotency for retries
 * 5. Log timeout occurrences for monitoring
 *
 * ## Best Practices:
 * - Set appropriate timeout values for external services
 * - Implement circuit breakers for failing services
 * - Log timeout events with context (service, duration)
 * - Monitor timeout rates to detect issues
 * - Provide fallback mechanisms when possible
 * - Use async/queue processing for long-running tasks
 * - Implement retry logic with exponential backoff
 *
 * ## Prevention Strategies:
 * - Optimize slow queries
 * - Cache frequently accessed data
 * - Use CDN for static assets
 * - Implement request timeouts
 * - Use async processing for heavy operations
 * - Monitor external service health
 * - Implement circuit breakers
 *
 * ## Difference from Other Timeout Errors:
 * - **408 Request Timeout**: Client took too long to send request
 * - **504 Gateway Timeout**: Upstream server took too long to respond
 * - **503 Service Unavailable**: Service is down (not just slow)
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/504
 * @see https://tools.ietf.org/html/rfc7231#section-6.6.5
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 150,
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
              'code' => '\'Gateway timeout. The upstream service did not respond in time.\'',
              'attributes' => 
              array (
                'startLine' => 159,
                'endLine' => 159,
                'startTokenPos' => 47,
                'startFilePos' => 4591,
                'endTokenPos' => 47,
                'endFilePos' => 4654,
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
            'startLine' => 159,
            'endLine' => 159,
            'startColumn' => 9,
            'endColumn' => 90,
            'parameterIndex' => 0,
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
                'startLine' => 160,
                'endLine' => 160,
                'startTokenPos' => 56,
                'startFilePos' => 4682,
                'endTokenPos' => 57,
                'endFilePos' => 4683,
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
            'startLine' => 160,
            'endLine' => 160,
            'startColumn' => 9,
            'endColumn' => 27,
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
 * Create a new Gateway Timeout exception.
 *
 * @param  string  $message  The error message to display
 * @param  array  $headers  Additional HTTP headers to include in response
 */',
        'startLine' => 158,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\GatewayTimeoutException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\GatewayTimeoutException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\GatewayTimeoutException',
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