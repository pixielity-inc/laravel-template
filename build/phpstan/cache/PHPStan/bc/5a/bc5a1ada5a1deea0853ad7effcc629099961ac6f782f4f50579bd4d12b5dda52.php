<?php declare(strict_types = 1);

// osfsl-/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Exceptions\Handler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5b100b0b2dcbc2eaa3eb4fa563fa73cd7485104d7fd7d76b71ec487024f445fd-8.4.19-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Exceptions',
    'name' => 'Illuminate\\Foundation\\Exceptions\\Handler',
    'shortName' => 'Handler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 57,
    'endLine' => 1112,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Debug\\ExceptionHandler',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The container implementation.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dontReport' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'dontReport',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 308,
            'startFilePos' => 2820,
            'endTokenPos' => 309,
            'endFilePos' => 2821,
          ),
        ),
        'docComment' => '/**
 * A list of the exception types that are not reported.
 *
 * @var array<int, class-string<\\Throwable>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dontReportCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'dontReportCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 320,
            'startFilePos' => 2989,
            'endTokenPos' => 321,
            'endFilePos' => 2990,
          ),
        ),
        'docComment' => '/**
 * The callbacks that inspect exceptions to determine if they should be reported.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'reportCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 332,
            'startFilePos' => 3175,
            'endTokenPos' => 333,
            'endFilePos' => 3176,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be used during reporting.
 *
 * @var \\Illuminate\\Foundation\\Exceptions\\ReportableHandler[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'levels' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'levels',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 344,
            'startFilePos' => 3364,
            'endTokenPos' => 345,
            'endFilePos' => 3365,
          ),
        ),
        'docComment' => '/**
 * A map of exceptions with their corresponding custom log levels.
 *
 * @var array<class-string<\\Throwable>, \\Psr\\Log\\LogLevel::*>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'throttleCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'throttleCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 101,
            'endLine' => 101,
            'startTokenPos' => 356,
            'startFilePos' => 3521,
            'endTokenPos' => 357,
            'endFilePos' => 3522,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be used to throttle reportable exceptions.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 101,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'contextCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'contextCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 108,
            'endLine' => 108,
            'startTokenPos' => 368,
            'startFilePos' => 3675,
            'endTokenPos' => 369,
            'endFilePos' => 3676,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be used to build exception context data.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'renderCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'renderCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 115,
            'startTokenPos' => 380,
            'startFilePos' => 3818,
            'endTokenPos' => 381,
            'endFilePos' => 3819,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be used during rendering.
 *
 * @var \\Closure[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'shouldRenderJsonWhenCallback' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'shouldRenderJsonWhenCallback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The callback that determines if the exception handler response should be JSON.
 *
 * @var callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'finalizeResponseCallback' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'finalizeResponseCallback',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The callback that prepares responses to be returned to the browser.
 *
 * @var callable|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'exceptionMap' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'exceptionMap',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 136,
            'endLine' => 136,
            'startTokenPos' => 406,
            'startFilePos' => 4301,
            'endTokenPos' => 407,
            'endFilePos' => 4302,
          ),
        ),
        'docComment' => '/**
 * The registered exception mappings.
 *
 * @var array<string, \\Closure>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hashThrottleKeys' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'hashThrottleKeys',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 418,
            'startFilePos' => 4435,
            'endTokenPos' => 418,
            'endFilePos' => 4438,
          ),
        ),
        'docComment' => '/**
 * Indicates that throttled keys should be hashed.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'internalDontReport' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'internalDontReport',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\\Illuminate\\Auth\\AuthenticationException::class, \\Illuminate\\Auth\\Access\\AuthorizationException::class, \\Illuminate\\Routing\\Exceptions\\BackedEnumCaseNotFoundException::class, \\Symfony\\Component\\HttpKernel\\Exception\\HttpException::class, \\Illuminate\\Http\\Exceptions\\HttpResponseException::class, \\Illuminate\\Database\\Eloquent\\ModelNotFoundException::class, \\Illuminate\\Database\\MultipleRecordsFoundException::class, \\Illuminate\\Http\\Exceptions\\OriginMismatchException::class, \\Illuminate\\Database\\RecordNotFoundException::class, \\Illuminate\\Database\\RecordsNotFoundException::class, \\Symfony\\Component\\HttpFoundation\\Exception\\RequestExceptionInterface::class, \\Illuminate\\Session\\TokenMismatchException::class, \\Illuminate\\Validation\\ValidationException::class]',
          'attributes' => 
          array (
            'startLine' => 150,
            'endLine' => 164,
            'startTokenPos' => 429,
            'startFilePos' => 4625,
            'endTokenPos' => 496,
            'endFilePos' => 5149,
          ),
        ),
        'docComment' => '/**
 * A list of the internal exception types that should not be reported.
 *
 * @var array<int, class-string<\\Throwable>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 150,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dontFlash' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'dontFlash',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'current_password\', \'password\', \'password_confirmation\']',
          'attributes' => 
          array (
            'startLine' => 171,
            'endLine' => 175,
            'startTokenPos' => 507,
            'startFilePos' => 5312,
            'endTokenPos' => 518,
            'endFilePos' => 5399,
          ),
        ),
        'docComment' => '/**
 * A list of the inputs that are never flashed for validation exceptions.
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 171,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'withoutDuplicates' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'withoutDuplicates',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 182,
            'endLine' => 182,
            'startTokenPos' => 529,
            'startFilePos' => 5552,
            'endTokenPos' => 529,
            'endFilePos' => 5556,
          ),
        ),
        'docComment' => '/**
 * Indicates that an exception instance should only be reported once.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 182,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'reportedExceptionMap' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'name' => 'reportedExceptionMap',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The already reported exception map.
 *
 * @var \\WeakMap
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 189,
        'endLine' => 189,
        'startColumn' => 5,
        'endColumn' => 36,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 33,
            'endColumn' => 52,
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
 * Create a new exception handler instance.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 */',
        'startLine' => 196,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the exception handling callbacks for the application.
 *
 * @return void
 */',
        'startLine' => 210,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'reportable' => 
      array (
        'name' => 'reportable',
        'parameters' => 
        array (
          'reportUsing' => 
          array (
            'name' => 'reportUsing',
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
            'startLine' => 221,
            'endLine' => 221,
            'startColumn' => 32,
            'endColumn' => 52,
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
 * Register a reportable callback.
 *
 * @param  callable  $reportUsing
 * @return \\Illuminate\\Foundation\\Exceptions\\ReportableHandler
 */',
        'startLine' => 221,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderable' => 
      array (
        'name' => 'renderable',
        'parameters' => 
        array (
          'renderUsing' => 
          array (
            'name' => 'renderUsing',
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
            'startLine' => 238,
            'endLine' => 238,
            'startColumn' => 32,
            'endColumn' => 52,
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
 * Register a renderable callback.
 *
 * @param  callable  $renderUsing
 * @return $this
 */',
        'startLine' => 238,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'map' => 
      array (
        'name' => 'map',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 258,
                'endLine' => 258,
                'startTokenPos' => 755,
                'startFilePos' => 7311,
                'endTokenPos' => 755,
                'endFilePos' => 7314,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 32,
            'endColumn' => 41,
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
 * Register a new exception mapping.
 *
 * @param  \\Closure|string  $from
 * @param  \\Closure|string|null  $to
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 258,
        'endLine' => 275,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'dontReport' => 
      array (
        'name' => 'dontReport',
        'parameters' => 
        array (
          'exceptions' => 
          array (
            'name' => 'exceptions',
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 32,
            'endColumn' => 55,
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
 * Indicate that the given exception type should not be reported.
 *
 * Alias of "ignore".
 *
 * @param  array|string  $exceptions
 * @return $this
 */',
        'startLine' => 285,
        'endLine' => 288,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'dontReportWhen' => 
      array (
        'name' => 'dontReportWhen',
        'parameters' => 
        array (
          'dontReportWhen' => 
          array (
            'name' => 'dontReportWhen',
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
            'startLine' => 296,
            'endLine' => 296,
            'startColumn' => 36,
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
 * Register a callback to determine if an exception should not be reported.
 *
 * @param  (callable(\\Throwable): bool)  $dontReportWhen
 * @return $this
 */',
        'startLine' => 296,
        'endLine' => 305,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'ignore' => 
      array (
        'name' => 'ignore',
        'parameters' => 
        array (
          'exceptions' => 
          array (
            'name' => 'exceptions',
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 28,
            'endColumn' => 51,
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
 * Indicate that the given exception type should not be reported.
 *
 * @param  array|string  $exceptions
 * @return $this
 */',
        'startLine' => 313,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'dontFlash' => 
      array (
        'name' => 'dontFlash',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 31,
            'endColumn' => 54,
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
 * Indicate that the given attributes should never be flashed to the session on validation errors.
 *
 * @param  array|string  $attributes
 * @return $this
 */',
        'startLine' => 328,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'level' => 
      array (
        'name' => 'level',
        'parameters' => 
        array (
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
            'startLine' => 344,
            'endLine' => 344,
            'startColumn' => 27,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'level' => 
          array (
            'name' => 'level',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 344,
            'endLine' => 344,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Set the log level for the given exception type.
 *
 * @param  class-string<\\Throwable>  $type
 * @param  \\Psr\\Log\\LogLevel::*  $level
 * @return $this
 */',
        'startLine' => 344,
        'endLine' => 349,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'report' => 
      array (
        'name' => 'report',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 359,
            'endLine' => 359,
            'startColumn' => 28,
            'endColumn' => 39,
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
 * Report or log an exception.
 *
 * @param  \\Throwable  $e
 * @return void
 *
 * @throws \\Throwable
 */',
        'startLine' => 359,
        'endLine' => 368,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'reportThrowable' => 
      array (
        'name' => 'reportThrowable',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 378,
            'endLine' => 378,
            'startColumn' => 40,
            'endColumn' => 51,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reports error based on report method on exception or to logger.
 *
 * @param  \\Throwable  $e
 * @return void
 *
 * @throws \\Throwable
 */',
        'startLine' => 378,
        'endLine' => 406,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'shouldReport' => 
      array (
        'name' => 'shouldReport',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 34,
            'endColumn' => 45,
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
 * Determine if the exception should be reported.
 *
 * @param  \\Throwable  $e
 * @return bool
 */',
        'startLine' => 414,
        'endLine' => 417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'shouldntReport' => 
      array (
        'name' => 'shouldntReport',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 425,
            'endLine' => 425,
            'startColumn' => 39,
            'endColumn' => 50,
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
 * Determine if the exception is in the "do not report" list.
 *
 * @param  \\Throwable  $e
 * @return bool
 */',
        'startLine' => 425,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'throttle' => 
      array (
        'name' => 'throttle',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 471,
            'endLine' => 471,
            'startColumn' => 33,
            'endColumn' => 44,
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
 * Throttle the given exception.
 *
 * @param  \\Throwable  $e
 * @return \\Illuminate\\Support\\Lottery|\\Illuminate\\Cache\\RateLimiting\\Limit|null
 */',
        'startLine' => 471,
        'endLine' => 486,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'throttleUsing' => 
      array (
        'name' => 'throttleUsing',
        'parameters' => 
        array (
          'throttleUsing' => 
          array (
            'name' => 'throttleUsing',
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
            'startLine' => 494,
            'endLine' => 494,
            'startColumn' => 35,
            'endColumn' => 57,
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
 * Specify the callback that should be used to throttle reportable exceptions.
 *
 * @param  callable  $throttleUsing
 * @return $this
 */',
        'startLine' => 494,
        'endLine' => 503,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'stopIgnoring' => 
      array (
        'name' => 'stopIgnoring',
        'parameters' => 
        array (
          'exceptions' => 
          array (
            'name' => 'exceptions',
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 511,
            'endLine' => 511,
            'startColumn' => 34,
            'endColumn' => 57,
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
 * Remove the given exception class from the list of exceptions that should be ignored.
 *
 * @param  array|string  $exceptions
 * @return $this
 */',
        'startLine' => 511,
        'endLine' => 526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'buildExceptionContext' => 
      array (
        'name' => 'buildExceptionContext',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 534,
            'endLine' => 534,
            'startColumn' => 46,
            'endColumn' => 57,
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
 * Create the context array for logging the given exception.
 *
 * @param  \\Throwable  $e
 * @return array
 */',
        'startLine' => 534,
        'endLine' => 541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'exceptionContext' => 
      array (
        'name' => 'exceptionContext',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 549,
            'endLine' => 549,
            'startColumn' => 41,
            'endColumn' => 52,
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
 * Get the default exception context variables for logging.
 *
 * @param  \\Throwable  $e
 * @return array
 */',
        'startLine' => 549,
        'endLine' => 562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'context' => 
      array (
        'name' => 'context',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default context variables for logging.
 *
 * @return array
 */',
        'startLine' => 569,
        'endLine' => 578,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'buildContextUsing' => 
      array (
        'name' => 'buildContextUsing',
        'parameters' => 
        array (
          'contextCallback' => 
          array (
            'name' => 'contextCallback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 586,
            'endLine' => 586,
            'startColumn' => 39,
            'endColumn' => 62,
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
 * Register a closure that should be used to build exception context data.
 *
 * @param  \\Closure  $contextCallback
 * @return $this
 */',
        'startLine' => 586,
        'endLine' => 591,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 602,
            'endLine' => 602,
            'startColumn' => 38,
            'endColumn' => 49,
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
 * Render an exception into an HTTP response.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Throwable  $e
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 *
 * @throws \\Throwable
 */',
        'startLine' => 602,
        'endLine' => 630,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'finalizeRenderedResponse' => 
      array (
        'name' => 'finalizeRenderedResponse',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 49,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 59,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 70,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepare the final, rendered response to be returned to the browser.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Symfony\\Component\\HttpFoundation\\Response  $response
 * @param  \\Throwable  $e
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 640,
        'endLine' => 645,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'respondUsing' => 
      array (
        'name' => 'respondUsing',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Prepare the final, rendered response for an exception using the given callback.
 *
 * @param  callable  $callback
 * @return $this
 */',
        'startLine' => 653,
        'endLine' => 658,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'prepareException' => 
      array (
        'name' => 'prepareException',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 41,
            'endColumn' => 52,
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
 * Prepare exception for rendering.
 *
 * @param  \\Throwable  $e
 * @return \\Throwable
 */',
        'startLine' => 666,
        'endLine' => 682,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'mapException' => 
      array (
        'name' => 'mapException',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 690,
            'endLine' => 690,
            'startColumn' => 37,
            'endColumn' => 48,
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
 * Map the exception using a registered mapper if possible.
 *
 * @param  \\Throwable  $e
 * @return \\Throwable
 */',
        'startLine' => 690,
        'endLine' => 704,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderViaCallbacks' => 
      array (
        'name' => 'renderViaCallbacks',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 715,
            'endLine' => 715,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 715,
            'endLine' => 715,
            'startColumn' => 53,
            'endColumn' => 64,
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
 * Try to render a response from request and exception via render callbacks.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Throwable  $e
 * @return mixed
 *
 * @throws \\ReflectionException
 */',
        'startLine' => 715,
        'endLine' => 728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderExceptionResponse' => 
      array (
        'name' => 'renderExceptionResponse',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 737,
            'endLine' => 737,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 737,
            'endLine' => 737,
            'startColumn' => 58,
            'endColumn' => 69,
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
 * Render a default exception response if any.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Throwable  $e
 * @return \\Illuminate\\Http\\Response|\\Illuminate\\Http\\JsonResponse|\\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 737,
        'endLine' => 742,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'unauthenticated' => 
      array (
        'name' => 'unauthenticated',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 751,
            'endLine' => 751,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Auth\\AuthenticationException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 751,
            'endLine' => 751,
            'startColumn' => 50,
            'endColumn' => 83,
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
 * Convert an authentication exception into a response.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Illuminate\\Auth\\AuthenticationException  $exception
 * @return \\Illuminate\\Http\\Response|\\Illuminate\\Http\\JsonResponse|\\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 751,
        'endLine' => 756,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'convertValidationExceptionToResponse' => 
      array (
        'name' => 'convertValidationExceptionToResponse',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Validation\\ValidationException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 765,
            'endLine' => 765,
            'startColumn' => 61,
            'endColumn' => 82,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 765,
            'endLine' => 765,
            'startColumn' => 85,
            'endColumn' => 92,
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
 * Create a response object from the given validation exception.
 *
 * @param  \\Illuminate\\Validation\\ValidationException  $e
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 765,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'invalid' => 
      array (
        'name' => 'invalid',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 783,
            'endLine' => 783,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Validation\\ValidationException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 783,
            'endLine' => 783,
            'startColumn' => 42,
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
 * Convert a validation exception into a response.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Illuminate\\Validation\\ValidationException  $exception
 * @return \\Illuminate\\Http\\Response|\\Illuminate\\Http\\JsonResponse|\\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 783,
        'endLine' => 788,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'invalidJson' => 
      array (
        'name' => 'invalidJson',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 797,
            'endLine' => 797,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Validation\\ValidationException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 797,
            'endLine' => 797,
            'startColumn' => 46,
            'endColumn' => 75,
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
 * Convert a validation exception into a JSON response.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Illuminate\\Validation\\ValidationException  $exception
 * @return \\Illuminate\\Http\\JsonResponse
 */',
        'startLine' => 797,
        'endLine' => 803,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'shouldReturnJson' => 
      array (
        'name' => 'shouldReturnJson',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 812,
            'endLine' => 812,
            'startColumn' => 41,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 812,
            'endLine' => 812,
            'startColumn' => 51,
            'endColumn' => 62,
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
 * Determine if the exception handler response should be JSON.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Throwable  $e
 * @return bool
 */',
        'startLine' => 812,
        'endLine' => 817,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'shouldRenderJsonWhen' => 
      array (
        'name' => 'shouldRenderJsonWhen',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 825,
            'endLine' => 825,
            'startColumn' => 42,
            'endColumn' => 50,
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
 * Register the callable that determines if the exception handler response should be JSON.
 *
 * @param  callable(\\Illuminate\\Http\\Request $request, \\Throwable): bool  $callback
 * @return $this
 */',
        'startLine' => 825,
        'endLine' => 830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'prepareResponse' => 
      array (
        'name' => 'prepareResponse',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 839,
            'endLine' => 839,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 839,
            'endLine' => 839,
            'startColumn' => 50,
            'endColumn' => 61,
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
 * Prepare a response for the given exception.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Throwable  $e
 * @return \\Illuminate\\Http\\Response|\\Illuminate\\Http\\JsonResponse|\\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 839,
        'endLine' => 852,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'convertExceptionToResponse' => 
      array (
        'name' => 'convertExceptionToResponse',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 860,
            'endLine' => 860,
            'startColumn' => 51,
            'endColumn' => 62,
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
 * Create a Symfony response for the given exception.
 *
 * @param  \\Throwable  $e
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 860,
        'endLine' => 867,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderExceptionContent' => 
      array (
        'name' => 'renderExceptionContent',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 875,
            'endLine' => 875,
            'startColumn' => 47,
            'endColumn' => 58,
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
 * Get the response content for the given exception.
 *
 * @param  \\Throwable  $e
 * @return string
 */',
        'startLine' => 875,
        'endLine' => 890,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderExceptionWithCustomRenderer' => 
      array (
        'name' => 'renderExceptionWithCustomRenderer',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 898,
            'endLine' => 898,
            'startColumn' => 58,
            'endColumn' => 69,
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
 * Render an exception to a string using the registered `ExceptionRenderer`.
 *
 * @param  \\Throwable  $e
 * @return string
 */',
        'startLine' => 898,
        'endLine' => 901,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderExceptionWithSymfony' => 
      array (
        'name' => 'renderExceptionWithSymfony',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 910,
            'endLine' => 910,
            'startColumn' => 51,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'debug' => 
          array (
            'name' => 'debug',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 910,
            'endLine' => 910,
            'startColumn' => 65,
            'endColumn' => 70,
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
 * Render an exception to a string using Symfony.
 *
 * @param  \\Throwable  $e
 * @param  bool  $debug
 * @return string
 */',
        'startLine' => 910,
        'endLine' => 915,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderHttpException' => 
      array (
        'name' => 'renderHttpException',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 925,
            'endLine' => 925,
            'startColumn' => 44,
            'endColumn' => 68,
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
 * Render the given HttpException.
 *
 * @param  \\Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface  $e
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 *
 * @throws \\Throwable
 */',
        'startLine' => 925,
        'endLine' => 943,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'registerErrorViewPaths' => 
      array (
        'name' => 'registerErrorViewPaths',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the error template hint paths.
 *
 * @return void
 */',
        'startLine' => 950,
        'endLine' => 953,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'getHttpExceptionView' => 
      array (
        'name' => 'getHttpExceptionView',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 961,
            'endLine' => 961,
            'startColumn' => 45,
            'endColumn' => 69,
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
 * Get the view used to render HTTP exceptions.
 *
 * @param  \\Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface  $e
 * @return string|null
 */',
        'startLine' => 961,
        'endLine' => 976,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'toIlluminateResponse' => 
      array (
        'name' => 'toIlluminateResponse',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 985,
            'endLine' => 985,
            'startColumn' => 45,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 985,
            'endLine' => 985,
            'startColumn' => 56,
            'endColumn' => 67,
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
 * Map the given exception into an Illuminate response.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Response  $response
 * @param  \\Throwable  $e
 * @return \\Illuminate\\Http\\Response|\\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 985,
        'endLine' => 998,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'prepareJsonResponse' => 
      array (
        'name' => 'prepareJsonResponse',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1007,
            'endLine' => 1007,
            'startColumn' => 44,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 1007,
            'endLine' => 1007,
            'startColumn' => 54,
            'endColumn' => 65,
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
 * Prepare a JSON response for the given exception.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Throwable  $e
 * @return \\Illuminate\\Http\\JsonResponse
 */',
        'startLine' => 1007,
        'endLine' => 1015,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'convertExceptionToArray' => 
      array (
        'name' => 'convertExceptionToArray',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 1023,
            'endLine' => 1023,
            'startColumn' => 48,
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
 * Convert the given exception to an array.
 *
 * @param  \\Throwable  $e
 * @return array
 */',
        'startLine' => 1023,
        'endLine' => 1034,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'renderForConsole' => 
      array (
        'name' => 'renderForConsole',
        'parameters' => 
        array (
          'output' => 
          array (
            'name' => 'output',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1045,
            'endLine' => 1045,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 1045,
            'endLine' => 1045,
            'startColumn' => 47,
            'endColumn' => 58,
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
 * Render an exception to the console.
 *
 * @param  \\Symfony\\Component\\Console\\Output\\OutputInterface  $output
 * @param  \\Throwable  $e
 * @return void
 *
 * @internal This method is not meant to be used or overwritten outside the framework.
 */',
        'startLine' => 1045,
        'endLine' => 1065,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'dontReportDuplicates' => 
      array (
        'name' => 'dontReportDuplicates',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Do not report duplicate exceptions.
 *
 * @return $this
 */',
        'startLine' => 1072,
        'endLine' => 1077,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'isHttpException' => 
      array (
        'name' => 'isHttpException',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 1085,
            'endLine' => 1085,
            'startColumn' => 40,
            'endColumn' => 51,
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
 * Determine if the given exception is an HTTP exception.
 *
 * @param  \\Throwable  $e
 * @return bool
 */',
        'startLine' => 1085,
        'endLine' => 1088,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'mapLogLevel' => 
      array (
        'name' => 'mapLogLevel',
        'parameters' => 
        array (
          'e' => 
          array (
            'name' => 'e',
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
            'startLine' => 1096,
            'endLine' => 1096,
            'startColumn' => 36,
            'endColumn' => 47,
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
 * Map the exception to a log level.
 *
 * @param  \\Throwable  $e
 * @return \\Psr\\Log\\LogLevel::*
 */',
        'startLine' => 1096,
        'endLine' => 1101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'newLogger' => 
      array (
        'name' => 'newLogger',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new logger instance.
 *
 * @return \\Psr\\Log\\LoggerInterface
 */',
        'startLine' => 1108,
        'endLine' => 1111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Exceptions',
        'declaringClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'implementingClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
        'currentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
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