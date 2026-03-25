<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Str.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\Str
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-d705aeb522beb15af8d50f78a63d0e12b00e76d6ba1da64232976add75e1689a',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\Str',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Str.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support',
    'name' => 'Pixielity\\Support\\Str',
    'shortName' => 'Str',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class Str.
 *
 * This class provides string manipulation utilities, extending the functionality
 * of built-in Str class. It includes methods for creating slugs,
 * converting characters to ASCII, generating ordinal numbers, and more.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 950,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Str',
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
      'pad' => 
      array (
        'name' => 'pad',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'pad' => 
          array (
            'name' => 'pad',
            'default' => 
            array (
              'code' => '\' \'',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 91,
                'startFilePos' => 2195,
                'endTokenPos' => 91,
                'endFilePos' => 2197,
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
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 56,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'pad_type' => 
          array (
            'name' => 'pad_type',
            'default' => 
            array (
              'code' => 'STR_PAD_RIGHT',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 98,
                'startFilePos' => 2212,
                'endTokenPos' => 98,
                'endFilePos' => 2224,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 75,
            'endColumn' => 99,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Pad a string to a certain length with another string.
 *
 * This method pads the input string to the specified length using the provided
 * padding string. It supports multibyte strings and uses mb_str_pad when available
 * for proper Unicode handling.
 *
 * ## Examples:
 * ```php
 * Str::pad(\'hello\', 10);                    // \'hello     \'
 * Str::pad(\'hello\', 10, \'-\');               // \'hello-----\'
 * Str::pad(\'hello\', 10, \'-\', STR_PAD_LEFT); // \'-----hello\'
 * Str::pad(\'hello\', 10, \'-\', STR_PAD_BOTH); // \'--hello---\'
 * Str::pad(\'hello\', 3);                     // \'hello\' (no padding if already longer)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is the target length
 * - Space complexity: O(n) for the padded string
 * - Uses native mb_str_pad when available for better performance
 *
 * ## Notes:
 * - Supports multibyte characters (UTF-8)
 * - If string is already longer than target length, returns original string
 * - Padding string may be truncated if it doesn\'t fit evenly
 *
 * @param  string  $value  The input string to pad
 * @param  int  $length  The target length after padding
 * @param  string  $pad  The padding string (default: \' \')
 * @param  int  $pad_type  Padding type: STR_PAD_RIGHT, STR_PAD_LEFT, or STR_PAD_BOTH (default: STR_PAD_RIGHT)
 * @return string The padded string
 *
 * @see str_pad() For the native PHP function
 * @see mb_str_pad() For multibyte padding
 * @see length() For string length calculation
 * @since 1.0.0
 */',
        'startLine' => 63,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'format' => 
      array (
        'name' => 'format',
        'parameters' => 
        array (
          'phrase' => 
          array (
            'name' => 'phrase',
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
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 93,
            'endLine' => 93,
            'startColumn' => 51,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Formats a string with the provided arguments.
 *
 * Supports multiple placeholder formats including:
 * - Named placeholders: `:name`, `:value` (Laravel style)
 * - Numeric placeholders: `%1`, `%2`, etc.
 * - String placeholders: `%s`, `%d`, etc. (sprintf style)
 *
 * Examples:
 * ```php
 * Str::format(\'Hello :name\', [\'name\' => \'John\']); // "Hello John"
 * Str::format(\'User %1 has %2 points\', \'John\', 100); // "User John has 100 points"
 * Str::format(\'Total: %d items\', 5); // "Total: 5 items"
 * ```
 *
 * @param  string  $phrase  The string with placeholders.
 * @param  mixed  ...$args  The arguments to replace the placeholders.
 * @return string The formatted string.
 */',
        'startLine' => 93,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'capital' => 
      array (
        'name' => 'capital',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 154,
            'endLine' => 154,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Make a string\'s first character uppercase.
 *
 * This method capitalizes only the first character of the string while
 * leaving the rest of the string unchanged. It\'s a simple wrapper around
 * PHP\'s ucfirst() function for consistency with the Str class API.
 *
 * ## Examples:
 * ```php
 * Str::capital(\'hello world\');     // \'Hello world\'
 * Str::capital(\'HELLO WORLD\');     // \'HELLO WORLD\'
 * Str::capital(\'hello\');           // \'Hello\'
 * Str::capital(\'123abc\');          // \'123abc\' (no change)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(1)
 * - Space complexity: O(n) where n is string length
 *
 * ## Notes:
 * - Only the first character is affected
 * - Rest of the string remains unchanged
 * - Non-alphabetic first characters are not modified
 *
 * @param  string  $string  The input string to capitalize
 * @return string The string with first character uppercase
 *
 * @see ucfirst() For the underlying PHP function
 * @see title() For title case conversion
 * @see upper() For full uppercase conversion
 * @since 1.0.0
 */',
        'startLine' => 154,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'slug' => 
      array (
        'name' => 'slug',
        'parameters' => 
        array (
          'title' => 
          array (
            'name' => 'title',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'separator' => 
          array (
            'name' => 'separator',
            'default' => 
            array (
              'code' => '\'-\'',
              'attributes' => 
              array (
                'startLine' => 198,
                'endLine' => 198,
                'startTokenPos' => 469,
                'startFilePos' => 7475,
                'endTokenPos' => 469,
                'endFilePos' => 7477,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'language' => 
          array (
            'name' => 'language',
            'default' => 
            array (
              'code' => '\'en\'',
              'attributes' => 
              array (
                'startLine' => 198,
                'endLine' => 198,
                'startTokenPos' => 476,
                'startFilePos' => 7492,
                'endTokenPos' => 476,
                'endFilePos' => 7495,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 59,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'dictionary' => 
          array (
            'name' => 'dictionary',
            'default' => 
            array (
              'code' => '[\'@\' => \'at\']',
              'attributes' => 
              array (
                'startLine' => 198,
                'endLine' => 198,
                'startTokenPos' => 483,
                'startFilePos' => 7512,
                'endTokenPos' => 489,
                'endFilePos' => 7524,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 77,
            'endColumn' => 103,
            'parameterIndex' => 3,
            'isOptional' => true,
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
 * Generate a URL-friendly slug from a given title.
 *
 * This method converts a title into a URL-safe slug by replacing special characters,
 * converting to lowercase, and using the specified separator. It handles backslashes
 * and spaces specially before delegating to the parent slug implementation.
 *
 * ## Examples:
 * ```php
 * Str::slug(\'Hello World\');                    // \'hello-world\'
 * Str::slug(\'Hello World\', \'_\');               // \'hello_world\'
 * Str::slug(\'Contact us @ email\');             // \'contact-us-at-email\'
 * Str::slug(\'Über uns\', \'-\', \'de\');            // \'ueber-uns\'
 * Str::slug(\'Price: $100\', \'-\', \'en\', [\'$\' => \'dollar\']); // \'price-dollar100\'
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is title length
 * - Space complexity: O(n) for the slug string
 * - Uses ASCII transliteration for non-Latin characters
 *
 * ## Notes:
 * - Backslashes and spaces are converted to single spaces first
 * - Special characters are transliterated based on language
 * - Multiple consecutive separators are collapsed to one
 * - Leading and trailing separators are removed
 *
 * @param  string  $title  The title to convert into a slug
 * @param  string  $separator  The character to use as separator (default: \'-\')
 * @param  string|null  $language  The language for transliteration (default: \'en\')
 * @param  array<string, string>  $dictionary  Custom character replacements (default: [\'@\' => \'at\'])
 * @return string The generated URL-safe slug
 *
 * @see ASCII() For character transliteration
 * @see kebab() For kebab-case conversion
 * @see snake() For snake_case conversion
 * @since 1.0.0
 */',
        'startLine' => 197,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ascii' => 
      array (
        'name' => 'ascii',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 243,
            'endLine' => 243,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'language' => 
          array (
            'name' => 'language',
            'default' => 
            array (
              'code' => '\'en\'',
              'attributes' => 
              array (
                'startLine' => 243,
                'endLine' => 243,
                'startTokenPos' => 565,
                'startFilePos' => 9382,
                'endTokenPos' => 565,
                'endFilePos' => 9385,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 243,
            'endLine' => 243,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Convert a string to its ASCII representation.
 *
 * This method transliterates Unicode characters to their closest ASCII equivalents
 * using language-specific rules. It supports over 50 languages and handles special
 * characters, accents, and non-Latin scripts.
 *
 * ## Examples:
 * ```php
 * Str::ascii(\'Über\');                    // \'Ueber\'
 * Str::ascii(\'Café\');                    // \'Cafe\'
 * Str::ascii(\'Привет\', \'ru\');            // \'Privet\'
 * Str::ascii(\'こんにちは\', \'ja\');         // \'konnichiha\'
 * Str::ascii(\'Ελληνικά\', \'el\');          // \'Ellinika\'
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for the ASCII string
 * - Language validation adds minimal overhead
 *
 * ## Notes:
 * - Supports 50+ languages including Cyrillic, Greek, Arabic, Asian scripts
 * - Falls back to \'en\' for unsupported languages
 * - Some characters may not have perfect ASCII equivalents
 * - Useful for creating URL slugs and file names
 *
 * @param  string  $value  The string to convert to ASCII
 * @param  string  $language  The language code for transliteration (default: \'en\')
 * @return string The ASCII representation of the input string
 *
 * @see slug() For URL-safe slug generation
 * @see ASCII::to_ascii() For the underlying transliteration engine
 * @since 1.0.0
 */',
        'startLine' => 242,
        'endLine' => 316,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ordinal' => 
      array (
        'name' => 'ordinal',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
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
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 36,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert a number to its ordinal English form.
 *
 * This method converts integers into their ordinal string representation
 * following English grammar rules (1st, 2nd, 3rd, 4th, etc.). It correctly
 * handles special cases like 11th, 12th, and 13th.
 *
 * ## Examples:
 * ```php
 * Str::ordinal(1);      // \'1st\'
 * Str::ordinal(2);      // \'2nd\'
 * Str::ordinal(3);      // \'3rd\'
 * Str::ordinal(4);      // \'4th\'
 * Str::ordinal(11);     // \'11th\' (special case)
 * Str::ordinal(21);     // \'21st\'
 * Str::ordinal(100);    // \'100th\'
 * Str::ordinal(101);    // \'101st\'
 * ```
 *
 * ## Performance:
 * - Time complexity: O(1)
 * - Space complexity: O(1)
 * - Uses efficient modulo operations
 *
 * ## Notes:
 * - Handles special cases: 11th, 12th, 13th (not 11st, 12nd, 13rd)
 * - Works with any positive or negative integer
 * - Only supports English ordinals
 * - Returns the number with suffix, not the word form
 *
 * @param  int  $number  The number to convert to ordinal form
 * @return string The ordinal representation (e.g., \'1st\', \'2nd\', \'3rd\')
 *
 * @see number() For number formatting
 * @see plural() For pluralization
 * @since 1.0.0
 */',
        'startLine' => 355,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'normalizeEol' => 
      array (
        'name' => 'normalizeEol',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 404,
            'endLine' => 404,
            'startColumn' => 41,
            'endColumn' => 54,
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
 * Normalize line endings to a standard format.
 *
 * This method converts all types of line breaks (Unix LF, Windows CRLF, Mac CR)
 * to a consistent CRLF (\\r\\n) format. Useful for cross-platform text processing
 * and ensuring consistent line endings in files.
 *
 * ## Examples:
 * ```php
 * Str::normalizeEol("line1\\nline2");       // "line1\\r\\nline2"
 * Str::normalizeEol("line1\\r\\nline2");     // "line1\\r\\nline2"
 * Str::normalizeEol("line1\\rline2");       // "line1\\r\\nline2"
 * Str::normalizeEol("line1\\n\\rline2");     // "line1\\r\\nline2"
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for the normalized string
 * - Uses efficient regex replacement
 *
 * ## Notes:
 * - Handles all Unicode line break characters (\\R)
 * - Converts LF (\\n), CRLF (\\r\\n), CR (\\r) to CRLF
 * - Useful for Windows compatibility
 * - Returns null if regex fails (rare)
 *
 * @param  string  $string  The string with varying line endings
 * @return string|null The normalized string with CRLF line breaks, or null on failure
 *
 * @see trim() For removing line breaks
 * @see explode() For splitting by line breaks
 * @since 1.0.0
 */',
        'startLine' => 404,
        'endLine' => 408,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'getPrecedingSymbols' => 
      array (
        'name' => 'getPrecedingSymbols',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 48,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'symbol' => 
          array (
            'name' => 'symbol',
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
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 64,
            'endColumn' => 77,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Count consecutive occurrences of a symbol at the start of a string.
 *
 * This method calculates how many times a specified symbol appears consecutively
 * at the beginning of a string. Useful for analyzing indentation, markdown syntax,
 * or prefix patterns.
 *
 * ## Examples:
 * ```php
 * Str::getPrecedingSymbols(\'###Heading\', \'#\');     // 3
 * Str::getPrecedingSymbols(\'    indented\', \' \');   // 4
 * Str::getPrecedingSymbols(\'---divider\', \'-\');     // 3
 * Str::getPrecedingSymbols(\'hello\', \'h\');          // 1
 * Str::getPrecedingSymbols(\'hello\', \'x\');          // 0
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for the trimmed string
 * - Efficient for short prefix patterns
 *
 * ## Notes:
 * - Only counts consecutive symbols from the start
 * - Stops counting at the first non-matching character
 * - Symbol can be a single character or multi-character string
 * - Returns 0 if string doesn\'t start with the symbol
 *
 * @param  string  $string  The string to analyze
 * @param  string  $symbol  The symbol to count at the beginning
 * @return int The count of consecutive preceding symbols
 *
 * @see ltrim() For removing leading characters
 * @see startsWith() For checking string prefix
 * @see length() For string length calculation
 * @since 1.0.0
 */',
        'startLine' => 446,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'limitMiddle' => 
      array (
        'name' => 'limitMiddle',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 497,
            'endLine' => 497,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 497,
                'endLine' => 497,
                'startTokenPos' => 1055,
                'startFilePos' => 18321,
                'endTokenPos' => 1055,
                'endFilePos' => 18323,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 497,
            'endLine' => 497,
            'startColumn' => 48,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'marker' => 
          array (
            'name' => 'marker',
            'default' => 
            array (
              'code' => '\'...\'',
              'attributes' => 
              array (
                'startLine' => 497,
                'endLine' => 497,
                'startTokenPos' => 1064,
                'startFilePos' => 18343,
                'endTokenPos' => 1064,
                'endFilePos' => 18347,
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
            'startLine' => 497,
            'endLine' => 497,
            'startColumn' => 62,
            'endColumn' => 83,
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
 * Limit string length by truncating the middle portion.
 *
 * This method shortens a string to the specified length by removing characters
 * from the middle and inserting a marker. Unlike standard truncation, this preserves
 * both the beginning and end of the string, making it ideal for file paths, URLs,
 * and identifiers where both ends contain important information.
 *
 * ## Examples:
 * ```php
 * Str::limitMiddle(\'very_long_filename.txt\', 15);
 * // \'very_l...me.txt\'
 *
 * Str::limitMiddle(\'/path/to/very/long/directory/file.txt\', 25);
 * // \'/path/to/v...ory/file.txt\'
 *
 * Str::limitMiddle(\'short\', 20);
 * // \'short\' (no truncation needed)
 *
 * Str::limitMiddle(\'hello world\', 8, \'...\');
 * // \'he...rld\'
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for the truncated string
 * - Handles multibyte UTF-8 characters correctly
 *
 * ## Notes:
 * - Preserves both start and end of the string
 * - Marker length is included in the limit calculation
 * - If string is shorter than limit, returns unchanged
 * - Splits remaining space evenly between start and end
 * - Trims whitespace from truncation points
 *
 * @param  string  $value  The original string to limit
 * @param  int  $limit  The maximum length of output string (default: 100)
 * @param  string  $marker  The string to insert in middle (default: \'...\')
 * @return string The truncated string with marker in middle
 *
 * @see limit() For standard end truncation
 * @see substr() For substring extraction
 * @see mb_strimwidth() For multibyte string width limiting
 * @since 1.0.0
 */',
        'startLine' => 497,
        'endLine' => 520,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isCapitalized' => 
      array (
        'name' => 'isCapitalized',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 558,
            'endLine' => 558,
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
 * Check if a string is capitalized (first letter uppercase, rest lowercase).
 *
 * This method verifies that the string follows capitalization rules where only
 * the first character is uppercase and all remaining characters are lowercase.
 * This is stricter than just checking the first character.
 *
 * ## Examples:
 * ```php
 * Str::isCapitalized(\'Hello\');        // true
 * Str::isCapitalized(\'World\');        // true
 * Str::isCapitalized(\'HELLO\');        // false (all uppercase)
 * Str::isCapitalized(\'hello\');        // false (all lowercase)
 * Str::isCapitalized(\'Hello World\');  // false (multiple words)
 * Str::isCapitalized(\'HelloWorld\');   // false (camelCase)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for comparison string
 * - Single pass comparison
 *
 * ## Notes:
 * - Only the first character should be uppercase
 * - All other characters must be lowercase
 * - Does not validate word boundaries
 * - Numbers and special characters are allowed
 *
 * @param  string  $value  The string to check
 * @return bool True if properly capitalized, false otherwise
 *
 * @see capital() For capitalizing a string
 * @see isTitleCase() For title case validation
 * @see ucfirst() For uppercase first character
 * @since 1.0.0
 */',
        'startLine' => 558,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isTitleCase' => 
      array (
        'name' => 'isTitleCase',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Check if a string is in title case (each word capitalized).
 *
 * This method validates that each word in the string starts with an uppercase
 * letter followed by lowercase letters, with words separated by spaces. This
 * follows standard title case conventions.
 *
 * ## Examples:
 * ```php
 * Str::isTitleCase(\'Hello World\');        // true
 * Str::isTitleCase(\'The Quick Brown Fox\'); // true
 * Str::isTitleCase(\'Hello\');              // true (single word)
 * Str::isTitleCase(\'hello world\');        // false (lowercase)
 * Str::isTitleCase(\'HELLO WORLD\');        // false (all uppercase)
 * Str::isTitleCase(\'Hello world\');        // false (mixed case)
 * Str::isTitleCase(\'HelloWorld\');         // false (no spaces)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(1)
 * - Single regex match operation
 *
 * ## Notes:
 * - Each word must start with uppercase letter
 * - Remaining letters in each word must be lowercase
 * - Words must be separated by single spaces
 * - Does not handle punctuation or special characters
 * - Strict validation (no mixed case within words)
 *
 * @param  string  $value  The string to check
 * @return bool True if in title case, false otherwise
 *
 * @see title() For converting to title case
 * @see isCapitalized() For single word capitalization
 * @see ucwords() For title case conversion
 * @since 1.0.0
 */',
        'startLine' => 602,
        'endLine' => 606,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isLowercase' => 
      array (
        'name' => 'isLowercase',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 643,
            'endLine' => 643,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Check if all alphabetic characters in a string are lowercase.
 *
 * This method verifies that every letter in the string is lowercase.
 * Numbers, spaces, and special characters are ignored in the validation.
 *
 * ## Examples:
 * ```php
 * Str::isLowercase(\'hello\');          // true
 * Str::isLowercase(\'hello world\');    // true
 * Str::isLowercase(\'hello123\');       // true (numbers ignored)
 * Str::isLowercase(\'Hello\');          // false (has uppercase)
 * Str::isLowercase(\'HELLO\');          // false (all uppercase)
 * Str::isLowercase(\'hello-world\');    // true (special chars ignored)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for comparison string
 * - Single pass comparison
 *
 * ## Notes:
 * - Only validates alphabetic characters
 * - Numbers and special characters don\'t affect result
 * - Empty strings return true
 * - Multibyte characters are supported
 *
 * @param  string  $value  The string to check
 * @return bool True if all letters are lowercase, false otherwise
 *
 * @see lower() For converting to lowercase
 * @see isUppercase() For uppercase validation
 * @see strtolower() For lowercase conversion
 * @since 1.0.0
 */',
        'startLine' => 643,
        'endLine' => 647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isUppercase' => 
      array (
        'name' => 'isUppercase',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 684,
            'endLine' => 684,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Check if all alphabetic characters in a string are uppercase.
 *
 * This method verifies that every letter in the string is uppercase.
 * Numbers, spaces, and special characters are ignored in the validation.
 *
 * ## Examples:
 * ```php
 * Str::isUppercase(\'HELLO\');          // true
 * Str::isUppercase(\'HELLO WORLD\');    // true
 * Str::isUppercase(\'HELLO123\');       // true (numbers ignored)
 * Str::isUppercase(\'Hello\');          // false (has lowercase)
 * Str::isUppercase(\'hello\');          // false (all lowercase)
 * Str::isUppercase(\'HELLO-WORLD\');    // true (special chars ignored)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for comparison string
 * - Single pass comparison
 *
 * ## Notes:
 * - Only validates alphabetic characters
 * - Numbers and special characters don\'t affect result
 * - Empty strings return true
 * - Multibyte characters are supported
 *
 * @param  string  $value  The string to check
 * @return bool True if all letters are uppercase, false otherwise
 *
 * @see upper() For converting to uppercase
 * @see isLowercase() For lowercase validation
 * @see strtoupper() For uppercase conversion
 * @since 1.0.0
 */',
        'startLine' => 684,
        'endLine' => 688,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isCamelCase' => 
      array (
        'name' => 'isCamelCase',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 727,
            'endLine' => 727,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Check if a string is in camelCase format.
 *
 * This method validates that the string follows camelCase naming conventions:
 * starts with a lowercase letter, contains no spaces or special characters,
 * and uses uppercase letters to denote word boundaries.
 *
 * ## Examples:
 * ```php
 * Str::isCamelCase(\'helloWorld\');      // true
 * Str::isCamelCase(\'myVariableName\');  // true
 * Str::isCamelCase(\'hello\');           // true (single word)
 * Str::isCamelCase(\'HelloWorld\');      // false (PascalCase)
 * Str::isCamelCase(\'hello_world\');     // false (snake_case)
 * Str::isCamelCase(\'hello-world\');     // false (kebab-case)
 * Str::isCamelCase(\'hello world\');     // false (has spaces)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(1)
 * - Single regex match operation
 *
 * ## Notes:
 * - Must start with lowercase letter
 * - No spaces, underscores, or hyphens allowed
 * - Numbers are allowed after the first character
 * - Common in JavaScript and Java naming conventions
 *
 * @param  string  $value  The string to check
 * @return bool True if in camelCase format, false otherwise
 *
 * @see camel() For converting to camelCase
 * @see isSnakeCase() For snake_case validation
 * @see isKebabCase() For kebab-case validation
 * @since 1.0.0
 */',
        'startLine' => 727,
        'endLine' => 731,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isSnakeCase' => 
      array (
        'name' => 'isSnakeCase',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 772,
            'endLine' => 772,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Check if a string is in snake_case format.
 *
 * This method validates that the string follows snake_case naming conventions:
 * lowercase letters and numbers separated by underscores, with no spaces or
 * uppercase letters.
 *
 * ## Examples:
 * ```php
 * Str::isSnakeCase(\'hello_world\');      // true
 * Str::isSnakeCase(\'my_variable_name\'); // true
 * Str::isSnakeCase(\'hello\');            // true (single word)
 * Str::isSnakeCase(\'hello_world_123\');  // true (with numbers)
 * Str::isSnakeCase(\'helloWorld\');       // false (camelCase)
 * Str::isSnakeCase(\'Hello_World\');      // false (has uppercase)
 * Str::isSnakeCase(\'hello-world\');      // false (kebab-case)
 * Str::isSnakeCase(\'hello world\');      // false (has spaces)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(1)
 * - Single regex match operation
 *
 * ## Notes:
 * - Must be all lowercase
 * - Underscores are the only allowed separators
 * - Numbers are allowed
 * - No spaces, hyphens, or uppercase letters
 * - Common in Python and Ruby naming conventions
 *
 * @param  string  $value  The string to check
 * @return bool True if in snake_case format, false otherwise
 *
 * @see snake() For converting to snake_case
 * @see isCamelCase() For camelCase validation
 * @see isKebabCase() For kebab-case validation
 * @since 1.0.0
 */',
        'startLine' => 772,
        'endLine' => 776,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isKebabCase' => 
      array (
        'name' => 'isKebabCase',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
            'startLine' => 817,
            'endLine' => 817,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Check if a string is in kebab-case format.
 *
 * This method validates that the string follows kebab-case naming conventions:
 * lowercase letters and numbers separated by hyphens, with no spaces or
 * uppercase letters.
 *
 * ## Examples:
 * ```php
 * Str::isKebabCase(\'hello-world\');      // true
 * Str::isKebabCase(\'my-variable-name\'); // true
 * Str::isKebabCase(\'hello\');            // true (single word)
 * Str::isKebabCase(\'hello-world-123\');  // true (with numbers)
 * Str::isKebabCase(\'helloWorld\');       // false (camelCase)
 * Str::isKebabCase(\'Hello-World\');      // false (has uppercase)
 * Str::isKebabCase(\'hello_world\');      // false (snake_case)
 * Str::isKebabCase(\'hello world\');      // false (has spaces)
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(1)
 * - Single regex match operation
 *
 * ## Notes:
 * - Must be all lowercase
 * - Hyphens are the only allowed separators
 * - Numbers are allowed
 * - No spaces, underscores, or uppercase letters
 * - Common in CSS class names and URLs
 *
 * @param  string  $value  The string to check
 * @return bool True if in kebab-case format, false otherwise
 *
 * @see kebab() For converting to kebab-case
 * @see isCamelCase() For camelCase validation
 * @see isSnakeCase() For snake_case validation
 * @since 1.0.0
 */',
        'startLine' => 817,
        'endLine' => 821,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isPlural' => 
      array (
        'name' => 'isPlural',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 859,
            'endLine' => 859,
            'startColumn' => 37,
            'endColumn' => 50,
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
 * Determine if a string is in plural form.
 *
 * This method uses simple heuristics to check if a word is plural based on
 * common English pluralization patterns. It checks for common plural endings
 * like \'s\', \'es\', and \'ies\'.
 *
 * ## Examples:
 * ```php
 * Str::isPlural(\'cars\');        // true
 * Str::isPlural(\'boxes\');       // true
 * Str::isPlural(\'cities\');      // true
 * Str::isPlural(\'car\');         // false
 * Str::isPlural(\'box\');         // false
 * Str::isPlural(\'city\');        // false
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(1)
 * - Simple suffix checking
 *
 * ## Notes:
 * - Uses basic English pluralization rules
 * - May not handle all irregular plurals (e.g., \'children\', \'mice\')
 * - Case-insensitive comparison
 * - Trims whitespace before checking
 * - Not suitable for complex linguistic analysis
 *
 * @param  string  $string  The string to check
 * @return bool True if the string appears to be plural, false otherwise
 *
 * @see plural() For converting to plural form
 * @see singular() For converting to singular form
 * @since 1.0.0
 */',
        'startLine' => 859,
        'endLine' => 868,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'explode' => 
      array (
        'name' => 'explode',
        'parameters' => 
        array (
          'delimiter' => 
          array (
            'name' => 'delimiter',
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
            'startLine' => 906,
            'endLine' => 906,
            'startColumn' => 36,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 906,
            'endLine' => 906,
            'startColumn' => 55,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => 'PHP_INT_MAX',
              'attributes' => 
              array (
                'startLine' => 906,
                'endLine' => 906,
                'startTokenPos' => 1624,
                'startFilePos' => 34456,
                'endTokenPos' => 1624,
                'endFilePos' => 34466,
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
            'startLine' => 906,
            'endLine' => 906,
            'startColumn' => 71,
            'endColumn' => 94,
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
 * Split a string into an array by a delimiter.
 *
 * This method divides a string into multiple parts based on a delimiter string.
 * It\'s a wrapper around PHP\'s native explode() function for consistency with
 * the Str class API and to provide a fluent interface.
 *
 * ## Examples:
 * ```php
 * Str::explode(\',\', \'a,b,c\');           // [\'a\', \'b\', \'c\']
 * Str::explode(\' \', \'hello world\');     // [\'hello\', \'world\']
 * Str::explode(\'|\', \'a|b|c|d\', 2);      // [\'a\', \'b|c|d\']
 * Str::explode(\'-\', \'one-two-three\');   // [\'one\', \'two\', \'three\']
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is string length
 * - Space complexity: O(n) for the resulting array
 * - Direct wrapper around native PHP function
 *
 * ## Notes:
 * - Delimiter cannot be an empty string
 * - If delimiter is not found, returns array with original string
 * - Limit parameter controls maximum array elements
 * - Negative limit removes last elements
 *
 * @param  string  $delimiter  The boundary string to split on
 * @param  string  $string  The input string to split
 * @param  int  $limit  Maximum number of elements (default: PHP_INT_MAX)
 * @return array<string> Array of strings created by splitting
 *
 * @see join() For joining array elements
 * @see split() For regex-based splitting
 * @see explode() For the native PHP function
 * @since 1.0.0
 */',
        'startLine' => 906,
        'endLine' => 909,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
        'aliasName' => NULL,
      ),
      'join' => 
      array (
        'name' => 'join',
        'parameters' => 
        array (
          'glue' => 
          array (
            'name' => 'glue',
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
            'startLine' => 946,
            'endLine' => 946,
            'startColumn' => 33,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'pieces' => 
          array (
            'name' => 'pieces',
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
            'startLine' => 946,
            'endLine' => 946,
            'startColumn' => 47,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Join array elements into a string with a glue string.
 *
 * This method combines an array of strings into a single string, inserting
 * the glue string between each element. It\'s a wrapper around PHP\'s native
 * implode() function for consistency with the Str class API.
 *
 * ## Examples:
 * ```php
 * Str::join(\',\', [\'a\', \'b\', \'c\']);           // \'a,b,c\'
 * Str::join(\' \', [\'hello\', \'world\']);        // \'hello world\'
 * Str::join(\'|\', [\'one\', \'two\', \'three\']);   // \'one|two|three\'
 * Str::join(\'\', [\'a\', \'b\', \'c\']);            // \'abc\'
 * Str::join(\'-\', []);                        // \'\'
 * ```
 *
 * ## Performance:
 * - Time complexity: O(n) where n is total length of all strings
 * - Space complexity: O(n) for the resulting string
 * - Direct wrapper around native PHP function
 *
 * ## Notes:
 * - Empty array returns empty string
 * - Glue can be empty string for concatenation
 * - Non-string array values are converted to strings
 * - Opposite operation of explode()
 *
 * @param  string  $glue  The string to insert between elements
 * @param  array<string>  $pieces  The array of strings to join
 * @return string A string with all elements joined by glue
 *
 * @see explode() For splitting strings
 * @see implode() For the native PHP function
 * @since 1.0.0
 */',
        'startLine' => 946,
        'endLine' => 949,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Str',
        'implementingClassName' => 'Pixielity\\Support\\Str',
        'currentClassName' => 'Pixielity\\Support\\Str',
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