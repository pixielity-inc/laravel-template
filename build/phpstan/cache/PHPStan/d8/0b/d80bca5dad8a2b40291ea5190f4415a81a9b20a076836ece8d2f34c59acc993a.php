<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Console/Commands/Cache/CacheCleanCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Console\Commands\Cache\CacheCleanCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-6174ce314ed828209472a3b951dd9cc11e18abcecb8daba4833bb195e945ae2c',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Console/Commands/Cache/CacheCleanCommand.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
    'name' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
    'shortName' => 'CacheCleanCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Cache Clean Command - REFACTORED.
 *
 * Clean specific cache types similar to Magento\'s cache:clean command.
 * This command provides granular control over cache clearing by allowing you to
 * specify which cache types to clean. It\'s inspired by Magento\'s cache management
 * system and provides a more targeted approach than clearing all caches at once.
 *
 * ## REFACTORING STANDARDS APPLIED:
 *
 * 1. ✅ AsCommand Attribute - With name and description
 * 2. ✅ Extends Command - Not Command
 * 3. ✅ Comprehensive Docblock - With usage examples and patterns
 * 4. ✅ Type Hints - On all parameters and returns
 * 5. ✅ Inline Comments - Explaining logic flow
 * 6. ✅ Error Handling - Try-catch with exception() method
 * 7. ✅ Laravel Prompts - Via Command methods
 * 8. ✅ Helper Methods - Extracted focused methods
 * 9. ✅ Command Methods - header(), success(), failure(), etc.
 * 10. ✅ Method Organization - handle(), gatherInput(), validateInput(), execute(), displaySuccess()
 *
 * ## KEY PATTERNS TO FOLLOW:
 *
 * ### Use Command Helper Methods:
 * ```php
 * $this->header(\'Title\', \'🚀\');           // Command header
 * $this->success(\'Message\', \'✅\');        // Success message
 * $this->failure(\'Message\', \'❌\');        // Error message
 * $this->caution(\'Message\', \'⚠️\');        // Warning
 * $this->note(\'Message\');                 // Info note
 * $this->displayTable($headers, $rows);   // Table
 * $this->step(1, 3, \'Step...\');          // Multi-step indicator
 * $this->spinner(fn() => $task(), \'Processing...\'); // Spinner
 * $this->listing($items, \'→\');           // List items
 * ```
 *
 * ### Extract Logic into Focused Methods:
 * ```php
 * handle()           // Main entry point (orchestration only)
 * gatherInput()      // Collect user input
 * validateInput()    // Validate data
 * execute()          // Perform action
 * displaySuccess()   // Show results
 * ```
 *
 * ### Error Handling Pattern:
 * ```php
 * try {
 *     // Command logic
 *     return self::SUCCESS;
 * } catch (\\Throwable $e) {
 *     return $this->exception($e, \'Context message\');
 * }
 * ```
 *
 * ## Available Cache Types:
 * - **config**: Application configuration cache
 * - **route**: Route definitions cache
 * - **view**: Compiled Blade templates
 * - **event**: Cached event listeners
 * - **schedule**: Cached scheduled tasks
 * - **cache**: Application cache (Redis/Memcached/File)
 * - **compiled**: Compiled class files
 * - **optimize**: Optimized autoloader files
 *
 * ## Usage Examples:
 *
 * ### List all available cache types:
 * ```bash
 * bin/laravel cache:clean --list
 * ```
 *
 * ### Clean specific cache type:
 * ```bash
 * bin/laravel cache:clean config
 * ```
 *
 * ### Clean multiple cache types:
 * ```bash
 * bin/laravel cache:clean config route view
 * ```
 *
 * ### Clean all caches:
 * ```bash
 * bin/laravel cache:clean --all
 * ```
 *
 * ### Silent mode (no output):
 * ```bash
 * bin/laravel cache:clean config --quiet
 * ```
 *
 * ## Common Scenarios:
 *
 * ### After Configuration Changes:
 * ```bash
 * bin/laravel cache:clean config
 * ```
 *
 * ### After Route Changes:
 * ```bash
 * bin/laravel cache:clean route
 * ```
 *
 * ### After View Changes:
 * ```bash
 * bin/laravel cache:clean view
 * ```
 *
 * ### Development Workflow:
 * ```bash
 * bin/laravel cache:clean config route view
 * ```
 *
 * ### Production Deployment:
 * ```bash
 * bin/laravel cache:clean --all
 * ```
 *
 * ## Arguments:
 * - `types` - Optional array of cache types to clean (config, route, view, event, schedule, cache, compiled, optimize)
 *
 * ## Options:
 * - `--all` - Clean all cache types at once
 * - `--list` - List all available cache types with descriptions
 *
 * ## Exit Codes:
 * - 0 (SUCCESS) - Cache types cleaned successfully
 * - 1 (FAILURE) - Validation failed or cache cleaning failed
 *
 * ## Comparison with Laravel Commands:
 * - `cache:clean config` = `config:clear`
 * - `cache:clean route` = `route:clear`
 * - `cache:clean view` = `view:clear`
 * - `cache:clean --all` = Multiple clear commands
 *
 * ## Benefits:
 * - **Consistency**: Unified interface for all cache operations
 * - **Granularity**: Clear only what you need
 * - **Efficiency**: Faster than clearing all caches
 * - **Familiarity**: Similar to Magento for developers coming from that ecosystem
 *
 * @see Command
 * @see CacheFlushCommand
 * @since 1.0.0
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
            'code' => '\'cache:clean\'',
            'attributes' => 
            array (
              'startLine' => 164,
              'endLine' => 164,
              'startTokenPos' => 61,
              'startFilePos' => 4731,
              'endTokenPos' => 61,
              'endFilePos' => 4743,
            ),
          ),
          'description' => 
          array (
            'code' => '\'Clean specific cache types (config, route, view, event, etc.)\'',
            'attributes' => 
            array (
              'startLine' => 165,
              'endLine' => 165,
              'startTokenPos' => 67,
              'startFilePos' => 4763,
              'endTokenPos' => 67,
              'endFilePos' => 4825,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 163,
    'endLine' => 478,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'cache:clean
                            {types?* : Cache types to clean (config, route, view, event, schedule, cache, compiled, optimize)}
                            {--all : Clean all cache types}
                            {--list : List all available cache types}\'',
          'attributes' => 
          array (
            'startLine' => 179,
            'endLine' => 182,
            'startTokenPos' => 90,
            'startFilePos' => 5209,
            'endTokenPos' => 90,
            'endFilePos' => 5478,
          ),
        ),
        'docComment' => '/**
 * Command signature with arguments and options.
 *
 * Defines the command name, arguments, and available options:
 * - types: Optional array of cache types to clean
 * - --all: Clean all cache types
 * - --list: List all available cache types
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 179,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 71,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheTypes' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'name' => 'cacheTypes',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[\'config\' => [\'command\' => \'config:clear\', \'description\' => \'Application configuration cache\'], \'route\' => [\'command\' => \'route:clear\', \'description\' => \'Route definitions cache\'], \'view\' => [\'command\' => \'view:clear\', \'description\' => \'Compiled Blade templates\'], \'event\' => [\'command\' => \'event:clear\', \'description\' => \'Cached event listeners\'], \'schedule\' => [\'command\' => \'schedule:clear-cache\', \'description\' => \'Cached scheduled tasks\'], \'cache\' => [\'command\' => \'cache:clear\', \'description\' => \'Application cache (Redis/Memcached/File)\'], \'compiled\' => [\'command\' => \'clear-compiled\', \'description\' => \'Compiled class files\'], \'optimize\' => [\'command\' => \'optimize:clear\', \'description\' => \'Optimized autoloader files\']]',
          'attributes' => 
          array (
            'startLine' => 194,
            'endLine' => 227,
            'startTokenPos' => 103,
            'startFilePos' => 5972,
            'endTokenPos' => 289,
            'endFilePos' => 7050,
          ),
        ),
        'docComment' => '/**
 * Available cache types and their corresponding Laravel commands.
 *
 * Maps cache type names to the Laravel Artisan commands that clear them.
 * This allows us to provide a unified interface while leveraging Laravel\'s
 * built-in cache clearing functionality. Each cache type has a command
 * and description for user-friendly display.
 *
 * @var array<string, array{command: string, description: string}>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 194,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 6,
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
 * Main entry point that orchestrates the cache cleaning process.
 * Handles --list option, validates input, and cleans specified cache types.
 * Uses Command helper methods for consistent output formatting.
 *
 * @return int Command exit code (SUCCESS or FAILURE)
 */',
        'startLine' => 238,
        'endLine' => 270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'aliasName' => NULL,
      ),
      'gatherCacheTypes' => 
      array (
        'name' => 'gatherCacheTypes',
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
 * Gather cache types to clean from arguments and options.
 *
 * Determines which cache types should be cleaned based on user input.
 * If --all flag is provided, returns all available cache types.
 * Otherwise, returns the types specified as arguments.
 *
 * @return array<string> Array of cache type names to clean
 */',
        'startLine' => 281,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'aliasName' => NULL,
      ),
      'validateCacheTypes' => 
      array (
        'name' => 'validateCacheTypes',
        'parameters' => 
        array (
          'types' => 
          array (
            'name' => 'types',
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
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 43,
            'endColumn' => 54,
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
 * Validate cache types input.
 *
 * Ensures that at least one cache type is specified and that all
 * specified cache types are valid. Displays helpful error messages
 * if validation fails.
 *
 * @param  array<string>  $types  Cache types to validate
 * @return bool True if validation passes, false otherwise
 */',
        'startLine' => 305,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'aliasName' => NULL,
      ),
      'executeCacheCleaning' => 
      array (
        'name' => 'executeCacheCleaning',
        'parameters' => 
        array (
          'types' => 
          array (
            'name' => 'types',
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
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 45,
            'endColumn' => 56,
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
 * Execute cache cleaning for specified types.
 *
 * Iterates through each cache type and cleans it using the corresponding
 * Laravel Artisan command. Tracks success and failure counts for reporting.
 * Uses spinner for visual feedback during cleaning operations.
 *
 * @param  array<string>  $types  Cache types to clean
 * @return array{cleaned: int, failed: int, total: int} Cleaning statistics
 */',
        'startLine' => 340,
        'endLine' => 364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'aliasName' => NULL,
      ),
      'cleanCacheType' => 
      array (
        'name' => 'cleanCacheType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
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
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 39,
            'endColumn' => 50,
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
 * Clean a specific cache type.
 *
 * Executes the Laravel Artisan command associated with the cache type
 * and provides detailed feedback on the operation. Uses try-catch to
 * handle any exceptions that may occur during cache clearing.
 *
 * @param  string  $type  Cache type to clean
 * @return bool True if successful, false otherwise
 */',
        'startLine' => 376,
        'endLine' => 407,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'aliasName' => NULL,
      ),
      'displaySuccess' => 
      array (
        'name' => 'displaySuccess',
        'parameters' => 
        array (
          'result' => 
          array (
            'name' => 'result',
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
            'startLine' => 418,
            'endLine' => 418,
            'startColumn' => 39,
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
 * Display success message with cleaning statistics.
 *
 * Shows a summary of the cache cleaning operation including the number
 * of successfully cleaned caches and any failures. Uses Command
 * helper methods for consistent formatting.
 *
 * @param  array{cleaned: int, failed: int, total: int}  $result  Cleaning statistics
 */',
        'startLine' => 418,
        'endLine' => 435,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'aliasName' => NULL,
      ),
      'displayCacheTypesList' => 
      array (
        'name' => 'displayCacheTypesList',
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
 * Display list of all available cache types.
 *
 * Shows a formatted table of all cache types with their descriptions
 * and corresponding Laravel commands. Also displays usage examples
 * to help users understand how to use the command.
 *
 * @return int Command exit code (SUCCESS)
 */',
        'startLine' => 446,
        'endLine' => 477,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheCleanCommand',
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