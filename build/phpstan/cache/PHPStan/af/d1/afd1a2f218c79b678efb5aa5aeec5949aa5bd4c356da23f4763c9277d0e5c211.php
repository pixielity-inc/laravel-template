<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/octane/src/Console/Commands/RestartAppCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Octane\Console\Commands\RestartAppCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-6e5f5bfeabd5db5c8887c9228d597d1ec29bc70d5b2954410914e11e87a0224f',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Octane\\Console\\Commands\\RestartAppCommand',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/octane/src/Console/Commands/RestartAppCommand.php',
      ),
    ),
    'namespace' => 'Pixielity\\Octane\\Console\\Commands',
    'name' => 'Pixielity\\Octane\\Console\\Commands\\RestartAppCommand',
    'shortName' => 'RestartAppCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Restart Laravel Application Server Command
 *
 * This command provides a convenient way to restart the Laravel application server
 * by stopping and then starting it with the same configuration. This is useful
 * for applying configuration changes, clearing memory leaks, or refreshing
 * the application state without manual intervention.
 *
 * The restart process:
 * 1. Gracefully stops the running application server
 * 2. Waits for all workers to terminate
 * 3. Starts a new server instance
 *
 * All options from the \'start\' command are supported and passed through.
 *
 * Usage:
 * - php artisan restart
 * - php artisan restart --workers=8 --max-requests=1000
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
            'code' => '\'restart\'',
            'attributes' => 
            array (
              'startLine' => 29,
              'endLine' => 29,
              'startTokenPos' => 31,
              'startFilePos' => 882,
              'endTokenPos' => 31,
              'endFilePos' => 890,
            ),
          ),
          'description' => 
          array (
            'code' => '\'Restart the Laravel application server (stop + start)\'',
            'attributes' => 
            array (
              'startLine' => 30,
              'endLine' => 30,
              'startTokenPos' => 37,
              'startFilePos' => 910,
              'endTokenPos' => 37,
              'endFilePos' => 964,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 28,
    'endLine' => 106,
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
        'declaringClassName' => 'Pixielity\\Octane\\Console\\Commands\\RestartAppCommand',
        'implementingClassName' => 'Pixielity\\Octane\\Console\\Commands\\RestartAppCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'restart
                            {--host=0.0.0.0 : The host address to bind the server to}
                            {--port=8000 : The port number to listen on}
                            {--workers=auto : Number of worker processes (auto = CPU cores)}
                            {--max-requests=500 : Maximum requests per worker before restart}
                            {--watch : Enable file watching for automatic reloads (dev only)}
                            {--log-level= : Logging verbosity (debug, info, warning, error)}\'',
          'attributes' => 
          array (
            'startLine' => 41,
            'endLine' => 47,
            'startTokenPos' => 60,
            'startFilePos' => 1223,
            'endTokenPos' => 60,
            'endFilePos' => 1764,
          ),
        ),
        'docComment' => '/**
 * The command signature with all available options.
 *
 * These options are passed through to the \'start\' command after stopping.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 94,
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
 * This method orchestrates the restart process:
 * 1. Validates that Laravel Octane is installed
 * 2. Stops the currently running Octane server
 * 3. Starts a new Octane server with the provided options
 *
 * The restart is atomic - if the stop fails, the start won\'t be attempted.
 * This prevents multiple server instances from running simultaneously.
 *
 * @return int Command exit code (0 for success, 1 for failure)
 */',
        'startLine' => 62,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Octane\\Console\\Commands',
        'declaringClassName' => 'Pixielity\\Octane\\Console\\Commands\\RestartAppCommand',
        'implementingClassName' => 'Pixielity\\Octane\\Console\\Commands\\RestartAppCommand',
        'currentClassName' => 'Pixielity\\Octane\\Console\\Commands\\RestartAppCommand',
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