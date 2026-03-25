<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Support/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-throw_unless
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-60a6387a3241a9d7780bf04bf2d928ce75e6a37c78cca9d9e3a8ee7599e3f613',
   'data' => 
  array (
    'name' => 'throw_unless',
    'parameters' => 
    array (
      'condition' => 
      array (
        'name' => 'condition',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 449,
        'endLine' => 449,
        'startColumn' => 27,
        'endColumn' => 36,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'exception' => 
      array (
        'name' => 'exception',
        'default' => 
        array (
          'code' => '\'RuntimeException\'',
          'attributes' => 
          array (
            'startLine' => 449,
            'endLine' => 449,
            'startTokenPos' => 1918,
            'startFilePos' => 11750,
            'endTokenPos' => 1918,
            'endFilePos' => 11767,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 449,
        'endLine' => 449,
        'startColumn' => 39,
        'endColumn' => 69,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'parameters' => 
      array (
        'name' => 'parameters',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => true,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 449,
        'endLine' => 449,
        'startColumn' => 72,
        'endColumn' => 85,
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
 * Throw the given exception unless the given condition is true.
 *
 * @template TValue
 * @template TParams of mixed
 * @template TException of \\Throwable
 * @template TExceptionValue of TException|class-string<TException>|string
 *
 * @param  TValue  $condition
 * @param  Closure(TParams): TExceptionValue|TExceptionValue  $exception
 * @param  TParams  ...$parameters
 * @return ($condition is false ? never : ($condition is non-empty-mixed ? TValue : never))
 *
 * @throws TException
 */',
    'startLine' => 449,
    'endLine' => 454,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => true,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'throw_unless',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Support/helpers.php',
      ),
    ),
  ),
));