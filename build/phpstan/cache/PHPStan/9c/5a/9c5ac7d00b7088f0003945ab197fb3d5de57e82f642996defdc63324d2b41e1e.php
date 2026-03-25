<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/octane/src/Console/Commands/StopAppCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Octane\Console\Commands\StopAppCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-895fd48d87710486a49240034853861ccb662ed433cf0dc0f3aa24df56531ccb',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Octane\\Console\\Commands\\StopAppCommand',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/octane/src/Console/Commands/StopAppCommand.php',
      ),
    ),
    'namespace' => 'Pixielity\\Octane\\Console\\Commands',
    'name' => 'Pixielity\\Octane\\Console\\Commands\\StopAppCommand',
    'shortName' => 'StopAppCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Stop Laravel Application Server Command
 *
 * This command provides a clean way to stop a running Laravel application server.
 * It gracefully shuts down all worker processes and releases the bound port.
 *
 * The command is a simple wrapper around Laravel Octane\'s native stop command,
 * providing consistent naming with the custom \'start\' command and adding
 * validation to ensure Octane is properly installed.
 *
 * Usage:
 * - php artisan stop
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Symfony\\Component\\Console\\Attribute\\AsCommand',
        'isRepeated' => false,
        'arguments' => 
        array (
          'name' => 
          array (
            'code' => '\'stop\'',
            'attributes' => 
            array (
              'startLine' => 23,
              'endLine' => 23,
              'startTokenPos' => 31,
              'startFilePos' => 663,
              'endTokenPos' => 31,
              'endFilePos' => 668,
            ),
          ),
          'description' => 
          array (
            'code' => '\'Stop the Laravel application server gracefully\'',
            'attributes' => 
            array (
              'startLine' => 24,
              'endLine' => 24,
              'startTokenPos' => 37,
              'startFilePos' => 688,
              'endTokenPos' => 37,
              'endFilePos' => 735,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 22,
    'endLine' => 73,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Console\\Command',
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
      'signature' => 
      array (
        'declaringClassName' => 'Pixielity\\Octane\\Console\\Commands\\StopAppCommand',
        'implementingClassName' => 'Pixielity\\Octane\\Console\\Commands\\StopAppCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'stop\'',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 60,
            'startFilePos' => 878,
            'endTokenPos' => 60,
            'endFilePos' => 883,
          ),
        ),
        'docComment' => '/**
 * The command signature.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 34,
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
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the console command.
 *
 * This method performs a graceful shutdown of the application server:
 * 1. Validates that Laravel Octane is installed
 * 2. Delegates to the native octane:stop command
 * 3. Confirms successful shutdown
 *
 * The native octane:stop command handles:
 * - Sending termination signals to worker processes
 * - Waiting for in-flight requests to complete
 * - Releasing the bound port
 * - Cleaning up process resources
 *
 * @return int Command exit code (0 for success, 1 for failure)
 */',
        'startLine' => 51,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Octane\\Console\\Commands',
        'declaringClassName' => 'Pixielity\\Octane\\Console\\Commands\\StopAppCommand',
        'implementingClassName' => 'Pixielity\\Octane\\Console\\Commands\\StopAppCommand',
        'currentClassName' => 'Pixielity\\Octane\\Console\\Commands\\StopAppCommand',
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