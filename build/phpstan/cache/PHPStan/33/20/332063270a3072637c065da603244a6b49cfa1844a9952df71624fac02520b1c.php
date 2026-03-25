<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Console/Commands/Cache/CacheFlushCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Console\Commands\Cache\CacheFlushCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-9183077ca64512aa4da0ae29eaa7a2aac33986befd80d88baa4dd453a4a2abe9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Console/Commands/Cache/CacheFlushCommand.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
    'name' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
    'shortName' => 'CacheFlushCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Cache Flush Command - REFACTORED.
 *
 * Flush all application caches similar to Magento\'s cache:flush command.
 * This command provides a comprehensive cache clearing operation that removes
 * all cached data from the application. It\'s inspired by Magento\'s cache:flush
 * command and ensures a complete cache reset across all cache types.
 *
 * ## REFACTORING STANDARDS APPLIED:
 *
 * 1. ✅ AsCommand Attribute - With name and description
 * 2. ✅ Extends Command - Not Command
 * 3. ✅ Comprehensive Docblock - With usage examples and patterns
 * 4. ✅ Type Hints - On all parameters and returns
 * 5. ✅ Inline Comments - Explaining logic flow
 * 6. ✅ Error Handling - Try-catch with exception() method
 * 7. ✅ Laravel Prompts - For interactive confirmation
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
 * ### Laravel Prompts for User Input:
 * ```php
 * use function Laravel\\Prompts\\confirm;
 *
 * $confirmed = confirm(\'Continue?\', true);
 * ```
 *
 * ## What Gets Flushed:
 * 1. **Configuration Cache**: Application config files
 * 2. **Route Cache**: Compiled route definitions
 * 3. **View Cache**: Compiled Blade templates
 * 4. **Event Cache**: Cached event listeners
 * 5. **Schedule Cache**: Cached scheduled tasks
 * 6. **Application Cache**: Redis/Memcached/File cache
 * 7. **Compiled Files**: Compiled class files
 * 8. **Optimized Files**: Optimized autoloader
 *
 * ## Usage Examples:
 *
 * ### Flush all caches (with confirmation):
 * ```bash
 * bin/laravel cache:flush
 * ```
 *
 * ### Flush without confirmation prompt:
 * ```bash
 * bin/laravel cache:flush --force
 * ```
 *
 * ### Silent mode (no output):
 * ```bash
 * bin/laravel cache:flush --force --quiet
 * ```
 *
 * ## When to Use:
 *
 * ### Development:
 * - After major code changes
 * - When debugging cache-related issues
 * - After updating dependencies
 * - When switching branches
 *
 * ### Production:
 * - During deployment
 * - After configuration changes
 * - When experiencing cache corruption
 * - After database migrations
 *
 * ### Troubleshooting:
 * - Application behaving unexpectedly
 * - Old data appearing in responses
 * - Configuration changes not taking effect
 * - Route changes not being recognized
 *
 * ## Options:
 * - `--force` - Skip confirmation prompt and flush immediately
 *
 * ## Exit Codes:
 * - 0 (SUCCESS) - All caches flushed successfully
 * - 1 (FAILURE) - One or more cache types failed to flush
 *
 * ## Comparison with Other Commands:
 * - `cache:flush` = Clears ALL caches
 * - `cache:clean` = Clears SPECIFIC caches
 * - `cache:clear` = Laravel\'s cache:clear (application cache only)
 *
 * ## Performance Impact:
 * - First requests after flush will be slower (cache rebuild)
 * - Subsequent requests will be normal speed
 * - Consider using cache:clean for specific types in production
 *
 * ## Safety:
 * - Safe to run in production
 * - No data loss (only cached data is removed)
 * - Application continues to function normally
 * - Caches rebuild automatically on demand
 *
 * ## Automation:
 * ```bash
 * # In deployment scripts
 * bin/laravel cache:flush --force
 *
 * # In CI/CD pipelines
 * bin/laravel cache:flush --force --quiet
 * ```
 *
 * @see Command
 * @see CacheCleanCommand For selective cache clearing
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
            'code' => '\'cache:flush\'',
            'attributes' => 
            array (
              'startLine' => 162,
              'endLine' => 162,
              'startTokenPos' => 56,
              'startFilePos' => 4896,
              'endTokenPos' => 56,
              'endFilePos' => 4908,
            ),
          ),
          'description' => 
          array (
            'code' => '\'Flush all application caches (config, route, view, event, cache, etc.)\'',
            'attributes' => 
            array (
              'startLine' => 163,
              'endLine' => 163,
              'startTokenPos' => 62,
              'startFilePos' => 4928,
              'endTokenPos' => 62,
              'endFilePos' => 4999,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 161,
    'endLine' => 421,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'cache:flush
                            {--force : Force flush without confirmation}\'',
          'attributes' => 
          array (
            'startLine' => 175,
            'endLine' => 176,
            'startTokenPos' => 85,
            'startFilePos' => 5259,
            'endTokenPos' => 85,
            'endFilePos' => 5344,
          ),
        ),
        'docComment' => '/**
 * Command signature with options.
 *
 * Defines the command name and available options:
 * - --force: Skip confirmation prompt
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 175,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 74,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cacheTypes' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
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
          'code' => '[[\'type\' => \'config\', \'command\' => \'config:clear\', \'description\' => \'Configuration cache\'], [\'type\' => \'route\', \'command\' => \'route:clear\', \'description\' => \'Route cache\'], [\'type\' => \'view\', \'command\' => \'view:clear\', \'description\' => \'View cache\'], [\'type\' => \'event\', \'command\' => \'event:clear\', \'description\' => \'Event cache\'], [\'type\' => \'schedule\', \'command\' => \'schedule:clear-cache\', \'description\' => \'Schedule cache\'], [\'type\' => \'cache\', \'command\' => \'cache:clear\', \'description\' => \'Application cache\'], [\'type\' => \'compiled\', \'command\' => \'clear-compiled\', \'description\' => \'Compiled files\'], [\'type\' => \'optimize\', \'command\' => \'optimize:clear\', \'description\' => \'Optimized files\']]',
          'attributes' => 
          array (
            'startLine' => 187,
            'endLine' => 228,
            'startTokenPos' => 98,
            'startFilePos' => 5769,
            'endTokenPos' => 308,
            'endFilePos' => 6910,
          ),
        ),
        'docComment' => '/**
 * Cache types to flush in order.
 *
 * Defines the order in which caches should be cleared for optimal results.
 * Some caches depend on others, so order matters. Each entry contains the
 * cache type name, the Laravel Artisan command to execute, and a description.
 *
 * @var array<array{type: string, command: string, description: string}>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 187,
        'endLine' => 228,
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
 * Main entry point that orchestrates the complete cache flushing process.
 * Handles user confirmation (unless --force is used), executes cache clearing,
 * and displays detailed results. Uses Command helper methods for
 * consistent output formatting.
 *
 * @return int Command exit code (SUCCESS or FAILURE)
 */',
        'startLine' => 240,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'aliasName' => NULL,
      ),
      'gatherConfirmation' => 
      array (
        'name' => 'gatherConfirmation',
        'parameters' => 
        array (
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
 * Gather user confirmation for flush operation.
 *
 * Prompts the user to confirm the flush operation unless the --force
 * flag is provided. Uses Laravel Prompts for interactive confirmation
 * with a clear warning message.
 *
 * @return bool True if user confirms or --force is used, false otherwise
 */',
        'startLine' => 277,
        'endLine' => 290,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'aliasName' => NULL,
      ),
      'executeFlushOperation' => 
      array (
        'name' => 'executeFlushOperation',
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
 * Execute the flush operation for all cache types.
 *
 * Iterates through each cache type and flushes it using the corresponding
 * Laravel Artisan command. Tracks success and failure counts, as well as
 * execution time for performance monitoring. Uses Command methods
 * for consistent output.
 *
 * @return array{flushed: int, failed: int, total: int, executionTime: float} Flush statistics
 */',
        'startLine' => 302,
        'endLine' => 332,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'aliasName' => NULL,
      ),
      'flushCacheType' => 
      array (
        'name' => 'flushCacheType',
        'parameters' => 
        array (
          'cache' => 
          array (
            'name' => 'cache',
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
            'startLine' => 344,
            'endLine' => 344,
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
 * Flush a specific cache type.
 *
 * Executes the Laravel Artisan command associated with the cache type
 * and provides detailed feedback on the operation. Uses try-catch to
 * handle any exceptions that may occur during cache flushing.
 *
 * @param  array{type: string, command: string, description: string}  $cache  Cache information
 * @return bool True if successful, false otherwise
 */',
        'startLine' => 344,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
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
            'startLine' => 381,
            'endLine' => 381,
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
 * Display success message with flush statistics.
 *
 * Shows a comprehensive summary of the flush operation including success/failure
 * counts, execution time, and helpful next steps. Uses Command helper
 * methods for consistent formatting.
 *
 * @param  array{flushed: int, failed: int, total: int, executionTime: float}  $result  Flush statistics
 */',
        'startLine' => 381,
        'endLine' => 399,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'aliasName' => NULL,
      ),
      'displayNextSteps' => 
      array (
        'name' => 'displayNextSteps',
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
 * Display next steps after successful flush.
 *
 * Provides helpful guidance on what to expect and do after flushing caches.
 * Includes information about cache rebuilding and tips for selective cache
 * clearing. Uses Command listing method for clean formatting.
 */',
        'startLine' => 408,
        'endLine' => 420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Pixielity\\Foundation\\Console\\Commands\\Cache',
        'declaringClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'implementingClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
        'currentClassName' => 'Pixielity\\Foundation\\Console\\Commands\\Cache\\CacheFlushCommand',
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