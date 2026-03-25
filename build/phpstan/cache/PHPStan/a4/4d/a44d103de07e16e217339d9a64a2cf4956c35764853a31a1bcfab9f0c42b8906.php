<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Solutions/AiSolution.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Solutions\AiSolution
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-113dbd84c70a3c362e6c1c58d4407a774dced37ca76b09f00f2b81881e14ed29',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Solutions/AiSolution.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Solutions',
    'name' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
    'shortName' => 'AiSolution',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Class AiSolution.
 *
 * This class implements the Solution interface for handling exceptions
 * and providing solutions for errors in the Pixielity Integration .
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 178,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Spatie\\Ignition\\Contracts\\Solution',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'solution' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'name' => 'solution',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The proposed solution to resolve an error or exception.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'throwable' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'name' => 'throwable',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Throwable',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 9,
        'endColumn' => 38,
        'isPromoted' => true,
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
          'throwable' => 
          array (
            'name' => 'throwable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 9,
            'endColumn' => 38,
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
 * AiSolution constructor.
 *
 * @param  Throwable  $throwable  The throwable exception that triggered the solution.
 *                                This constructor initializes the solution by retrieving it from cache
 *                                or generating a new one if not already cached.
 */',
        'startLine' => 36,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'aliasName' => NULL,
      ),
      'getSolutionTitle' => 
      array (
        'name' => 'getSolutionTitle',
        'parameters' => 
        array (
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
 * Gets the title of the solution.
 *
 * @return string The title of the solution.
 *                This method should return a concise title for the solution, but
 *                it has not yet been implemented.
 */',
        'startLine' => 50,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'aliasName' => NULL,
      ),
      'getSolutionDescription' => 
      array (
        'name' => 'getSolutionDescription',
        'parameters' => 
        array (
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
 * Gets the description of the solution.
 *
 * @return string The description of the solution.
 *                This method should return a detailed description for the solution, but
 *                it has not yet been implemented.
 */',
        'startLine' => 62,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'aliasName' => NULL,
      ),
      'getDocumentationLinks' => 
      array (
        'name' => 'getDocumentationLinks',
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
 * Gets the documentation links related to the solution.
 *
 * @return array<string, string> An array of documentation links.
 *                               This method should return an array of relevant links for further
 *                               documentation related to the solution, but it has not yet been implemented.
 */',
        'startLine' => 74,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'aliasName' => NULL,
      ),
      'retrieveSolutionFromCache' => 
      array (
        'name' => 'retrieveSolutionFromCache',
        'parameters' => 
        array (
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
 * Retrieves the solution from cache or generates a new one if not found.
 *
 * @return mixed The generated solution text.
 *               This method checks if a solution for the current throwable is cached.
 *               If it is cached, it returns the cached solution. Otherwise, it generates
 *               a new solution using OpenAI\'s API.
 */',
        'startLine' => 88,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'aliasName' => NULL,
      ),
      'generateSolution' => 
      array (
        'name' => 'generateSolution',
        'parameters' => 
        array (
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
 * Generates the solution using OpenAI\'s GPT-4 model.
 *
 * This method makes a call to the OpenAI API using the GPT-4 model,
 * with a prompt derived from the throwable\'s information. The result
 * is a generated solution text to help resolve the issue.
 *
 * @return string The generated solution text.
 *                This method uses GPT-4 to produce a deterministic
 *                solution based on the throwable\'s context.
 */',
        'startLine' => 108,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'aliasName' => NULL,
      ),
      'getApplicationFrame' => 
      array (
        'name' => 'getApplicationFrame',
        'parameters' => 
        array (
          'throwable' => 
          array (
            'name' => 'throwable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 42,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
                  'name' => 'Spatie\\Backtrace\\Frame',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieves the application frame from the backtrace for the given throwable.
 *
 * @param  Throwable  $throwable  The throwable to analyze.
 * @return Frame|null The application frame or null if not found.
 *                    This method analyzes the backtrace of the given throwable and retrieves
 *                    the first application frame, which contains the file and line number
 *                    where the error occurred.
 */',
        'startLine' => 136,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'aliasName' => NULL,
      ),
      'generatePrompt' => 
      array (
        'name' => 'generatePrompt',
        'parameters' => 
        array (
          'throwable' => 
          array (
            'name' => 'throwable',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
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
            'startColumn' => 37,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generates a prompt for OpenAI based on the throwable.
 *
 * @param  Throwable  $throwable  The throwable to analyze.
 * @return string The generated prompt.
 *                This method generates a prompt for OpenAI\'s API based on the
 *                application frame and the message from the throwable. It formats
 *                the code snippet and includes the relevant context to assist in generating
 *                a solution.
 */',
        'startLine' => 158,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pixielity\\Foundation\\Solutions',
        'declaringClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'implementingClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
        'currentClassName' => 'Pixielity\\Foundation\\Solutions\\AiSolution',
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