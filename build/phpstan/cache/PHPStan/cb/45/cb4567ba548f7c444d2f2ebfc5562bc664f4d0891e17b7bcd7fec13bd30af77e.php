<?php declare(strict_types = 1);

// osfsl-/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Events/Dispatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Events\Dispatcher
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dceb7d7db8423635ce7a1885835f295b6efd31badce8c6e819780a844e751e0a-8.4.19-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Events\\Dispatcher',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../laravel/framework/src/Illuminate/Events/Dispatcher.php',
      ),
    ),
    'namespace' => 'Illuminate\\Events',
    'name' => 'Illuminate\\Events\\Dispatcher',
    'shortName' => 'Dispatcher',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 41,
    'endLine' => 900,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Events\\Dispatcher',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
      1 => 'Illuminate\\Support\\Traits\\ReadsClassAttributes',
      2 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
      3 => 'Illuminate\\Support\\Queue\\Concerns\\ResolvesQueueRoutes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The IoC container instance.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'listeners' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'listeners',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 238,
            'startFilePos' => 2011,
            'endTokenPos' => 239,
            'endFilePos' => 2012,
          ),
        ),
        'docComment' => '/**
 * The registered event listeners.
 *
 * @var array<string, callable|array|class-string|null>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wildcards' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'wildcards',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 250,
            'startFilePos' => 2140,
            'endTokenPos' => 251,
            'endFilePos' => 2141,
          ),
        ),
        'docComment' => '/**
 * The wildcard listeners.
 *
 * @var array<string, \\Closure|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wildcardsCache' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'wildcardsCache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 262,
            'startFilePos' => 2281,
            'endTokenPos' => 263,
            'endFilePos' => 2282,
          ),
        ),
        'docComment' => '/**
 * The cached wildcard listeners.
 *
 * @var array<string, \\Closure|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'queueResolver' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'queueResolver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The queue resolver instance.
 *
 * @var callable(): \\Illuminate\\Contracts\\Queue\\Queue
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transactionManagerResolver' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'transactionManagerResolver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database transaction manager resolver instance.
 *
 * @var callable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'deferredEvents' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'deferredEvents',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 92,
            'startTokenPos' => 288,
            'startFilePos' => 2692,
            'endTokenPos' => 289,
            'endFilePos' => 2693,
          ),
        ),
        'docComment' => '/**
 * The currently deferred events.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'deferringEvents' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'deferringEvents',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 99,
            'endLine' => 99,
            'startTokenPos' => 300,
            'startFilePos' => 2817,
            'endTokenPos' => 300,
            'endFilePos' => 2821,
          ),
        ),
        'docComment' => '/**
 * Indicates if events should be deferred.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'eventsToDefer' => 
      array (
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'name' => 'eventsToDefer',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 106,
            'endLine' => 106,
            'startTokenPos' => 311,
            'startFilePos' => 2972,
            'endTokenPos' => 311,
            'endFilePos' => 2975,
          ),
        ),
        'docComment' => '/**
 * The specific events to defer (null means defer all events).
 *
 * @var string[]|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
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
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 111,
                'endLine' => 111,
                'startTokenPos' => 329,
                'startFilePos' => 3106,
                'endTokenPos' => 329,
                'endFilePos' => 3109,
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
                      'name' => 'Illuminate\\Contracts\\Container\\Container',
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
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 33,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new event dispatcher instance.
 */',
        'startLine' => 111,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'listen' => 
      array (
        'name' => 'listen',
        'parameters' => 
        array (
          'events' => 
          array (
            'name' => 'events',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'listener' => 
          array (
            'name' => 'listener',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 123,
                'endLine' => 123,
                'startTokenPos' => 367,
                'startFilePos' => 3511,
                'endTokenPos' => 367,
                'endFilePos' => 3514,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 37,
            'endColumn' => 52,
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
 * Register an event listener with the dispatcher.
 *
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string|string  $events
 * @param  \\Illuminate\\Events\\QueuedClosure|callable|array|class-string|null  $listener
 * @return void
 */',
        'startLine' => 123,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'setupWildcardListen' => 
      array (
        'name' => 'setupWildcardListen',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 155,
            'endLine' => 155,
            'startColumn' => 52,
            'endColumn' => 60,
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
 * Setup a wildcard listener callback.
 *
 * @param  string  $event
 * @param  \\Closure|string  $listener
 * @return void
 */',
        'startLine' => 155,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'hasListeners' => 
      array (
        'name' => 'hasListeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 168,
            'endLine' => 168,
            'startColumn' => 34,
            'endColumn' => 43,
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
 * Determine if a given event has listeners.
 *
 * @param  string  $eventName
 * @return bool
 */',
        'startLine' => 168,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'hasWildcardListeners' => 
      array (
        'name' => 'hasWildcardListeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 181,
            'endLine' => 181,
            'startColumn' => 42,
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
 * Determine if the given event has any wildcard listeners.
 *
 * @param  string  $eventName
 * @return bool
 */',
        'startLine' => 181,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'push' => 
      array (
        'name' => 'push',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 199,
            'endLine' => 199,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 199,
                'endLine' => 199,
                'startTokenPos' => 761,
                'startFilePos' => 5696,
                'endTokenPos' => 762,
                'endFilePos' => 5697,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 199,
            'endLine' => 199,
            'startColumn' => 34,
            'endColumn' => 46,
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
 * Register an event and payload to be fired later.
 *
 * @param  string  $event
 * @param  object|array  $payload
 * @return void
 */',
        'startLine' => 199,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'flush' => 
      array (
        'name' => 'flush',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 212,
            'endLine' => 212,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Flush a set of pushed events.
 *
 * @param  string  $event
 * @return void
 */',
        'startLine' => 212,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'subscribe' => 
      array (
        'name' => 'subscribe',
        'parameters' => 
        array (
          'subscriber' => 
          array (
            'name' => 'subscriber',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 31,
            'endColumn' => 41,
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
 * Register an event subscriber with the dispatcher.
 *
 * @param  object|string  $subscriber
 * @return void
 */',
        'startLine' => 223,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'resolveSubscriber' => 
      array (
        'name' => 'resolveSubscriber',
        'parameters' => 
        array (
          'subscriber' => 
          array (
            'name' => 'subscriber',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 250,
            'endLine' => 250,
            'startColumn' => 42,
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
 * Resolve the subscriber instance.
 *
 * @param  object|class-string  $subscriber
 * @return ($subscriber is object ? object : mixed)
 */',
        'startLine' => 250,
        'endLine' => 257,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'until' => 
      array (
        'name' => 'until',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 266,
                'endLine' => 266,
                'startTokenPos' => 1039,
                'startFilePos' => 7435,
                'endTokenPos' => 1040,
                'endFilePos' => 7436,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 35,
            'endColumn' => 47,
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
 * Fire an event until the first non-null response is returned.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @return array|null
 */',
        'startLine' => 266,
        'endLine' => 269,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'dispatch' => 
      array (
        'name' => 'dispatch',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 279,
                'endLine' => 279,
                'startTokenPos' => 1078,
                'startFilePos' => 7745,
                'endTokenPos' => 1079,
                'endFilePos' => 7746,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'halt' => 
          array (
            'name' => 'halt',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 279,
                'endLine' => 279,
                'startTokenPos' => 1086,
                'startFilePos' => 7757,
                'endTokenPos' => 1086,
                'endFilePos' => 7761,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 279,
            'endLine' => 279,
            'startColumn' => 53,
            'endColumn' => 65,
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
 * Fire an event and call the listeners.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @param  bool  $halt
 * @return array|null
 */',
        'startLine' => 279,
        'endLine' => 309,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'invokeListeners' => 
      array (
        'name' => 'invokeListeners',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 319,
            'endLine' => 319,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 319,
            'endLine' => 319,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'halt' => 
          array (
            'name' => 'halt',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 319,
                'endLine' => 319,
                'startTokenPos' => 1278,
                'startFilePos' => 9274,
                'endTokenPos' => 1278,
                'endFilePos' => 9278,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 319,
            'endLine' => 319,
            'startColumn' => 58,
            'endColumn' => 70,
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
 * Broadcast an event and call its listeners.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @param  bool  $halt
 * @return array|null
 */',
        'startLine' => 319,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'parseEventAndPayload' => 
      array (
        'name' => 'parseEventAndPayload',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 357,
            'endLine' => 357,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 357,
            'endLine' => 357,
            'startColumn' => 53,
            'endColumn' => 60,
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
 * Parse the given event and payload and prepare them for dispatching.
 *
 * @param  mixed  $event
 * @param  mixed  $payload
 * @return array{string, array}
 */',
        'startLine' => 357,
        'endLine' => 364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'shouldBroadcast' => 
      array (
        'name' => 'shouldBroadcast',
        'parameters' => 
        array (
          'payload' => 
          array (
            'name' => 'payload',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 371,
            'endLine' => 371,
            'startColumn' => 40,
            'endColumn' => 53,
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
 * Determine if the payload has a broadcastable event.
 *
 * @return bool
 */',
        'startLine' => 371,
        'endLine' => 376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'broadcastWhen' => 
      array (
        'name' => 'broadcastWhen',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Check if the event should be broadcasted by the condition.
 *
 * @param  mixed  $event
 * @return bool
 */',
        'startLine' => 384,
        'endLine' => 389,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'broadcastEvent' => 
      array (
        'name' => 'broadcastEvent',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 39,
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
 * Broadcast the given event class.
 *
 * @param  \\Illuminate\\Contracts\\Broadcasting\\ShouldBroadcast  $event
 * @return void
 */',
        'startLine' => 397,
        'endLine' => 400,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'getListeners' => 
      array (
        'name' => 'getListeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 408,
            'endLine' => 408,
            'startColumn' => 34,
            'endColumn' => 43,
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
 * Get all of the listeners for a given event name.
 *
 * @param  string  $eventName
 * @return array
 */',
        'startLine' => 408,
        'endLine' => 418,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'getWildcardListeners' => 
      array (
        'name' => 'getWildcardListeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 426,
            'endLine' => 426,
            'startColumn' => 45,
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
 * Get the wildcard listeners for the event.
 *
 * @param  string  $eventName
 * @return array
 */',
        'startLine' => 426,
        'endLine' => 439,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'addInterfaceListeners' => 
      array (
        'name' => 'addInterfaceListeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 46,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'listeners' => 
          array (
            'name' => 'listeners',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 447,
                'endLine' => 447,
                'startTokenPos' => 1814,
                'startFilePos' => 12952,
                'endTokenPos' => 1815,
                'endFilePos' => 12953,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 58,
            'endColumn' => 78,
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
 * Add the listeners for the event\'s interfaces to the given array.
 *
 * @param  string  $eventName
 * @return array
 */',
        'startLine' => 447,
        'endLine' => 458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'prepareListeners' => 
      array (
        'name' => 'prepareListeners',
        'parameters' => 
        array (
          'eventName' => 
          array (
            'name' => 'eventName',
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
            'startLine' => 465,
            'endLine' => 465,
            'startColumn' => 41,
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
 * Prepare the listeners for a given event.
 *
 * @return \\Closure[]
 */',
        'startLine' => 465,
        'endLine' => 474,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'makeListener' => 
      array (
        'name' => 'makeListener',
        'parameters' => 
        array (
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 483,
            'endLine' => 483,
            'startColumn' => 34,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'wildcard' => 
          array (
            'name' => 'wildcard',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 483,
                'endLine' => 483,
                'startTokenPos' => 1979,
                'startFilePos' => 13924,
                'endTokenPos' => 1979,
                'endFilePos' => 13928,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 483,
            'endLine' => 483,
            'startColumn' => 45,
            'endColumn' => 61,
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
 * Register an event listener with the dispatcher.
 *
 * @param  \\Closure|string|array{class-string, string}  $listener
 * @param  bool  $wildcard
 * @return \\Closure
 */',
        'startLine' => 483,
        'endLine' => 500,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'createClassListener' => 
      array (
        'name' => 'createClassListener',
        'parameters' => 
        array (
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 41,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'wildcard' => 
          array (
            'name' => 'wildcard',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 509,
                'endLine' => 509,
                'startTokenPos' => 2131,
                'startFilePos' => 14697,
                'endTokenPos' => 2131,
                'endFilePos' => 14701,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 509,
            'endLine' => 509,
            'startColumn' => 52,
            'endColumn' => 68,
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
 * Create a class based listener using the IoC container.
 *
 * @param  string  $listener
 * @param  bool  $wildcard
 * @return \\Closure
 */',
        'startLine' => 509,
        'endLine' => 520,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'createClassCallable' => 
      array (
        'name' => 'createClassCallable',
        'parameters' => 
        array (
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 44,
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
 * Create the class based event callable.
 *
 * @param  array{class-string, string}|string  $listener
 * @return callable
 */',
        'startLine' => 528,
        'endLine' => 548,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'parseClassCallable' => 
      array (
        'name' => 'parseClassCallable',
        'parameters' => 
        array (
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 556,
            'endLine' => 556,
            'startColumn' => 43,
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
 * Parse the class listener into class and method.
 *
 * @param  string  $listener
 * @return array{class-string, string}
 */',
        'startLine' => 556,
        'endLine' => 559,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'handlerShouldBeQueued' => 
      array (
        'name' => 'handlerShouldBeQueued',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 569,
            'endLine' => 569,
            'startColumn' => 46,
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
 * Determine if the event handler class should be queued.
 *
 * @param  class-string  $class
 * @return bool
 *
 * @phpstan-assert-if-true class-string<\\Illuminate\\Contracts\\Queue\\ShouldQueue> $class
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
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'createQueuedHandlerCallable' => 
      array (
        'name' => 'createQueuedHandlerCallable',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 52,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 60,
            'endColumn' => 66,
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
 * Create a callable for putting an event handler on the queue.
 *
 * @param  class-string  $class
 * @param  string  $method
 * @return \\Closure(): void
 */',
        'startLine' => 587,
        'endLine' => 598,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'handlerShouldBeDispatchedAfterDatabaseTransactions' => 
      array (
        'name' => 'handlerShouldBeDispatchedAfterDatabaseTransactions',
        'parameters' => 
        array (
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 606,
            'endLine' => 606,
            'startColumn' => 75,
            'endColumn' => 83,
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
 * Determine if the given event handler should be dispatched after all database transactions have committed.
 *
 * @param  mixed  $listener
 * @return bool
 */',
        'startLine' => 606,
        'endLine' => 611,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'createCallbackForListenerRunningAfterCommits' => 
      array (
        'name' => 'createCallbackForListenerRunningAfterCommits',
        'parameters' => 
        array (
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 69,
            'endColumn' => 77,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 80,
            'endColumn' => 86,
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
 * Create a callable for dispatching a listener after database transactions.
 *
 * @param  mixed  $listener
 * @param  string  $method
 * @return \\Closure
 */',
        'startLine' => 620,
        'endLine' => 631,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'handlerWantsToBeQueued' => 
      array (
        'name' => 'handlerWantsToBeQueued',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
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
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
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
            'startColumn' => 55,
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
 * Determine if the event handler wants to be queued.
 *
 * @param  class-string  $class
 * @param  array  $arguments
 * @return bool
 */',
        'startLine' => 640,
        'endLine' => 649,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'queueHandler' => 
      array (
        'name' => 'queueHandler',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 659,
            'endLine' => 659,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 659,
            'endLine' => 659,
            'startColumn' => 45,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 659,
            'endLine' => 659,
            'startColumn' => 54,
            'endColumn' => 63,
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
 * Queue the handler class.
 *
 * @param  string  $class
 * @param  string  $method
 * @param  array  $arguments
 * @return void
 */',
        'startLine' => 659,
        'endLine' => 691,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'createListenerAndJob' => 
      array (
        'name' => 'createListenerAndJob',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 53,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 62,
            'endColumn' => 71,
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
 * Create the listener and job for a queued listener.
 *
 * @template TListener
 *
 * @param  class-string<TListener>  $class
 * @param  string  $method
 * @param  array  $arguments
 * @return array{TListener, mixed}
 */',
        'startLine' => 703,
        'endLine' => 710,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'propagateListenerOptions' => 
      array (
        'name' => 'propagateListenerOptions',
        'parameters' => 
        array (
          'listener' => 
          array (
            'name' => 'listener',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 719,
            'endLine' => 719,
            'startColumn' => 49,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 719,
            'endLine' => 719,
            'startColumn' => 60,
            'endColumn' => 63,
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
 * Propagate listener options to the job.
 *
 * @param  mixed  $listener
 * @param  \\Illuminate\\Events\\CallQueuedListener  $job
 * @return \\Illuminate\\Events\\CallQueuedListener
 */',
        'startLine' => 719,
        'endLine' => 762,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'forget' => 
      array (
        'name' => 'forget',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 770,
            'endLine' => 770,
            'startColumn' => 28,
            'endColumn' => 33,
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
 * Remove a set of listeners from the dispatcher.
 *
 * @param  string  $event
 * @return void
 */',
        'startLine' => 770,
        'endLine' => 783,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'forgetPushed' => 
      array (
        'name' => 'forgetPushed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Forget all of the pushed listeners.
 *
 * @return void
 */',
        'startLine' => 790,
        'endLine' => 797,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'resolveQueue' => 
      array (
        'name' => 'resolveQueue',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the queue implementation from the resolver.
 *
 * @return \\Illuminate\\Contracts\\Queue\\Queue
 */',
        'startLine' => 804,
        'endLine' => 807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'setQueueResolver' => 
      array (
        'name' => 'setQueueResolver',
        'parameters' => 
        array (
          'resolver' => 
          array (
            'name' => 'resolver',
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
            'startLine' => 815,
            'endLine' => 815,
            'startColumn' => 38,
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
 * Set the queue resolver implementation.
 *
 * @param  callable(): \\Illuminate\\Contracts\\Queue\\Queue  $resolver
 * @return $this
 */',
        'startLine' => 815,
        'endLine' => 820,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'resolveTransactionManager' => 
      array (
        'name' => 'resolveTransactionManager',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database transaction manager implementation from the resolver.
 *
 * @return \\Illuminate\\Database\\DatabaseTransactionsManager|null
 */',
        'startLine' => 827,
        'endLine' => 830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'setTransactionManagerResolver' => 
      array (
        'name' => 'setTransactionManagerResolver',
        'parameters' => 
        array (
          'resolver' => 
          array (
            'name' => 'resolver',
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
            'startLine' => 838,
            'endLine' => 838,
            'startColumn' => 51,
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
 * Set the database transaction manager resolver implementation.
 *
 * @param  (callable(): (\\Illuminate\\Database\\DatabaseTransactionsManager|null))  $resolver
 * @return $this
 */',
        'startLine' => 838,
        'endLine' => 843,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'defer' => 
      array (
        'name' => 'defer',
        'parameters' => 
        array (
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
            'startLine' => 854,
            'endLine' => 854,
            'startColumn' => 27,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'events' => 
          array (
            'name' => 'events',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 854,
                'endLine' => 854,
                'startTokenPos' => 4100,
                'startFilePos' => 26308,
                'endTokenPos' => 4100,
                'endFilePos' => 26311,
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
                      'name' => 'array',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 854,
            'endLine' => 854,
            'startColumn' => 47,
            'endColumn' => 67,
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
 * Execute the given callback while deferring events, then dispatch all deferred events.
 *
 * @template TResult
 *
 * @param  callable(): TResult  $callback
 * @param  string[]|null  $events
 * @return TResult
 */',
        'startLine' => 854,
        'endLine' => 879,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'shouldDeferEvent' => 
      array (
        'name' => 'shouldDeferEvent',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
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
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Determine if the given event should be deferred.
 *
 * @return bool
 */',
        'startLine' => 886,
        'endLine' => 889,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
        'aliasName' => NULL,
      ),
      'getRawListeners' => 
      array (
        'name' => 'getRawListeners',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the raw, unprepared listeners.
 *
 * @return array
 */',
        'startLine' => 896,
        'endLine' => 899,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Events',
        'declaringClassName' => 'Illuminate\\Events\\Dispatcher',
        'implementingClassName' => 'Illuminate\\Events\\Dispatcher',
        'currentClassName' => 'Illuminate\\Events\\Dispatcher',
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