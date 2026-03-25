<?php declare(strict_types = 1);

// osfsl-/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../nwidart/laravel-modules/src/Commands/Actions/ModelShowCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Nwidart\Modules\Commands\Actions\ModelShowCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-d9043473a03035c0cb183755a91941d55129b15ac12528acfdfb83df0ffdd3b3-8.4.19-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/vendor/composer/../nwidart/laravel-modules/src/Commands/Actions/ModelShowCommand.php',
      ),
    ),
    'namespace' => 'Nwidart\\Modules\\Commands\\Actions',
    'name' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
    'shortName' => 'ModelShowCommand',
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
          0 => 
          array (
            'code' => '\'module:model-show\'',
            'attributes' => 
            array (
              'startLine' => 14,
              'endLine' => 14,
              'startTokenPos' => 47,
              'startFilePos' => 361,
              'endTokenPos' => 47,
              'endFilePos' => 379,
            ),
          ),
          1 => 
          array (
            'code' => '\'Show information about an Eloquent model in modules\'',
            'attributes' => 
            array (
              'startLine' => 14,
              'endLine' => 14,
              'startTokenPos' => 50,
              'startFilePos' => 382,
              'endTokenPos' => 50,
              'endFilePos' => 434,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 14,
    'endLine' => 79,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Console\\ShowModelCommand',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Console\\PromptsForMissingInput',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'name' => 
      array (
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'name' => 'name',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'module:model-show\'',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 22,
            'startTokenPos' => 76,
            'startFilePos' => 619,
            'endTokenPos' => 76,
            'endFilePos' => 637,
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
        'startLine' => 22,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Show information about an Eloquent model in modules\'',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 87,
            'startFilePos' => 752,
            'endTokenPos' => 87,
            'endFilePos' => 804,
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
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 83,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'signature' => 
      array (
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'module:model-show {model : The model to show}
                {--database= : The database connection to use}
                {--json : Output the model as JSON}\'',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 38,
            'startTokenPos' => 98,
            'startFilePos' => 915,
            'endTokenPos' => 98,
            'endFilePos' => 1076,
          ),
        ),
        'docComment' => '/**
 * The console command signature.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 53,
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
      'formatModuleNamespace' => 
      array (
        'name' => 'formatModuleNamespace',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 44,
            'endColumn' => 55,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 40,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Nwidart\\Modules\\Commands\\Actions',
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'currentClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'aliasName' => NULL,
      ),
      'findModels' => 
      array (
        'name' => 'findModels',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
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
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 32,
            'endColumn' => 44,
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
            'name' => 'Illuminate\\Support\\Collection',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 51,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Nwidart\\Modules\\Commands\\Actions',
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'currentClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'aliasName' => NULL,
      ),
      'promptForMissingArgumentsUsing' => 
      array (
        'name' => 'promptForMissingArgumentsUsing',
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
        'docComment' => NULL,
        'startLine' => 64,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Nwidart\\Modules\\Commands\\Actions',
        'declaringClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'implementingClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
        'currentClassName' => 'Nwidart\\Modules\\Commands\\Actions\\ModelShowCommand',
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