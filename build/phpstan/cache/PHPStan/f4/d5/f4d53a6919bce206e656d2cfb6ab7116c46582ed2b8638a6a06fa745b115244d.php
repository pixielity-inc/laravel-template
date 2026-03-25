<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/UnprocessableEntityException.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Exceptions\UnprocessableEntityException
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-f68528bd9f6d29011394a3b95b85e27268b5a647f9d30216256dafc930c4b1dc',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Exceptions/UnprocessableEntityException.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Exceptions',
    'name' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
    'shortName' => 'UnprocessableEntityException',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Unprocessable Entity Exception (HTTP 422).
 *
 * Thrown when the server understands the request but cannot process it due to
 * semantic errors. This is commonly used for validation failures where the
 * request syntax is correct but the data doesn\'t meet business rules.
 *
 * ## HTTP Status Code: 422 Unprocessable Entity
 *
 * ## Use Cases:
 * - Form validation failures
 * - Business rule violations
 * - Invalid data combinations
 * - Constraint violations
 * - Semantic errors in request data
 * - Data integrity issues
 *
 * ## Difference from 400 Bad Request:
 * - **400**: Syntax error (malformed JSON, missing required fields)
 * - **422**: Semantic error (valid syntax but invalid data)
 *
 * ## Usage Examples:
 *
 * ### Basic Usage:
 * ```php
 * throw new UnprocessableEntityException();
 * // Returns: 422 with "Unprocessable entity" message
 * ```
 *
 * ### Form Validation Failure:
 * ```php
 * $validator = Validator::make($request->all(), [
 *     \'email\' => \'required|email|unique:users\',
 *     \'age\' => \'required|integer|min:18\',
 * ]);
 *
 * if ($validator->fails()) {
 *     throw new UnprocessableEntityException(
 *         \'Validation failed\',
 *         $validator->errors()->toArray()
 *     );
 * }
 * ```
 *
 * ### Business Rule Violation:
 * ```php
 * if ($order->total < 10) {
 *     throw new UnprocessableEntityException(
 *         \'Minimum order amount is $10\',
 *         [\'total\' => [\'Order total must be at least $10\']]
 *     );
 * }
 * ```
 *
 * ### Invalid Data Combination:
 * ```php
 * if ($user->age < 18 && $product->isAgeRestricted()) {
 *     throw new UnprocessableEntityException(
 *         \'Age restriction violation\',
 *         [\'age\' => [\'You must be 18 or older to purchase this product\']]
 *     );
 * }
 * ```
 *
 * ### Duplicate Entry:
 * ```php
 * if (User::where(\'email\', $email)->exists()) {
 *     throw new UnprocessableEntityException(
 *         \'Email already exists\',
 *         [\'email\' => [\'This email is already registered\']]
 *     );
 * }
 * ```
 *
 * ### Date Range Validation:
 * ```php
 * if ($endDate <= $startDate) {
 *     throw new UnprocessableEntityException(
 *         \'Invalid date range\',
 *         [
 *             \'end_date\' => [\'End date must be after start date\'],
 *             \'start_date\' => [\'Start date must be before end date\'],
 *         ]
 *     );
 * }
 * ```
 *
 * ### Stock Availability:
 * ```php
 * if ($requestedQuantity > $product->stock) {
 *     throw new UnprocessableEntityException(
 *         \'Insufficient stock\',
 *         [
 *             \'quantity\' => [
 *                 "Only {$product->stock} items available in stock"
 *             ]
 *         ]
 *     );
 * }
 * ```
 *
 * ### Multiple Validation Errors:
 * ```php
 * $errors = [];
 *
 * if (empty($data[\'name\'])) {
 *     $errors[\'name\'] = [\'Name is required\'];
 * }
 *
 * if (!filter_var($data[\'email\'], FILTER_VALIDATE_EMAIL)) {
 *     $errors[\'email\'] = [\'Invalid email format\'];
 * }
 *
 * if (!empty($errors)) {
 *     throw new UnprocessableEntityException(
 *         \'Validation failed\',
 *         $errors
 *     );
 * }
 * ```
 *
 * ## Response Format:
 * ```json
 * {
 *   "success": false,
 *   "error": {
 *     "code": "VALIDATION_ERROR",
 *     "message": "Validation failed",
 *     "errors": {
 *       "email": [
 *         "The email field is required.",
 *         "The email must be a valid email address."
 *       ],
 *       "age": [
 *         "The age must be at least 18."
 *       ]
 *     }
 *   }
 * }
 * ```
 *
 * ## Client Handling:
 * Clients should:
 * 1. Parse the errors object
 * 2. Display field-specific error messages
 * 3. Highlight invalid fields in the UI
 * 4. Allow user to correct and resubmit
 * 5. Preserve valid field values
 *
 * ## Best Practices:
 * - Provide specific, actionable error messages
 * - Group errors by field name
 * - Include all validation errors (not just the first one)
 * - Use consistent error message format
 * - Validate on both client and server side
 * - Return errors in the same language as the request
 * - Include error codes for programmatic handling
 *
 * ## Laravel Validation Integration:
 * ```php
 * // In FormRequest
 * protected function failedValidation(Validator $validator)
 * {
 *     throw new UnprocessableEntityException(
 *         \'Validation failed\',
 *         $validator->errors()->toArray()
 *     );
 * }
 * ```
 *
 * ## Common Validation Scenarios:
 * - Required fields missing
 * - Invalid format (email, phone, URL)
 * - Out of range values
 * - Duplicate entries
 * - Invalid relationships
 * - Business rule violations
 * - Data type mismatches
 * - Length constraints
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/422
 * @see https://tools.ietf.org/html/rfc4918#section-11.2
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 193,
    'endLine' => 244,
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
      'errors' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'name' => 'errors',
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
        'default' => NULL,
        'docComment' => '/**
 * Validation errors grouped by field.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 207,
        'endLine' => 207,
        'startColumn' => 9,
        'endColumn' => 36,
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
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'The given data was invalid.\'',
              'attributes' => 
              array (
                'startLine' => 203,
                'endLine' => 203,
                'startTokenPos' => 47,
                'startFilePos' => 5369,
                'endTokenPos' => 47,
                'endFilePos' => 5397,
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
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 9,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'errors' => 
          array (
            'name' => 'errors',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 207,
                'endLine' => 207,
                'startTokenPos' => 60,
                'startFilePos' => 5505,
                'endTokenPos' => 61,
                'endFilePos' => 5506,
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 207,
            'endLine' => 207,
            'startColumn' => 9,
            'endColumn' => 36,
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
                'startLine' => 208,
                'endLine' => 208,
                'startTokenPos' => 70,
                'startFilePos' => 5534,
                'endTokenPos' => 71,
                'endFilePos' => 5535,
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
            'startLine' => 208,
            'endLine' => 208,
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
 * Create a new Unprocessable Entity exception.
 *
 * @param  string  $message  The error message to display
 * @param  array<string, array<string>>  $errors  Validation errors grouped by field
 * @param  array  $headers  Additional HTTP headers to include in response
 */',
        'startLine' => 202,
        'endLine' => 212,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'aliasName' => NULL,
      ),
      'getErrors' => 
      array (
        'name' => 'getErrors',
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
 * Get the validation errors.
 *
 * @return array<string, array<string>> Validation errors grouped by field
 */',
        'startLine' => 219,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'aliasName' => NULL,
      ),
      'hasErrors' => 
      array (
        'name' => 'hasErrors',
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
 * Check if there are any validation errors.
 *
 * @return bool True if there are errors, false otherwise
 */',
        'startLine' => 229,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'aliasName' => NULL,
      ),
      'getFieldErrors' => 
      array (
        'name' => 'getFieldErrors',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 36,
            'endColumn' => 48,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get errors for a specific field.
 *
 * @param  string  $field  The field name
 * @return array<string> Array of error messages for the field
 */',
        'startLine' => 240,
        'endLine' => 243,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Exceptions',
        'declaringClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'implementingClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
        'currentClassName' => 'Pixielity\\Foundation\\Exceptions\\UnprocessableEntityException',
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