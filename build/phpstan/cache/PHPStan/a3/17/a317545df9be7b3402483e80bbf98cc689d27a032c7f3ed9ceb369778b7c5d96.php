<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Solutions/AiSolutionProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Solutions\AiSolutionProvider
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-ef7f58f48d48a89b3a59c4ab6c91b24085cbeedc6dd08c9b6f2d10bd891c66de',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Solutions/AiSolutionProvider.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Solutions',
    'name' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
    'shortName' => 'AiSolutionProvider',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class AiSolutionProvider.
 *
 * This class implements the HasSolutionForThrowable interface to provide
 * solutions for throwable exceptions in the Pixielity Integration .
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 51,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Spatie\\Ignition\\Contracts\\HasSolutionsForThrowable',
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
      'canSolve' => 
      array (
        'name' => 'canSolve',
        'parameters' => 
        array (
          'throwable' => 
          array (
            'name' => 'throwable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 30,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determines if the provider can solve the given throwable.
 *
 * @param  Throwable  $throwable  The throwable exception to check.
 * @return bool True if the provider can solve the throwable; otherwise, false.
 */',
        'startLine' => 27,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
        'aliasName' => NULL,
      ),
      'getSolutions' => 
      array (
        'name' => 'getSolutions',
        'parameters' => 
        array (
          'throwable' => 
          array (
            'name' => 'throwable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 34,
            'endColumn' => 53,
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
 * Retrieves an array of solutions for the given throwable.
 *
 * @param  Throwable  $throwable  The throwable exception for which to retrieve solutions.
 * @return array<int, mixed> An array of solutions corresponding to the throwable.
 */',
        'startLine' => 46,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolutionProvider',
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