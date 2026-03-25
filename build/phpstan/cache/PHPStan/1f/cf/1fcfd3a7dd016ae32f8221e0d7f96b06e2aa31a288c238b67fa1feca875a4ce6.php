<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/PolicyAbility.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\PolicyAbility
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-9693c1a5001727a5273bb9229a07ce76254bb585ea82ebca9d924b91454162f8',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/PolicyAbility.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
    'shortName' => 'PolicyAbility',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Policy Ability Enum.
 *
 * Defines standard policy method names used across all resource policies.
 * These abilities map to controller actions and are used with the #[Authorize] attribute.
 *
 * ## Standard CRUD Abilities:
 * - viewAny: List/index all resources
 * - view: View a specific resource
 * - create: Create a new resource
 * - update: Update an existing resource
 * - delete: Delete a resource
 * - restore: Restore a soft-deleted resource
 * - forceDelete: Permanently delete a resource
 *
 * ## Custom Abilities:
 * - manage: General management permission
 * - attach: Attach related resources
 * - detach: Detach related resources
 *
 * ## Usage with #[Authorize] Attribute:
 *
 * ```php
 * use Pixielity\\Foundation\\Attributes\\Auth\\Authorize;
 * use Pixielity\\Foundation\\Enums\\PolicyAbility;
 *
 * #[Authorize(PolicyAbility::VIEW(), Incident::class)]
 * public function show(Incident $incident): JsonResponse
 * {
 *     // Calls IncidentPolicy::view($user, $incident)
 * }
 *
 * #[Authorize(PolicyAbility::UPDATE(), Facility::class)]
 * public function update(Facility $facility): JsonResponse
 * {
 *     // Calls FacilityPolicy::update($user, $facility)
 * }
 * ```
 *
 * ## Controller Method Mapping:
 *
 * | Controller Method | Policy Ability | Constant Value |
 * |-------------------|----------------|----------------|
 * | index()           | viewAny()      | VIEW_ANY       |
 * | show()            | view()         | VIEW           |
 * | create()          | create()       | CREATE         |
 * | store()           | create()       | CREATE         |
 * | edit()            | update()       | UPDATE         |
 * | update()          | update()       | UPDATE         |
 * | destroy()         | delete()       | DELETE         |
 * | restore()         | restore()      | RESTORE        |
 *
 * ## Benefits:
 *
 * - Type-safe: IDE autocomplete and type checking
 * - Consistent: Same ability names across all policies
 * - Discoverable: Easy to see all available abilities
 * - Refactorable: Change ability names in one place
 *
 * @version 1.0.0
 *
 * @method static string VIEW_ANY() Returns the VIEW_ANY enum instance
 * @method static string VIEW() Returns the VIEW enum instance
 * @method static string CREATE() Returns the CREATE enum instance
 * @method static string UPDATE() Returns the UPDATE enum instance
 * @method static string DELETE() Returns the DELETE enum instance
 * @method static string RESTORE() Returns the RESTORE enum instance
 * @method static string FORCE_DELETE() Returns the FORCE_DELETE enum instance
 * @method static string MANAGE() Returns the MANAGE enum instance
 * @method static string ATTACH() Returns the ATTACH enum instance
 * @method static string DETACH() Returns the DETACH enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 83,
    'endLine' => 192,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Pixielity\\Enum\\Enum',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'name' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'name' => 'name',
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
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'value' => 
      array (
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'name' => 'value',
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
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
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
      'cases' => 
      array (
        'name' => 'cases',
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
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'aliasName' => NULL,
      ),
      'from' => 
      array (
        'name' => 'from',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
                      'name' => 'int',
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
            'startLine' => NULL,
            'endLine' => NULL,
            'startColumn' => -1,
            'endColumn' => -1,
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
            'name' => 'static',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'aliasName' => NULL,
      ),
      'tryFrom' => 
      array (
        'name' => 'tryFrom',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
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
                      'name' => 'int',
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
            'startLine' => NULL,
            'endLine' => NULL,
            'startColumn' => -1,
            'endColumn' => -1,
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
                  'name' => 'static',
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
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => NULL,
        'endLine' => NULL,
        'startColumn' => -1,
        'endColumn' => -1,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\PolicyAbility',
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
    'backingType' => 
    array (
      'name' => 'string',
      'isIdentifier' => true,
    ),
    'cases' => 
    array (
      'VIEW_ANY' => 
      array (
        'name' => 'VIEW_ANY',
        'value' => 
        array (
          'code' => '\'viewAny\'',
          'attributes' => 
          array (
            'startLine' => 95,
            'endLine' => 95,
            'startTokenPos' => 68,
            'startFilePos' => 3277,
            'endTokenPos' => 68,
            'endFilePos' => 3285,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'View Any\'',
                'attributes' => 
                array (
                  'startLine' => 93,
                  'endLine' => 93,
                  'startTokenPos' => 51,
                  'startFilePos' => 3155,
                  'endTokenPos' => 51,
                  'endFilePos' => 3164,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'View any resources (list/index). Used for index(), list() methods.\'',
                'attributes' => 
                array (
                  'startLine' => 94,
                  'endLine' => 94,
                  'startTokenPos' => 58,
                  'startFilePos' => 3186,
                  'endTokenPos' => 58,
                  'endFilePos' => 3253,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * View any resources (list/index).
 *
 * Used for: index(), list() methods
 * Policy method: viewAny(User $user): bool
 */',
        'startLine' => 93,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 30,
      ),
      'VIEW' => 
      array (
        'name' => 'VIEW',
        'value' => 
        array (
          'code' => '\'view\'',
          'attributes' => 
          array (
            'startLine' => 105,
            'endLine' => 105,
            'startTokenPos' => 93,
            'startFilePos' => 3562,
            'endTokenPos' => 93,
            'endFilePos' => 3567,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'View\'',
                'attributes' => 
                array (
                  'startLine' => 103,
                  'endLine' => 103,
                  'startTokenPos' => 76,
                  'startFilePos' => 3456,
                  'endTokenPos' => 76,
                  'endFilePos' => 3461,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'View a specific resource. Used for show(), view() methods.\'',
                'attributes' => 
                array (
                  'startLine' => 104,
                  'endLine' => 104,
                  'startTokenPos' => 83,
                  'startFilePos' => 3483,
                  'endTokenPos' => 83,
                  'endFilePos' => 3542,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * View a specific resource.
 *
 * Used for: show(), view() methods
 * Policy method: view(User $user, Model $model): bool
 */',
        'startLine' => 103,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
      'CREATE' => 
      array (
        'name' => 'CREATE',
        'value' => 
        array (
          'code' => '\'create\'',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 115,
            'startTokenPos' => 118,
            'startFilePos' => 3836,
            'endTokenPos' => 118,
            'endFilePos' => 3843,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Create\'',
                'attributes' => 
                array (
                  'startLine' => 113,
                  'endLine' => 113,
                  'startTokenPos' => 101,
                  'startFilePos' => 3726,
                  'endTokenPos' => 101,
                  'endFilePos' => 3733,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Create a new resource. Used for create(), store() methods.\'',
                'attributes' => 
                array (
                  'startLine' => 114,
                  'endLine' => 114,
                  'startTokenPos' => 108,
                  'startFilePos' => 3755,
                  'endTokenPos' => 108,
                  'endFilePos' => 3814,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Create a new resource.
 *
 * Used for: create(), store() methods
 * Policy method: create(User $user): bool
 */',
        'startLine' => 113,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'UPDATE' => 
      array (
        'name' => 'UPDATE',
        'value' => 
        array (
          'code' => '\'update\'',
          'attributes' => 
          array (
            'startLine' => 125,
            'endLine' => 125,
            'startTokenPos' => 143,
            'startFilePos' => 4136,
            'endTokenPos' => 143,
            'endFilePos' => 4143,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Update\'',
                'attributes' => 
                array (
                  'startLine' => 123,
                  'endLine' => 123,
                  'startTokenPos' => 126,
                  'startFilePos' => 4021,
                  'endTokenPos' => 126,
                  'endFilePos' => 4028,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Update an existing resource. Used for edit(), update() methods.\'',
                'attributes' => 
                array (
                  'startLine' => 124,
                  'endLine' => 124,
                  'startTokenPos' => 133,
                  'startFilePos' => 4050,
                  'endTokenPos' => 133,
                  'endFilePos' => 4114,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Update an existing resource.
 *
 * Used for: edit(), update() methods
 * Policy method: update(User $user, Model $model): bool
 */',
        'startLine' => 123,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'DELETE' => 
      array (
        'name' => 'DELETE',
        'value' => 
        array (
          'code' => '\'delete\'',
          'attributes' => 
          array (
            'startLine' => 135,
            'endLine' => 135,
            'startTokenPos' => 168,
            'startFilePos' => 4450,
            'endTokenPos' => 168,
            'endFilePos' => 4457,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Delete\'',
                'attributes' => 
                array (
                  'startLine' => 133,
                  'endLine' => 133,
                  'startTokenPos' => 151,
                  'startFilePos' => 4328,
                  'endTokenPos' => 151,
                  'endFilePos' => 4335,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Delete a resource (soft delete). Used for destroy(), delete() methods.\'',
                'attributes' => 
                array (
                  'startLine' => 134,
                  'endLine' => 134,
                  'startTokenPos' => 158,
                  'startFilePos' => 4357,
                  'endTokenPos' => 158,
                  'endFilePos' => 4428,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Delete a resource (soft delete).
 *
 * Used for: destroy(), delete() methods
 * Policy method: delete(User $user, Model $model): bool
 */',
        'startLine' => 133,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'RESTORE' => 
      array (
        'name' => 'RESTORE',
        'value' => 
        array (
          'code' => '\'restore\'',
          'attributes' => 
          array (
            'startLine' => 145,
            'endLine' => 145,
            'startTokenPos' => 193,
            'startFilePos' => 4747,
            'endTokenPos' => 193,
            'endFilePos' => 4755,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Restore\'',
                'attributes' => 
                array (
                  'startLine' => 143,
                  'endLine' => 143,
                  'startTokenPos' => 176,
                  'startFilePos' => 4633,
                  'endTokenPos' => 176,
                  'endFilePos' => 4641,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Restore a soft-deleted resource. Used for restore() methods.\'',
                'attributes' => 
                array (
                  'startLine' => 144,
                  'endLine' => 144,
                  'startTokenPos' => 183,
                  'startFilePos' => 4663,
                  'endTokenPos' => 183,
                  'endFilePos' => 4724,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Restore a soft-deleted resource.
 *
 * Used for: restore() methods
 * Policy method: restore(User $user, Model $model): bool
 */',
        'startLine' => 143,
        'endLine' => 145,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'FORCE_DELETE' => 
      array (
        'name' => 'FORCE_DELETE',
        'value' => 
        array (
          'code' => '\'forceDelete\'',
          'attributes' => 
          array (
            'startLine' => 155,
            'endLine' => 155,
            'startTokenPos' => 218,
            'startFilePos' => 5063,
            'endTokenPos' => 218,
            'endFilePos' => 5075,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Force Delete\'',
                'attributes' => 
                array (
                  'startLine' => 153,
                  'endLine' => 153,
                  'startTokenPos' => 201,
                  'startFilePos' => 4937,
                  'endTokenPos' => 201,
                  'endFilePos' => 4950,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Permanently delete a resource. Used for forceDelete() methods.\'',
                'attributes' => 
                array (
                  'startLine' => 154,
                  'endLine' => 154,
                  'startTokenPos' => 208,
                  'startFilePos' => 4972,
                  'endTokenPos' => 208,
                  'endFilePos' => 5035,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Permanently delete a resource.
 *
 * Used for: forceDelete() methods
 * Policy method: forceDelete(User $user, Model $model): bool
 */',
        'startLine' => 153,
        'endLine' => 155,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'MANAGE' => 
      array (
        'name' => 'MANAGE',
        'value' => 
        array (
          'code' => '\'manage\'',
          'attributes' => 
          array (
            'startLine' => 167,
            'endLine' => 167,
            'startTokenPos' => 243,
            'startFilePos' => 5475,
            'endTokenPos' => 243,
            'endFilePos' => 5482,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Manage\'',
                'attributes' => 
                array (
                  'startLine' => 165,
                  'endLine' => 165,
                  'startTokenPos' => 226,
                  'startFilePos' => 5333,
                  'endTokenPos' => 226,
                  'endFilePos' => 5340,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Manage a resource (general management permission). Used for various management operations.\'',
                'attributes' => 
                array (
                  'startLine' => 166,
                  'endLine' => 166,
                  'startTokenPos' => 233,
                  'startFilePos' => 5362,
                  'endTokenPos' => 233,
                  'endFilePos' => 5453,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Manage a resource (general management permission).
 *
 * Used for: Various management operations
 * Policy method: manage(User $user, Model $model): bool
 *
 * Common in: Settings, System operations
 */',
        'startLine' => 165,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'ATTACH' => 
      array (
        'name' => 'ATTACH',
        'value' => 
        array (
          'code' => '\'attach\'',
          'attributes' => 
          array (
            'startLine' => 179,
            'endLine' => 179,
            'startTokenPos' => 268,
            'startFilePos' => 5851,
            'endTokenPos' => 268,
            'endFilePos' => 5858,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Attach\'',
                'attributes' => 
                array (
                  'startLine' => 177,
                  'endLine' => 177,
                  'startTokenPos' => 251,
                  'startFilePos' => 5709,
                  'endTokenPos' => 251,
                  'endFilePos' => 5716,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Attach related resources. Used for attach(), link() methods in many-to-many relationships.\'',
                'attributes' => 
                array (
                  'startLine' => 178,
                  'endLine' => 178,
                  'startTokenPos' => 258,
                  'startFilePos' => 5738,
                  'endTokenPos' => 258,
                  'endFilePos' => 5829,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Attach related resources.
 *
 * Used for: attach(), link() methods
 * Policy method: attach(User $user, Model $model): bool
 *
 * Common in: Many-to-many relationships
 */',
        'startLine' => 177,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'DETACH' => 
      array (
        'name' => 'DETACH',
        'value' => 
        array (
          'code' => '\'detach\'',
          'attributes' => 
          array (
            'startLine' => 191,
            'endLine' => 191,
            'startTokenPos' => 293,
            'startFilePos' => 6231,
            'endTokenPos' => 293,
            'endFilePos' => 6238,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Label',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Detach\'',
                'attributes' => 
                array (
                  'startLine' => 189,
                  'endLine' => 189,
                  'startTokenPos' => 276,
                  'startFilePos' => 6087,
                  'endTokenPos' => 276,
                  'endFilePos' => 6094,
                ),
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'Pixielity\\Enum\\Attributes\\Description',
            'isRepeated' => false,
            'arguments' => 
            array (
              0 => 
              array (
                'code' => '\'Detach related resources. Used for detach(), unlink() methods in many-to-many relationships.\'',
                'attributes' => 
                array (
                  'startLine' => 190,
                  'endLine' => 190,
                  'startTokenPos' => 283,
                  'startFilePos' => 6116,
                  'endTokenPos' => 283,
                  'endFilePos' => 6209,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Detach related resources.
 *
 * Used for: detach(), unlink() methods
 * Policy method: detach(User $user, Model $model): bool
 *
 * Common in: Many-to-many relationships
 */',
        'startLine' => 189,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
    ),
  ),
));