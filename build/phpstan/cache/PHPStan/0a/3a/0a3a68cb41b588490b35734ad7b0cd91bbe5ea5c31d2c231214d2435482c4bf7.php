<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/DataObject.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\Traits\DataObject
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-c55a7834455f4c3c550d52d394c035fa5d247f4dd0b234980ec2a600718302ff',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\Traits\\DataObject',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Traits/DataObject.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support\\Traits',
    'name' => 'Pixielity\\Support\\Traits\\DataObject',
    'shortName' => 'DataObject',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * DataObject Trait.
 *
 * Provides DataObject functionality to any class by forwarding calls
 * to an internal DataObject instance.
 *
 * ## Features:
 * - Magic getter/setter methods (getX, setX, hasX, unsX)
 * - Dot notation support for nested data
 * - Array access and manipulation
 * - Data serialization and debugging
 * - Automatic constructor argument mapping
 *
 * ## Usage Patterns:
 *
 * ### Pattern 1: Manual Data Population
 * ```php
 * class MyClass
 * {
 *     use DataObject;
 *
 *     public function example()
 *     {
 *         $this->setData(\'name\', \'John\');
 *         $this->setName(\'Jane\'); // Magic setter
 *         $name = $this->getName(); // Magic getter
 *     }
 * }
 * ```
 *
 * ### Pattern 2: Constructor with Reflection Mapping
 * ```php
 * class User
 * {
 *     use DataObject;
 *
 *     public function __construct(
 *         public string $name,
 *         public int $age,
 *         public string $email
 *     ) {
 *         // Map constructor args to DataObject
 *         $this->initializeDataObject($name, $age, $email);
 *     }
 * }
 *
 * $user = new User(\'John\', 30, \'john@example.com\');
 * echo $user->name;                  // \'John\' (property)
 * echo $user->getName();             // \'John\' (magic getter)
 * echo $user->getData(\'name\');       // \'John\' (DataObject)
 * $data = $user->toArray();          // [\'name\' => \'John\', \'age\' => 30, \'email\' => \'...\']
 * ```
 *
 * ### Pattern 3: Array Initialization
 * ```php
 * class Config
 * {
 *     use DataObject;
 *
 *     public function __construct(array $config = [])
 *     {
 *         $this->setData($config);
 *     }
 * }
 *
 * $config = new Config([\'debug\' => true, \'timeout\' => 30]);
 * echo $config->getData(\'debug\');    // true
 * ```
 *
 * @method mixed __call(string $method, array $arguments) Handle dynamic getter/setter/unsetter/checker methods
 * @method array __debugInfo() Export scalar and array properties for var_dump
 * @method self key(mixed ...$keys) Build and return the key dynamically by joining parts with a dot
 * @method self each(callable $callback) Apply a callback to each item and return a new DataObject
 * @method bool hasData(string $key = \'\')                                                                                    Check if specified key exists (supports dot notation)
 * @method mixed getData(string|array $key = \'\', int|null $index = null) Retrieve data from the object
 * @method self setData(string|array $key, mixed $value = null) Overwrite or merge data in the object
 * @method self addData(array $arr)                                                                                          Add data to the object (retains previous data)
 * @method self unsetData(null|string|array $key = null) Unset data from the object
 * @method mixed getDataByPath(string $path)                                                                                  Get object data by path (a/b/c notation)
 * @method mixed getDataByKey(string $key) Get object data by particular key
 * @method self setDataUsingMethod(string $key, mixed $args = []) Set object data with calling setter method
 * @method mixed getDataUsingMethod(string $key, mixed $args = null) Get object data by key with calling getter method
 * @method string toString(string $format = \'\') Convert object data into string with predefined format
 * @method bool isEmpty() Check whether the object is empty
 * @method string serialize(array $keys = [], string $valueSeparator = \'=\', string $fieldSeparator = \' \', string $quote = \'"\') Convert object data into string with defined keys and values
 * @method array debug(mixed $data = null, array &$objects = []) Present object data as string in debug mode
 * @method bool hasMethod(string $method) Check if the given method is supported dynamically
 * @method array toArray() Convert the object to an array
 * @method string toJson(int $options = 0) Convert the object to JSON
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 106,
    'endLine' => 364,
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
      'dataObject' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'name' => 'dataObject',
        'modifiers' => 2,
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
                  'name' => 'Pixielity\\Support\\DataObject',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 111,
            'endLine' => 111,
            'startTokenPos' => 78,
            'startFilePos' => 4372,
            'endTokenPos' => 78,
            'endFilePos' => 4375,
          ),
        ),
        'docComment' => '/**
 * The internal DataObject instance.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 50,
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
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
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
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 28,
            'endColumn' => 34,
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
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 37,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Forward method calls to the DataObject instance.
 *
 * Checks if DataObject can handle the method before forwarding.
 * Falls back to parent class if DataObject doesn\'t support the method.
 *
 * @param  string  $method  Method name
 * @param  array  $arguments  Method arguments
 *
 * @throws BadMethodCallException If method doesn\'t exist in DataObject or parent
 */',
        'startLine' => 126,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'hasData' => 
      array (
        'name' => 'hasData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 158,
                'endLine' => 158,
                'startTokenPos' => 250,
                'startFilePos' => 5862,
                'endTokenPos' => 250,
                'endFilePos' => 5863,
              ),
            ),
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
            'startLine' => 158,
            'endLine' => 158,
            'startColumn' => 29,
            'endColumn' => 44,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Check if specified key exists (supports dot notation).
 */',
        'startLine' => 158,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'getData' => 
      array (
        'name' => 'getData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 166,
                'endLine' => 166,
                'startTokenPos' => 290,
                'startFilePos' => 6041,
                'endTokenPos' => 290,
                'endFilePos' => 6042,
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
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
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 29,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 166,
                'endLine' => 166,
                'startTokenPos' => 300,
                'startFilePos' => 6059,
                'endTokenPos' => 300,
                'endFilePos' => 6062,
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
                      'name' => 'int',
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
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 53,
            'endColumn' => 70,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve data from the object.
 */',
        'startLine' => 166,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'setData' => 
      array (
        'name' => 'setData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
                      'name' => 'array',
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
            'startLine' => 174,
            'endLine' => 174,
            'startColumn' => 29,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 174,
                'endLine' => 174,
                'startTokenPos' => 348,
                'startFilePos' => 6271,
                'endTokenPos' => 348,
                'endFilePos' => 6274,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 174,
            'endLine' => 174,
            'startColumn' => 48,
            'endColumn' => 66,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Overwrite or merge data in the object.
 */',
        'startLine' => 174,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'addData' => 
      array (
        'name' => 'addData',
        'parameters' => 
        array (
          'arr' => 
          array (
            'name' => 'arr',
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
            'startLine' => 186,
            'endLine' => 186,
            'startColumn' => 29,
            'endColumn' => 38,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add data to the object (retains previous data).
 *
 * @param  array<string, mixed>  $arr
 */',
        'startLine' => 186,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'unsetData' => 
      array (
        'name' => 'unsetData',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 198,
                'endLine' => 198,
                'startTokenPos' => 433,
                'startFilePos' => 6788,
                'endTokenPos' => 433,
                'endFilePos' => 6791,
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
                      'name' => 'null',
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
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
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
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 31,
            'endColumn' => 59,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unset data from the object.
 *
 * @param  null|string|array<int, string>  $key
 */',
        'startLine' => 198,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
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
        'docComment' => '/**
 * Convert the object to an array.
 *
 * @return array<string, mixed>
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
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'toJson' => 
      array (
        'name' => 'toJson',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 223,
                'endLine' => 223,
                'startTokenPos' => 502,
                'startFilePos' => 7346,
                'endTokenPos' => 502,
                'endFilePos' => 7346,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 28,
            'endColumn' => 39,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the object to JSON.
 *
 * @param  int  $options  JSON encoding options
 * @return string JSON representation of the object
 *
 * @throws JsonException If JSON encoding fails
 */',
        'startLine' => 223,
        'endLine' => 226,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'getDataObject' => 
      array (
        'name' => 'getDataObject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pixielity\\Support\\DataObject',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get or create the DataObject instance.
 */',
        'startLine' => 231,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'initializeDataObject' => 
      array (
        'name' => 'initializeDataObject',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 280,
            'endLine' => 280,
            'startColumn' => 45,
            'endColumn' => 52,
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
 * Initialize DataObject with constructor arguments using reflection.
 *
 * Call this method from your constructor to automatically map
 * constructor parameters to the DataObject attributes.
 *
 * ## Usage:
 * ```php
 * class MyClass
 * {
 *     use DataObject;
 *
 *     public function __construct(
 *         public string $name,
 *         public int $age
 *     ) {
 *         $this->initializeDataObject($name, $age);
 *         // Now: $this->getData(\'name\') works!
 *     }
 * }
 * ```
 *
 * ## Alternative: Auto-initialize from properties
 * ```php
 * class MyClass
 * {
 *     use DataObject;
 *
 *     public function __construct(
 *         public string $name,
 *         public int $age
 *     ) {
 *         // Auto-map from public properties
 *         $this->initializeDataObjectFromProperties();
 *     }
 * }
 * ```
 *
 * @param  mixed  ...$args  Constructor arguments to map
 */',
        'startLine' => 280,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'aliasName' => NULL,
      ),
      'initializeDataObjectFromProperties' => 
      array (
        'name' => 'initializeDataObjectFromProperties',
        'parameters' => 
        array (
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
 * Initialize DataObject from public properties.
 *
 * Automatically extracts all public properties and their values
 * to populate the DataObject. Useful when using constructor property promotion.
 *
 * ## Usage:
 * ```php
 * class MyClass
 * {
 *     use DataObject;
 *
 *     public function __construct(
 *         public string $name,
 *         public int $age
 *     ) {
 *         // Auto-map all public properties
 *         $this->initializeDataObjectFromProperties();
 *     }
 * }
 * ```
 */',
        'startLine' => 335,
        'endLine' => 363,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Support\\Traits',
        'declaringClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'implementingClassName' => 'Pixielity\\Support\\Traits\\DataObject',
        'currentClassName' => 'Pixielity\\Support\\Traits\\DataObject',
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