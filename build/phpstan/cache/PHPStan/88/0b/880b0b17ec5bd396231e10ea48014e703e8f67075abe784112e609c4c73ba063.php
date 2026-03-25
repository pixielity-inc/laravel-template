<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Optionable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Enum\Concerns\Optionable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-230ba58d455832cef44f4686b118440eb5c6607fd4007a214465c9cdf509de3b',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Enum/src/Concerns/Optionable.php',
      ),
    ),
    'namespace' => 'Pixielity\\Enum\\Concerns',
    'name' => 'Pixielity\\Enum\\Concerns\\Optionable',
    'shortName' => 'Optionable',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Optionable Trait.
 *
 * Provides methods to get enum cases as key-value pairs, useful for dropdowns and forms.
 * Integrates with Label attribute for better labels.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Enum\\Attributes\\Label;
 * use Pixielity\\Enum\\Meta\\Meta;
 *
 * #[Meta([Label::class])]
 * enum Status: string
 * {
 *     use Optionable;
 * use Pixielity\\Support\\Str;
 *
 *     #[Label(\'Active Status\')]
 *     case ACTIVE = \'active\';
 *
 *     case INACTIVE = \'inactive\';
 * }
 *
 * Status::options();
 * // Returns [\'ACTIVE\' => \'active\', \'INACTIVE\' => \'inactive\']
 *
 * Status::stringOptionable();
 * // Returns: <option value="active">Active Status</option>
 * //          <option value="inactive">Inactive</option>
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 48,
    'endLine' => 140,
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
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'options' => 
      array (
        'name' => 'options',
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
 * Get an associative array of case names and values.
 *
 * For backed enums: [\'NAME\' => value, ...]
 * For pure enums: [\'NAME\', ...]
 *
 * @return array<string, mixed>|array<string> Associative array or indexed array
 */',
        'startLine' => 58,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'aliasName' => NULL,
      ),
      'stringOptionable' => 
      array (
        'name' => 'stringOptionable',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 77,
                'endLine' => 77,
                'startTokenPos' => 150,
                'startFilePos' => 2051,
                'endTokenPos' => 150,
                'endFilePos' => 2054,
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
                      'name' => 'Closure',
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
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 45,
            'endColumn' => 69,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'glue' => 
          array (
            'name' => 'glue',
            'default' => 
            array (
              'code' => '"\\n"',
              'attributes' => 
              array (
                'startLine' => 77,
                'endLine' => 77,
                'startTokenPos' => 159,
                'startFilePos' => 2072,
                'endTokenPos' => 159,
                'endFilePos' => 2075,
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
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 72,
            'endColumn' => 90,
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
 * Generate a string representation of enum options.
 *
 * Useful for generating HTML select options or other formatted output.
 * Uses Label attribute if available, otherwise humanizes the case name.
 *
 * @param  Closure(string $name, mixed $value): string|null  $callback  Custom formatter
 * @param  string  $glue  String to join options with
 * @return string Formatted string of options
 */',
        'startLine' => 77,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'aliasName' => NULL,
      ),
      'humanizeLabel' => 
      array (
        'name' => 'humanizeLabel',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 45,
            'endColumn' => 56,
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
 * Humanize a case name for display.
 *
 * @param  string  $name  The case name
 * @return string Humanized label
 */',
        'startLine' => 117,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Pixielity\\Enum\\Concerns',
        'declaringClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'implementingClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
        'currentClassName' => 'Pixielity\\Enum\\Concerns\\Optionable',
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