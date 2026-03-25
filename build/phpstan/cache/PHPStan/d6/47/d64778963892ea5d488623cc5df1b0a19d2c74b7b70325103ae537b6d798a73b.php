<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/CronExpression.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\CronExpression
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-6de895fb1b3a57f1d28dc444882b8b49b04d2a2ecf39a9f2e307965b5bce57da',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/CronExpression.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\CronExpression',
    'shortName' => 'CronExpression',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Enum representing various cron expressions for scheduling tasks.
 * Each value is a cron expression string that defines the scheduling pattern.
 *
 * @method static string EVERY_SECOND() Returns the EVERY_SECOND enum instance
 * @method static string EVERY_5_SECONDS() Returns the EVERY_5_SECONDS enum instance
 * @method static string EVERY_10_SECONDS() Returns the EVERY_10_SECONDS enum instance
 * @method static string EVERY_30_SECONDS() Returns the EVERY_30_SECONDS enum instance
 * @method static string EVERY_MINUTE() Returns the EVERY_MINUTE enum instance
 * @method static string EVERY_5_MINUTES() Returns the EVERY_5_MINUTES enum instance
 * @method static string EVERY_10_MINUTES() Returns the EVERY_10_MINUTES enum instance
 * @method static string EVERY_30_MINUTES() Returns the EVERY_30_MINUTES enum instance
 * @method static string EVERY_HOUR() Returns the EVERY_HOUR enum instance
 * @method static string EVERY_2_HOURS() Returns the EVERY_2_HOURS enum instance
 * @method static string EVERY_3_HOURS() Returns the EVERY_3_HOURS enum instance
 * @method static string EVERY_4_HOURS() Returns the EVERY_4_HOURS enum instance
 * @method static string EVERY_5_HOURS() Returns the EVERY_5_HOURS enum instance
 * @method static string EVERY_6_HOURS() Returns the EVERY_6_HOURS enum instance
 * @method static string EVERY_7_HOURS() Returns the EVERY_7_HOURS enum instance
 * @method static string EVERY_8_HOURS() Returns the EVERY_8_HOURS enum instance
 * @method static string EVERY_9_HOURS() Returns the EVERY_9_HOURS enum instance
 * @method static string EVERY_10_HOURS() Returns the EVERY_10_HOURS enum instance
 * @method static string EVERY_11_HOURS() Returns the EVERY_11_HOURS enum instance
 * @method static string EVERY_12_HOURS() Returns the EVERY_12_HOURS enum instance
 * @method static string EVERY_DAY_AT_1AM() Returns the EVERY_DAY_AT_1AM enum instance
 * @method static string EVERY_DAY_AT_2AM() Returns the EVERY_DAY_AT_2AM enum instance
 * @method static string EVERY_DAY_AT_3AM() Returns the EVERY_DAY_AT_3AM enum instance
 * @method static string EVERY_DAY_AT_4AM() Returns the EVERY_DAY_AT_4AM enum instance
 * @method static string EVERY_DAY_AT_5AM() Returns the EVERY_DAY_AT_5AM enum instance
 * @method static string EVERY_DAY_AT_6AM() Returns the EVERY_DAY_AT_6AM enum instance
 * @method static string EVERY_DAY_AT_7AM() Returns the EVERY_DAY_AT_7AM enum instance
 * @method static string EVERY_DAY_AT_8AM() Returns the EVERY_DAY_AT_8AM enum instance
 * @method static string EVERY_DAY_AT_9AM() Returns the EVERY_DAY_AT_9AM enum instance
 * @method static string EVERY_DAY_AT_10AM() Returns the EVERY_DAY_AT_10AM enum instance
 * @method static string EVERY_DAY_AT_11AM() Returns the EVERY_DAY_AT_11AM enum instance
 * @method static string EVERY_DAY_AT_NOON() Returns the EVERY_DAY_AT_NOON enum instance
 * @method static string EVERY_DAY_AT_1PM() Returns the EVERY_DAY_AT_1PM enum instance
 * @method static string EVERY_DAY_AT_2PM() Returns the EVERY_DAY_AT_2PM enum instance
 * @method static string EVERY_DAY_AT_3PM() Returns the EVERY_DAY_AT_3PM enum instance
 * @method static string EVERY_DAY_AT_4PM() Returns the EVERY_DAY_AT_4PM enum instance
 * @method static string EVERY_DAY_AT_5PM() Returns the EVERY_DAY_AT_5PM enum instance
 * @method static string EVERY_DAY_AT_6PM() Returns the EVERY_DAY_AT_6PM enum instance
 * @method static string EVERY_DAY_AT_7PM() Returns the EVERY_DAY_AT_7PM enum instance
 * @method static string EVERY_DAY_AT_8PM() Returns the EVERY_DAY_AT_8PM enum instance
 * @method static string EVERY_DAY_AT_9PM() Returns the EVERY_DAY_AT_9PM enum instance
 * @method static string EVERY_DAY_AT_10PM() Returns the EVERY_DAY_AT_10PM enum instance
 * @method static string EVERY_DAY_AT_11PM() Returns the EVERY_DAY_AT_11PM enum instance
 * @method static string EVERY_DAY_AT_MIDNIGHT() Returns the EVERY_DAY_AT_MIDNIGHT enum instance
 * @method static string EVERY_WEEK() Returns the EVERY_WEEK enum instance
 * @method static string EVERY_WEEKDAY() Returns the EVERY_WEEKDAY enum instance
 * @method static string EVERY_WEEKEND() Returns the EVERY_WEEKEND enum instance
 * @method static string EVERY_1ST_DAY_OF_MONTH_AT_MIDNIGHT() Returns the EVERY_1ST_DAY_OF_MONTH_AT_MIDNIGHT enum instance
 * @method static string EVERY_1ST_DAY_OF_MONTH_AT_NOON() Returns the EVERY_1ST_DAY_OF_MONTH_AT_NOON enum instance
 * @method static string EVERY_2ND_HOUR() Returns the EVERY_2ND_HOUR enum instance
 * @method static string EVERY_2ND_HOUR_FROM_1AM_THROUGH_11PM() Returns the EVERY_2ND_HOUR_FROM_1AM_THROUGH_11PM enum instance
 * @method static string EVERY_2ND_MONTH() Returns the EVERY_2ND_MONTH enum instance
 * @method static string EVERY_QUARTER() Returns the EVERY_QUARTER enum instance
 * @method static string EVERY_6_MONTHS() Returns the EVERY_6_MONTHS enum instance
 * @method static string EVERY_YEAR() Returns the EVERY_YEAR enum instance
 * @method static string EVERY_30_MINUTES_BETWEEN_9AM_AND_5PM() Returns the EVERY_30_MINUTES_BETWEEN_9AM_AND_5PM enum instance
 * @method static string EVERY_30_MINUTES_BETWEEN_9AM_AND_6PM() Returns the EVERY_30_MINUTES_BETWEEN_9AM_AND_6PM enum instance
 * @method static string EVERY_30_MINUTES_BETWEEN_10AM_AND_7PM() Returns the EVERY_30_MINUTES_BETWEEN_10AM_AND_7PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_1AM() Returns the MONDAY_TO_FRIDAY_AT_1AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_2AM() Returns the MONDAY_TO_FRIDAY_AT_2AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_3AM() Returns the MONDAY_TO_FRIDAY_AT_3AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_4AM() Returns the MONDAY_TO_FRIDAY_AT_4AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_5AM() Returns the MONDAY_TO_FRIDAY_AT_5AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_6AM() Returns the MONDAY_TO_FRIDAY_AT_6AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_7AM() Returns the MONDAY_TO_FRIDAY_AT_7AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_8AM() Returns the MONDAY_TO_FRIDAY_AT_8AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_9AM() Returns the MONDAY_TO_FRIDAY_AT_9AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_10AM() Returns the MONDAY_TO_FRIDAY_AT_10AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_11AM() Returns the MONDAY_TO_FRIDAY_AT_11AM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_NOON() Returns the MONDAY_TO_FRIDAY_AT_NOON enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_1PM() Returns the MONDAY_TO_FRIDAY_AT_1PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_2PM() Returns the MONDAY_TO_FRIDAY_AT_2PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_3PM() Returns the MONDAY_TO_FRIDAY_AT_3PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_4PM() Returns the MONDAY_TO_FRIDAY_AT_4PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_5PM() Returns the MONDAY_TO_FRIDAY_AT_5PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_6PM() Returns the MONDAY_TO_FRIDAY_AT_6PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_7PM() Returns the MONDAY_TO_FRIDAY_AT_7PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_8PM() Returns the MONDAY_TO_FRIDAY_AT_8PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_9PM() Returns the MONDAY_TO_FRIDAY_AT_9PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_10PM() Returns the MONDAY_TO_FRIDAY_AT_10PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_11PM() Returns the MONDAY_TO_FRIDAY_AT_11PM enum instance
 * @method static string MONDAY_TO_FRIDAY_AT_MIDNIGHT() Returns the MONDAY_TO_FRIDAY_AT_MIDNIGHT enum instance
 * @method static string EVERY_SATURDAY_AT_MIDNIGHT() Returns the EVERY_SATURDAY_AT_MIDNIGHT enum instance
 * @method static string EVERY_SUNDAY_AT_MIDNIGHT() Returns the EVERY_SUNDAY_AT_MIDNIGHT enum instance
 * @method static string EVERY_WEEKEND_AT_MIDNIGHT() Returns the EVERY_WEEKEND_AT_MIDNIGHT enum instance
 * @method static string EVERY_DAY_AT_2_30PM() Returns the EVERY_DAY_AT_2_30PM enum instance
 * @method static string EVERY_WEEKDAY_AT_2_30PM() Returns the EVERY_WEEKDAY_AT_2_30PM enum instance
 * @method static string EVERY_WEEKDAY_AT_8_45AM() Returns the EVERY_WEEKDAY_AT_8_45AM enum instance
 * @method static string EVERY_15TH_DAY_OF_MONTH_AT_3PM() Returns the EVERY_15TH_DAY_OF_MONTH_AT_3PM enum instance
 * @method static string EVERY_HOUR_BETWEEN_8AM_AND_6PM_ON_WEEKDAYS() Returns the EVERY_HOUR_BETWEEN_8AM_AND_6PM_ON_WEEKDAYS enum instance
 * @method static string EVERY_15_MINUTES() Returns the EVERY_15_MINUTES enum instance
 * @method static string EVERY_20_MINUTES() Returns the EVERY_20_MINUTES enum instance
 * @method static string EVERY_45_MINUTES() Returns the EVERY_45_MINUTES enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 109,
    'endLine' => 763,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\CronExpression',
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
      'EVERY_SECOND' => 
      array (
        'name' => 'EVERY_SECOND',
        'value' => 
        array (
          'code' => '\'* * * * *\'',
          'attributes' => 
          array (
            'startLine' => 118,
            'endLine' => 118,
            'startTokenPos' => 68,
            'startFilePos' => 9270,
            'endTokenPos' => 68,
            'endFilePos' => 9280,
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
                'code' => '\'Every Second\'',
                'attributes' => 
                array (
                  'startLine' => 116,
                  'endLine' => 116,
                  'startTokenPos' => 51,
                  'startFilePos' => 9156,
                  'endTokenPos' => 51,
                  'endFilePos' => 9169,
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
                'code' => '\'Cron expression for executing a task every second.\'',
                'attributes' => 
                array (
                  'startLine' => 117,
                  'endLine' => 117,
                  'startTokenPos' => 58,
                  'startFilePos' => 9191,
                  'endTokenPos' => 58,
                  'endFilePos' => 9242,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every second.
 */',
        'startLine' => 116,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'EVERY_5_SECONDS' => 
      array (
        'name' => 'EVERY_5_SECONDS',
        'value' => 
        array (
          'code' => '\'*/5 * * * *\'',
          'attributes' => 
          array (
            'startLine' => 125,
            'endLine' => 125,
            'startTokenPos' => 93,
            'startFilePos' => 9468,
            'endTokenPos' => 93,
            'endFilePos' => 9480,
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
                'code' => '\'Every 5 Seconds\'',
                'attributes' => 
                array (
                  'startLine' => 123,
                  'endLine' => 123,
                  'startTokenPos' => 76,
                  'startFilePos' => 9345,
                  'endTokenPos' => 76,
                  'endFilePos' => 9361,
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
                'code' => '\'Cron expression for executing a task every 5 seconds.\'',
                'attributes' => 
                array (
                  'startLine' => 124,
                  'endLine' => 124,
                  'startTokenPos' => 83,
                  'startFilePos' => 9383,
                  'endTokenPos' => 83,
                  'endFilePos' => 9437,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 5 seconds.
 */',
        'startLine' => 123,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'EVERY_10_SECONDS' => 
      array (
        'name' => 'EVERY_10_SECONDS',
        'value' => 
        array (
          'code' => '\'*/10 * * * *\'',
          'attributes' => 
          array (
            'startLine' => 132,
            'endLine' => 132,
            'startTokenPos' => 118,
            'startFilePos' => 9672,
            'endTokenPos' => 118,
            'endFilePos' => 9685,
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
                'code' => '\'Every 10 Seconds\'',
                'attributes' => 
                array (
                  'startLine' => 130,
                  'endLine' => 130,
                  'startTokenPos' => 101,
                  'startFilePos' => 9546,
                  'endTokenPos' => 101,
                  'endFilePos' => 9563,
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
                'code' => '\'Cron expression for executing a task every 10 seconds.\'',
                'attributes' => 
                array (
                  'startLine' => 131,
                  'endLine' => 131,
                  'startTokenPos' => 108,
                  'startFilePos' => 9585,
                  'endTokenPos' => 108,
                  'endFilePos' => 9640,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 10 seconds.
 */',
        'startLine' => 130,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'EVERY_30_SECONDS' => 
      array (
        'name' => 'EVERY_30_SECONDS',
        'value' => 
        array (
          'code' => '\'*/30 * * * *\'',
          'attributes' => 
          array (
            'startLine' => 139,
            'endLine' => 139,
            'startTokenPos' => 143,
            'startFilePos' => 9877,
            'endTokenPos' => 143,
            'endFilePos' => 9890,
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
                'code' => '\'Every 30 Seconds\'',
                'attributes' => 
                array (
                  'startLine' => 137,
                  'endLine' => 137,
                  'startTokenPos' => 126,
                  'startFilePos' => 9751,
                  'endTokenPos' => 126,
                  'endFilePos' => 9768,
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
                'code' => '\'Cron expression for executing a task every 30 seconds.\'',
                'attributes' => 
                array (
                  'startLine' => 138,
                  'endLine' => 138,
                  'startTokenPos' => 133,
                  'startFilePos' => 9790,
                  'endTokenPos' => 133,
                  'endFilePos' => 9845,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 30 seconds.
 */',
        'startLine' => 137,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'EVERY_MINUTE' => 
      array (
        'name' => 'EVERY_MINUTE',
        'value' => 
        array (
          'code' => '\'*/1 * * *\'',
          'attributes' => 
          array (
            'startLine' => 146,
            'endLine' => 146,
            'startTokenPos' => 168,
            'startFilePos' => 10066,
            'endTokenPos' => 168,
            'endFilePos' => 10076,
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
                'code' => '\'Every Minute\'',
                'attributes' => 
                array (
                  'startLine' => 144,
                  'endLine' => 144,
                  'startTokenPos' => 151,
                  'startFilePos' => 9952,
                  'endTokenPos' => 151,
                  'endFilePos' => 9965,
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
                'code' => '\'Cron expression for executing a task every minute.\'',
                'attributes' => 
                array (
                  'startLine' => 145,
                  'endLine' => 145,
                  'startTokenPos' => 158,
                  'startFilePos' => 9987,
                  'endTokenPos' => 158,
                  'endFilePos' => 10038,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every minute.
 */',
        'startLine' => 144,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'EVERY_5_MINUTES' => 
      array (
        'name' => 'EVERY_5_MINUTES',
        'value' => 
        array (
          'code' => '\'0 */5 * * *\'',
          'attributes' => 
          array (
            'startLine' => 153,
            'endLine' => 153,
            'startTokenPos' => 193,
            'startFilePos' => 10264,
            'endTokenPos' => 193,
            'endFilePos' => 10276,
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
                'code' => '\'Every 5 Minutes\'',
                'attributes' => 
                array (
                  'startLine' => 151,
                  'endLine' => 151,
                  'startTokenPos' => 176,
                  'startFilePos' => 10141,
                  'endTokenPos' => 176,
                  'endFilePos' => 10157,
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
                'code' => '\'Cron expression for executing a task every 5 minutes.\'',
                'attributes' => 
                array (
                  'startLine' => 152,
                  'endLine' => 152,
                  'startTokenPos' => 183,
                  'startFilePos' => 10179,
                  'endTokenPos' => 183,
                  'endFilePos' => 10233,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 5 minutes.
 */',
        'startLine' => 151,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'EVERY_10_MINUTES' => 
      array (
        'name' => 'EVERY_10_MINUTES',
        'value' => 
        array (
          'code' => '\'0 */10 * * *\'',
          'attributes' => 
          array (
            'startLine' => 160,
            'endLine' => 160,
            'startTokenPos' => 218,
            'startFilePos' => 10468,
            'endTokenPos' => 218,
            'endFilePos' => 10481,
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
                'code' => '\'Every 10 Minutes\'',
                'attributes' => 
                array (
                  'startLine' => 158,
                  'endLine' => 158,
                  'startTokenPos' => 201,
                  'startFilePos' => 10342,
                  'endTokenPos' => 201,
                  'endFilePos' => 10359,
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
                'code' => '\'Cron expression for executing a task every 10 minutes.\'',
                'attributes' => 
                array (
                  'startLine' => 159,
                  'endLine' => 159,
                  'startTokenPos' => 208,
                  'startFilePos' => 10381,
                  'endTokenPos' => 208,
                  'endFilePos' => 10436,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 10 minutes.
 */',
        'startLine' => 158,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'EVERY_30_MINUTES' => 
      array (
        'name' => 'EVERY_30_MINUTES',
        'value' => 
        array (
          'code' => '\'0 */30 * * *\'',
          'attributes' => 
          array (
            'startLine' => 167,
            'endLine' => 167,
            'startTokenPos' => 243,
            'startFilePos' => 10673,
            'endTokenPos' => 243,
            'endFilePos' => 10686,
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
                'code' => '\'Every 30 Minutes\'',
                'attributes' => 
                array (
                  'startLine' => 165,
                  'endLine' => 165,
                  'startTokenPos' => 226,
                  'startFilePos' => 10547,
                  'endTokenPos' => 226,
                  'endFilePos' => 10564,
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
                'code' => '\'Cron expression for executing a task every 30 minutes.\'',
                'attributes' => 
                array (
                  'startLine' => 166,
                  'endLine' => 166,
                  'startTokenPos' => 233,
                  'startFilePos' => 10586,
                  'endTokenPos' => 233,
                  'endFilePos' => 10641,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 30 minutes.
 */',
        'startLine' => 165,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'EVERY_HOUR' => 
      array (
        'name' => 'EVERY_HOUR',
        'value' => 
        array (
          'code' => '\'0 0-23/1 * *\'',
          'attributes' => 
          array (
            'startLine' => 174,
            'endLine' => 174,
            'startTokenPos' => 268,
            'startFilePos' => 10854,
            'endTokenPos' => 268,
            'endFilePos' => 10867,
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
                'code' => '\'Every Hour\'',
                'attributes' => 
                array (
                  'startLine' => 172,
                  'endLine' => 172,
                  'startTokenPos' => 251,
                  'startFilePos' => 10746,
                  'endTokenPos' => 251,
                  'endFilePos' => 10757,
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
                'code' => '\'Cron expression for executing a task every hour.\'',
                'attributes' => 
                array (
                  'startLine' => 173,
                  'endLine' => 173,
                  'startTokenPos' => 258,
                  'startFilePos' => 10779,
                  'endTokenPos' => 258,
                  'endFilePos' => 10828,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every hour.
 */',
        'startLine' => 172,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 37,
      ),
      'EVERY_2_HOURS' => 
      array (
        'name' => 'EVERY_2_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/2 * *\'',
          'attributes' => 
          array (
            'startLine' => 181,
            'endLine' => 181,
            'startTokenPos' => 293,
            'startFilePos' => 11047,
            'endTokenPos' => 293,
            'endFilePos' => 11060,
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
                'code' => '\'Every 2 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 179,
                  'endLine' => 179,
                  'startTokenPos' => 276,
                  'startFilePos' => 10930,
                  'endTokenPos' => 276,
                  'endFilePos' => 10944,
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
                'code' => '\'Cron expression for executing a task every 2 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 180,
                  'endLine' => 180,
                  'startTokenPos' => 283,
                  'startFilePos' => 10966,
                  'endTokenPos' => 283,
                  'endFilePos' => 11018,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 2 hours.
 */',
        'startLine' => 179,
        'endLine' => 181,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_3_HOURS' => 
      array (
        'name' => 'EVERY_3_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/3 * *\'',
          'attributes' => 
          array (
            'startLine' => 188,
            'endLine' => 188,
            'startTokenPos' => 318,
            'startFilePos' => 11240,
            'endTokenPos' => 318,
            'endFilePos' => 11253,
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
                'code' => '\'Every 3 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 186,
                  'endLine' => 186,
                  'startTokenPos' => 301,
                  'startFilePos' => 11123,
                  'endTokenPos' => 301,
                  'endFilePos' => 11137,
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
                'code' => '\'Cron expression for executing a task every 3 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 187,
                  'endLine' => 187,
                  'startTokenPos' => 308,
                  'startFilePos' => 11159,
                  'endTokenPos' => 308,
                  'endFilePos' => 11211,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 3 hours.
 */',
        'startLine' => 186,
        'endLine' => 188,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_4_HOURS' => 
      array (
        'name' => 'EVERY_4_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/4 * *\'',
          'attributes' => 
          array (
            'startLine' => 195,
            'endLine' => 195,
            'startTokenPos' => 343,
            'startFilePos' => 11433,
            'endTokenPos' => 343,
            'endFilePos' => 11446,
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
                'code' => '\'Every 4 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 193,
                  'endLine' => 193,
                  'startTokenPos' => 326,
                  'startFilePos' => 11316,
                  'endTokenPos' => 326,
                  'endFilePos' => 11330,
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
                'code' => '\'Cron expression for executing a task every 4 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 194,
                  'endLine' => 194,
                  'startTokenPos' => 333,
                  'startFilePos' => 11352,
                  'endTokenPos' => 333,
                  'endFilePos' => 11404,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 4 hours.
 */',
        'startLine' => 193,
        'endLine' => 195,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_5_HOURS' => 
      array (
        'name' => 'EVERY_5_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/5 * *\'',
          'attributes' => 
          array (
            'startLine' => 202,
            'endLine' => 202,
            'startTokenPos' => 368,
            'startFilePos' => 11626,
            'endTokenPos' => 368,
            'endFilePos' => 11639,
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
                'code' => '\'Every 5 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 200,
                  'endLine' => 200,
                  'startTokenPos' => 351,
                  'startFilePos' => 11509,
                  'endTokenPos' => 351,
                  'endFilePos' => 11523,
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
                'code' => '\'Cron expression for executing a task every 5 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 201,
                  'endLine' => 201,
                  'startTokenPos' => 358,
                  'startFilePos' => 11545,
                  'endTokenPos' => 358,
                  'endFilePos' => 11597,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 5 hours.
 */',
        'startLine' => 200,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_6_HOURS' => 
      array (
        'name' => 'EVERY_6_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/6 * *\'',
          'attributes' => 
          array (
            'startLine' => 209,
            'endLine' => 209,
            'startTokenPos' => 393,
            'startFilePos' => 11819,
            'endTokenPos' => 393,
            'endFilePos' => 11832,
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
                'code' => '\'Every 6 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 207,
                  'endLine' => 207,
                  'startTokenPos' => 376,
                  'startFilePos' => 11702,
                  'endTokenPos' => 376,
                  'endFilePos' => 11716,
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
                'code' => '\'Cron expression for executing a task every 6 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 208,
                  'endLine' => 208,
                  'startTokenPos' => 383,
                  'startFilePos' => 11738,
                  'endTokenPos' => 383,
                  'endFilePos' => 11790,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 6 hours.
 */',
        'startLine' => 207,
        'endLine' => 209,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_7_HOURS' => 
      array (
        'name' => 'EVERY_7_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/7 * *\'',
          'attributes' => 
          array (
            'startLine' => 216,
            'endLine' => 216,
            'startTokenPos' => 418,
            'startFilePos' => 12012,
            'endTokenPos' => 418,
            'endFilePos' => 12025,
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
                'code' => '\'Every 7 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 214,
                  'endLine' => 214,
                  'startTokenPos' => 401,
                  'startFilePos' => 11895,
                  'endTokenPos' => 401,
                  'endFilePos' => 11909,
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
                'code' => '\'Cron expression for executing a task every 7 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 215,
                  'endLine' => 215,
                  'startTokenPos' => 408,
                  'startFilePos' => 11931,
                  'endTokenPos' => 408,
                  'endFilePos' => 11983,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 7 hours.
 */',
        'startLine' => 214,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_8_HOURS' => 
      array (
        'name' => 'EVERY_8_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/8 * *\'',
          'attributes' => 
          array (
            'startLine' => 223,
            'endLine' => 223,
            'startTokenPos' => 443,
            'startFilePos' => 12205,
            'endTokenPos' => 443,
            'endFilePos' => 12218,
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
                'code' => '\'Every 8 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 221,
                  'endLine' => 221,
                  'startTokenPos' => 426,
                  'startFilePos' => 12088,
                  'endTokenPos' => 426,
                  'endFilePos' => 12102,
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
                'code' => '\'Cron expression for executing a task every 8 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 222,
                  'endLine' => 222,
                  'startTokenPos' => 433,
                  'startFilePos' => 12124,
                  'endTokenPos' => 433,
                  'endFilePos' => 12176,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 8 hours.
 */',
        'startLine' => 221,
        'endLine' => 223,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_9_HOURS' => 
      array (
        'name' => 'EVERY_9_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/9 * *\'',
          'attributes' => 
          array (
            'startLine' => 230,
            'endLine' => 230,
            'startTokenPos' => 468,
            'startFilePos' => 12398,
            'endTokenPos' => 468,
            'endFilePos' => 12411,
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
                'code' => '\'Every 9 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 228,
                  'endLine' => 228,
                  'startTokenPos' => 451,
                  'startFilePos' => 12281,
                  'endTokenPos' => 451,
                  'endFilePos' => 12295,
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
                'code' => '\'Cron expression for executing a task every 9 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 229,
                  'endLine' => 229,
                  'startTokenPos' => 458,
                  'startFilePos' => 12317,
                  'endTokenPos' => 458,
                  'endFilePos' => 12369,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 9 hours.
 */',
        'startLine' => 228,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_10_HOURS' => 
      array (
        'name' => 'EVERY_10_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/10 * *\'',
          'attributes' => 
          array (
            'startLine' => 237,
            'endLine' => 237,
            'startTokenPos' => 493,
            'startFilePos' => 12595,
            'endTokenPos' => 493,
            'endFilePos' => 12609,
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
                'code' => '\'Every 10 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 235,
                  'endLine' => 235,
                  'startTokenPos' => 476,
                  'startFilePos' => 12475,
                  'endTokenPos' => 476,
                  'endFilePos' => 12490,
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
                'code' => '\'Cron expression for executing a task every 10 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 236,
                  'endLine' => 236,
                  'startTokenPos' => 483,
                  'startFilePos' => 12512,
                  'endTokenPos' => 483,
                  'endFilePos' => 12565,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 10 hours.
 */',
        'startLine' => 235,
        'endLine' => 237,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
      'EVERY_11_HOURS' => 
      array (
        'name' => 'EVERY_11_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/11 * *\'',
          'attributes' => 
          array (
            'startLine' => 244,
            'endLine' => 244,
            'startTokenPos' => 518,
            'startFilePos' => 12793,
            'endTokenPos' => 518,
            'endFilePos' => 12807,
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
                'code' => '\'Every 11 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 242,
                  'endLine' => 242,
                  'startTokenPos' => 501,
                  'startFilePos' => 12673,
                  'endTokenPos' => 501,
                  'endFilePos' => 12688,
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
                'code' => '\'Cron expression for executing a task every 11 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 243,
                  'endLine' => 243,
                  'startTokenPos' => 508,
                  'startFilePos' => 12710,
                  'endTokenPos' => 508,
                  'endFilePos' => 12763,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 11 hours.
 */',
        'startLine' => 242,
        'endLine' => 244,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
      'EVERY_12_HOURS' => 
      array (
        'name' => 'EVERY_12_HOURS',
        'value' => 
        array (
          'code' => '\'0 0-23/12 * *\'',
          'attributes' => 
          array (
            'startLine' => 251,
            'endLine' => 251,
            'startTokenPos' => 543,
            'startFilePos' => 12991,
            'endTokenPos' => 543,
            'endFilePos' => 13005,
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
                'code' => '\'Every 12 Hours\'',
                'attributes' => 
                array (
                  'startLine' => 249,
                  'endLine' => 249,
                  'startTokenPos' => 526,
                  'startFilePos' => 12871,
                  'endTokenPos' => 526,
                  'endFilePos' => 12886,
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
                'code' => '\'Cron expression for executing a task every 12 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 250,
                  'endLine' => 250,
                  'startTokenPos' => 533,
                  'startFilePos' => 12908,
                  'endTokenPos' => 533,
                  'endFilePos' => 12961,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 12 hours.
 */',
        'startLine' => 249,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 42,
      ),
      'EVERY_DAY_AT_1AM' => 
      array (
        'name' => 'EVERY_DAY_AT_1AM',
        'value' => 
        array (
          'code' => '\'0 01 * *\'',
          'attributes' => 
          array (
            'startLine' => 258,
            'endLine' => 258,
            'startTokenPos' => 568,
            'startFilePos' => 13200,
            'endTokenPos' => 568,
            'endFilePos' => 13209,
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
                'code' => '\'Every Day at 1 AM\'',
                'attributes' => 
                array (
                  'startLine' => 256,
                  'endLine' => 256,
                  'startTokenPos' => 551,
                  'startFilePos' => 13072,
                  'endTokenPos' => 551,
                  'endFilePos' => 13090,
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
                'code' => '\'Cron expression for executing a task every day at 1 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 257,
                  'endLine' => 257,
                  'startTokenPos' => 558,
                  'startFilePos' => 13112,
                  'endTokenPos' => 558,
                  'endFilePos' => 13168,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 1 AM.
 */',
        'startLine' => 256,
        'endLine' => 258,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_2AM' => 
      array (
        'name' => 'EVERY_DAY_AT_2AM',
        'value' => 
        array (
          'code' => '\'0 02 * *\'',
          'attributes' => 
          array (
            'startLine' => 265,
            'endLine' => 265,
            'startTokenPos' => 593,
            'startFilePos' => 13404,
            'endTokenPos' => 593,
            'endFilePos' => 13413,
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
                'code' => '\'Every Day at 2 AM\'',
                'attributes' => 
                array (
                  'startLine' => 263,
                  'endLine' => 263,
                  'startTokenPos' => 576,
                  'startFilePos' => 13276,
                  'endTokenPos' => 576,
                  'endFilePos' => 13294,
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
                'code' => '\'Cron expression for executing a task every day at 2 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 264,
                  'endLine' => 264,
                  'startTokenPos' => 583,
                  'startFilePos' => 13316,
                  'endTokenPos' => 583,
                  'endFilePos' => 13372,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 2 AM.
 */',
        'startLine' => 263,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_3AM' => 
      array (
        'name' => 'EVERY_DAY_AT_3AM',
        'value' => 
        array (
          'code' => '\'0 03 * *\'',
          'attributes' => 
          array (
            'startLine' => 272,
            'endLine' => 272,
            'startTokenPos' => 618,
            'startFilePos' => 13608,
            'endTokenPos' => 618,
            'endFilePos' => 13617,
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
                'code' => '\'Every Day at 3 AM\'',
                'attributes' => 
                array (
                  'startLine' => 270,
                  'endLine' => 270,
                  'startTokenPos' => 601,
                  'startFilePos' => 13480,
                  'endTokenPos' => 601,
                  'endFilePos' => 13498,
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
                'code' => '\'Cron expression for executing a task every day at 3 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 271,
                  'endLine' => 271,
                  'startTokenPos' => 608,
                  'startFilePos' => 13520,
                  'endTokenPos' => 608,
                  'endFilePos' => 13576,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 3 AM.
 */',
        'startLine' => 270,
        'endLine' => 272,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_4AM' => 
      array (
        'name' => 'EVERY_DAY_AT_4AM',
        'value' => 
        array (
          'code' => '\'0 04 * *\'',
          'attributes' => 
          array (
            'startLine' => 279,
            'endLine' => 279,
            'startTokenPos' => 643,
            'startFilePos' => 13812,
            'endTokenPos' => 643,
            'endFilePos' => 13821,
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
                'code' => '\'Every Day at 4 AM\'',
                'attributes' => 
                array (
                  'startLine' => 277,
                  'endLine' => 277,
                  'startTokenPos' => 626,
                  'startFilePos' => 13684,
                  'endTokenPos' => 626,
                  'endFilePos' => 13702,
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
                'code' => '\'Cron expression for executing a task every day at 4 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 278,
                  'endLine' => 278,
                  'startTokenPos' => 633,
                  'startFilePos' => 13724,
                  'endTokenPos' => 633,
                  'endFilePos' => 13780,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 4 AM.
 */',
        'startLine' => 277,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_5AM' => 
      array (
        'name' => 'EVERY_DAY_AT_5AM',
        'value' => 
        array (
          'code' => '\'0 05 * *\'',
          'attributes' => 
          array (
            'startLine' => 286,
            'endLine' => 286,
            'startTokenPos' => 668,
            'startFilePos' => 14016,
            'endTokenPos' => 668,
            'endFilePos' => 14025,
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
                'code' => '\'Every Day at 5 AM\'',
                'attributes' => 
                array (
                  'startLine' => 284,
                  'endLine' => 284,
                  'startTokenPos' => 651,
                  'startFilePos' => 13888,
                  'endTokenPos' => 651,
                  'endFilePos' => 13906,
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
                'code' => '\'Cron expression for executing a task every day at 5 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 285,
                  'endLine' => 285,
                  'startTokenPos' => 658,
                  'startFilePos' => 13928,
                  'endTokenPos' => 658,
                  'endFilePos' => 13984,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 5 AM.
 */',
        'startLine' => 284,
        'endLine' => 286,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_6AM' => 
      array (
        'name' => 'EVERY_DAY_AT_6AM',
        'value' => 
        array (
          'code' => '\'0 06 * *\'',
          'attributes' => 
          array (
            'startLine' => 293,
            'endLine' => 293,
            'startTokenPos' => 693,
            'startFilePos' => 14220,
            'endTokenPos' => 693,
            'endFilePos' => 14229,
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
                'code' => '\'Every Day at 6 AM\'',
                'attributes' => 
                array (
                  'startLine' => 291,
                  'endLine' => 291,
                  'startTokenPos' => 676,
                  'startFilePos' => 14092,
                  'endTokenPos' => 676,
                  'endFilePos' => 14110,
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
                'code' => '\'Cron expression for executing a task every day at 6 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 292,
                  'endLine' => 292,
                  'startTokenPos' => 683,
                  'startFilePos' => 14132,
                  'endTokenPos' => 683,
                  'endFilePos' => 14188,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 6 AM.
 */',
        'startLine' => 291,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_7AM' => 
      array (
        'name' => 'EVERY_DAY_AT_7AM',
        'value' => 
        array (
          'code' => '\'0 07 * *\'',
          'attributes' => 
          array (
            'startLine' => 300,
            'endLine' => 300,
            'startTokenPos' => 718,
            'startFilePos' => 14424,
            'endTokenPos' => 718,
            'endFilePos' => 14433,
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
                'code' => '\'Every Day at 7 AM\'',
                'attributes' => 
                array (
                  'startLine' => 298,
                  'endLine' => 298,
                  'startTokenPos' => 701,
                  'startFilePos' => 14296,
                  'endTokenPos' => 701,
                  'endFilePos' => 14314,
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
                'code' => '\'Cron expression for executing a task every day at 7 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 299,
                  'endLine' => 299,
                  'startTokenPos' => 708,
                  'startFilePos' => 14336,
                  'endTokenPos' => 708,
                  'endFilePos' => 14392,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 7 AM.
 */',
        'startLine' => 298,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_8AM' => 
      array (
        'name' => 'EVERY_DAY_AT_8AM',
        'value' => 
        array (
          'code' => '\'0 08 * *\'',
          'attributes' => 
          array (
            'startLine' => 307,
            'endLine' => 307,
            'startTokenPos' => 743,
            'startFilePos' => 14628,
            'endTokenPos' => 743,
            'endFilePos' => 14637,
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
                'code' => '\'Every Day at 8 AM\'',
                'attributes' => 
                array (
                  'startLine' => 305,
                  'endLine' => 305,
                  'startTokenPos' => 726,
                  'startFilePos' => 14500,
                  'endTokenPos' => 726,
                  'endFilePos' => 14518,
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
                'code' => '\'Cron expression for executing a task every day at 8 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 306,
                  'endLine' => 306,
                  'startTokenPos' => 733,
                  'startFilePos' => 14540,
                  'endTokenPos' => 733,
                  'endFilePos' => 14596,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 8 AM.
 */',
        'startLine' => 305,
        'endLine' => 307,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_9AM' => 
      array (
        'name' => 'EVERY_DAY_AT_9AM',
        'value' => 
        array (
          'code' => '\'0 09 * *\'',
          'attributes' => 
          array (
            'startLine' => 314,
            'endLine' => 314,
            'startTokenPos' => 768,
            'startFilePos' => 14832,
            'endTokenPos' => 768,
            'endFilePos' => 14841,
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
                'code' => '\'Every Day at 9 AM\'',
                'attributes' => 
                array (
                  'startLine' => 312,
                  'endLine' => 312,
                  'startTokenPos' => 751,
                  'startFilePos' => 14704,
                  'endTokenPos' => 751,
                  'endFilePos' => 14722,
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
                'code' => '\'Cron expression for executing a task every day at 9 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 313,
                  'endLine' => 313,
                  'startTokenPos' => 758,
                  'startFilePos' => 14744,
                  'endTokenPos' => 758,
                  'endFilePos' => 14800,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 9 AM.
 */',
        'startLine' => 312,
        'endLine' => 314,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_10AM' => 
      array (
        'name' => 'EVERY_DAY_AT_10AM',
        'value' => 
        array (
          'code' => '\'0 10 * *\'',
          'attributes' => 
          array (
            'startLine' => 321,
            'endLine' => 321,
            'startTokenPos' => 793,
            'startFilePos' => 15040,
            'endTokenPos' => 793,
            'endFilePos' => 15049,
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
                'code' => '\'Every Day at 10 AM\'',
                'attributes' => 
                array (
                  'startLine' => 319,
                  'endLine' => 319,
                  'startTokenPos' => 776,
                  'startFilePos' => 14909,
                  'endTokenPos' => 776,
                  'endFilePos' => 14928,
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
                'code' => '\'Cron expression for executing a task every day at 10 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 320,
                  'endLine' => 320,
                  'startTokenPos' => 783,
                  'startFilePos' => 14950,
                  'endTokenPos' => 783,
                  'endFilePos' => 15007,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 10 AM.
 */',
        'startLine' => 319,
        'endLine' => 321,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_DAY_AT_11AM' => 
      array (
        'name' => 'EVERY_DAY_AT_11AM',
        'value' => 
        array (
          'code' => '\'0 11 * *\'',
          'attributes' => 
          array (
            'startLine' => 328,
            'endLine' => 328,
            'startTokenPos' => 818,
            'startFilePos' => 15248,
            'endTokenPos' => 818,
            'endFilePos' => 15257,
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
                'code' => '\'Every Day at 11 AM\'',
                'attributes' => 
                array (
                  'startLine' => 326,
                  'endLine' => 326,
                  'startTokenPos' => 801,
                  'startFilePos' => 15117,
                  'endTokenPos' => 801,
                  'endFilePos' => 15136,
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
                'code' => '\'Cron expression for executing a task every day at 11 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 327,
                  'endLine' => 327,
                  'startTokenPos' => 808,
                  'startFilePos' => 15158,
                  'endTokenPos' => 808,
                  'endFilePos' => 15215,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 11 AM.
 */',
        'startLine' => 326,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_DAY_AT_NOON' => 
      array (
        'name' => 'EVERY_DAY_AT_NOON',
        'value' => 
        array (
          'code' => '\'0 12 * *\'',
          'attributes' => 
          array (
            'startLine' => 335,
            'endLine' => 335,
            'startTokenPos' => 843,
            'startFilePos' => 15469,
            'endTokenPos' => 843,
            'endFilePos' => 15478,
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
                'code' => '\'Every Day at Noon\'',
                'attributes' => 
                array (
                  'startLine' => 333,
                  'endLine' => 333,
                  'startTokenPos' => 826,
                  'startFilePos' => 15332,
                  'endTokenPos' => 826,
                  'endFilePos' => 15350,
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
                'code' => '\'Cron expression for executing a task every day at noon (12 PM).\'',
                'attributes' => 
                array (
                  'startLine' => 334,
                  'endLine' => 334,
                  'startTokenPos' => 833,
                  'startFilePos' => 15372,
                  'endTokenPos' => 833,
                  'endFilePos' => 15436,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at noon (12 PM).
 */',
        'startLine' => 333,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_DAY_AT_1PM' => 
      array (
        'name' => 'EVERY_DAY_AT_1PM',
        'value' => 
        array (
          'code' => '\'0 13 * *\'',
          'attributes' => 
          array (
            'startLine' => 342,
            'endLine' => 342,
            'startTokenPos' => 868,
            'startFilePos' => 15673,
            'endTokenPos' => 868,
            'endFilePos' => 15682,
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
                'code' => '\'Every Day at 1 PM\'',
                'attributes' => 
                array (
                  'startLine' => 340,
                  'endLine' => 340,
                  'startTokenPos' => 851,
                  'startFilePos' => 15545,
                  'endTokenPos' => 851,
                  'endFilePos' => 15563,
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
                'code' => '\'Cron expression for executing a task every day at 1 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 341,
                  'endLine' => 341,
                  'startTokenPos' => 858,
                  'startFilePos' => 15585,
                  'endTokenPos' => 858,
                  'endFilePos' => 15641,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 1 PM.
 */',
        'startLine' => 340,
        'endLine' => 342,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_2PM' => 
      array (
        'name' => 'EVERY_DAY_AT_2PM',
        'value' => 
        array (
          'code' => '\'0 14 * *\'',
          'attributes' => 
          array (
            'startLine' => 349,
            'endLine' => 349,
            'startTokenPos' => 893,
            'startFilePos' => 15877,
            'endTokenPos' => 893,
            'endFilePos' => 15886,
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
                'code' => '\'Every Day at 2 PM\'',
                'attributes' => 
                array (
                  'startLine' => 347,
                  'endLine' => 347,
                  'startTokenPos' => 876,
                  'startFilePos' => 15749,
                  'endTokenPos' => 876,
                  'endFilePos' => 15767,
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
                'code' => '\'Cron expression for executing a task every day at 2 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 348,
                  'endLine' => 348,
                  'startTokenPos' => 883,
                  'startFilePos' => 15789,
                  'endTokenPos' => 883,
                  'endFilePos' => 15845,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 2 PM.
 */',
        'startLine' => 347,
        'endLine' => 349,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_3PM' => 
      array (
        'name' => 'EVERY_DAY_AT_3PM',
        'value' => 
        array (
          'code' => '\'0 15 * *\'',
          'attributes' => 
          array (
            'startLine' => 356,
            'endLine' => 356,
            'startTokenPos' => 918,
            'startFilePos' => 16081,
            'endTokenPos' => 918,
            'endFilePos' => 16090,
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
                'code' => '\'Every Day at 3 PM\'',
                'attributes' => 
                array (
                  'startLine' => 354,
                  'endLine' => 354,
                  'startTokenPos' => 901,
                  'startFilePos' => 15953,
                  'endTokenPos' => 901,
                  'endFilePos' => 15971,
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
                'code' => '\'Cron expression for executing a task every day at 3 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 355,
                  'endLine' => 355,
                  'startTokenPos' => 908,
                  'startFilePos' => 15993,
                  'endTokenPos' => 908,
                  'endFilePos' => 16049,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 3 PM.
 */',
        'startLine' => 354,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_4PM' => 
      array (
        'name' => 'EVERY_DAY_AT_4PM',
        'value' => 
        array (
          'code' => '\'0 16 * *\'',
          'attributes' => 
          array (
            'startLine' => 363,
            'endLine' => 363,
            'startTokenPos' => 943,
            'startFilePos' => 16285,
            'endTokenPos' => 943,
            'endFilePos' => 16294,
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
                'code' => '\'Every Day at 4 PM\'',
                'attributes' => 
                array (
                  'startLine' => 361,
                  'endLine' => 361,
                  'startTokenPos' => 926,
                  'startFilePos' => 16157,
                  'endTokenPos' => 926,
                  'endFilePos' => 16175,
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
                'code' => '\'Cron expression for executing a task every day at 4 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 362,
                  'endLine' => 362,
                  'startTokenPos' => 933,
                  'startFilePos' => 16197,
                  'endTokenPos' => 933,
                  'endFilePos' => 16253,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 4 PM.
 */',
        'startLine' => 361,
        'endLine' => 363,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_5PM' => 
      array (
        'name' => 'EVERY_DAY_AT_5PM',
        'value' => 
        array (
          'code' => '\'0 17 * *\'',
          'attributes' => 
          array (
            'startLine' => 370,
            'endLine' => 370,
            'startTokenPos' => 968,
            'startFilePos' => 16489,
            'endTokenPos' => 968,
            'endFilePos' => 16498,
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
                'code' => '\'Every Day at 5 PM\'',
                'attributes' => 
                array (
                  'startLine' => 368,
                  'endLine' => 368,
                  'startTokenPos' => 951,
                  'startFilePos' => 16361,
                  'endTokenPos' => 951,
                  'endFilePos' => 16379,
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
                'code' => '\'Cron expression for executing a task every day at 5 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 369,
                  'endLine' => 369,
                  'startTokenPos' => 958,
                  'startFilePos' => 16401,
                  'endTokenPos' => 958,
                  'endFilePos' => 16457,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 5 PM.
 */',
        'startLine' => 368,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_6PM' => 
      array (
        'name' => 'EVERY_DAY_AT_6PM',
        'value' => 
        array (
          'code' => '\'0 18 * *\'',
          'attributes' => 
          array (
            'startLine' => 377,
            'endLine' => 377,
            'startTokenPos' => 993,
            'startFilePos' => 16693,
            'endTokenPos' => 993,
            'endFilePos' => 16702,
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
                'code' => '\'Every Day at 6 PM\'',
                'attributes' => 
                array (
                  'startLine' => 375,
                  'endLine' => 375,
                  'startTokenPos' => 976,
                  'startFilePos' => 16565,
                  'endTokenPos' => 976,
                  'endFilePos' => 16583,
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
                'code' => '\'Cron expression for executing a task every day at 6 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 376,
                  'endLine' => 376,
                  'startTokenPos' => 983,
                  'startFilePos' => 16605,
                  'endTokenPos' => 983,
                  'endFilePos' => 16661,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 6 PM.
 */',
        'startLine' => 375,
        'endLine' => 377,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_7PM' => 
      array (
        'name' => 'EVERY_DAY_AT_7PM',
        'value' => 
        array (
          'code' => '\'0 19 * *\'',
          'attributes' => 
          array (
            'startLine' => 384,
            'endLine' => 384,
            'startTokenPos' => 1018,
            'startFilePos' => 16897,
            'endTokenPos' => 1018,
            'endFilePos' => 16906,
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
                'code' => '\'Every Day at 7 PM\'',
                'attributes' => 
                array (
                  'startLine' => 382,
                  'endLine' => 382,
                  'startTokenPos' => 1001,
                  'startFilePos' => 16769,
                  'endTokenPos' => 1001,
                  'endFilePos' => 16787,
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
                'code' => '\'Cron expression for executing a task every day at 7 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 383,
                  'endLine' => 383,
                  'startTokenPos' => 1008,
                  'startFilePos' => 16809,
                  'endTokenPos' => 1008,
                  'endFilePos' => 16865,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 7 PM.
 */',
        'startLine' => 382,
        'endLine' => 384,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_8PM' => 
      array (
        'name' => 'EVERY_DAY_AT_8PM',
        'value' => 
        array (
          'code' => '\'0 20 * *\'',
          'attributes' => 
          array (
            'startLine' => 391,
            'endLine' => 391,
            'startTokenPos' => 1043,
            'startFilePos' => 17101,
            'endTokenPos' => 1043,
            'endFilePos' => 17110,
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
                'code' => '\'Every Day at 8 PM\'',
                'attributes' => 
                array (
                  'startLine' => 389,
                  'endLine' => 389,
                  'startTokenPos' => 1026,
                  'startFilePos' => 16973,
                  'endTokenPos' => 1026,
                  'endFilePos' => 16991,
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
                'code' => '\'Cron expression for executing a task every day at 8 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 390,
                  'endLine' => 390,
                  'startTokenPos' => 1033,
                  'startFilePos' => 17013,
                  'endTokenPos' => 1033,
                  'endFilePos' => 17069,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 8 PM.
 */',
        'startLine' => 389,
        'endLine' => 391,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_9PM' => 
      array (
        'name' => 'EVERY_DAY_AT_9PM',
        'value' => 
        array (
          'code' => '\'0 21 * *\'',
          'attributes' => 
          array (
            'startLine' => 398,
            'endLine' => 398,
            'startTokenPos' => 1068,
            'startFilePos' => 17305,
            'endTokenPos' => 1068,
            'endFilePos' => 17314,
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
                'code' => '\'Every Day at 9 PM\'',
                'attributes' => 
                array (
                  'startLine' => 396,
                  'endLine' => 396,
                  'startTokenPos' => 1051,
                  'startFilePos' => 17177,
                  'endTokenPos' => 1051,
                  'endFilePos' => 17195,
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
                'code' => '\'Cron expression for executing a task every day at 9 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 397,
                  'endLine' => 397,
                  'startTokenPos' => 1058,
                  'startFilePos' => 17217,
                  'endTokenPos' => 1058,
                  'endFilePos' => 17273,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 9 PM.
 */',
        'startLine' => 396,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_DAY_AT_10PM' => 
      array (
        'name' => 'EVERY_DAY_AT_10PM',
        'value' => 
        array (
          'code' => '\'0 22 * *\'',
          'attributes' => 
          array (
            'startLine' => 405,
            'endLine' => 405,
            'startTokenPos' => 1093,
            'startFilePos' => 17513,
            'endTokenPos' => 1093,
            'endFilePos' => 17522,
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
                'code' => '\'Every Day at 10 PM\'',
                'attributes' => 
                array (
                  'startLine' => 403,
                  'endLine' => 403,
                  'startTokenPos' => 1076,
                  'startFilePos' => 17382,
                  'endTokenPos' => 1076,
                  'endFilePos' => 17401,
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
                'code' => '\'Cron expression for executing a task every day at 10 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 404,
                  'endLine' => 404,
                  'startTokenPos' => 1083,
                  'startFilePos' => 17423,
                  'endTokenPos' => 1083,
                  'endFilePos' => 17480,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 10 PM.
 */',
        'startLine' => 403,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_DAY_AT_11PM' => 
      array (
        'name' => 'EVERY_DAY_AT_11PM',
        'value' => 
        array (
          'code' => '\'0 23 * *\'',
          'attributes' => 
          array (
            'startLine' => 412,
            'endLine' => 412,
            'startTokenPos' => 1118,
            'startFilePos' => 17721,
            'endTokenPos' => 1118,
            'endFilePos' => 17730,
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
                'code' => '\'Every Day at 11 PM\'',
                'attributes' => 
                array (
                  'startLine' => 410,
                  'endLine' => 410,
                  'startTokenPos' => 1101,
                  'startFilePos' => 17590,
                  'endTokenPos' => 1101,
                  'endFilePos' => 17609,
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
                'code' => '\'Cron expression for executing a task every day at 11 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 411,
                  'endLine' => 411,
                  'startTokenPos' => 1108,
                  'startFilePos' => 17631,
                  'endTokenPos' => 1108,
                  'endFilePos' => 17688,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 11 PM.
 */',
        'startLine' => 410,
        'endLine' => 412,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'EVERY_DAY_AT_MIDNIGHT' => 
      array (
        'name' => 'EVERY_DAY_AT_MIDNIGHT',
        'value' => 
        array (
          'code' => '\'0 0 * *\'',
          'attributes' => 
          array (
            'startLine' => 419,
            'endLine' => 419,
            'startTokenPos' => 1143,
            'startFilePos' => 17958,
            'endTokenPos' => 1143,
            'endFilePos' => 17966,
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
                'code' => '\'Every Day at Midnight\'',
                'attributes' => 
                array (
                  'startLine' => 417,
                  'endLine' => 417,
                  'startTokenPos' => 1126,
                  'startFilePos' => 17809,
                  'endTokenPos' => 1126,
                  'endFilePos' => 17831,
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
                'code' => '\'Cron expression for executing a task every day at midnight (12 AM).\'',
                'attributes' => 
                array (
                  'startLine' => 418,
                  'endLine' => 418,
                  'startTokenPos' => 1133,
                  'startFilePos' => 17853,
                  'endTokenPos' => 1133,
                  'endFilePos' => 17921,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at midnight (12 AM).
 */',
        'startLine' => 417,
        'endLine' => 419,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'EVERY_WEEK' => 
      array (
        'name' => 'EVERY_WEEK',
        'value' => 
        array (
          'code' => '\'0 0 * * 0\'',
          'attributes' => 
          array (
            'startLine' => 426,
            'endLine' => 426,
            'startTokenPos' => 1168,
            'startFilePos' => 18178,
            'endTokenPos' => 1168,
            'endFilePos' => 18188,
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
                'code' => '\'Every Week\'',
                'attributes' => 
                array (
                  'startLine' => 424,
                  'endLine' => 424,
                  'startTokenPos' => 1151,
                  'startFilePos' => 18048,
                  'endTokenPos' => 1151,
                  'endFilePos' => 18059,
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
                'code' => '\'Cron expression for executing a task every week on Sunday at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 425,
                  'endLine' => 425,
                  'startTokenPos' => 1158,
                  'startFilePos' => 18081,
                  'endTokenPos' => 1158,
                  'endFilePos' => 18152,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every week on Sunday at midnight.
 */',
        'startLine' => 424,
        'endLine' => 426,
        'startColumn' => 5,
        'endColumn' => 34,
      ),
      'EVERY_WEEKDAY' => 
      array (
        'name' => 'EVERY_WEEKDAY',
        'value' => 
        array (
          'code' => '\'0 0 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 433,
            'endLine' => 433,
            'startTokenPos' => 1193,
            'startFilePos' => 18430,
            'endTokenPos' => 1193,
            'endFilePos' => 18442,
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
                'code' => '\'Every Weekday\'',
                'attributes' => 
                array (
                  'startLine' => 431,
                  'endLine' => 431,
                  'startTokenPos' => 1176,
                  'startFilePos' => 18282,
                  'endTokenPos' => 1176,
                  'endFilePos' => 18296,
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
                'code' => '\'Cron expression for executing a task every weekday (Monday to Friday) at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 432,
                  'endLine' => 432,
                  'startTokenPos' => 1183,
                  'startFilePos' => 18318,
                  'endTokenPos' => 1183,
                  'endFilePos' => 18401,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every weekday (Monday to Friday) at midnight.
 */',
        'startLine' => 431,
        'endLine' => 433,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_WEEKEND' => 
      array (
        'name' => 'EVERY_WEEKEND',
        'value' => 
        array (
          'code' => '\'0 0 * * 6,0\'',
          'attributes' => 
          array (
            'startLine' => 440,
            'endLine' => 440,
            'startTokenPos' => 1218,
            'startFilePos' => 18690,
            'endTokenPos' => 1218,
            'endFilePos' => 18702,
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
                'code' => '\'Every Weekend\'',
                'attributes' => 
                array (
                  'startLine' => 438,
                  'endLine' => 438,
                  'startTokenPos' => 1201,
                  'startFilePos' => 18539,
                  'endTokenPos' => 1201,
                  'endFilePos' => 18553,
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
                'code' => '\'Cron expression for executing a task every weekend (Saturday and Sunday) at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 439,
                  'endLine' => 439,
                  'startTokenPos' => 1208,
                  'startFilePos' => 18575,
                  'endTokenPos' => 1208,
                  'endFilePos' => 18661,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every weekend (Saturday and Sunday) at midnight.
 */',
        'startLine' => 438,
        'endLine' => 440,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_1ST_DAY_OF_MONTH_AT_MIDNIGHT' => 
      array (
        'name' => 'EVERY_1ST_DAY_OF_MONTH_AT_MIDNIGHT',
        'value' => 
        array (
          'code' => '\'0 0 1 *\'',
          'attributes' => 
          array (
            'startLine' => 447,
            'endLine' => 447,
            'startTokenPos' => 1243,
            'startFilePos' => 18974,
            'endTokenPos' => 1243,
            'endFilePos' => 18982,
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
                'code' => '\'1st Day of Month at Midnight\'',
                'attributes' => 
                array (
                  'startLine' => 445,
                  'endLine' => 445,
                  'startTokenPos' => 1226,
                  'startFilePos' => 18793,
                  'endTokenPos' => 1226,
                  'endFilePos' => 18822,
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
                'code' => '\'Cron expression for executing a task on the 1st day of every month at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 446,
                  'endLine' => 446,
                  'startTokenPos' => 1233,
                  'startFilePos' => 18844,
                  'endTokenPos' => 1233,
                  'endFilePos' => 18924,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes on the 1st day of every month at midnight.
 */',
        'startLine' => 445,
        'endLine' => 447,
        'startColumn' => 5,
        'endColumn' => 56,
      ),
      'EVERY_1ST_DAY_OF_MONTH_AT_NOON' => 
      array (
        'name' => 'EVERY_1ST_DAY_OF_MONTH_AT_NOON',
        'value' => 
        array (
          'code' => '\'0 12 1 *\'',
          'attributes' => 
          array (
            'startLine' => 454,
            'endLine' => 454,
            'startTokenPos' => 1268,
            'startFilePos' => 19238,
            'endTokenPos' => 1268,
            'endFilePos' => 19247,
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
                'code' => '\'1st Day of Month at Noon\'',
                'attributes' => 
                array (
                  'startLine' => 452,
                  'endLine' => 452,
                  'startTokenPos' => 1251,
                  'startFilePos' => 19069,
                  'endTokenPos' => 1251,
                  'endFilePos' => 19094,
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
                'code' => '\'Cron expression for executing a task on the 1st day of every month at noon.\'',
                'attributes' => 
                array (
                  'startLine' => 453,
                  'endLine' => 453,
                  'startTokenPos' => 1258,
                  'startFilePos' => 19116,
                  'endTokenPos' => 1258,
                  'endFilePos' => 19192,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes on the 1st day of every month at noon.
 */',
        'startLine' => 452,
        'endLine' => 454,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'EVERY_2ND_HOUR' => 
      array (
        'name' => 'EVERY_2ND_HOUR',
        'value' => 
        array (
          'code' => '\'0 */2 * *\'',
          'attributes' => 
          array (
            'startLine' => 461,
            'endLine' => 461,
            'startTokenPos' => 1293,
            'startFilePos' => 19429,
            'endTokenPos' => 1293,
            'endFilePos' => 19439,
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
                'code' => '\'Every 2nd Hour\'',
                'attributes' => 
                array (
                  'startLine' => 459,
                  'endLine' => 459,
                  'startTokenPos' => 1276,
                  'startFilePos' => 19310,
                  'endTokenPos' => 1276,
                  'endFilePos' => 19325,
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
                'code' => '\'Cron expression for executing a task every 2 hours.\'',
                'attributes' => 
                array (
                  'startLine' => 460,
                  'endLine' => 460,
                  'startTokenPos' => 1283,
                  'startFilePos' => 19347,
                  'endTokenPos' => 1283,
                  'endFilePos' => 19399,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 2 hours.
 */',
        'startLine' => 459,
        'endLine' => 461,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'EVERY_2ND_HOUR_FROM_1AM_THROUGH_11PM' => 
      array (
        'name' => 'EVERY_2ND_HOUR_FROM_1AM_THROUGH_11PM',
        'value' => 
        array (
          'code' => '\'0 1-23/2 * *\'',
          'attributes' => 
          array (
            'startLine' => 468,
            'endLine' => 468,
            'startTokenPos' => 1318,
            'startFilePos' => 19712,
            'endTokenPos' => 1318,
            'endFilePos' => 19725,
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
                'code' => '\'Every 2nd Hour from 1 AM to 11 PM\'',
                'attributes' => 
                array (
                  'startLine' => 466,
                  'endLine' => 466,
                  'startTokenPos' => 1301,
                  'startFilePos' => 19527,
                  'endTokenPos' => 1301,
                  'endFilePos' => 19561,
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
                'code' => '\'Cron expression for executing a task every 2nd hour from 1 AM through 11 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 467,
                  'endLine' => 467,
                  'startTokenPos' => 1308,
                  'startFilePos' => 19583,
                  'endTokenPos' => 1308,
                  'endFilePos' => 19660,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 2nd hour from 1 AM through 11 PM.
 */',
        'startLine' => 466,
        'endLine' => 468,
        'startColumn' => 5,
        'endColumn' => 63,
      ),
      'EVERY_2ND_MONTH' => 
      array (
        'name' => 'EVERY_2ND_MONTH',
        'value' => 
        array (
          'code' => '\'0 0 1 */2\'',
          'attributes' => 
          array (
            'startLine' => 475,
            'endLine' => 475,
            'startTokenPos' => 1343,
            'startFilePos' => 19973,
            'endTokenPos' => 1343,
            'endFilePos' => 19983,
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
                'code' => '\'Every 2nd Month\'',
                'attributes' => 
                array (
                  'startLine' => 473,
                  'endLine' => 473,
                  'startTokenPos' => 1326,
                  'startFilePos' => 19820,
                  'endTokenPos' => 1326,
                  'endFilePos' => 19836,
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
                'code' => '\'Cron expression for executing a task on the 1st day of every 2nd month at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 474,
                  'endLine' => 474,
                  'startTokenPos' => 1333,
                  'startFilePos' => 19858,
                  'endTokenPos' => 1333,
                  'endFilePos' => 19942,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes on the 1st day of every 2nd month at midnight.
 */',
        'startLine' => 473,
        'endLine' => 475,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'EVERY_QUARTER' => 
      array (
        'name' => 'EVERY_QUARTER',
        'value' => 
        array (
          'code' => '\'0 0 1 */3\'',
          'attributes' => 
          array (
            'startLine' => 482,
            'endLine' => 482,
            'startTokenPos' => 1368,
            'startFilePos' => 20245,
            'endTokenPos' => 1368,
            'endFilePos' => 20255,
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
                'code' => '\'Every Quarter\'',
                'attributes' => 
                array (
                  'startLine' => 480,
                  'endLine' => 480,
                  'startTokenPos' => 1351,
                  'startFilePos' => 20087,
                  'endTokenPos' => 1351,
                  'endFilePos' => 20101,
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
                'code' => '\'Cron expression for executing a task on the 1st day of every quarter (3 months) at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 481,
                  'endLine' => 481,
                  'startTokenPos' => 1358,
                  'startFilePos' => 20123,
                  'endTokenPos' => 1358,
                  'endFilePos' => 20216,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes on the 1st day of every quarter (3 months) at midnight.
 */',
        'startLine' => 480,
        'endLine' => 482,
        'startColumn' => 5,
        'endColumn' => 37,
      ),
      'EVERY_6_MONTHS' => 
      array (
        'name' => 'EVERY_6_MONTHS',
        'value' => 
        array (
          'code' => '\'0 0 1 */6\'',
          'attributes' => 
          array (
            'startLine' => 489,
            'endLine' => 489,
            'startTokenPos' => 1393,
            'startFilePos' => 20499,
            'endTokenPos' => 1393,
            'endFilePos' => 20509,
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
                'code' => '\'Every 6 Months\'',
                'attributes' => 
                array (
                  'startLine' => 487,
                  'endLine' => 487,
                  'startTokenPos' => 1376,
                  'startFilePos' => 20349,
                  'endTokenPos' => 1376,
                  'endFilePos' => 20364,
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
                'code' => '\'Cron expression for executing a task on the 1st day of every 6 months at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 488,
                  'endLine' => 488,
                  'startTokenPos' => 1383,
                  'startFilePos' => 20386,
                  'endTokenPos' => 1383,
                  'endFilePos' => 20469,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes on the 1st day of every 6 months at midnight.
 */',
        'startLine' => 487,
        'endLine' => 489,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'EVERY_YEAR' => 
      array (
        'name' => 'EVERY_YEAR',
        'value' => 
        array (
          'code' => '\'0 0 1 1\'',
          'attributes' => 
          array (
            'startLine' => 496,
            'endLine' => 496,
            'startTokenPos' => 1418,
            'startFilePos' => 20731,
            'endTokenPos' => 1418,
            'endFilePos' => 20739,
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
                'code' => '\'Every Year\'',
                'attributes' => 
                array (
                  'startLine' => 494,
                  'endLine' => 494,
                  'startTokenPos' => 1401,
                  'startFilePos' => 20596,
                  'endTokenPos' => 1401,
                  'endFilePos' => 20607,
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
                'code' => '\'Cron expression for executing a task on the 1st day of January at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 495,
                  'endLine' => 495,
                  'startTokenPos' => 1408,
                  'startFilePos' => 20629,
                  'endTokenPos' => 1408,
                  'endFilePos' => 20705,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes on the 1st day of January at midnight.
 */',
        'startLine' => 494,
        'endLine' => 496,
        'startColumn' => 5,
        'endColumn' => 32,
      ),
      'EVERY_30_MINUTES_BETWEEN_9AM_AND_5PM' => 
      array (
        'name' => 'EVERY_30_MINUTES_BETWEEN_9AM_AND_5PM',
        'value' => 
        array (
          'code' => '\'0 */30 9-17 * *\'',
          'attributes' => 
          array (
            'startLine' => 503,
            'endLine' => 503,
            'startTokenPos' => 1443,
            'startFilePos' => 21017,
            'endTokenPos' => 1443,
            'endFilePos' => 21033,
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
                'code' => '\'Every 30 Minutes Between 9 AM and 5 PM\'',
                'attributes' => 
                array (
                  'startLine' => 501,
                  'endLine' => 501,
                  'startTokenPos' => 1426,
                  'startFilePos' => 20827,
                  'endTokenPos' => 1426,
                  'endFilePos' => 20866,
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
                'code' => '\'Cron expression for executing a task every 30 minutes between 9 AM and 5 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 502,
                  'endLine' => 502,
                  'startTokenPos' => 1433,
                  'startFilePos' => 20888,
                  'endTokenPos' => 1433,
                  'endFilePos' => 20965,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 30 minutes between 9 AM and 5 PM.
 */',
        'startLine' => 501,
        'endLine' => 503,
        'startColumn' => 5,
        'endColumn' => 66,
      ),
      'EVERY_30_MINUTES_BETWEEN_9AM_AND_6PM' => 
      array (
        'name' => 'EVERY_30_MINUTES_BETWEEN_9AM_AND_6PM',
        'value' => 
        array (
          'code' => '\'0 */30 9-18 * *\'',
          'attributes' => 
          array (
            'startLine' => 510,
            'endLine' => 510,
            'startTokenPos' => 1468,
            'startFilePos' => 21311,
            'endTokenPos' => 1468,
            'endFilePos' => 21327,
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
                'code' => '\'Every 30 Minutes Between 9 AM and 6 PM\'',
                'attributes' => 
                array (
                  'startLine' => 508,
                  'endLine' => 508,
                  'startTokenPos' => 1451,
                  'startFilePos' => 21121,
                  'endTokenPos' => 1451,
                  'endFilePos' => 21160,
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
                'code' => '\'Cron expression for executing a task every 30 minutes between 9 AM and 6 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 509,
                  'endLine' => 509,
                  'startTokenPos' => 1458,
                  'startFilePos' => 21182,
                  'endTokenPos' => 1458,
                  'endFilePos' => 21259,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 30 minutes between 9 AM and 6 PM.
 */',
        'startLine' => 508,
        'endLine' => 510,
        'startColumn' => 5,
        'endColumn' => 66,
      ),
      'EVERY_30_MINUTES_BETWEEN_10AM_AND_7PM' => 
      array (
        'name' => 'EVERY_30_MINUTES_BETWEEN_10AM_AND_7PM',
        'value' => 
        array (
          'code' => '\'0 */30 10-19 * *\'',
          'attributes' => 
          array (
            'startLine' => 517,
            'endLine' => 517,
            'startTokenPos' => 1493,
            'startFilePos' => 21609,
            'endTokenPos' => 1493,
            'endFilePos' => 21626,
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
                'code' => '\'Every 30 Minutes Between 10 AM and 7 PM\'',
                'attributes' => 
                array (
                  'startLine' => 515,
                  'endLine' => 515,
                  'startTokenPos' => 1476,
                  'startFilePos' => 21416,
                  'endTokenPos' => 1476,
                  'endFilePos' => 21456,
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
                'code' => '\'Cron expression for executing a task every 30 minutes between 10 AM and 7 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 516,
                  'endLine' => 516,
                  'startTokenPos' => 1483,
                  'startFilePos' => 21478,
                  'endTokenPos' => 1483,
                  'endFilePos' => 21556,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 30 minutes between 10 AM and 7 PM.
 */',
        'startLine' => 515,
        'endLine' => 517,
        'startColumn' => 5,
        'endColumn' => 68,
      ),
      'MONDAY_TO_FRIDAY_AT_1AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_1AM',
        'value' => 
        array (
          'code' => '\'0 0 01 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 524,
            'endLine' => 524,
            'startTokenPos' => 1518,
            'startFilePos' => 21849,
            'endTokenPos' => 1518,
            'endFilePos' => 21864,
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
                'code' => '\'Monday to Friday at 1 AM\'',
                'attributes' => 
                array (
                  'startLine' => 522,
                  'endLine' => 522,
                  'startTokenPos' => 1501,
                  'startFilePos' => 21700,
                  'endTokenPos' => 1501,
                  'endFilePos' => 21725,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 1 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 523,
                  'endLine' => 523,
                  'startTokenPos' => 1508,
                  'startFilePos' => 21747,
                  'endTokenPos' => 1508,
                  'endFilePos' => 21810,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 1 AM.
 */',
        'startLine' => 522,
        'endLine' => 524,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_2AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_2AM',
        'value' => 
        array (
          'code' => '\'0 0 02 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 531,
            'endLine' => 531,
            'startTokenPos' => 1543,
            'startFilePos' => 22087,
            'endTokenPos' => 1543,
            'endFilePos' => 22102,
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
                'code' => '\'Monday to Friday at 2 AM\'',
                'attributes' => 
                array (
                  'startLine' => 529,
                  'endLine' => 529,
                  'startTokenPos' => 1526,
                  'startFilePos' => 21938,
                  'endTokenPos' => 1526,
                  'endFilePos' => 21963,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 2 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 530,
                  'endLine' => 530,
                  'startTokenPos' => 1533,
                  'startFilePos' => 21985,
                  'endTokenPos' => 1533,
                  'endFilePos' => 22048,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 2 AM.
 */',
        'startLine' => 529,
        'endLine' => 531,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_3AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_3AM',
        'value' => 
        array (
          'code' => '\'0 0 03 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 538,
            'endLine' => 538,
            'startTokenPos' => 1568,
            'startFilePos' => 22325,
            'endTokenPos' => 1568,
            'endFilePos' => 22340,
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
                'code' => '\'Monday to Friday at 3 AM\'',
                'attributes' => 
                array (
                  'startLine' => 536,
                  'endLine' => 536,
                  'startTokenPos' => 1551,
                  'startFilePos' => 22176,
                  'endTokenPos' => 1551,
                  'endFilePos' => 22201,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 3 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 537,
                  'endLine' => 537,
                  'startTokenPos' => 1558,
                  'startFilePos' => 22223,
                  'endTokenPos' => 1558,
                  'endFilePos' => 22286,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 3 AM.
 */',
        'startLine' => 536,
        'endLine' => 538,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_4AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_4AM',
        'value' => 
        array (
          'code' => '\'0 0 04 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 545,
            'endLine' => 545,
            'startTokenPos' => 1593,
            'startFilePos' => 22563,
            'endTokenPos' => 1593,
            'endFilePos' => 22578,
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
                'code' => '\'Monday to Friday at 4 AM\'',
                'attributes' => 
                array (
                  'startLine' => 543,
                  'endLine' => 543,
                  'startTokenPos' => 1576,
                  'startFilePos' => 22414,
                  'endTokenPos' => 1576,
                  'endFilePos' => 22439,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 4 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 544,
                  'endLine' => 544,
                  'startTokenPos' => 1583,
                  'startFilePos' => 22461,
                  'endTokenPos' => 1583,
                  'endFilePos' => 22524,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 4 AM.
 */',
        'startLine' => 543,
        'endLine' => 545,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_5AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_5AM',
        'value' => 
        array (
          'code' => '\'0 0 05 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 552,
            'endLine' => 552,
            'startTokenPos' => 1618,
            'startFilePos' => 22801,
            'endTokenPos' => 1618,
            'endFilePos' => 22816,
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
                'code' => '\'Monday to Friday at 5 AM\'',
                'attributes' => 
                array (
                  'startLine' => 550,
                  'endLine' => 550,
                  'startTokenPos' => 1601,
                  'startFilePos' => 22652,
                  'endTokenPos' => 1601,
                  'endFilePos' => 22677,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 5 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 551,
                  'endLine' => 551,
                  'startTokenPos' => 1608,
                  'startFilePos' => 22699,
                  'endTokenPos' => 1608,
                  'endFilePos' => 22762,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 5 AM.
 */',
        'startLine' => 550,
        'endLine' => 552,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_6AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_6AM',
        'value' => 
        array (
          'code' => '\'0 0 06 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 559,
            'endLine' => 559,
            'startTokenPos' => 1643,
            'startFilePos' => 23039,
            'endTokenPos' => 1643,
            'endFilePos' => 23054,
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
                'code' => '\'Monday to Friday at 6 AM\'',
                'attributes' => 
                array (
                  'startLine' => 557,
                  'endLine' => 557,
                  'startTokenPos' => 1626,
                  'startFilePos' => 22890,
                  'endTokenPos' => 1626,
                  'endFilePos' => 22915,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 6 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 558,
                  'endLine' => 558,
                  'startTokenPos' => 1633,
                  'startFilePos' => 22937,
                  'endTokenPos' => 1633,
                  'endFilePos' => 23000,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 6 AM.
 */',
        'startLine' => 557,
        'endLine' => 559,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_7AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_7AM',
        'value' => 
        array (
          'code' => '\'0 0 07 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 566,
            'endLine' => 566,
            'startTokenPos' => 1668,
            'startFilePos' => 23277,
            'endTokenPos' => 1668,
            'endFilePos' => 23292,
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
                'code' => '\'Monday to Friday at 7 AM\'',
                'attributes' => 
                array (
                  'startLine' => 564,
                  'endLine' => 564,
                  'startTokenPos' => 1651,
                  'startFilePos' => 23128,
                  'endTokenPos' => 1651,
                  'endFilePos' => 23153,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 7 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 565,
                  'endLine' => 565,
                  'startTokenPos' => 1658,
                  'startFilePos' => 23175,
                  'endTokenPos' => 1658,
                  'endFilePos' => 23238,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 7 AM.
 */',
        'startLine' => 564,
        'endLine' => 566,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_8AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_8AM',
        'value' => 
        array (
          'code' => '\'0 0 08 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 573,
            'endLine' => 573,
            'startTokenPos' => 1693,
            'startFilePos' => 23515,
            'endTokenPos' => 1693,
            'endFilePos' => 23530,
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
                'code' => '\'Monday to Friday at 8 AM\'',
                'attributes' => 
                array (
                  'startLine' => 571,
                  'endLine' => 571,
                  'startTokenPos' => 1676,
                  'startFilePos' => 23366,
                  'endTokenPos' => 1676,
                  'endFilePos' => 23391,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 8 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 572,
                  'endLine' => 572,
                  'startTokenPos' => 1683,
                  'startFilePos' => 23413,
                  'endTokenPos' => 1683,
                  'endFilePos' => 23476,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 8 AM.
 */',
        'startLine' => 571,
        'endLine' => 573,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_9AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_9AM',
        'value' => 
        array (
          'code' => '\'0 0 09 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 580,
            'endLine' => 580,
            'startTokenPos' => 1718,
            'startFilePos' => 23753,
            'endTokenPos' => 1718,
            'endFilePos' => 23768,
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
                'code' => '\'Monday to Friday at 9 AM\'',
                'attributes' => 
                array (
                  'startLine' => 578,
                  'endLine' => 578,
                  'startTokenPos' => 1701,
                  'startFilePos' => 23604,
                  'endTokenPos' => 1701,
                  'endFilePos' => 23629,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 9 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 579,
                  'endLine' => 579,
                  'startTokenPos' => 1708,
                  'startFilePos' => 23651,
                  'endTokenPos' => 1708,
                  'endFilePos' => 23714,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 9 AM.
 */',
        'startLine' => 578,
        'endLine' => 580,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_10AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_10AM',
        'value' => 
        array (
          'code' => '\'0 0 10 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 587,
            'endLine' => 587,
            'startTokenPos' => 1743,
            'startFilePos' => 23995,
            'endTokenPos' => 1743,
            'endFilePos' => 24010,
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
                'code' => '\'Monday to Friday at 10 AM\'',
                'attributes' => 
                array (
                  'startLine' => 585,
                  'endLine' => 585,
                  'startTokenPos' => 1726,
                  'startFilePos' => 23843,
                  'endTokenPos' => 1726,
                  'endFilePos' => 23869,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 10 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 586,
                  'endLine' => 586,
                  'startTokenPos' => 1733,
                  'startFilePos' => 23891,
                  'endTokenPos' => 1733,
                  'endFilePos' => 23955,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 10 AM.
 */',
        'startLine' => 585,
        'endLine' => 587,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'MONDAY_TO_FRIDAY_AT_11AM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_11AM',
        'value' => 
        array (
          'code' => '\'0 0 11 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 594,
            'endLine' => 594,
            'startTokenPos' => 1768,
            'startFilePos' => 24237,
            'endTokenPos' => 1768,
            'endFilePos' => 24252,
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
                'code' => '\'Monday to Friday at 11 AM\'',
                'attributes' => 
                array (
                  'startLine' => 592,
                  'endLine' => 592,
                  'startTokenPos' => 1751,
                  'startFilePos' => 24085,
                  'endTokenPos' => 1751,
                  'endFilePos' => 24111,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 11 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 593,
                  'endLine' => 593,
                  'startTokenPos' => 1758,
                  'startFilePos' => 24133,
                  'endTokenPos' => 1758,
                  'endFilePos' => 24197,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 11 AM.
 */',
        'startLine' => 592,
        'endLine' => 594,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'MONDAY_TO_FRIDAY_AT_NOON' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_NOON',
        'value' => 
        array (
          'code' => '\'0 0 12 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 601,
            'endLine' => 601,
            'startTokenPos' => 1793,
            'startFilePos' => 24492,
            'endTokenPos' => 1793,
            'endFilePos' => 24507,
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
                'code' => '\'Monday to Friday at Noon\'',
                'attributes' => 
                array (
                  'startLine' => 599,
                  'endLine' => 599,
                  'startTokenPos' => 1776,
                  'startFilePos' => 24334,
                  'endTokenPos' => 1776,
                  'endFilePos' => 24359,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at noon (12 PM).\'',
                'attributes' => 
                array (
                  'startLine' => 600,
                  'endLine' => 600,
                  'startTokenPos' => 1783,
                  'startFilePos' => 24381,
                  'endTokenPos' => 1783,
                  'endFilePos' => 24452,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at noon (12 PM).
 */',
        'startLine' => 599,
        'endLine' => 601,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'MONDAY_TO_FRIDAY_AT_1PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_1PM',
        'value' => 
        array (
          'code' => '\'0 0 13 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 608,
            'endLine' => 608,
            'startTokenPos' => 1818,
            'startFilePos' => 24730,
            'endTokenPos' => 1818,
            'endFilePos' => 24745,
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
                'code' => '\'Monday to Friday at 1 PM\'',
                'attributes' => 
                array (
                  'startLine' => 606,
                  'endLine' => 606,
                  'startTokenPos' => 1801,
                  'startFilePos' => 24581,
                  'endTokenPos' => 1801,
                  'endFilePos' => 24606,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 1 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 607,
                  'endLine' => 607,
                  'startTokenPos' => 1808,
                  'startFilePos' => 24628,
                  'endTokenPos' => 1808,
                  'endFilePos' => 24691,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 1 PM.
 */',
        'startLine' => 606,
        'endLine' => 608,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_2PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_2PM',
        'value' => 
        array (
          'code' => '\'0 0 14 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 615,
            'endLine' => 615,
            'startTokenPos' => 1843,
            'startFilePos' => 24968,
            'endTokenPos' => 1843,
            'endFilePos' => 24983,
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
                'code' => '\'Monday to Friday at 2 PM\'',
                'attributes' => 
                array (
                  'startLine' => 613,
                  'endLine' => 613,
                  'startTokenPos' => 1826,
                  'startFilePos' => 24819,
                  'endTokenPos' => 1826,
                  'endFilePos' => 24844,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 2 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 614,
                  'endLine' => 614,
                  'startTokenPos' => 1833,
                  'startFilePos' => 24866,
                  'endTokenPos' => 1833,
                  'endFilePos' => 24929,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 2 PM.
 */',
        'startLine' => 613,
        'endLine' => 615,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_3PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_3PM',
        'value' => 
        array (
          'code' => '\'0 0 15 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 622,
            'endLine' => 622,
            'startTokenPos' => 1868,
            'startFilePos' => 25206,
            'endTokenPos' => 1868,
            'endFilePos' => 25221,
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
                'code' => '\'Monday to Friday at 3 PM\'',
                'attributes' => 
                array (
                  'startLine' => 620,
                  'endLine' => 620,
                  'startTokenPos' => 1851,
                  'startFilePos' => 25057,
                  'endTokenPos' => 1851,
                  'endFilePos' => 25082,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 3 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 621,
                  'endLine' => 621,
                  'startTokenPos' => 1858,
                  'startFilePos' => 25104,
                  'endTokenPos' => 1858,
                  'endFilePos' => 25167,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 3 PM.
 */',
        'startLine' => 620,
        'endLine' => 622,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_4PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_4PM',
        'value' => 
        array (
          'code' => '\'0 0 16 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 629,
            'endLine' => 629,
            'startTokenPos' => 1893,
            'startFilePos' => 25444,
            'endTokenPos' => 1893,
            'endFilePos' => 25459,
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
                'code' => '\'Monday to Friday at 4 PM\'',
                'attributes' => 
                array (
                  'startLine' => 627,
                  'endLine' => 627,
                  'startTokenPos' => 1876,
                  'startFilePos' => 25295,
                  'endTokenPos' => 1876,
                  'endFilePos' => 25320,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 4 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 628,
                  'endLine' => 628,
                  'startTokenPos' => 1883,
                  'startFilePos' => 25342,
                  'endTokenPos' => 1883,
                  'endFilePos' => 25405,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 4 PM.
 */',
        'startLine' => 627,
        'endLine' => 629,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_5PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_5PM',
        'value' => 
        array (
          'code' => '\'0 0 17 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 636,
            'endLine' => 636,
            'startTokenPos' => 1918,
            'startFilePos' => 25682,
            'endTokenPos' => 1918,
            'endFilePos' => 25697,
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
                'code' => '\'Monday to Friday at 5 PM\'',
                'attributes' => 
                array (
                  'startLine' => 634,
                  'endLine' => 634,
                  'startTokenPos' => 1901,
                  'startFilePos' => 25533,
                  'endTokenPos' => 1901,
                  'endFilePos' => 25558,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 5 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 635,
                  'endLine' => 635,
                  'startTokenPos' => 1908,
                  'startFilePos' => 25580,
                  'endTokenPos' => 1908,
                  'endFilePos' => 25643,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 5 PM.
 */',
        'startLine' => 634,
        'endLine' => 636,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_6PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_6PM',
        'value' => 
        array (
          'code' => '\'0 0 18 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 643,
            'endLine' => 643,
            'startTokenPos' => 1943,
            'startFilePos' => 25920,
            'endTokenPos' => 1943,
            'endFilePos' => 25935,
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
                'code' => '\'Monday to Friday at 6 PM\'',
                'attributes' => 
                array (
                  'startLine' => 641,
                  'endLine' => 641,
                  'startTokenPos' => 1926,
                  'startFilePos' => 25771,
                  'endTokenPos' => 1926,
                  'endFilePos' => 25796,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 6 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 642,
                  'endLine' => 642,
                  'startTokenPos' => 1933,
                  'startFilePos' => 25818,
                  'endTokenPos' => 1933,
                  'endFilePos' => 25881,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 6 PM.
 */',
        'startLine' => 641,
        'endLine' => 643,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_7PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_7PM',
        'value' => 
        array (
          'code' => '\'0 0 19 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 650,
            'endLine' => 650,
            'startTokenPos' => 1968,
            'startFilePos' => 26158,
            'endTokenPos' => 1968,
            'endFilePos' => 26173,
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
                'code' => '\'Monday to Friday at 7 PM\'',
                'attributes' => 
                array (
                  'startLine' => 648,
                  'endLine' => 648,
                  'startTokenPos' => 1951,
                  'startFilePos' => 26009,
                  'endTokenPos' => 1951,
                  'endFilePos' => 26034,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 7 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 649,
                  'endLine' => 649,
                  'startTokenPos' => 1958,
                  'startFilePos' => 26056,
                  'endTokenPos' => 1958,
                  'endFilePos' => 26119,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 7 PM.
 */',
        'startLine' => 648,
        'endLine' => 650,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_8PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_8PM',
        'value' => 
        array (
          'code' => '\'0 0 20 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 657,
            'endLine' => 657,
            'startTokenPos' => 1993,
            'startFilePos' => 26396,
            'endTokenPos' => 1993,
            'endFilePos' => 26411,
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
                'code' => '\'Monday to Friday at 8 PM\'',
                'attributes' => 
                array (
                  'startLine' => 655,
                  'endLine' => 655,
                  'startTokenPos' => 1976,
                  'startFilePos' => 26247,
                  'endTokenPos' => 1976,
                  'endFilePos' => 26272,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 8 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 656,
                  'endLine' => 656,
                  'startTokenPos' => 1983,
                  'startFilePos' => 26294,
                  'endTokenPos' => 1983,
                  'endFilePos' => 26357,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 8 PM.
 */',
        'startLine' => 655,
        'endLine' => 657,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_9PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_9PM',
        'value' => 
        array (
          'code' => '\'0 0 21 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 664,
            'endLine' => 664,
            'startTokenPos' => 2018,
            'startFilePos' => 26634,
            'endTokenPos' => 2018,
            'endFilePos' => 26649,
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
                'code' => '\'Monday to Friday at 9 PM\'',
                'attributes' => 
                array (
                  'startLine' => 662,
                  'endLine' => 662,
                  'startTokenPos' => 2001,
                  'startFilePos' => 26485,
                  'endTokenPos' => 2001,
                  'endFilePos' => 26510,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 9 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 663,
                  'endLine' => 663,
                  'startTokenPos' => 2008,
                  'startFilePos' => 26532,
                  'endTokenPos' => 2008,
                  'endFilePos' => 26595,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 9 PM.
 */',
        'startLine' => 662,
        'endLine' => 664,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'MONDAY_TO_FRIDAY_AT_10PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_10PM',
        'value' => 
        array (
          'code' => '\'0 0 22 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 671,
            'endLine' => 671,
            'startTokenPos' => 2043,
            'startFilePos' => 26876,
            'endTokenPos' => 2043,
            'endFilePos' => 26891,
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
                'code' => '\'Monday to Friday at 10 PM\'',
                'attributes' => 
                array (
                  'startLine' => 669,
                  'endLine' => 669,
                  'startTokenPos' => 2026,
                  'startFilePos' => 26724,
                  'endTokenPos' => 2026,
                  'endFilePos' => 26750,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 10 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 670,
                  'endLine' => 670,
                  'startTokenPos' => 2033,
                  'startFilePos' => 26772,
                  'endTokenPos' => 2033,
                  'endFilePos' => 26836,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 10 PM.
 */',
        'startLine' => 669,
        'endLine' => 671,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'MONDAY_TO_FRIDAY_AT_11PM' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_11PM',
        'value' => 
        array (
          'code' => '\'0 0 23 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 678,
            'endLine' => 678,
            'startTokenPos' => 2068,
            'startFilePos' => 27118,
            'endTokenPos' => 2068,
            'endFilePos' => 27133,
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
                'code' => '\'Monday to Friday at 11 PM\'',
                'attributes' => 
                array (
                  'startLine' => 676,
                  'endLine' => 676,
                  'startTokenPos' => 2051,
                  'startFilePos' => 26966,
                  'endTokenPos' => 2051,
                  'endFilePos' => 26992,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at 11 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 677,
                  'endLine' => 677,
                  'startTokenPos' => 2058,
                  'startFilePos' => 27014,
                  'endTokenPos' => 2058,
                  'endFilePos' => 27078,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at 11 PM.
 */',
        'startLine' => 676,
        'endLine' => 678,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'MONDAY_TO_FRIDAY_AT_MIDNIGHT' => 
      array (
        'name' => 'MONDAY_TO_FRIDAY_AT_MIDNIGHT',
        'value' => 
        array (
          'code' => '\'0 0 0 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 685,
            'endLine' => 685,
            'startTokenPos' => 2093,
            'startFilePos' => 27389,
            'endTokenPos' => 2093,
            'endFilePos' => 27403,
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
                'code' => '\'Monday to Friday at Midnight\'',
                'attributes' => 
                array (
                  'startLine' => 683,
                  'endLine' => 683,
                  'startTokenPos' => 2076,
                  'startFilePos' => 27219,
                  'endTokenPos' => 2076,
                  'endFilePos' => 27248,
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
                'code' => '\'Cron expression for executing a task Monday to Friday at midnight (12 AM).\'',
                'attributes' => 
                array (
                  'startLine' => 684,
                  'endLine' => 684,
                  'startTokenPos' => 2083,
                  'startFilePos' => 27270,
                  'endTokenPos' => 2083,
                  'endFilePos' => 27345,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes Monday to Friday at midnight (12 AM).
 */',
        'startLine' => 683,
        'endLine' => 685,
        'startColumn' => 5,
        'endColumn' => 56,
      ),
      'EVERY_SATURDAY_AT_MIDNIGHT' => 
      array (
        'name' => 'EVERY_SATURDAY_AT_MIDNIGHT',
        'value' => 
        array (
          'code' => '\'0 0 0 * * 6\'',
          'attributes' => 
          array (
            'startLine' => 692,
            'endLine' => 692,
            'startTokenPos' => 2118,
            'startFilePos' => 27635,
            'endTokenPos' => 2118,
            'endFilePos' => 27647,
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
                'code' => '\'Every Saturday at Midnight\'',
                'attributes' => 
                array (
                  'startLine' => 690,
                  'endLine' => 690,
                  'startTokenPos' => 2101,
                  'startFilePos' => 27479,
                  'endTokenPos' => 2101,
                  'endFilePos' => 27506,
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
                'code' => '\'Cron expression for executing a task every Saturday at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 691,
                  'endLine' => 691,
                  'startTokenPos' => 2108,
                  'startFilePos' => 27528,
                  'endTokenPos' => 2108,
                  'endFilePos' => 27593,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every Saturday at midnight.
 */',
        'startLine' => 690,
        'endLine' => 692,
        'startColumn' => 5,
        'endColumn' => 52,
      ),
      'EVERY_SUNDAY_AT_MIDNIGHT' => 
      array (
        'name' => 'EVERY_SUNDAY_AT_MIDNIGHT',
        'value' => 
        array (
          'code' => '\'0 0 0 * * 0\'',
          'attributes' => 
          array (
            'startLine' => 699,
            'endLine' => 699,
            'startTokenPos' => 2143,
            'startFilePos' => 27871,
            'endTokenPos' => 2143,
            'endFilePos' => 27883,
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
                'code' => '\'Every Sunday at Midnight\'',
                'attributes' => 
                array (
                  'startLine' => 697,
                  'endLine' => 697,
                  'startTokenPos' => 2126,
                  'startFilePos' => 27721,
                  'endTokenPos' => 2126,
                  'endFilePos' => 27746,
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
                'code' => '\'Cron expression for executing a task every Sunday at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 698,
                  'endLine' => 698,
                  'startTokenPos' => 2133,
                  'startFilePos' => 27768,
                  'endTokenPos' => 2133,
                  'endFilePos' => 27831,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every Sunday at midnight.
 */',
        'startLine' => 697,
        'endLine' => 699,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
      'EVERY_WEEKEND_AT_MIDNIGHT' => 
      array (
        'name' => 'EVERY_WEEKEND_AT_MIDNIGHT',
        'value' => 
        array (
          'code' => '\'0 0 0 * * 6,0\'',
          'attributes' => 
          array (
            'startLine' => 706,
            'endLine' => 706,
            'startTokenPos' => 2168,
            'startFilePos' => 28135,
            'endTokenPos' => 2168,
            'endFilePos' => 28149,
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
                'code' => '\'Every Weekend at Midnight\'',
                'attributes' => 
                array (
                  'startLine' => 704,
                  'endLine' => 704,
                  'startTokenPos' => 2151,
                  'startFilePos' => 27970,
                  'endTokenPos' => 2151,
                  'endFilePos' => 27996,
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
                'code' => '\'Cron expression for executing a task every Saturday and Sunday at midnight.\'',
                'attributes' => 
                array (
                  'startLine' => 705,
                  'endLine' => 705,
                  'startTokenPos' => 2158,
                  'startFilePos' => 28018,
                  'endTokenPos' => 2158,
                  'endFilePos' => 28094,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every Saturday and Sunday at midnight.
 */',
        'startLine' => 704,
        'endLine' => 706,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'EVERY_DAY_AT_2_30PM' => 
      array (
        'name' => 'EVERY_DAY_AT_2_30PM',
        'value' => 
        array (
          'code' => '\'30 14 * *\'',
          'attributes' => 
          array (
            'startLine' => 713,
            'endLine' => 713,
            'startTokenPos' => 2193,
            'startFilePos' => 28356,
            'endTokenPos' => 2193,
            'endFilePos' => 28366,
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
                'code' => '\'Every Day at 2:30 PM\'',
                'attributes' => 
                array (
                  'startLine' => 711,
                  'endLine' => 711,
                  'startTokenPos' => 2176,
                  'startFilePos' => 28219,
                  'endTokenPos' => 2176,
                  'endFilePos' => 28240,
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
                'code' => '\'Cron expression for executing a task every day at 2:30 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 712,
                  'endLine' => 712,
                  'startTokenPos' => 2183,
                  'startFilePos' => 28262,
                  'endTokenPos' => 2183,
                  'endFilePos' => 28321,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every day at 2:30 PM.
 */',
        'startLine' => 711,
        'endLine' => 713,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
      'EVERY_WEEKDAY_AT_2_30PM' => 
      array (
        'name' => 'EVERY_WEEKDAY_AT_2_30PM',
        'value' => 
        array (
          'code' => '\'30 14 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 720,
            'endLine' => 720,
            'startTokenPos' => 2218,
            'startFilePos' => 28627,
            'endTokenPos' => 2218,
            'endFilePos' => 28641,
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
                'code' => '\'Every Weekday at 2:30 PM\'',
                'attributes' => 
                array (
                  'startLine' => 718,
                  'endLine' => 718,
                  'startTokenPos' => 2201,
                  'startFilePos' => 28459,
                  'endTokenPos' => 2201,
                  'endFilePos' => 28484,
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
                'code' => '\'Cron expression for executing a task every weekday (Monday to Friday) at 2:30 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 719,
                  'endLine' => 719,
                  'startTokenPos' => 2208,
                  'startFilePos' => 28506,
                  'endTokenPos' => 2208,
                  'endFilePos' => 28588,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every weekday (Monday to Friday) at 2:30 PM.
 */',
        'startLine' => 718,
        'endLine' => 720,
        'startColumn' => 5,
        'endColumn' => 51,
      ),
      'EVERY_WEEKDAY_AT_8_45AM' => 
      array (
        'name' => 'EVERY_WEEKDAY_AT_8_45AM',
        'value' => 
        array (
          'code' => '\'45 8 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 727,
            'endLine' => 727,
            'startTokenPos' => 2243,
            'startFilePos' => 28902,
            'endTokenPos' => 2243,
            'endFilePos' => 28915,
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
                'code' => '\'Every Weekday at 8:45 AM\'',
                'attributes' => 
                array (
                  'startLine' => 725,
                  'endLine' => 725,
                  'startTokenPos' => 2226,
                  'startFilePos' => 28734,
                  'endTokenPos' => 2226,
                  'endFilePos' => 28759,
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
                'code' => '\'Cron expression for executing a task every weekday (Monday to Friday) at 8:45 AM.\'',
                'attributes' => 
                array (
                  'startLine' => 726,
                  'endLine' => 726,
                  'startTokenPos' => 2233,
                  'startFilePos' => 28781,
                  'endTokenPos' => 2233,
                  'endFilePos' => 28863,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every weekday (Monday to Friday) at 8:45 AM.
 */',
        'startLine' => 725,
        'endLine' => 727,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
      'EVERY_15TH_DAY_OF_MONTH_AT_3PM' => 
      array (
        'name' => 'EVERY_15TH_DAY_OF_MONTH_AT_3PM',
        'value' => 
        array (
          'code' => '\'0 15 15 *\'',
          'attributes' => 
          array (
            'startLine' => 734,
            'endLine' => 734,
            'startTokenPos' => 2268,
            'startFilePos' => 29174,
            'endTokenPos' => 2268,
            'endFilePos' => 29184,
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
                'code' => '\'15th Day of Month at 3 PM\'',
                'attributes' => 
                array (
                  'startLine' => 732,
                  'endLine' => 732,
                  'startTokenPos' => 2251,
                  'startFilePos' => 29003,
                  'endTokenPos' => 2251,
                  'endFilePos' => 29029,
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
                'code' => '\'Cron expression for executing a task on the 15th day of every month at 3 PM.\'',
                'attributes' => 
                array (
                  'startLine' => 733,
                  'endLine' => 733,
                  'startTokenPos' => 2258,
                  'startFilePos' => 29051,
                  'endTokenPos' => 2258,
                  'endFilePos' => 29128,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes on the 15th day of every month at 3 PM.
 */',
        'startLine' => 732,
        'endLine' => 734,
        'startColumn' => 5,
        'endColumn' => 54,
      ),
      'EVERY_HOUR_BETWEEN_8AM_AND_6PM_ON_WEEKDAYS' => 
      array (
        'name' => 'EVERY_HOUR_BETWEEN_8AM_AND_6PM_ON_WEEKDAYS',
        'value' => 
        array (
          'code' => '\'0 8-18 * * 1-5\'',
          'attributes' => 
          array (
            'startLine' => 741,
            'endLine' => 741,
            'startTokenPos' => 2293,
            'startFilePos' => 29524,
            'endTokenPos' => 2293,
            'endFilePos' => 29539,
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
                'code' => '\'Every Hour Between 8 AM and 6 PM on Weekdays\'',
                'attributes' => 
                array (
                  'startLine' => 739,
                  'endLine' => 739,
                  'startTokenPos' => 2276,
                  'startFilePos' => 29297,
                  'endTokenPos' => 2276,
                  'endFilePos' => 29342,
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
                'code' => '\'Cron expression for executing a task every hour between 8 AM and 6 PM on weekdays (Monday to Friday).\'',
                'attributes' => 
                array (
                  'startLine' => 740,
                  'endLine' => 740,
                  'startTokenPos' => 2283,
                  'startFilePos' => 29364,
                  'endTokenPos' => 2283,
                  'endFilePos' => 29466,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every hour between 8 AM and 6 PM on weekdays (Monday to Friday).
 */',
        'startLine' => 739,
        'endLine' => 741,
        'startColumn' => 5,
        'endColumn' => 71,
      ),
      'EVERY_15_MINUTES' => 
      array (
        'name' => 'EVERY_15_MINUTES',
        'value' => 
        array (
          'code' => '\'*/15 * * *\'',
          'attributes' => 
          array (
            'startLine' => 748,
            'endLine' => 748,
            'startTokenPos' => 2318,
            'startFilePos' => 29731,
            'endTokenPos' => 2318,
            'endFilePos' => 29742,
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
                'code' => '\'Every 15 Minutes\'',
                'attributes' => 
                array (
                  'startLine' => 746,
                  'endLine' => 746,
                  'startTokenPos' => 2301,
                  'startFilePos' => 29605,
                  'endTokenPos' => 2301,
                  'endFilePos' => 29622,
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
                'code' => '\'Cron expression for executing a task every 15 minutes.\'',
                'attributes' => 
                array (
                  'startLine' => 747,
                  'endLine' => 747,
                  'startTokenPos' => 2308,
                  'startFilePos' => 29644,
                  'endTokenPos' => 2308,
                  'endFilePos' => 29699,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 15 minutes.
 */',
        'startLine' => 746,
        'endLine' => 748,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'EVERY_20_MINUTES' => 
      array (
        'name' => 'EVERY_20_MINUTES',
        'value' => 
        array (
          'code' => '\'*/20 * * *\'',
          'attributes' => 
          array (
            'startLine' => 755,
            'endLine' => 755,
            'startTokenPos' => 2343,
            'startFilePos' => 29934,
            'endTokenPos' => 2343,
            'endFilePos' => 29945,
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
                'code' => '\'Every 20 Minutes\'',
                'attributes' => 
                array (
                  'startLine' => 753,
                  'endLine' => 753,
                  'startTokenPos' => 2326,
                  'startFilePos' => 29808,
                  'endTokenPos' => 2326,
                  'endFilePos' => 29825,
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
                'code' => '\'Cron expression for executing a task every 20 minutes.\'',
                'attributes' => 
                array (
                  'startLine' => 754,
                  'endLine' => 754,
                  'startTokenPos' => 2333,
                  'startFilePos' => 29847,
                  'endTokenPos' => 2333,
                  'endFilePos' => 29902,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 20 minutes.
 */',
        'startLine' => 753,
        'endLine' => 755,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'EVERY_45_MINUTES' => 
      array (
        'name' => 'EVERY_45_MINUTES',
        'value' => 
        array (
          'code' => '\'*/45 * * *\'',
          'attributes' => 
          array (
            'startLine' => 762,
            'endLine' => 762,
            'startTokenPos' => 2368,
            'startFilePos' => 30137,
            'endTokenPos' => 2368,
            'endFilePos' => 30148,
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
                'code' => '\'Every 45 Minutes\'',
                'attributes' => 
                array (
                  'startLine' => 760,
                  'endLine' => 760,
                  'startTokenPos' => 2351,
                  'startFilePos' => 30011,
                  'endTokenPos' => 2351,
                  'endFilePos' => 30028,
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
                'code' => '\'Cron expression for executing a task every 45 minutes.\'',
                'attributes' => 
                array (
                  'startLine' => 761,
                  'endLine' => 761,
                  'startTokenPos' => 2358,
                  'startFilePos' => 30050,
                  'endTokenPos' => 2358,
                  'endFilePos' => 30105,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Executes every 45 minutes.
 */',
        'startLine' => 760,
        'endLine' => 762,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
    ),
  ),
));