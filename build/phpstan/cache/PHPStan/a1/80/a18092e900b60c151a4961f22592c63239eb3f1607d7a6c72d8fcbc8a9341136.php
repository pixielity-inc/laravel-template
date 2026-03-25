<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Helpers/Polyfills.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-http_build_url
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-57223bd1f792f94edf63a8635dda0fc04193ee09f63be1e7e8611b5a988fd039',
   'data' => 
  array (
    'name' => 'http_build_url',
    'parameters' => 
    array (
      'url' => 
      array (
        'name' => 'url',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 217,
        'endLine' => 217,
        'startColumn' => 29,
        'endColumn' => 32,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'replace' => 
      array (
        'name' => 'replace',
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 217,
            'endLine' => 217,
            'startTokenPos' => 442,
            'startFilePos' => 6366,
            'endTokenPos' => 443,
            'endFilePos' => 6367,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 217,
        'endLine' => 217,
        'startColumn' => 35,
        'endColumn' => 47,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'flags' => 
      array (
        'name' => 'flags',
        'default' => 
        array (
          'code' => '\\HTTP_URL_REPLACE',
          'attributes' => 
          array (
            'startLine' => 217,
            'endLine' => 217,
            'startTokenPos' => 450,
            'startFilePos' => 6379,
            'endTokenPos' => 450,
            'endFilePos' => 6394,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 217,
        'endLine' => 217,
        'startColumn' => 50,
        'endColumn' => 74,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'newUrl' => 
      array (
        'name' => 'newUrl',
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 217,
            'endLine' => 217,
            'startTokenPos' => 458,
            'startFilePos' => 6408,
            'endTokenPos' => 459,
            'endFilePos' => 6409,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => true,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 217,
        'endLine' => 217,
        'startColumn' => 77,
        'endColumn' => 89,
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
 * Build a URL from its components.
 *
 * This function combines parts of a URL based on the specified flags,
 * allowing for replacement, joining paths, or joining query strings.
 *
 * @see https://github.com/jakeasmith/http_build_url
 *
 * @param  mixed  $url  (part(s) of) a URL as a string or an associative array
 *                      like that returned by parse_url()
 * @param  mixed  $replace  same as the first argument, represents parts to merge
 * @param  int  $flags  a bitmask of HTTP_URL constants; HTTP_URL_REPLACE is the default
 * @param  array  $newUrl  if set, will be populated with the parts of the composed URL
 *                         as parse_url() would return
 * @return string The constructed URL as a string.
 */',
    'startLine' => 217,
    'endLine' => 363,
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
        'name' => 'http_build_url',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Helpers/Polyfills.php',
      ),
    ),
  ),
));