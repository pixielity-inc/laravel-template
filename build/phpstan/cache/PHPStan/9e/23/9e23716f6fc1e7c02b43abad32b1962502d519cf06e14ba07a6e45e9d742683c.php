<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/UserStatus.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\UserStatus
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-03a87f9741776d564dba8edfe02960239b1a81d839a8ed91eba52ced84b457ca',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/UserStatus.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\UserStatus',
    'shortName' => 'UserStatus',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * User Status Enum.
 *
 * Represents the various states a user account can be in within the system.
 * This enum provides labeled and described status values for user account management.
 *
 * ## Features:
 * - Labeled status values for display purposes
 * - Detailed descriptions for each status
 * - Type-safe status handling
 * - Easy conversion to arrays and options
 *
 * ## Usage:
 * ```php
 * // Get status value
 * $status = UserStatus::ACTIVE->value; // \'active\'
 *
 * // Get label
 * $label = UserStatus::ACTIVE->label(); // \'Active User\'
 *
 * // Get description
 * $description = UserStatus::ACTIVE->description(); // \'The user account is active...\'
 *
 * // Get all status names
 * $names = UserStatus::names(); // [\'ACTIVE\', \'INACTIVE\', \'SUSPENDED\', \'PENDING\']
 *
 * // Get all status values
 * $values = UserStatus::values(); // [\'active\', \'inactive\', \'suspended\', \'pending\']
 *
 * // Get options for select dropdown
 * $options = UserStatus::options(); // [\'ACTIVE\' => \'active\', ...]
 *
 * // Compare statuses
 * if ($user->status->is(UserStatus::ACTIVE)) {
 *     // User is active
 * }
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Pixielity\\Enum\\Attributes\\Meta',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '[\\Pixielity\\Enum\\Attributes\\Description::class, \\Pixielity\\Enum\\Attributes\\Label::class]',
            'attributes' => 
            array (
              'startLine' => 54,
              'endLine' => 54,
              'startTokenPos' => 40,
              'startFilePos' => 1404,
              'endTokenPos' => 49,
              'endFilePos' => 1437,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 54,
    'endLine' => 98,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\UserStatus',
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
      'ACTIVE' => 
      array (
        'name' => 'ACTIVE',
        'value' => 
        array (
          'code' => '\'active\'',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 67,
            'startTokenPos' => 89,
            'startFilePos' => 1783,
            'endTokenPos' => 89,
            'endFilePos' => 1790,
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
                'code' => '\'Active User\'',
                'attributes' => 
                array (
                  'startLine' => 65,
                  'endLine' => 65,
                  'startTokenPos' => 72,
                  'startFilePos' => 1674,
                  'endTokenPos' => 72,
                  'endFilePos' => 1686,
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
                'code' => '\'The user account is active and can access the system\'',
                'attributes' => 
                array (
                  'startLine' => 66,
                  'endLine' => 66,
                  'startTokenPos' => 79,
                  'startFilePos' => 1708,
                  'endTokenPos' => 79,
                  'endFilePos' => 1761,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Active User Status.
 *
 * Indicates that the user account is fully active and has complete access
 * to all system features and functionalities.
 */',
        'startLine' => 65,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'INACTIVE' => 
      array (
        'name' => 'INACTIVE',
        'value' => 
        array (
          'code' => '\'inactive\'',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 114,
            'startFilePos' => 2110,
            'endTokenPos' => 114,
            'endFilePos' => 2119,
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
                'code' => '\'Inactive User\'',
                'attributes' => 
                array (
                  'startLine' => 75,
                  'endLine' => 75,
                  'startTokenPos' => 97,
                  'startFilePos' => 1992,
                  'endTokenPos' => 97,
                  'endFilePos' => 2006,
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
                'code' => '\'The user account is inactive and cannot access the system\'',
                'attributes' => 
                array (
                  'startLine' => 76,
                  'endLine' => 76,
                  'startTokenPos' => 104,
                  'startFilePos' => 2028,
                  'endTokenPos' => 104,
                  'endFilePos' => 2086,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Inactive User Status.
 *
 * Indicates that the user account has been deactivated and cannot access
 * the system. This is typically a temporary state.
 */',
        'startLine' => 75,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 31,
      ),
      'SUSPENDED' => 
      array (
        'name' => 'SUSPENDED',
        'value' => 
        array (
          'code' => '\'suspended\'',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 139,
            'startFilePos' => 2448,
            'endTokenPos' => 139,
            'endFilePos' => 2458,
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
                'code' => '\'Suspended User\'',
                'attributes' => 
                array (
                  'startLine' => 85,
                  'endLine' => 85,
                  'startTokenPos' => 122,
                  'startFilePos' => 2325,
                  'endTokenPos' => 122,
                  'endFilePos' => 2340,
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
                'code' => '\'The user account has been suspended due to policy violations\'',
                'attributes' => 
                array (
                  'startLine' => 86,
                  'endLine' => 86,
                  'startTokenPos' => 129,
                  'startFilePos' => 2362,
                  'endTokenPos' => 129,
                  'endFilePos' => 2423,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Suspended User Status.
 *
 * Indicates that the user account has been suspended due to policy violations,
 * security concerns, or administrative actions.
 */',
        'startLine' => 85,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
      'PENDING' => 
      array (
        'name' => 'PENDING',
        'value' => 
        array (
          'code' => '\'pending\'',
          'attributes' => 
          array (
            'startLine' => 97,
            'endLine' => 97,
            'startTokenPos' => 164,
            'startFilePos' => 2787,
            'endTokenPos' => 164,
            'endFilePos' => 2795,
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
                'code' => '\'Pending Verification\'',
                'attributes' => 
                array (
                  'startLine' => 95,
                  'endLine' => 95,
                  'startTokenPos' => 147,
                  'startFilePos' => 2674,
                  'endTokenPos' => 147,
                  'endFilePos' => 2695,
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
                'code' => '\'The user account is pending email verification\'',
                'attributes' => 
                array (
                  'startLine' => 96,
                  'endLine' => 96,
                  'startTokenPos' => 154,
                  'startFilePos' => 2717,
                  'endTokenPos' => 154,
                  'endFilePos' => 2764,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Pending Verification Status.
 *
 * Indicates that the user account is awaiting email verification or
 * other forms of identity confirmation before full activation.
 */',
        'startLine' => 95,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
    ),
  ),
));