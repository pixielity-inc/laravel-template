<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/Emitter.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\Traits\Emitter
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-8bcf92f5872e724fc1e890f33417882a3aa9f9c4f036657aca5dadb6ca27688f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\Traits\\Emitter',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/Emitter.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support\\Traits',
    'name' => 'Pixielity\\Support\\Traits\\Emitter',
    'shortName' => 'Emitter',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Emitter adds event-related features to any class.
 *
 * This trait allows classes to bind events to callbacks, trigger those events,
 * and manage event listeners, including one-time listeners.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 201,
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
      'emitterSingleEventCollection' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'name' => 'emitterSingleEventCollection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 21,
            'startTokenPos' => 41,
            'startFilePos' => 487,
            'endTokenPos' => 42,
            'endFilePos' => 488,
          ),
        ),
        'docComment' => '/**
 * @var array Collection of events that are bound to fire once only.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 49,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'emitterEventCollection' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'name' => 'emitterEventCollection',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 53,
            'startFilePos' => 623,
            'endTokenPos' => 54,
            'endFilePos' => 624,
          ),
        ),
        'docComment' => '/**
 * @var array Collection of all registered events and their callbacks.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'emitterEventSorted' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'name' => 'emitterEventSorted',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 65,
            'startFilePos' => 758,
            'endTokenPos' => 66,
            'endFilePos' => 759,
          ),
        ),
        'docComment' => '/**
 * @var array Cached sorted collection of event listeners for efficiency.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 39,
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
      'bindEvent' => 
      array (
        'name' => 'bindEvent',
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
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 31,
            'endColumn' => 43,
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
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 46,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'priority' => 
          array (
            'name' => 'priority',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 43,
                'endLine' => 43,
                'startTokenPos' => 93,
                'startFilePos' => 1312,
                'endTokenPos' => 93,
                'endFilePos' => 1312,
              ),
            ),
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
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 66,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
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
 * bindEvent creates a new event binding.
 *
 * This method allows you to bind a callback function to a specific event.
 * The callback can be executed later when the event is fired.
 *
 * @param  string  $event  The name of the event to bind.
 * @param  callable  $callback  The callback function to be executed when the event is triggered.
 * @param  int  $priority  The priority of the event listener (default is 0).
 */',
        'startLine' => 43,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'aliasName' => NULL,
      ),
      'bindEventOnce' => 
      array (
        'name' => 'bindEventOnce',
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
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 35,
            'endColumn' => 47,
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
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 50,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'priority' => 
          array (
            'name' => 'priority',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 62,
                'endLine' => 62,
                'startTokenPos' => 159,
                'startFilePos' => 2211,
                'endTokenPos' => 159,
                'endFilePos' => 2211,
              ),
            ),
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
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 70,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
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
 * bindEventOnce creates a new event binding that fires only once.
 *
 * This method binds a callback to an event that will only be triggered once.
 * After being executed, the listener will be removed automatically.
 *
 * @param  string  $event  The name of the event to bind.
 * @param  callable  $callback  The callback function to be executed when the event is triggered.
 * @param  int  $priority  The priority of the event listener (default is 0).
 */',
        'startLine' => 62,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'aliasName' => NULL,
      ),
      'unbindEvent' => 
      array (
        'name' => 'unbindEvent',
        'parameters' => 
        array (
          'event' => 
          array (
            'name' => 'event',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 79,
                'endLine' => 79,
                'startTokenPos' => 213,
                'startFilePos' => 2937,
                'endTokenPos' => 213,
                'endFilePos' => 2940,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 79,
            'endLine' => 79,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * unbindEvent destroys an event binding.
 *
 * This method allows you to remove a specific event binding or all bindings if no event is provided.
 * It can also accept an array of event names to unbind multiple events at once.
 *
 * @param  string|array|null  $event  The event name(s) to unbind or null to unbind all.
 */',
        'startLine' => 79,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'aliasName' => NULL,
      ),
      'fireEvent' => 
      array (
        'name' => 'fireEvent',
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 31,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'params' => 
          array (
            'name' => 'params',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 350,
                'startFilePos' => 4313,
                'endTokenPos' => 351,
                'endFilePos' => 4314,
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
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 46,
            'endColumn' => 63,
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
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 360,
                'startFilePos' => 4330,
                'endTokenPos' => 360,
                'endFilePos' => 4334,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 66,
            'endColumn' => 83,
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
 * fireEvent triggers and calls the listeners for a specified event.
 *
 * This method executes all callbacks associated with an event,
 * passing any parameters to the callbacks. It can also halt execution
 * after the first non-null response if specified.
 *
 * @param  string  $event  Event name
 * @param  array  $params  Event parameters to be passed to the callbacks
 * @param  bool  $halt  Whether to halt after the first non-null result
 * @return array|null Collection of results from the event callbacks, or a single result if halted.
 */',
        'startLine' => 113,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'aliasName' => NULL,
      ),
      'emitterEventSortEvents' => 
      array (
        'name' => 'emitterEventSortEvents',
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
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 47,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'combined' => 
          array (
            'name' => 'combined',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 177,
                'endLine' => 177,
                'startTokenPos' => 674,
                'startFilePos' => 6941,
                'endTokenPos' => 675,
                'endFilePos' => 6942,
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
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 66,
            'endColumn' => 85,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * emitterEventSortEvents sorts the listeners for a given event by priority.
 *
 * This method collects all callbacks for an event, combines them by priority,
 * and sorts them in descending order (higher priorities first) for execution.
 *
 * @param  string  $eventName  The name of the event to sort.
 * @param  array  $combined  An array to combine event callbacks (default is empty).
 * @return array Sorted array of callbacks.
 */',
        'startLine' => 177,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\Emitter',
        'currentClassName' => 'Pixielity\\Support\\Traits\\Emitter',
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