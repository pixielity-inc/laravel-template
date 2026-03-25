<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/Duration.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\Duration
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-1fede6f51a2101d370037f646217fea2626bc32e3ed6b7cb45081b3ad9497a79',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\Duration',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/Duration.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\Duration',
    'shortName' => 'Duration',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Enum for various time durations in seconds.
 *
 * This enum defines different time units expressed in seconds,
 * which can be used for caching, delays, or other time-related operations.
 *
 * @method static int SECOND() Returns the SECOND enum instance
 * @method static int MINUTE() Returns the MINUTE enum instance
 * @method static int HOUR() Returns the HOUR enum instance
 * @method static int DAY() Returns the DAY enum instance
 * @method static int WEEK() Returns the WEEK enum instance
 * @method static int MONTH() Returns the MONTH enum instance
 * @method static int YEAR() Returns the YEAR enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 203,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'name' => 'value',
        'modifiers' => 2177,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
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
      'second' => 
      array (
        'name' => 'second',
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
 * Get the value for one second.
 */',
        'startLine' => 81,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'seconds' => 
      array (
        'name' => 'seconds',
        'parameters' => 
        array (
          'seconds' => 
          array (
            'name' => 'seconds',
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
            'startLine' => 91,
            'endLine' => 91,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for the specified number of seconds.
 *
 * @param  int  $seconds  The number of seconds.
 */',
        'startLine' => 91,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'minute' => 
      array (
        'name' => 'minute',
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
 * Get the value for one minute.
 */',
        'startLine' => 99,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'minutes' => 
      array (
        'name' => 'minutes',
        'parameters' => 
        array (
          'minutes' => 
          array (
            'name' => 'minutes',
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
            'startLine' => 109,
            'endLine' => 109,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for the specified number of minutes.
 *
 * @param  int  $minutes  The number of minutes.
 */',
        'startLine' => 109,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'hour' => 
      array (
        'name' => 'hour',
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
 * Get the value for one hour.
 */',
        'startLine' => 117,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'hours' => 
      array (
        'name' => 'hours',
        'parameters' => 
        array (
          'hours' => 
          array (
            'name' => 'hours',
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
            'startLine' => 127,
            'endLine' => 127,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for the specified number of hours.
 *
 * @param  int  $hours  The number of hours.
 */',
        'startLine' => 127,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'day' => 
      array (
        'name' => 'day',
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
 * Get the value for one day.
 */',
        'startLine' => 135,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'days' => 
      array (
        'name' => 'days',
        'parameters' => 
        array (
          'days' => 
          array (
            'name' => 'days',
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 33,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for the specified number of days.
 *
 * @param  int  $days  The number of days.
 */',
        'startLine' => 145,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'week' => 
      array (
        'name' => 'week',
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
 * Get the value for one week (7 days).
 */',
        'startLine' => 153,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'weeks' => 
      array (
        'name' => 'weeks',
        'parameters' => 
        array (
          'weeks' => 
          array (
            'name' => 'weeks',
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
            'startLine' => 163,
            'endLine' => 163,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for the specified number of weeks.
 *
 * @param  int  $weeks  The number of weeks.
 */',
        'startLine' => 163,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'month' => 
      array (
        'name' => 'month',
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
 * Get the value for one month (30 days).
 */',
        'startLine' => 171,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'months' => 
      array (
        'name' => 'months',
        'parameters' => 
        array (
          'months' => 
          array (
            'name' => 'months',
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
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 35,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for the specified number of months.
 *
 * @param  int  $months  The number of months.
 */',
        'startLine' => 181,
        'endLine' => 184,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'year' => 
      array (
        'name' => 'year',
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
 * Get the value for one year (365 days).
 */',
        'startLine' => 189,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
      'years' => 
      array (
        'name' => 'years',
        'parameters' => 
        array (
          'years' => 
          array (
            'name' => 'years',
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
            'startLine' => 199,
            'endLine' => 199,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for the specified number of years.
 *
 * @param  int  $years  The number of years.
 */',
        'startLine' => 199,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'aliasName' => NULL,
      ),
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\Duration',
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
      'name' => 'int',
      'isIdentifier' => true,
    ),
    'cases' => 
    array (
      'SECOND' => 
      array (
        'name' => 'SECOND',
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 34,
            'endLine' => 34,
            'startTokenPos' => 68,
            'startFilePos' => 1012,
            'endTokenPos' => 68,
            'endFilePos' => 1012,
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
                'code' => '\'One Second\'',
                'attributes' => 
                array (
                  'startLine' => 32,
                  'endLine' => 32,
                  'startTokenPos' => 51,
                  'startFilePos' => 920,
                  'endTokenPos' => 51,
                  'endFilePos' => 931,
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
                'code' => '\'Represents a duration of one second.\'',
                'attributes' => 
                array (
                  'startLine' => 33,
                  'endLine' => 33,
                  'startTokenPos' => 58,
                  'startFilePos' => 953,
                  'endTokenPos' => 58,
                  'endFilePos' => 990,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Represents a time duration of one second.
 */',
        'startLine' => 32,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 20,
      ),
      'MINUTE' => 
      array (
        'name' => 'MINUTE',
        'value' => 
        array (
          'code' => '60',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 41,
            'startTokenPos' => 93,
            'startFilePos' => 1198,
            'endTokenPos' => 93,
            'endFilePos' => 1199,
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
                'code' => '\'One Minute\'',
                'attributes' => 
                array (
                  'startLine' => 39,
                  'endLine' => 39,
                  'startTokenPos' => 76,
                  'startFilePos' => 1106,
                  'endTokenPos' => 76,
                  'endFilePos' => 1117,
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
                'code' => '\'Represents a duration of one minute.\'',
                'attributes' => 
                array (
                  'startLine' => 40,
                  'endLine' => 40,
                  'startTokenPos' => 83,
                  'startFilePos' => 1139,
                  'endTokenPos' => 83,
                  'endFilePos' => 1176,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Represents a time duration of one minute (60 seconds).
 */',
        'startLine' => 39,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'HOUR' => 
      array (
        'name' => 'HOUR',
        'value' => 
        array (
          'code' => '3600',
          'attributes' => 
          array (
            'startLine' => 48,
            'endLine' => 48,
            'startTokenPos' => 118,
            'startFilePos' => 1379,
            'endTokenPos' => 118,
            'endFilePos' => 1382,
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
                'code' => '\'One Hour\'',
                'attributes' => 
                array (
                  'startLine' => 46,
                  'endLine' => 46,
                  'startTokenPos' => 101,
                  'startFilePos' => 1293,
                  'endTokenPos' => 101,
                  'endFilePos' => 1302,
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
                'code' => '\'Represents a duration of one hour.\'',
                'attributes' => 
                array (
                  'startLine' => 47,
                  'endLine' => 47,
                  'startTokenPos' => 108,
                  'startFilePos' => 1324,
                  'endTokenPos' => 108,
                  'endFilePos' => 1359,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Represents a time duration of one hour (3600 seconds).
 */',
        'startLine' => 46,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'DAY' => 
      array (
        'name' => 'DAY',
        'value' => 
        array (
          'code' => '86400',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 143,
            'startFilePos' => 1559,
            'endTokenPos' => 143,
            'endFilePos' => 1563,
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
                'code' => '\'One Day\'',
                'attributes' => 
                array (
                  'startLine' => 53,
                  'endLine' => 53,
                  'startTokenPos' => 126,
                  'startFilePos' => 1476,
                  'endTokenPos' => 126,
                  'endFilePos' => 1484,
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
                'code' => '\'Represents a duration of one day.\'',
                'attributes' => 
                array (
                  'startLine' => 54,
                  'endLine' => 54,
                  'startTokenPos' => 133,
                  'startFilePos' => 1506,
                  'endTokenPos' => 133,
                  'endFilePos' => 1540,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Represents a time duration of one day (86400 seconds).
 */',
        'startLine' => 53,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'WEEK' => 
      array (
        'name' => 'WEEK',
        'value' => 
        array (
          'code' => '604800',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 168,
            'startFilePos' => 1762,
            'endTokenPos' => 168,
            'endFilePos' => 1767,
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
                'code' => '\'One Week\'',
                'attributes' => 
                array (
                  'startLine' => 60,
                  'endLine' => 60,
                  'startTokenPos' => 151,
                  'startFilePos' => 1667,
                  'endTokenPos' => 151,
                  'endFilePos' => 1676,
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
                'code' => '\'Represents a duration of one week (7 days).\'',
                'attributes' => 
                array (
                  'startLine' => 61,
                  'endLine' => 61,
                  'startTokenPos' => 158,
                  'startFilePos' => 1698,
                  'endTokenPos' => 158,
                  'endFilePos' => 1742,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Represents a time duration of one week (604800 seconds, 7 days).
 */',
        'startLine' => 60,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'MONTH' => 
      array (
        'name' => 'MONTH',
        'value' => 
        array (
          'code' => '2592000',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 193,
            'startFilePos' => 1963,
            'endTokenPos' => 193,
            'endFilePos' => 1969,
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
                'code' => '\'One Month\'',
                'attributes' => 
                array (
                  'startLine' => 67,
                  'endLine' => 67,
                  'startTokenPos' => 176,
                  'startFilePos' => 1874,
                  'endTokenPos' => 176,
                  'endFilePos' => 1884,
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
                'code' => '\'Represents a duration of one month.\'',
                'attributes' => 
                array (
                  'startLine' => 68,
                  'endLine' => 68,
                  'startTokenPos' => 183,
                  'startFilePos' => 1906,
                  'endTokenPos' => 183,
                  'endFilePos' => 1942,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Represents a time duration of one month (2592000 seconds, 30 days).
 */',
        'startLine' => 67,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'YEAR' => 
      array (
        'name' => 'YEAR',
        'value' => 
        array (
          'code' => '31536000',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 218,
            'startFilePos' => 2163,
            'endTokenPos' => 218,
            'endFilePos' => 2170,
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
                'code' => '\'One Year\'',
                'attributes' => 
                array (
                  'startLine' => 74,
                  'endLine' => 74,
                  'startTokenPos' => 201,
                  'startFilePos' => 2077,
                  'endTokenPos' => 201,
                  'endFilePos' => 2086,
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
                'code' => '\'Represents a duration of one year.\'',
                'attributes' => 
                array (
                  'startLine' => 75,
                  'endLine' => 75,
                  'startTokenPos' => 208,
                  'startFilePos' => 2108,
                  'endTokenPos' => 208,
                  'endFilePos' => 2143,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Represents a time duration of one year (31536000 seconds, 365 days).
 */',
        'startLine' => 74,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
    ),
  ),
));