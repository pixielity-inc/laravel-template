<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Arr.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\Arr
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-ea4bafa9842d3c7be0b03d017fca8751700bd1e7ceb2678c006a929d8974f312',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\Arr',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Arr.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support',
    'name' => 'Pixielity\\Support\\Arr',
    'shortName' => 'Arr',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class Arr.
 *
 * This class extends Arr helper functionalities, providing additional methods
 * to manipulate arrays more conveniently, especially for translation and building
 * new arrays using callbacks.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 1563,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Arr',
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
      'each' => 
      array (
        'name' => 'each',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 53,
            'endColumn' => 64,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply a callback function to each element in an array.
 *
 * This method maps over each item in the array and applies the provided callback
 * function. It\'s a convenience wrapper around the map() method with reversed
 * parameter order for better readability in certain contexts.
 *
 * ## Examples:
 * ```php
 * Arr::each(fn($x) => $x * 2, [1, 2, 3]);
 * // [2, 4, 6]
 *
 * Arr::each(fn($x) => strtoupper($x), [\'a\', \'b\', \'c\']);
 * // [\'A\', \'B\', \'C\']
 *
 * Arr::each(fn($x) => $x[\'name\'], [
 *     [\'name\' => \'John\'],
 *     [\'name\' => \'Jane\']
 * ]);
 * // [\'John\', \'Jane\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Direct wrapper around map() method
 *
 * ## Notes:
 * - Original array is not modified
 * - Callback receives value as first parameter
 * - Keys are preserved in the result
 *
 * @param  callable  $callback  The callback function to apply to each element
 * @param  array  $array  The input array to iterate over
 * @return array The array with callback applied to each element
 *
 * @see map() For the underlying implementation
 * @see walk() For in-place modification
 * @since 1.0.0
 */',
        'startLine' => 59,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'build' => 
      array (
        'name' => 'build',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
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
            'startColumn' => 42,
            'endColumn' => 59,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Build a new array by transforming keys and values with a callback.
 *
 * This method creates a new array by applying a callback to each key-value pair.
 * The callback must return an array with exactly two elements: [newKey, newValue].
 * This is useful for restructuring arrays or creating lookup tables.
 *
 * ## Examples:
 * ```php
 * // Swap keys and values
 * Arr::build([\'a\' => 1, \'b\' => 2], fn($k, $v) => [$v, $k]);
 * // [1 => \'a\', 2 => \'b\']
 *
 * // Transform both keys and values
 * Arr::build([\'name\' => \'John\'], fn($k, $v) => [
 *     strtoupper($k),
 *     strtolower($v)
 * ]);
 * // [\'NAME\' => \'john\']
 *
 * // Create lookup table from objects
 * $users = [
 *     [\'id\' => 1, \'name\' => \'John\'],
 *     [\'id\' => 2, \'name\' => \'Jane\']
 * ];
 * Arr::build($users, fn($k, $user) => [$user[\'id\'], $user[\'name\']]);
 * // [1 => \'John\', 2 => \'Jane\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Single pass through the array
 *
 * ## Notes:
 * - Callback must return array with exactly 2 elements
 * - First element becomes the key, second becomes the value
 * - Duplicate keys will be overwritten by later values
 * - Original array is not modified
 *
 * @param  array  $array  The input array to transform
 * @param  callable  $callback  Function that takes ($key, $value) and returns [$newKey, $newValue]
 * @return array The newly built array with transformed keys and values
 *
 * @see map() For transforming only values
 * @see mapWithKeys() For Laravel\'s similar method
 * @since 1.0.0
 */',
        'startLine' => 112,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'trans' => 
      array (
        'name' => 'trans',
        'parameters' => 
        array (
          'arr' => 
          array (
            'name' => 'arr',
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
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 34,
            'endColumn' => 43,
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
 * Translate all string values in an array recursively.
 *
 * This method walks through the array recursively and translates any string values
 * using Laravel\'s translation system (__() function). Useful for translating
 * dropdown options, form labels, and other UI text stored in arrays.
 *
 * ## Examples:
 * ```php
 * // Simple array translation
 * Arr::trans([\'hello\', \'world\']);
 * // [\'Hello\', \'World\'] (if translations exist)
 *
 * // Nested array translation
 * Arr::trans([
 *     \'title\' => \'app.title\',
 *     \'menu\' => [\'home\', \'about\', \'contact\']
 * ]);
 * // [\'title\' => \'My App\', \'menu\' => [\'Home\', \'About\', \'Contact\']]
 *
 * // Form options
 * $options = Arr::trans([
 *     \'active\' => \'status.active\',
 *     \'inactive\' => \'status.inactive\'
 * ]);
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is total number of elements
 * - Space complexity: O(1) (modifies in place)
 * - Recursively processes nested arrays
 *
 * ## Notes:
 * - Only string values are translated
 * - Non-string values remain unchanged
 * - Uses Laravel\'s __() translation function
 * - Modifies the array in place
 * - If translation returns array, it\'s JSON encoded
 *
 * @param  array  $arr  The input array with translation keys
 * @return array The array with translated string values
 *
 * @see __() For Laravel\'s translation function
 * @see Lang For Laravel\'s translation facade
 * @since 1.0.0
 */',
        'startLine' => 176,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'keys' => 
      array (
        'name' => 'keys',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 229,
                'endLine' => 229,
                'startTokenPos' => 326,
                'startFilePos' => 7847,
                'endTokenPos' => 326,
                'endFilePos' => 7850,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 229,
            'endLine' => 229,
            'startColumn' => 47,
            'endColumn' => 65,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all keys from an array, optionally filtered by value.
 *
 * Returns all keys from the array. If a value is provided, only returns keys
 * that have that specific value. This is a wrapper around PHP\'s array_keys()
 * for consistency with the Arr class API.
 *
 * ## Examples:
 * ```php
 * Arr::keys([\'a\' => 1, \'b\' => 2, \'c\' => 3]);
 * // [\'a\', \'b\', \'c\']
 *
 * Arr::keys([\'a\' => 1, \'b\' => 2, \'c\' => 1], 1);
 * // [\'a\', \'c\'] (only keys with value 1)
 *
 * Arr::keys([10 => \'x\', 20 => \'y\', 30 => \'z\']);
 * // [10, 20, 30]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(k) where k is number of keys
 * - Single pass through array
 *
 * ## Notes:
 * - Returns numeric array of keys
 * - When filtering by value, uses strict comparison
 * - Preserves key types (int or string)
 *
 * @param  array  $array  The input array
 * @param  mixed  $value  Optional value to filter keys by
 * @return array Array of keys
 *
 * @see values() For getting only values
 * @see flip() For swapping keys and values
 * @since 1.0.0
 */',
        'startLine' => 229,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'values' => 
      array (
        'name' => 'values',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 35,
            'endColumn' => 46,
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
 * Get all values from an array, discarding keys.
 *
 * Returns a new array containing all values from the input array with
 * sequential numeric keys starting from 0. Original keys are discarded.
 * This is a wrapper around PHP\'s array_values() for consistency.
 *
 * ## Examples:
 * ```php
 * Arr::values([\'a\' => 1, \'b\' => 2, \'c\' => 3]);
 * // [1, 2, 3]
 *
 * Arr::values([10 => \'x\', 20 => \'y\', 30 => \'z\']);
 * // [\'x\', \'y\', \'z\']
 *
 * Arr::values([1, 2, 3]);
 * // [1, 2, 3] (already numeric, but re-indexed)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Single pass through array
 *
 * ## Notes:
 * - Original array is not modified
 * - Maintains the order of values
 * - Always returns 0-indexed array
 * - Useful for converting associative to indexed arrays
 *
 * @param  array  $array  The input array
 * @return array Array with sequential numeric keys
 *
 * @see keys() For getting only keys
 * @see flip() For swapping keys and values
 * @since 1.0.0
 */',
        'startLine' => 275,
        'endLine' => 278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'flip' => 
      array (
        'name' => 'flip',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 318,
            'endLine' => 318,
            'startColumn' => 33,
            'endColumn' => 44,
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
 * Swap keys and values in an array.
 *
 * Exchanges keys with their corresponding values. Only string and integer values
 * can become keys, so other types are filtered out. If duplicate values exist,
 * the last key-value pair will overwrite earlier ones.
 *
 * ## Examples:
 * ```php
 * Arr::flip([\'a\' => 1, \'b\' => 2, \'c\' => 3]);
 * // [1 => \'a\', 2 => \'b\', 3 => \'c\']
 *
 * Arr::flip([\'name\' => \'John\', \'age\' => \'30\']);
 * // [\'John\' => \'name\', \'30\' => \'age\']
 *
 * // Duplicate values - last key wins
 * Arr::flip([\'a\' => 1, \'b\' => 1, \'c\' => 2]);
 * // [1 => \'b\', 2 => \'c\'] (\'a\' is overwritten by \'b\')
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Filters non-scalar values first
 *
 * ## Notes:
 * - Only string and integer values are kept
 * - Arrays, objects, and other types are filtered out
 * - Duplicate values result in lost keys
 * - Original array is not modified
 *
 * @param  array  $array  The input array to flip
 * @return array Array with keys and values swapped
 *
 * @see keys() For getting keys
 * @see values() For getting values
 * @since 1.0.0
 */',
        'startLine' => 318,
        'endLine' => 325,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'shift' => 
      array (
        'name' => 'shift',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 34,
            'endColumn' => 46,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove and return the first element from an array.
 *
 * Removes the first element from the array and returns it. The array is
 * re-indexed with numeric keys starting from 0. This modifies the original
 * array by reference.
 *
 * ## Examples:
 * ```php
 * $arr = [1, 2, 3, 4];
 * $first = Arr::shift($arr);
 * // $first = 1, $arr = [2, 3, 4]
 *
 * $arr = [\'a\' => 1, \'b\' => 2, \'c\' => 3];
 * $first = Arr::shift($arr);
 * // $first = 1, $arr = [\'b\' => 2, \'c\' => 3]
 *
 * $arr = [];
 * $first = Arr::shift($arr);
 * // $first = null, $arr = []
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size (re-indexing)
 * - Space complexity: O(1)
 * - Modifies array in place
 *
 * ## Notes:
 * - Modifies the original array
 * - Returns null if array is empty
 * - Numeric keys are re-indexed
 * - String keys are preserved
 *
 * @param  array  $array  The array to modify (passed by reference)
 * @return mixed The removed first element, or null if empty
 *
 * @see pop() For removing last element
 * @see unshift() For adding to beginning
 * @since 1.0.0
 */',
        'startLine' => 367,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'combine' => 
      array (
        'name' => 'combine',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
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
            'startLine' => 413,
            'endLine' => 413,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 413,
            'endLine' => 413,
            'startColumn' => 49,
            'endColumn' => 61,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create an array by combining two arrays as keys and values.
 *
 * Uses one array for keys and another for values to create a new associative
 * array. Both arrays must have the same number of elements. This is a wrapper
 * around PHP\'s array_combine().
 *
 * ## Examples:
 * ```php
 * Arr::combine([\'a\', \'b\', \'c\'], [1, 2, 3]);
 * // [\'a\' => 1, \'b\' => 2, \'c\' => 3]
 *
 * Arr::combine([\'name\', \'age\', \'city\'], [\'John\', 30, \'NYC\']);
 * // [\'name\' => \'John\', \'age\' => 30, \'city\' => \'NYC\']
 *
 * // Create lookup table
 * $ids = [1, 2, 3];
 * $names = [\'John\', \'Jane\', \'Bob\'];
 * Arr::combine($ids, $names);
 * // [1 => \'John\', 2 => \'Jane\', 3 => \'Bob\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Single pass through both arrays
 *
 * ## Notes:
 * - Both arrays must have same length
 * - Keys array values must be valid keys (int or string)
 * - Duplicate keys will overwrite earlier values
 * - Returns false if arrays have different lengths
 *
 * @param  array  $keys  The array of keys
 * @param  array  $values  The array of values
 * @return array The combined associative array
 *
 * @see flip() For swapping keys and values
 * @see build() For custom key-value transformation
 * @since 1.0.0
 */',
        'startLine' => 413,
        'endLine' => 416,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'keyExists' => 
      array (
        'name' => 'keyExists',
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
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 50,
            'endColumn' => 61,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if a key exists in an array.
 *
 * Determines whether the specified key exists in the array, even if the value
 * is null. This is different from isset() which returns false for null values.
 * This is a wrapper around PHP\'s array_key_exists().
 *
 * ## Examples:
 * ```php
 * Arr::keyExists(\'name\', [\'name\' => \'John\', \'age\' => 30]);
 * // true
 *
 * Arr::keyExists(\'email\', [\'name\' => \'John\', \'age\' => 30]);
 * // false
 *
 * // Works with null values
 * Arr::keyExists(\'middle\', [\'first\' => \'John\', \'middle\' => null]);
 * // true (isset would return false)
 *
 * Arr::keyExists(0, [\'a\', \'b\', \'c\']);
 * // true (numeric key)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(1) average case (hash lookup)
 * - Space complexity: O(1)
 * - Direct key lookup
 *
 * ## Notes:
 * - Returns true even if value is null
 * - Key is cast to string internally
 * - Works with both numeric and string keys
 * - Different from isset() behavior
 *
 * @param  mixed  $key  The key to check for
 * @param  array  $array  The array to check in
 * @return bool True if key exists, false otherwise
 *
 * @see has() For Laravel\'s dot notation key checking
 * @see exists() For checking if key exists
 * @since 1.0.0
 */',
        'startLine' => 460,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'reduce' => 
      array (
        'name' => 'reduce',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 515,
            'endLine' => 515,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 515,
            'endLine' => 515,
            'startColumn' => 49,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'initial' => 
          array (
            'name' => 'initial',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 515,
                'endLine' => 515,
                'startTokenPos' => 602,
                'startFilePos' => 17353,
                'endTokenPos' => 602,
                'endFilePos' => 17356,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 515,
            'endLine' => 515,
            'startColumn' => 69,
            'endColumn' => 89,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reduce an array to a single value using a callback.
 *
 * Iteratively reduces the array to a single value by applying a callback
 * function. The callback receives the accumulated result and current value,
 * returning the new accumulated result. This is a wrapper around PHP\'s array_reduce().
 *
 * ## Examples:
 * ```php
 * // Sum all values
 * Arr::reduce([1, 2, 3, 4], fn($carry, $item) => $carry + $item, 0);
 * // 10
 *
 * // Concatenate strings
 * Arr::reduce([\'a\', \'b\', \'c\'], fn($carry, $item) => $carry . $item, \'\');
 * // \'abc\'
 *
 * // Build associative array
 * $users = [[\'id\' => 1, \'name\' => \'John\'], [\'id\' => 2, \'name\' => \'Jane\']];
 * Arr::reduce($users, function($carry, $user) {
 *     $carry[$user[\'id\']] = $user[\'name\'];
 *     return $carry;
 * }, []);
 * // [1 => \'John\', 2 => \'Jane\']
 *
 * // Find maximum
 * Arr::reduce([3, 7, 2, 9, 1], fn($carry, $item) => max($carry, $item), 0);
 * // 9
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(1) for accumulator
 * - Single pass through array
 *
 * ## Notes:
 * - Callback receives ($carry, $item) parameters
 * - Initial value is optional (defaults to null)
 * - Useful for aggregations and transformations
 * - Original array is not modified
 *
 * @param  array  $array  The array to reduce
 * @param  callable  $callback  Function receiving ($carry, $item) and returning new carry
 * @param  mixed  $initial  Initial value for the accumulator (default: null)
 * @return mixed The final reduced value
 *
 * @see map() For transforming each element
 * @see filter() For filtering elements
 * @since 1.0.0
 */',
        'startLine' => 515,
        'endLine' => 518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'fillKeys' => 
      array (
        'name' => 'fillKeys',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
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
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 50,
            'endColumn' => 61,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create an array with specified keys all set to the same value.
 *
 * Fills an array using the provided keys, assigning the same value to each key.
 * Useful for creating default configurations or initializing data structures.
 * This is a wrapper around PHP\'s array_fill_keys().
 *
 * ## Examples:
 * ```php
 * Arr::fillKeys([\'a\', \'b\', \'c\'], 0);
 * // [\'a\' => 0, \'b\' => 0, \'c\' => 0]
 *
 * Arr::fillKeys([\'name\', \'email\', \'phone\'], null);
 * // [\'name\' => null, \'email\' => null, \'phone\' => null]
 *
 * // Initialize permissions
 * Arr::fillKeys([\'read\', \'write\', \'delete\'], false);
 * // [\'read\' => false, \'write\' => false, \'delete\' => false]
 *
 * // Create default config
 * Arr::fillKeys([\'debug\', \'cache\', \'log\'], true);
 * // [\'debug\' => true, \'cache\' => true, \'log\' => true]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is number of keys
 * - Space complexity: O(n) for the new array
 * - Single pass through keys
 *
 * ## Notes:
 * - All keys get the same value
 * - Keys must be valid array keys (int or string)
 * - Value can be any type (scalar, array, object)
 * - Useful for initialization patterns
 *
 * @param  array  $keys  The keys to use in the resulting array
 * @param  mixed  $value  The value to assign to each key
 * @return array The filled array with keys and values
 *
 * @see fill() For filling with sequential numeric keys
 * @see combine() For combining separate key and value arrays
 * @since 1.0.0
 */',
        'startLine' => 563,
        'endLine' => 566,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'slice' => 
      array (
        'name' => 'slice',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
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
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 48,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 615,
                'endLine' => 615,
                'startTokenPos' => 691,
                'startFilePos' => 20803,
                'endTokenPos' => 691,
                'endFilePos' => 20806,
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
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 61,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'preserveKeys' => 
          array (
            'name' => 'preserveKeys',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 615,
                'endLine' => 615,
                'startTokenPos' => 700,
                'startFilePos' => 20830,
                'endTokenPos' => 700,
                'endFilePos' => 20834,
              ),
            ),
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 615,
            'endLine' => 615,
            'startColumn' => 82,
            'endColumn' => 107,
            'parameterIndex' => 3,
            'isOptional' => true,
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
 * Extract a slice of an array.
 *
 * Returns a portion of the array starting at the specified offset. Optionally
 * specify length and whether to preserve keys. This is a wrapper around PHP\'s
 * array_slice().
 *
 * ## Examples:
 * ```php
 * // Get first 3 elements
 * Arr::slice([1, 2, 3, 4, 5], 0, 3);
 * // [1, 2, 3]
 *
 * // Skip first 2, get next 2
 * Arr::slice([1, 2, 3, 4, 5], 2, 2);
 * // [3, 4]
 *
 * // Get last 2 elements
 * Arr::slice([1, 2, 3, 4, 5], -2);
 * // [4, 5]
 *
 * // Preserve keys
 * Arr::slice([\'a\' => 1, \'b\' => 2, \'c\' => 3], 1, 2, true);
 * // [\'b\' => 2, \'c\' => 3]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is slice length
 * - Space complexity: O(n) for the new array
 * - Efficient for extracting portions
 *
 * ## Notes:
 * - Negative offset starts from end
 * - Null length means "to the end"
 * - preserveKeys maintains original keys
 * - Original array is not modified
 *
 * @param  array  $array  The array to slice
 * @param  int  $offset  Starting position (negative = from end)
 * @param  int|null  $length  Number of elements (null = to end)
 * @param  bool  $preserveKeys  Whether to preserve original keys (default: false)
 * @return array The sliced portion of the array
 *
 * @see take() For Laravel\'s take method
 * @see skip() For Laravel\'s skip method
 * @since 1.0.0
 */',
        'startLine' => 615,
        'endLine' => 618,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'filter' => 
      array (
        'name' => 'filter',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 666,
                'endLine' => 666,
                'startTokenPos' => 749,
                'startFilePos' => 22662,
                'endTokenPos' => 749,
                'endFilePos' => 22665,
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
                      'name' => 'callable',
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
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 49,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'mode' => 
          array (
            'name' => 'mode',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 666,
                'endLine' => 666,
                'startTokenPos' => 758,
                'startFilePos' => 22680,
                'endTokenPos' => 758,
                'endFilePos' => 22680,
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
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 77,
            'endColumn' => 89,
            'parameterIndex' => 2,
            'isOptional' => true,
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
 * Filter array elements using a callback function.
 *
 * Filters the array by applying a callback to each element. Elements for which
 * the callback returns true are kept. If no callback is provided, removes falsy
 * values. This is a wrapper around PHP\'s array_filter().
 *
 * ## Examples:
 * ```php
 * // Filter even numbers
 * Arr::filter([1, 2, 3, 4, 5], fn($x) => $x % 2 === 0);
 * // [2, 4]
 *
 * // Remove falsy values
 * Arr::filter([0, 1, false, 2, \'\', 3, null]);
 * // [1, 2, 3]
 *
 * // Filter by key
 * Arr::filter([\'a\' => 1, \'b\' => 2], fn($v, $k) => $k === \'a\', ARRAY_FILTER_USE_BOTH);
 * // [\'a\' => 1]
 *
 * // Keep only strings
 * Arr::filter([1, \'hello\', 2, \'world\'], fn($x) => is_string($x));
 * // [\'hello\', \'world\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(k) where k is filtered elements
 * - Single pass through array
 *
 * ## Notes:
 * - Preserves original keys
 * - Without callback, removes falsy values (0, false, \'\', null, [])
 * - Mode parameter: 0 (value), ARRAY_FILTER_USE_KEY, ARRAY_FILTER_USE_BOTH
 * - Original array is not modified
 *
 * @param  array  $array  The array to filter
 * @param  ?callable  $callback  Function returning true to keep element (optional)
 * @param  int  $mode  Filter mode: value, key, or both (default: 0)
 * @return array The filtered array
 *
 * @see reject() For Laravel\'s reject method
 * @see where() For Laravel\'s where method
 * @since 1.0.0
 */',
        'startLine' => 666,
        'endLine' => 669,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'unshift' => 
      array (
        'name' => 'unshift',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 719,
            'endLine' => 719,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 719,
            'endLine' => 719,
            'startColumn' => 51,
            'endColumn' => 66,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepend one or more elements to the beginning of an array.
 *
 * Adds one or more elements to the start of the array. The array is modified
 * in place and numeric keys are re-indexed. This is a wrapper around PHP\'s
 * array_unshift().
 *
 * ## Examples:
 * ```php
 * $arr = [2, 3, 4];
 * Arr::unshift($arr, 1);
 * // $arr = [1, 2, 3, 4]
 *
 * $arr = [\'b\', \'c\'];
 * Arr::unshift($arr, \'a\');
 * // $arr = [\'a\', \'b\', \'c\']
 *
 * // Multiple values
 * $arr = [4, 5];
 * Arr::unshift($arr, 1, 2, 3);
 * // $arr = [1, 2, 3, 4, 5]
 *
 * // With associative array
 * $arr = [\'b\' => 2, \'c\' => 3];
 * Arr::unshift($arr, 1);
 * // $arr = [0 => 1, \'b\' => 2, \'c\' => 3]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size (re-indexing)
 * - Space complexity: O(1)
 * - Modifies array in place
 *
 * ## Notes:
 * - Modifies the original array
 * - Returns new array length
 * - Numeric keys are re-indexed
 * - String keys are preserved
 * - Multiple values are added in order
 *
 * @param  array  $array  The array to modify (passed by reference)
 * @param  mixed  ...$values  The values to prepend
 * @return int The new number of elements in the array
 *
 * @see shift() For removing from beginning
 * @see prepend() For Laravel\'s prepend method
 * @since 1.0.0
 */',
        'startLine' => 719,
        'endLine' => 722,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'changeKeyCase' => 
      array (
        'name' => 'changeKeyCase',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 765,
            'endLine' => 765,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'case' => 
          array (
            'name' => 'case',
            'default' => NULL,
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
            'startLine' => 765,
            'endLine' => 765,
            'startColumn' => 56,
            'endColumn' => 64,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Change the case of all keys in an array.
 *
 * Converts all string keys in the array to either uppercase or lowercase.
 * Numeric keys remain unchanged. This is a wrapper around PHP\'s
 * array_change_key_case().
 *
 * ## Examples:
 * ```php
 * // Convert to uppercase
 * Arr::changeKeyCase([\'name\' => \'John\', \'age\' => 30], CASE_UPPER);
 * // [\'NAME\' => \'John\', \'AGE\' => 30]
 *
 * // Convert to lowercase
 * Arr::changeKeyCase([\'NAME\' => \'John\', \'AGE\' => 30], CASE_LOWER);
 * // [\'name\' => \'John\', \'age\' => 30]
 *
 * // Mixed keys
 * Arr::changeKeyCase([\'First_Name\' => \'John\', 0 => \'test\'], CASE_LOWER);
 * // [\'first_name\' => \'John\', 0 => \'test\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Single pass through array
 *
 * ## Notes:
 * - Only affects string keys
 * - Numeric keys are preserved
 * - Duplicate keys after conversion will overwrite
 * - Original array is not modified
 *
 * @param  array  $array  The array whose keys to change
 * @param  int  $case  The case type: CASE_UPPER or CASE_LOWER
 * @return array The array with changed case for keys
 *
 * @see strtoupper() For string uppercase conversion
 * @see strtolower() For string lowercase conversion
 * @since 1.0.0
 */',
        'startLine' => 765,
        'endLine' => 768,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'reverse' => 
      array (
        'name' => 'reverse',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 812,
            'endLine' => 812,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'preserveKeys' => 
          array (
            'name' => 'preserveKeys',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 812,
                'endLine' => 812,
                'startTokenPos' => 882,
                'startFilePos' => 27377,
                'endTokenPos' => 882,
                'endFilePos' => 27381,
              ),
            ),
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 812,
            'endLine' => 812,
            'startColumn' => 50,
            'endColumn' => 75,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reverse the order of elements in an array.
 *
 * Returns a new array with elements in reverse order. Optionally preserves
 * the original keys. This is a wrapper around PHP\'s array_reverse().
 *
 * ## Examples:
 * ```php
 * Arr::reverse([1, 2, 3, 4, 5]);
 * // [5, 4, 3, 2, 1]
 *
 * Arr::reverse([\'a\', \'b\', \'c\']);
 * // [\'c\', \'b\', \'a\']
 *
 * // Preserve keys
 * Arr::reverse([\'a\' => 1, \'b\' => 2, \'c\' => 3], true);
 * // [\'c\' => 3, \'b\' => 2, \'a\' => 1]
 *
 * // Without preserving keys
 * Arr::reverse([\'a\' => 1, \'b\' => 2, \'c\' => 3]);
 * // [3, 2, 1] (keys are re-indexed)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Single pass through array
 *
 * ## Notes:
 * - Original array is not modified
 * - preserveKeys maintains original keys
 * - Without preserveKeys, numeric keys are re-indexed
 * - Useful for reversing order of operations
 *
 * @param  array  $array  The array to reverse
 * @param  bool  $preserveKeys  Whether to preserve keys (default: false)
 * @return array The reversed array
 *
 * @see sort() For sorting arrays
 * @see rsort() For reverse sorting
 * @since 1.0.0
 */',
        'startLine' => 812,
        'endLine' => 815,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'pad' => 
      array (
        'name' => 'pad',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 863,
            'endLine' => 863,
            'startColumn' => 32,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'size' => 
          array (
            'name' => 'size',
            'default' => NULL,
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
            'startLine' => 863,
            'endLine' => 863,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 863,
            'endLine' => 863,
            'startColumn' => 57,
            'endColumn' => 68,
            'parameterIndex' => 2,
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
 * Pad an array to a specified length with a value.
 *
 * Pads the array to the specified size with a given value. If size is positive,
 * pads to the right; if negative, pads to the left. If the array is already
 * larger than size, no padding occurs.
 *
 * ## Examples:
 * ```php
 * // Pad to the right
 * Arr::pad([1, 2, 3], 5, 0);
 * // [1, 2, 3, 0, 0]
 *
 * // Pad to the left
 * Arr::pad([1, 2, 3], -5, 0);
 * // [0, 0, 1, 2, 3]
 *
 * // No padding if already larger
 * Arr::pad([1, 2, 3, 4, 5], 3, 0);
 * // [1, 2, 3, 4, 5]
 *
 * // Pad with string
 * Arr::pad([\'a\', \'b\'], 4, \'x\');
 * // [\'a\', \'b\', \'x\', \'x\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is final size
 * - Space complexity: O(n) for the new array
 * - Efficient for small padding amounts
 *
 * ## Notes:
 * - Positive size pads to the right
 * - Negative size pads to the left
 * - No padding if array is already larger
 * - Original array is not modified
 *
 * @param  array  $array  The array to pad
 * @param  int  $size  The desired length (positive = right, negative = left)
 * @param  mixed  $value  The value to pad with
 * @return array The padded array
 *
 * @see fill() For filling with sequential values
 * @see fillKeys() For filling with specific keys
 * @since 1.0.0
 */',
        'startLine' => 863,
        'endLine' => 866,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'replace' => 
      array (
        'name' => 'replace',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 912,
            'endLine' => 912,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replacements' => 
          array (
            'name' => 'replacements',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 912,
            'endLine' => 912,
            'startColumn' => 50,
            'endColumn' => 71,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Replace elements in an array with values from other arrays.
 *
 * Replaces values in the first array with values from subsequent arrays.
 * Keys from later arrays overwrite keys from earlier arrays. This is
 * non-recursive replacement.
 *
 * ## Examples:
 * ```php
 * Arr::replace([\'a\' => 1, \'b\' => 2], [\'b\' => 3, \'c\' => 4]);
 * // [\'a\' => 1, \'b\' => 3, \'c\' => 4]
 *
 * // Multiple replacements
 * Arr::replace(
 *     [\'a\' => 1, \'b\' => 2],
 *     [\'b\' => 3],
 *     [\'c\' => 4]
 * );
 * // [\'a\' => 1, \'b\' => 3, \'c\' => 4]
 *
 * // Numeric keys
 * Arr::replace([1, 2, 3], [0 => \'a\', 2 => \'c\']);
 * // [\'a\', 2, \'c\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n*m) where n is array size, m is number of replacements
 * - Space complexity: O(n) for the new array
 * - Processes arrays left to right
 *
 * ## Notes:
 * - Later values overwrite earlier ones
 * - Works with both numeric and string keys
 * - Non-recursive (use replaceRecursive for nested arrays)
 * - Original array is not modified
 *
 * @param  array  $array  The original array
 * @param  array  ...$replacements  One or more arrays with replacement values
 * @return array The array with replaced values
 *
 * @see replaceRecursive() For recursive replacement
 * @see merge() For merging arrays
 * @since 1.0.0
 */',
        'startLine' => 912,
        'endLine' => 915,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'replaceRecursive' => 
      array (
        'name' => 'replaceRecursive',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 966,
            'endLine' => 966,
            'startColumn' => 45,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replacements' => 
          array (
            'name' => 'replacements',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 966,
            'endLine' => 966,
            'startColumn' => 59,
            'endColumn' => 80,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Recursively replace elements in an array with values from other arrays.
 *
 * Similar to replace(), but recursively processes nested arrays. Values from
 * later arrays overwrite values from earlier arrays at all nesting levels.
 *
 * ## Examples:
 * ```php
 * Arr::replaceRecursive(
 *     [\'a\' => [\'x\' => 1, \'y\' => 2], \'b\' => 3],
 *     [\'a\' => [\'y\' => 4, \'z\' => 5]]
 * );
 * // [\'a\' => [\'x\' => 1, \'y\' => 4, \'z\' => 5], \'b\' => 3]
 *
 * // Deep nesting
 * Arr::replaceRecursive(
 *     [\'config\' => [\'db\' => [\'host\' => \'localhost\', \'port\' => 3306]]],
 *     [\'config\' => [\'db\' => [\'port\' => 5432]]]
 * );
 * // [\'config\' => [\'db\' => [\'host\' => \'localhost\', \'port\' => 5432]]]
 *
 * // Multiple replacements
 * Arr::replaceRecursive(
 *     [\'a\' => [\'b\' => 1]],
 *     [\'a\' => [\'c\' => 2]],
 *     [\'a\' => [\'d\' => 3]]
 * );
 * // [\'a\' => [\'b\' => 1, \'c\' => 2, \'d\' => 3]]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n*m*d) where n is size, m is replacements, d is depth
 * - Space complexity: O(n*d) for the new array
 * - Recursively processes all levels
 *
 * ## Notes:
 * - Recursively merges nested arrays
 * - Later values overwrite earlier ones at all levels
 * - Preserves structure of nested arrays
 * - Original array is not modified
 *
 * @param  array  $array  The original array
 * @param  array  ...$replacements  One or more arrays with replacement values
 * @return array The array with recursively replaced values
 *
 * @see replace() For non-recursive replacement
 * @see merge() For merging arrays
 * @since 1.0.0
 */',
        'startLine' => 966,
        'endLine' => 969,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'column' => 
      array (
        'name' => 'column',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1018,
            'endLine' => 1018,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columnKey' => 
          array (
            'name' => 'columnKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1018,
            'endLine' => 1018,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'indexKey' => 
          array (
            'name' => 'indexKey',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1018,
                'endLine' => 1018,
                'startTokenPos' => 1055,
                'startFilePos' => 34325,
                'endTokenPos' => 1055,
                'endFilePos' => 34328,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1018,
            'endLine' => 1018,
            'startColumn' => 67,
            'endColumn' => 88,
            'parameterIndex' => 2,
            'isOptional' => true,
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
 * Extract a single column from a multi-dimensional array.
 *
 * Returns an array of values from a single column of the input array.
 * Optionally use another column as the index for the returned array.
 * This is a wrapper around PHP\'s array_column().
 *
 * ## Examples:
 * ```php
 * $users = [
 *     [\'id\' => 1, \'name\' => \'John\', \'email\' => \'john@example.com\'],
 *     [\'id\' => 2, \'name\' => \'Jane\', \'email\' => \'jane@example.com\']
 * ];
 *
 * // Get names
 * Arr::column($users, \'name\');
 * // [\'John\', \'Jane\']
 *
 * // Get names indexed by id
 * Arr::column($users, \'name\', \'id\');
 * // [1 => \'John\', 2 => \'Jane\']
 *
 * // Get all rows indexed by id
 * Arr::column($users, null, \'id\');
 * // [1 => [\'id\' => 1, \'name\' => \'John\', ...], 2 => [...]]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Single pass through array
 *
 * ## Notes:
 * - Works with arrays of arrays or objects
 * - columnKey can be null to get entire rows
 * - indexKey is optional for custom indexing
 * - Missing columns result in null values
 *
 * @param  array  $array  The input multi-dimensional array
 * @param  mixed  $columnKey  The column to retrieve (null for entire row)
 * @param  mixed  $indexKey  Optional column to use as index
 * @return array Array containing the column\'s values
 *
 * @see pluck() For Laravel\'s pluck method
 * @see map() For transforming arrays
 * @since 1.0.0
 */',
        'startLine' => 1018,
        'endLine' => 1021,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'rand' => 
      array (
        'name' => 'rand',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1065,
            'endLine' => 1065,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'num' => 
          array (
            'name' => 'num',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1065,
                'endLine' => 1065,
                'startTokenPos' => 1100,
                'startFilePos' => 35841,
                'endTokenPos' => 1100,
                'endFilePos' => 35841,
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
            'startLine' => 1065,
            'endLine' => 1065,
            'startColumn' => 47,
            'endColumn' => 58,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Pick one or more random keys from an array.
 *
 * Returns one or more random keys from the array. If num is 1, returns a
 * single key; otherwise returns an array of keys. This is a wrapper around
 * PHP\'s array_rand().
 *
 * ## Examples:
 * ```php
 * // Get one random key
 * Arr::rand([\'a\' => 1, \'b\' => 2, \'c\' => 3]);
 * // \'b\' (random key)
 *
 * // Get multiple random keys
 * Arr::rand([\'a\' => 1, \'b\' => 2, \'c\' => 3, \'d\' => 4], 2);
 * // [\'a\', \'c\'] (random keys)
 *
 * // With numeric keys
 * Arr::rand([10, 20, 30, 40], 2);
 * // [0, 2] (random indices)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is num
 * - Space complexity: O(n) for multiple keys
 * - Uses cryptographically secure random
 *
 * ## Notes:
 * - Returns key, not value
 * - For single key, returns string/int
 * - For multiple keys, returns array
 * - num must not exceed array size
 * - Original array is not modified
 *
 * @param  array  $array  The input array
 * @param  int  $num  Number of random keys to retrieve (default: 1)
 * @return mixed Single key (string/int) or array of keys
 *
 * @see random() For Laravel\'s random method
 * @see shuffle() For randomizing array order
 * @since 1.0.0
 */',
        'startLine' => 1065,
        'endLine' => 1068,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'unique' => 
      array (
        'name' => 'unique',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1107,
            'endLine' => 1107,
            'startColumn' => 35,
            'endColumn' => 46,
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
 * Remove duplicate values from an array.
 *
 * Returns a new array with duplicate values removed. The first occurrence
 * of each value is kept. This is a wrapper around PHP\'s array_unique().
 *
 * ## Examples:
 * ```php
 * Arr::unique([1, 2, 2, 3, 3, 3, 4]);
 * // [1, 2, 3, 4]
 *
 * Arr::unique([\'a\', \'b\', \'a\', \'c\', \'b\']);
 * // [\'a\', \'b\', \'c\']
 *
 * // Preserves first occurrence
 * Arr::unique([1 => \'a\', 2 => \'b\', 3 => \'a\']);
 * // [1 => \'a\', 2 => \'b\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is array size
 * - Space complexity: O(n) for the new array
 * - Single pass through array
 *
 * ## Notes:
 * - Preserves keys of first occurrences
 * - Uses string comparison by default
 * - Original array is not modified
 * - Gaps in numeric keys are not re-indexed
 *
 * @param  array  $array  The input array
 * @return array Array with duplicate values removed
 *
 * @see array_unique() For the underlying PHP function
 * @see values() To re-index after removing duplicates
 * @since 1.0.0
 */',
        'startLine' => 1107,
        'endLine' => 1110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'diff' => 
      array (
        'name' => 'diff',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1152,
            'endLine' => 1152,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arrays' => 
          array (
            'name' => 'arrays',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1152,
            'endLine' => 1152,
            'startColumn' => 47,
            'endColumn' => 62,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compute the difference between arrays by comparing values.
 *
 * Returns values from the first array that are not present in any of the
 * other arrays. Comparison is done by value only, keys are ignored.
 * This is a wrapper around PHP\'s array_diff().
 *
 * ## Examples:
 * ```php
 * Arr::diff([1, 2, 3, 4], [2, 4]);
 * // [1, 3]
 *
 * Arr::diff([\'a\', \'b\', \'c\'], [\'b\'], [\'c\']);
 * // [\'a\']
 *
 * // Keys are preserved
 * Arr::diff([\'a\' => 1, \'b\' => 2, \'c\' => 3], [\'b\' => 2]);
 * // [\'a\' => 1, \'c\' => 3]
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n*m) where n is first array size, m is total comparisons
 * - Space complexity: O(n) for the result
 * - Compares all arrays
 *
 * ## Notes:
 * - Compares values only, not keys
 * - Preserves keys from first array
 * - Uses loose comparison (==)
 * - Original array is not modified
 *
 * @param  array  $array  The array to compare from
 * @param  array  ...$arrays  The arrays to compare against
 * @return array Values from first array not in other arrays
 *
 * @see diffKey() For comparing by keys
 * @see diffAssoc() For comparing both keys and values
 * @see intersect() For finding common values
 * @since 1.0.0
 */',
        'startLine' => 1152,
        'endLine' => 1155,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'diffKey' => 
      array (
        'name' => 'diffKey',
        'parameters' => 
        array (
          'arrays' => 
          array (
            'name' => 'arrays',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1163,
            'endLine' => 1163,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Compute the difference of array keys.
 *
 * @param  array  ...$arrays  The arrays to compare against.
 * @return array The array containing the values that are not present in the other arrays.
 */',
        'startLine' => 1163,
        'endLine' => 1166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'fill' => 
      array (
        'name' => 'fill',
        'parameters' => 
        array (
          'start_index' => 
          array (
            'name' => 'start_index',
            'default' => NULL,
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
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'count' => 
          array (
            'name' => 'count',
            'default' => NULL,
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
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 51,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1175,
            'endLine' => 1175,
            'startColumn' => 63,
            'endColumn' => 74,
            'parameterIndex' => 2,
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
 * Fill an array with values.
 *
 * @param  int  $count  The number of elements to insert.
 * @param  mixed  $value  The value to fill the array with.
 * @return array The filled array.
 */',
        'startLine' => 1175,
        'endLine' => 1178,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'pop' => 
      array (
        'name' => 'pop',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1186,
            'endLine' => 1186,
            'startColumn' => 32,
            'endColumn' => 44,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Pop the last element from an array.
 *
 * @param  array  $array  The array to pop from.
 * @return mixed The popped element.
 */',
        'startLine' => 1186,
        'endLine' => 1189,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'isList' => 
      array (
        'name' => 'isList',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1198,
            'endLine' => 1198,
            'startColumn' => 35,
            'endColumn' => 40,
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
 * Check if an array is a list.
 *
 * @param  array  $array  The input array.
 * @return bool True if the array is a list, otherwise false.
 */',
        'startLine' => 1197,
        'endLine' => 1201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'keyLast' => 
      array (
        'name' => 'keyLast',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1209,
            'endLine' => 1209,
            'startColumn' => 36,
            'endColumn' => 47,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the last key of an array.
 *
 * @param  array  $array  The input array.
 * @return mixed The last key in the array.
 */',
        'startLine' => 1209,
        'endLine' => 1212,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'intersect' => 
      array (
        'name' => 'intersect',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1221,
            'endLine' => 1221,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arrays' => 
          array (
            'name' => 'arrays',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1221,
            'endLine' => 1221,
            'startColumn' => 52,
            'endColumn' => 67,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the intersection of arrays.
 *
 * @param  array  $array  The array to compare.
 * @param  array  ...$arrays  The arrays to compare against.
 * @return array The array containing the intersection of the arrays.
 */',
        'startLine' => 1221,
        'endLine' => 1224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'walk' => 
      array (
        'name' => 'walk',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1232,
            'endLine' => 1232,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1232,
            'endLine' => 1232,
            'startColumn' => 48,
            'endColumn' => 65,
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
 * Walk through the array and apply a callback function to each element.
 *
 * @param  array  $array  The input array.
 * @param  callable  $callback  The callback function to apply.
 */',
        'startLine' => 1232,
        'endLine' => 1235,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'search' => 
      array (
        'name' => 'search',
        'parameters' => 
        array (
          'needle' => 
          array (
            'name' => 'needle',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1245,
            'endLine' => 1245,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'haystack' => 
          array (
            'name' => 'haystack',
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
            'startLine' => 1245,
            'endLine' => 1245,
            'startColumn' => 50,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1245,
                'endLine' => 1245,
                'startTokenPos' => 1465,
                'startFilePos' => 41357,
                'endTokenPos' => 1465,
                'endFilePos' => 41361,
              ),
            ),
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1245,
            'endLine' => 1245,
            'startColumn' => 67,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Search for a value in an array and return the key if found.
 *
 * @param  mixed  $needle  The value to search for.
 * @param  array  $haystack  The array to search in.
 * @param  bool  $strict  Whether to use strict comparison (optional).
 * @return mixed The key of the found element, or false if not found.
 */',
        'startLine' => 1245,
        'endLine' => 1248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'merge' => 
      array (
        'name' => 'merge',
        'parameters' => 
        array (
          'arrays' => 
          array (
            'name' => 'arrays',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1260,
            'endLine' => 1260,
            'startColumn' => 34,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Merge one or more arrays into the original array.
 *
 * This method merges the given arrays into the current array using `array_merge`.
 * It combines the input arrays into a single array, with later arrays overriding
 * values from earlier ones if they have the same keys.
 *
 * @param  array  ...$arrays  Arrays to be merged with the current array.
 * @return array The resulting array after merging all input arrays.
 */',
        'startLine' => 1260,
        'endLine' => 1264,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'any' => 
      array (
        'name' => 'any',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1273,
            'endLine' => 1273,
            'startColumn' => 32,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1273,
            'endLine' => 1273,
            'startColumn' => 46,
            'endColumn' => 63,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if any element in the array satisfies the given callback.
 *
 * @param  array  $array  The input array.
 * @param  callable  $callback  The callback function to test each element.
 * @return bool True if any element satisfies the callback, otherwise false.
 */',
        'startLine' => 1273,
        'endLine' => 1276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'all' => 
      array (
        'name' => 'all',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1285,
            'endLine' => 1285,
            'startColumn' => 32,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1285,
            'endLine' => 1285,
            'startColumn' => 46,
            'endColumn' => 63,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if all elements in the array satisfy the given callback.
 *
 * @param  array  $array  The input array.
 * @param  callable  $callback  The callback function to test each element.
 * @return bool True if all elements satisfy the callback, otherwise false.
 */',
        'startLine' => 1285,
        'endLine' => 1288,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'sum' => 
      array (
        'name' => 'sum',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1296,
            'endLine' => 1296,
            'startColumn' => 32,
            'endColumn' => 43,
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
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
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
 * Get the sum of values in an array.
 *
 * @param  array  $array  The input array.
 * @return int|float The sum of all values.
 */',
        'startLine' => 1296,
        'endLine' => 1299,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'product' => 
      array (
        'name' => 'product',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1307,
            'endLine' => 1307,
            'startColumn' => 36,
            'endColumn' => 47,
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
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
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
 * Get the product of values in an array.
 *
 * @param  array  $array  The input array.
 * @return int|float The product of all values.
 */',
        'startLine' => 1307,
        'endLine' => 1310,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1319,
            'endLine' => 1319,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'mode' => 
          array (
            'name' => 'mode',
            'default' => 
            array (
              'code' => 'COUNT_NORMAL',
              'attributes' => 
              array (
                'startLine' => 1319,
                'endLine' => 1319,
                'startTokenPos' => 1718,
                'startFilePos' => 43867,
                'endTokenPos' => 1718,
                'endFilePos' => 43878,
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
            'startLine' => 1319,
            'endLine' => 1319,
            'startColumn' => 48,
            'endColumn' => 71,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Count all elements in an array.
 *
 * @param  array  $array  The input array.
 * @param  int  $mode  (Optional) COUNT_NORMAL or COUNT_RECURSIVE.
 * @return int The number of elements in the array.
 */',
        'startLine' => 1319,
        'endLine' => 1322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'chunk' => 
      array (
        'name' => 'chunk',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1332,
            'endLine' => 1332,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
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
            'startLine' => 1332,
            'endLine' => 1332,
            'startColumn' => 48,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'preserveKeys' => 
          array (
            'name' => 'preserveKeys',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1332,
                'endLine' => 1332,
                'startTokenPos' => 1765,
                'startFilePos' => 44288,
                'endTokenPos' => 1765,
                'endFilePos' => 44292,
              ),
            ),
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1332,
            'endLine' => 1332,
            'startColumn' => 61,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
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
 * Split an array into chunks.
 *
 * @param  array  $array  The input array.
 * @param  int  $length  The size of each chunk.
 * @param  bool  $preserveKeys  Whether to preserve keys (optional).
 * @return array The chunked array.
 */',
        'startLine' => 1332,
        'endLine' => 1335,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'mapValues' => 
      array (
        'name' => 'mapValues',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1344,
            'endLine' => 1344,
            'startColumn' => 38,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1344,
            'endLine' => 1344,
            'startColumn' => 58,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply a callback function to each element of an array.
 *
 * @param  callable  $callback  The callback function to apply.
 * @param  array  $array  The input array.
 * @return array The array with the callback applied to each element.
 */',
        'startLine' => 1344,
        'endLine' => 1347,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'walkRecursive' => 
      array (
        'name' => 'walkRecursive',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1355,
            'endLine' => 1355,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1355,
            'endLine' => 1355,
            'startColumn' => 57,
            'endColumn' => 74,
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
 * Recursively walk through an array and apply a callback.
 *
 * @param  array  $array  The input array.
 * @param  callable  $callback  The callback function to apply.
 */',
        'startLine' => 1355,
        'endLine' => 1358,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'keyFirst' => 
      array (
        'name' => 'keyFirst',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1366,
            'endLine' => 1366,
            'startColumn' => 37,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the first key of an array.
 *
 * @param  array  $array  The input array.
 * @return mixed The first key in the array.
 */',
        'startLine' => 1366,
        'endLine' => 1369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'intersectKey' => 
      array (
        'name' => 'intersectKey',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1378,
            'endLine' => 1378,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arrays' => 
          array (
            'name' => 'arrays',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1378,
            'endLine' => 1378,
            'startColumn' => 55,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compute the intersection of arrays using keys for comparison.
 *
 * @param  array  $array  The array to compare.
 * @param  array  ...$arrays  The arrays to compare against.
 * @return array The array containing the intersection based on keys.
 */',
        'startLine' => 1378,
        'endLine' => 1381,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'diffAssoc' => 
      array (
        'name' => 'diffAssoc',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1390,
            'endLine' => 1390,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arrays' => 
          array (
            'name' => 'arrays',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1390,
            'endLine' => 1390,
            'startColumn' => 52,
            'endColumn' => 67,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compute the difference of arrays with additional index check.
 *
 * @param  array  $array  The array to compare.
 * @param  array  ...$arrays  The arrays to compare against.
 * @return array The array containing the difference.
 */',
        'startLine' => 1390,
        'endLine' => 1393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'intersectAssoc' => 
      array (
        'name' => 'intersectAssoc',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 1402,
            'endLine' => 1402,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arrays' => 
          array (
            'name' => 'arrays',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1402,
            'endLine' => 1402,
            'startColumn' => 57,
            'endColumn' => 72,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Compute the intersection of arrays with additional index check.
 *
 * @param  array  $array  The array to compare.
 * @param  array  ...$arrays  The arrays to compare against.
 * @return array The array containing the intersection.
 */',
        'startLine' => 1402,
        'endLine' => 1405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'pushNative' => 
      array (
        'name' => 'pushNative',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1414,
            'endLine' => 1414,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1414,
            'endLine' => 1414,
            'startColumn' => 54,
            'endColumn' => 69,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Push one or more elements onto the end of an array (native PHP function).
 *
 * @param  array  $array  The array to modify.
 * @param  mixed  ...$values  The values to push.
 * @return int The new number of elements in the array.
 */',
        'startLine' => 1414,
        'endLine' => 1417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'range' => 
      array (
        'name' => 'range',
        'parameters' => 
        array (
          'start' => 
          array (
            'name' => 'start',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1427,
            'endLine' => 1427,
            'startColumn' => 34,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'end' => 
          array (
            'name' => 'end',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1427,
            'endLine' => 1427,
            'startColumn' => 48,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'step' => 
          array (
            'name' => 'step',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 1427,
                'endLine' => 1427,
                'startTokenPos' => 2083,
                'startFilePos' => 47438,
                'endTokenPos' => 2083,
                'endFilePos' => 47438,
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
                      'name' => 'float',
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
            'startLine' => 1427,
            'endLine' => 1427,
            'startColumn' => 60,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
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
 * Create an array containing a range of elements.
 *
 * @param  mixed  $start  The starting value.
 * @param  mixed  $end  The ending value.
 * @param  int|float  $step  The step between values (optional).
 * @return array The array containing the range.
 */',
        'startLine' => 1427,
        'endLine' => 1430,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'inArray' => 
      array (
        'name' => 'inArray',
        'parameters' => 
        array (
          'needle' => 
          array (
            'name' => 'needle',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'haystack' => 
          array (
            'name' => 'haystack',
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
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 51,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1440,
                'endLine' => 1440,
                'startTokenPos' => 2133,
                'startFilePos' => 47904,
                'endTokenPos' => 2133,
                'endFilePos' => 47908,
              ),
            ),
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 68,
            'endColumn' => 87,
            'parameterIndex' => 2,
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
 * Check if a value exists in an array.
 *
 * @param  mixed  $needle  The value to search for.
 * @param  array  $haystack  The array to search in.
 * @param  bool  $strict  Whether to use strict comparison (optional).
 * @return bool True if the value exists, otherwise false.
 */',
        'startLine' => 1440,
        'endLine' => 1443,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'sortNative' => 
      array (
        'name' => 'sortNative',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1452,
            'endLine' => 1452,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1452,
                'endLine' => 1452,
                'startTokenPos' => 2179,
                'startFilePos' => 48291,
                'endTokenPos' => 2179,
                'endFilePos' => 48302,
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
            'startLine' => 1452,
            'endLine' => 1452,
            'startColumn' => 54,
            'endColumn' => 78,
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
 * Sort an array in ascending order (native PHP function).
 *
 * @param  array  $array  The array to sort.
 * @param  int  $flags  Sort flags (optional).
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1452,
        'endLine' => 1455,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'rsort' => 
      array (
        'name' => 'rsort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1464,
            'endLine' => 1464,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1464,
                'endLine' => 1464,
                'startTokenPos' => 2222,
                'startFilePos' => 48642,
                'endTokenPos' => 2222,
                'endFilePos' => 48653,
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
            'startLine' => 1464,
            'endLine' => 1464,
            'startColumn' => 49,
            'endColumn' => 73,
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
 * Sort an array in descending order.
 *
 * @param  array  $array  The array to sort.
 * @param  int  $flags  Sort flags (optional).
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1464,
        'endLine' => 1467,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'ksort' => 
      array (
        'name' => 'ksort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1476,
            'endLine' => 1476,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1476,
                'endLine' => 1476,
                'startTokenPos' => 2265,
                'startFilePos' => 49001,
                'endTokenPos' => 2265,
                'endFilePos' => 49012,
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
            'startLine' => 1476,
            'endLine' => 1476,
            'startColumn' => 49,
            'endColumn' => 73,
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
 * Sort an array by keys in ascending order.
 *
 * @param  array  $array  The array to sort.
 * @param  int  $flags  Sort flags (optional).
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1476,
        'endLine' => 1479,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'krsort' => 
      array (
        'name' => 'krsort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1488,
            'endLine' => 1488,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1488,
                'endLine' => 1488,
                'startTokenPos' => 2308,
                'startFilePos' => 49362,
                'endTokenPos' => 2308,
                'endFilePos' => 49373,
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
            'startLine' => 1488,
            'endLine' => 1488,
            'startColumn' => 50,
            'endColumn' => 74,
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
 * Sort an array by keys in descending order.
 *
 * @param  array  $array  The array to sort.
 * @param  int  $flags  Sort flags (optional).
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1488,
        'endLine' => 1491,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'asort' => 
      array (
        'name' => 'asort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1500,
            'endLine' => 1500,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1500,
                'endLine' => 1500,
                'startTokenPos' => 2351,
                'startFilePos' => 49726,
                'endTokenPos' => 2351,
                'endFilePos' => 49737,
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
            'startLine' => 1500,
            'endLine' => 1500,
            'startColumn' => 49,
            'endColumn' => 73,
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
 * Sort an array and maintain index association.
 *
 * @param  array  $array  The array to sort.
 * @param  int  $flags  Sort flags (optional).
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1500,
        'endLine' => 1503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'arsort' => 
      array (
        'name' => 'arsort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1512,
            'endLine' => 1512,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1512,
                'endLine' => 1512,
                'startTokenPos' => 2394,
                'startFilePos' => 50110,
                'endTokenPos' => 2394,
                'endFilePos' => 50121,
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
            'startLine' => 1512,
            'endLine' => 1512,
            'startColumn' => 50,
            'endColumn' => 74,
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
 * Sort an array in descending order and maintain index association.
 *
 * @param  array  $array  The array to sort.
 * @param  int  $flags  Sort flags (optional).
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1512,
        'endLine' => 1515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'usort' => 
      array (
        'name' => 'usort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1524,
            'endLine' => 1524,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1524,
            'endLine' => 1524,
            'startColumn' => 49,
            'endColumn' => 66,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort an array using a user-defined comparison function.
 *
 * @param  array  $array  The array to sort.
 * @param  callable  $callback  The comparison function.
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1524,
        'endLine' => 1527,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'uksort' => 
      array (
        'name' => 'uksort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1536,
            'endLine' => 1536,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1536,
            'endLine' => 1536,
            'startColumn' => 50,
            'endColumn' => 67,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort an array by keys using a user-defined comparison function.
 *
 * @param  array  $array  The array to sort.
 * @param  callable  $callback  The comparison function.
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1536,
        'endLine' => 1539,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'uasort' => 
      array (
        'name' => 'uasort',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1548,
            'endLine' => 1548,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1548,
            'endLine' => 1548,
            'startColumn' => 50,
            'endColumn' => 67,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort an array with a user-defined comparison function and maintain index association.
 *
 * @param  array  $array  The array to sort.
 * @param  callable  $callback  The comparison function.
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1548,
        'endLine' => 1551,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
        'aliasName' => NULL,
      ),
      'shuffleNative' => 
      array (
        'name' => 'shuffleNative',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1559,
            'endLine' => 1559,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Shuffle an array (native PHP function).
 *
 * @param  array  $array  The array to shuffle.
 * @return bool True on success, false on failure.
 */',
        'startLine' => 1559,
        'endLine' => 1562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Arr',
        'implementingClassName' => 'Pixielity\\Support\\Arr',
        'currentClassName' => 'Pixielity\\Support\\Arr',
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