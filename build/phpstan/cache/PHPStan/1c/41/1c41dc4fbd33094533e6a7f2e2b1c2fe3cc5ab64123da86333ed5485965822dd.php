<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/octane/src/Console/Commands/StartAppCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Octane\Console\Commands\StartAppCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-78a78d5aae85657a5c79331ab876d2a954533cc600e358d99a0d32ded9fbbc37',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Octane\\Console\\Commands\\StartAppCommand',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/octane/src/Console/Commands/StartAppCommand.php',
      ),
    ),
    'namespace' => 'Pixielity\\Octane\\Console\\Commands',
    'name' => 'Pixielity\\Octane\\Console\\Commands\\StartAppCommand',
    'shortName' => 'StartAppCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Start Laravel Application Server Command
 *
 * This command provides a production-ready way to start the Laravel application server
 * with RoadRunner (Octane). It handles environment-specific optimizations and provides
 * flexible configuration options for host, port, workers, and more.
 *
 * Features:
 * - Automatic production optimizations (config, route, view, event caching)
 * - Configurable host, port, and worker settings
 * - File watching support for development
 * - Customizable log levels
 * - Environment-aware execution
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
            'code' => '\'start\'',
            'attributes' => 
            array (
              'startLine' => 24,
              'endLine' => 24,
              'startTokenPos' => 31,
              'startFilePos' => 750,
              'endTokenPos' => 31,
              'endFilePos' => 756,
            ),
          ),
          'description' => 
          array (
            'code' => '\'Start the Laravel application server (production-ready with RoadRunner)\'',
            'attributes' => 
            array (
              'startLine' => 25,
              'endLine' => 25,
              'startTokenPos' => 37,
              'startFilePos' => 776,
              'endTokenPos' => 37,
              'endFilePos' => 848,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 23,
    'endLine' => 112,
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
        'declaringClassName' => 'Pixielity\\Octane\\Console\\Commands\\StartAppCommand',
        'implementingClassName' => 'Pixielity\\Octane\\Console\\Commands\\StartAppCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'start
                            {--host=0.0.0.0 : The host address to bind the server to}
                            {--port=8000 : The port number to listen on}
                            {--workers=auto : Number of worker processes (auto = CPU cores)}
                            {--max-requests=500 : Maximum requests per worker before restart}
                            {--watch : Enable file watching for automatic reloads (dev only)}
                            {--log-level= : Logging verbosity (debug, info, warning, error)}\'',
          'attributes' => 
          array (
            'startLine' => 37,
            'endLine' => 43,
            'startTokenPos' => 60,
            'startFilePos' => 1153,
            'endTokenPos' => 60,
            'endFilePos' => 1692,
          ),
        ),
        'docComment' => '/**
 * Get the console command arguments.
 *
 * Defines the command signature with all available options.
 * Using protected property instead of attribute for complex signatures.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 43,
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
 * This method orchestrates the application server startup process:
 * 1. Validates that Laravel Octane is installed
 * 2. Applies production optimizations (caching) for non-local environments
 * 3. Displays server configuration details
 * 4. Delegates to the native octane:start command with configured options
 *
 * @return int Command exit code (0 for success, 1 for failure)
 */',
        'startLine' => 56,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Octane\\Console\\Commands',
        'declaringClassName' => 'Pixielity\\Octane\\Console\\Commands\\StartAppCommand',
        'implementingClassName' => 'Pixielity\\Octane\\Console\\Commands\\StartAppCommand',
        'currentClassName' => 'Pixielity\\Octane\\Console\\Commands\\StartAppCommand',
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