<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Container/src/Attributes/Tagged.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Container\Attributes\Tagged
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-4a2c75d09afbc23a96ace8248d45225e0b944ad3abf3bf8f12595fcab536c831',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Container\\Attributes\\Tagged',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Container/src/Attributes/Tagged.php',
      ),
    ),
    'namespace' => 'Pixielity\\Container\\Attributes',
    'name' => 'Pixielity\\Container\\Attributes\\Tagged',
    'shortName' => 'Tagged',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Tagged Attribute.
 *
 * Marks a class to be tagged in the Laravel service container.
 * This is a marker attribute used by service providers to identify
 * which classes should be registered with a specific tag.
 *
 * ## Usage on Classes:
 * ```php
 * #[Tagged(\'verification.channels\')]
 * class EmailVerificationChannel implements VerificationChannelInterface
 * {
 *     // ...
 * }
 * ```
 *
 * ## Service Provider Registration:
 * Service providers should scan for classes with this attribute and register them:
 * ```php
 * $this->app->tag([
 *     EmailVerificationChannel::class,
 *     SmsVerificationChannel::class,
 * ], \'verification.channels\');
 * ```
 *
 * ## Resolution:
 * To inject all tagged services, use Laravel\'s #[Tag] attribute on parameters:
 * ```php
 * use Illuminate\\Container\\Attributes\\Tag;
 *
 * public function __construct(
 *     #[Tag(\'verification.channels\')] iterable $channels
 * ) {
 *     // $channels contains all services tagged with \'verification.channels\'
 * }
 * ```
 *
 * @since 1.0.0
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Attribute',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\\Attribute::TARGET_CLASS',
            'attributes' => 
            array (
              'startLine' => 48,
              'endLine' => 48,
              'startTokenPos' => 25,
              'startFilePos' => 1143,
              'endTokenPos' => 27,
              'endFilePos' => 1165,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 48,
    'endLine' => 59,
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
      'tag' => 
      array (
        'declaringClassName' => 'Pixielity\\Container\\Attributes\\Tagged',
        'implementingClassName' => 'Pixielity\\Container\\Attributes\\Tagged',
        'name' => 'tag',
        'modifiers' => 2177,
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
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 9,
        'endColumn' => 35,
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
          'tag' => 
          array (
            'name' => 'tag',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 9,
            'endColumn' => 35,
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
 * Create a new Tagged attribute instance.
 *
 * @param  string  $tag  The tag name to register this service under
 */',
        'startLine' => 56,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 8,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Container\\Attributes',
        'declaringClassName' => 'Pixielity\\Container\\Attributes\\Tagged',
        'implementingClassName' => 'Pixielity\\Container\\Attributes\\Tagged',
        'currentClassName' => 'Pixielity\\Container\\Attributes\\Tagged',
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