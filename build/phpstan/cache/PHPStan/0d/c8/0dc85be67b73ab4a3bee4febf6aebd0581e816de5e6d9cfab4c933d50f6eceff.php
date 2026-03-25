<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Support/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-transform
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-60a6387a3241a9d7780bf04bf2d928ce75e6a37c78cca9d9e3a8ee7599e3f613',
   'data' => 
  array (
    'name' => 'transform',
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
        'startLine' => 489,
        'endLine' => 489,
        'startColumn' => 24,
        'endColumn' => 29,
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
        'startLine' => 489,
        'endLine' => 489,
        'startColumn' => 32,
        'endColumn' => 49,
        'parameterIndex' => 1,
        'isOptional' => false,
      ),
      'default' => 
      array (
        'name' => 'default',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 489,
            'endLine' => 489,
            'startTokenPos' => 2058,
            'startFilePos' => 12781,
            'endTokenPos' => 2058,
            'endFilePos' => 12784,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 489,
        'endLine' => 489,
        'startColumn' => 52,
        'endColumn' => 66,
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
 * Transform the given value if it is present.
 *
 * @template TValue
 * @template TReturn
 * @template TDefault
 *
 * @param  TValue  $value
 * @param  callable(TValue): TReturn  $callback
 * @param  TDefault|callable(TValue): TDefault  $default
 * @return ($value is empty ? TDefault : TReturn)
 */',
    'startLine' => 489,
    'endLine' => 500,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => false,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'transform',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Support/helpers.php',
      ),
    ),
  ),
));