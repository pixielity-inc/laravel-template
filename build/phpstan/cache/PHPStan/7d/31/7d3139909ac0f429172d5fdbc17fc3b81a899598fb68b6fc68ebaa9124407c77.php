<?php declare(strict_types = 1);

// osfsl-/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Reflection/Reflector.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Reflector
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-9bbd0af7259305f615b3059f98e9a838e4e74abb2b898302a14daaee3e26c40d-8.4.19-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Reflector',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Reflection/Reflector.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support',
    'name' => 'Illuminate\\Support\\Reflector',
    'shortName' => 'Reflector',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 213,
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
      'isCallable' => 
      array (
        'name' => 'isCallable',
        'parameters' => 
        array (
          'var' => 
          array (
            'name' => 'var',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 39,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'syntaxOnly' => 
          array (
            'name' => 'syntaxOnly',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 21,
                'endLine' => 21,
                'startTokenPos' => 60,
                'startFilePos' => 423,
                'endTokenPos' => 60,
                'endFilePos' => 427,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 21,
            'endLine' => 21,
            'startColumn' => 45,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * This is a PHP 7.4 compatible implementation of is_callable.
 *
 * @param  mixed  $var
 * @param  bool  $syntaxOnly
 * @return bool
 */',
        'startLine' => 21,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
        'aliasName' => NULL,
      ),
      'getClassAttribute' => 
      array (
        'name' => 'getClassAttribute',
        'parameters' => 
        array (
          'objectOrClass' => 
          array (
            'name' => 'objectOrClass',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 46,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attribute' => 
          array (
            'name' => 'attribute',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 62,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'ascend' => 
          array (
            'name' => 'ascend',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 70,
                'endLine' => 70,
                'startTokenPos' => 397,
                'startFilePos' => 1844,
                'endTokenPos' => 397,
                'endFilePos' => 1848,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 74,
            'endColumn' => 88,
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
 * Get the specified class attribute, optionally following an inheritance chain.
 *
 * @template TAttribute of object
 *
 * @param  object|class-string  $objectOrClass
 * @param  class-string<TAttribute>  $attribute
 * @param  bool  $ascend
 * @return TAttribute|null
 */',
        'startLine' => 70,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
        'aliasName' => NULL,
      ),
      'getClassAttributes' => 
      array (
        'name' => 'getClassAttributes',
        'parameters' => 
        array (
          'objectOrClass' => 
          array (
            'name' => 'objectOrClass',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'attribute' => 
          array (
            'name' => 'attribute',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 63,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'includeParents' => 
          array (
            'name' => 'includeParents',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 86,
                'endLine' => 86,
                'startTokenPos' => 448,
                'startFilePos' => 2547,
                'endTokenPos' => 448,
                'endFilePos' => 2551,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 86,
            'endLine' => 86,
            'startColumn' => 75,
            'endColumn' => 97,
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
 * Get the specified class attribute(s), optionally following an inheritance chain.
 *
 * @template TTarget of object
 * @template TAttribute of object
 *
 * @param  TTarget|class-string<TTarget>  $objectOrClass
 * @param  class-string<TAttribute>  $attribute
 * @param  bool  $includeParents
 * @return ($includeParents is true ? Collection<class-string<contravariant TTarget>, Collection<int, TAttribute>> : Collection<int, TAttribute>)
 */',
        'startLine' => 86,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
        'aliasName' => NULL,
      ),
      'getParameterClassName' => 
      array (
        'name' => 'getParameterClassName',
        'parameters' => 
        array (
          'parameter' => 
          array (
            'name' => 'parameter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 50,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the class name of the given parameter\'s type, if possible.
 *
 * @param  \\ReflectionParameter  $parameter
 * @return string|null
 */',
        'startLine' => 108,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
        'aliasName' => NULL,
      ),
      'getParameterClassNames' => 
      array (
        'name' => 'getParameterClassNames',
        'parameters' => 
        array (
          'parameter' => 
          array (
            'name' => 'parameter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 125,
            'endLine' => 125,
            'startColumn' => 51,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the class names of the given parameter\'s type, including union types.
 *
 * @param  \\ReflectionParameter  $parameter
 * @return array
 */',
        'startLine' => 125,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
        'aliasName' => NULL,
      ),
      'getTypeName' => 
      array (
        'name' => 'getTypeName',
        'parameters' => 
        array (
          'parameter' => 
          array (
            'name' => 'parameter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 55,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the given type\'s class name.
 *
 * @param  \\ReflectionParameter  $parameter
 * @param  \\ReflectionNamedType  $type
 * @return string
 */',
        'startLine' => 153,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
        'aliasName' => NULL,
      ),
      'isParameterSubclassOf' => 
      array (
        'name' => 'isParameterSubclassOf',
        'parameters' => 
        array (
          'parameter' => 
          array (
            'name' => 'parameter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 50,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'className' => 
          array (
            'name' => 'className',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 62,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the parameter\'s type is a subclass of the given type.
 *
 * @param  \\ReflectionParameter  $parameter
 * @param  string  $className
 * @return bool
 */',
        'startLine' => 177,
        'endLine' => 184,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
        'aliasName' => NULL,
      ),
      'isParameterBackedEnumWithStringBackingType' => 
      array (
        'name' => 'isParameterBackedEnumWithStringBackingType',
        'parameters' => 
        array (
          'parameter' => 
          array (
            'name' => 'parameter',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 192,
            'endLine' => 192,
            'startColumn' => 71,
            'endColumn' => 80,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the parameter\'s type is a Backed Enum with a string backing type.
 *
 * @param  \\ReflectionParameter  $parameter
 * @return bool
 */',
        'startLine' => 192,
        'endLine' => 212,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Reflector',
        'implementingClassName' => 'Illuminate\\Support\\Reflector',
        'currentClassName' => 'Illuminate\\Support\\Reflector',
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