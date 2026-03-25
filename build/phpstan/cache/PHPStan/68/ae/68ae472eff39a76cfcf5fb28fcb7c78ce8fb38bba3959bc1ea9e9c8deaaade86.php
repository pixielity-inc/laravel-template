<?php declare(strict_types = 1);

// osfsl-/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../nwidart/laravel-modules/src/Commands/Actions/ModelPruneCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Nwidart\Modules\Commands\Actions\ModelPruneCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-54a216d715c6f4e3df3adf59b69f0f2015f3c71d7267fa828876d774db1566a1-8.4.19-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../nwidart/laravel-modules/src/Commands/Actions/ModelPruneCommand.php',
      ),
    ),
    'namespace' => 'Nwidart\\Modules\\Commands\\Actions',
    'name' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
    'shortName' => 'ModelPruneCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
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
            'code' => '\'module:prune\'',
            'attributes' => 
            array (
              'startLine' => 18,
              'endLine' => 18,
              'startTokenPos' => 70,
              'startFilePos' => 540,
              'endTokenPos' => 70,
              'endFilePos' => 553,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 18,
    'endLine' => 133,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Console\\PruneCommand',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Console\\PromptsForMissingInput',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'ALL' => 
      array (
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'name' => 'ALL',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'All\'',
          'attributes' => 
          array (
            'startLine' => 21,
            'endLine' => 21,
            'startTokenPos' => 96,
            'startFilePos' => 661,
            'endTokenPos' => 96,
            'endFilePos' => 665,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
    ),
    'immediateProperties' => 
    array (
      'name' => 
      array (
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'name' => 'name',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'module:prune\'',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 105,
            'startFilePos' => 691,
            'endTokenPos' => 105,
            'endFilePos' => 704,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'signature' => 
      array (
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'module:prune {module*}
                                {--all : Check all Modules}
                                {--model=* : Class names of the models to be pruned}
                                {--except=* : Class names of the models to be excluded from pruning}
                                {--path=* : Absolute path(s) to directories where models are located}
                                {--chunk=1000 : The number of models to retrieve per chunk of models to be deleted}
                                {--pretend : Display the number of prunable records found instead of deleting them}\'',
          'attributes' => 
          array (
            'startLine' => 30,
            'endLine' => 36,
            'startTokenPos' => 116,
            'startFilePos' => 810,
            'endTokenPos' => 116,
            'endFilePos' => 1413,
          ),
        ),
        'docComment' => '/**
 * The console command name.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 117,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Prune models by module that are no longer needed\'',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 127,
            'startFilePos' => 1528,
            'endTokenPos' => 127,
            'endFilePos' => 1577,
          ),
        ),
        'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 80,
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
      'promptForMissingArguments' => 
      array (
        'name' => 'promptForMissingArguments',
        'parameters' => 
        array (
          'input' => 
          array (
            'name' => 'input',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 50,
            'endColumn' => 70,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'output' => 
          array (
            'name' => 'output',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 73,
            'endColumn' => 95,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 45,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Nwidart\\Modules\\Commands\\Actions',
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'currentClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'aliasName' => NULL,
      ),
      'models' => 
      array (
        'name' => 'models',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine the models that should be pruned.
 */',
        'startLine' => 78,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Nwidart\\Modules\\Commands\\Actions',
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
        'currentClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelPruneCommand',
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