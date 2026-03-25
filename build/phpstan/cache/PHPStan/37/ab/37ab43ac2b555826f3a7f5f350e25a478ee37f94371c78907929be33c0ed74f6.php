<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/OrderStatus.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\OrderStatus
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-a18f5323e10024e7b472ae8f59dec6d50ca967fed3dd531c92a42ef4ab4c20a9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/OrderStatus.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
    'shortName' => 'OrderStatus',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Order Status Enum.
 *
 * Represents the various states an order can be in throughout its lifecycle.
 * This enum provides labeled and described status values for order management
 * and tracking purposes.
 *
 * ## Features:
 * - Labeled status values for display purposes
 * - Detailed descriptions for each status
 * - Type-safe status handling
 * - Easy conversion to arrays and options
 *
 * ## Usage:
 * ```php
 * // Get status value
 * $status = OrderStatus::PENDING->value; // \'pending\'
 *
 * // Get label
 * $label = OrderStatus::PENDING->label(); // \'Order Pending\'
 *
 * // Get description
 * $description = OrderStatus::PENDING->description(); // \'Order has been placed...\'
 *
 * // Get all status names
 * $names = OrderStatus::names(); // [\'PENDING\', \'PROCESSING\', \'SHIPPED\', ...]
 *
 * // Get all status values
 * $values = OrderStatus::values(); // [\'pending\', \'processing\', \'shipped\', ...]
 *
 * // Get options for select dropdown
 * $options = OrderStatus::options(); // [\'PENDING\' => \'pending\', ...]
 *
 * // Compare statuses
 * if ($order->status->is(OrderStatus::DELIVERED)) {
 *     // Order has been delivered
 * }
 *
 * // Check if status is in a set
 * if ($order->status->in([OrderStatus::SHIPPED, OrderStatus::DELIVERED])) {
 *     // Order is either shipped or delivered
 * }
 * ```
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */',
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Pixielity\\Enum\\Attributes\\Meta',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '[\\Pixielity\\Enum\\Attributes\\Description::class, \\Pixielity\\Enum\\Attributes\\Label::class]',
            'attributes' => 
            array (
              'startLine' => 60,
              'endLine' => 60,
              'startTokenPos' => 40,
              'startFilePos' => 1604,
              'endTokenPos' => 49,
              'endFilePos' => 1637,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 60,
    'endLine' => 114,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\OrderStatus',
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
      'PENDING' => 
      array (
        'name' => 'PENDING',
        'value' => 
        array (
          'code' => '\'pending\'',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 89,
            'startFilePos' => 1979,
            'endTokenPos' => 89,
            'endFilePos' => 1987,
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
                'code' => '\'Order Pending\'',
                'attributes' => 
                array (
                  'startLine' => 71,
                  'endLine' => 71,
                  'startTokenPos' => 72,
                  'startFilePos' => 1871,
                  'endTokenPos' => 72,
                  'endFilePos' => 1885,
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
                'code' => '\'Order has been placed and is awaiting processing\'',
                'attributes' => 
                array (
                  'startLine' => 72,
                  'endLine' => 72,
                  'startTokenPos' => 79,
                  'startFilePos' => 1907,
                  'endTokenPos' => 79,
                  'endFilePos' => 1956,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Pending Order Status.
 *
 * Indicates that an order has been placed and is awaiting processing.
 * This is the initial state of a new order.
 */',
        'startLine' => 71,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'PROCESSING' => 
      array (
        'name' => 'PROCESSING',
        'value' => 
        array (
          'code' => '\'processing\'',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 114,
            'startFilePos' => 2319,
            'endTokenPos' => 114,
            'endFilePos' => 2330,
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
                'code' => '\'Order Processing\'',
                'attributes' => 
                array (
                  'startLine' => 81,
                  'endLine' => 81,
                  'startTokenPos' => 97,
                  'startFilePos' => 2219,
                  'endTokenPos' => 97,
                  'endFilePos' => 2236,
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
                'code' => '\'Order is currently being processed\'',
                'attributes' => 
                array (
                  'startLine' => 82,
                  'endLine' => 82,
                  'startTokenPos' => 104,
                  'startFilePos' => 2258,
                  'endTokenPos' => 104,
                  'endFilePos' => 2293,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Processing Order Status.
 *
 * Indicates that the order is currently being processed, which may include
 * payment verification, inventory allocation, and preparation for shipment.
 */',
        'startLine' => 81,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
      'SHIPPED' => 
      array (
        'name' => 'SHIPPED',
        'value' => 
        array (
          'code' => '\'shipped\'',
          'attributes' => 
          array (
            'startLine' => 93,
            'endLine' => 93,
            'startTokenPos' => 139,
            'startFilePos' => 2646,
            'endTokenPos' => 139,
            'endFilePos' => 2654,
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
                'code' => '\'Order Shipped\'',
                'attributes' => 
                array (
                  'startLine' => 91,
                  'endLine' => 91,
                  'startTokenPos' => 122,
                  'startFilePos' => 2548,
                  'endTokenPos' => 122,
                  'endFilePos' => 2562,
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
                'code' => '\'Order has been shipped to the customer\'',
                'attributes' => 
                array (
                  'startLine' => 92,
                  'endLine' => 92,
                  'startTokenPos' => 129,
                  'startFilePos' => 2584,
                  'endTokenPos' => 129,
                  'endFilePos' => 2623,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Shipped Order Status.
 *
 * Indicates that the order has been shipped and is in transit to the customer.
 * Tracking information is typically available at this stage.
 */',
        'startLine' => 91,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'DELIVERED' => 
      array (
        'name' => 'DELIVERED',
        'value' => 
        array (
          'code' => '\'delivered\'',
          'attributes' => 
          array (
            'startLine' => 103,
            'endLine' => 103,
            'startTokenPos' => 164,
            'startFilePos' => 2945,
            'endTokenPos' => 164,
            'endFilePos' => 2955,
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
                'code' => '\'Order Delivered\'',
                'attributes' => 
                array (
                  'startLine' => 101,
                  'endLine' => 101,
                  'startTokenPos' => 147,
                  'startFilePos' => 2844,
                  'endTokenPos' => 147,
                  'endFilePos' => 2860,
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
                'code' => '\'Order has been successfully delivered\'',
                'attributes' => 
                array (
                  'startLine' => 102,
                  'endLine' => 102,
                  'startTokenPos' => 154,
                  'startFilePos' => 2882,
                  'endTokenPos' => 154,
                  'endFilePos' => 2920,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Delivered Order Status.
 *
 * Indicates that the order has been successfully delivered to the customer
 * and the transaction is complete.
 */',
        'startLine' => 101,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
      'CANCELLED' => 
      array (
        'name' => 'CANCELLED',
        'value' => 
        array (
          'code' => '\'cancelled\'',
          'attributes' => 
          array (
            'startLine' => 113,
            'endLine' => 113,
            'startTokenPos' => 189,
            'startFilePos' => 3288,
            'endTokenPos' => 189,
            'endFilePos' => 3298,
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
                'code' => '\'Order Cancelled\'',
                'attributes' => 
                array (
                  'startLine' => 111,
                  'endLine' => 111,
                  'startTokenPos' => 172,
                  'startFilePos' => 3174,
                  'endTokenPos' => 172,
                  'endFilePos' => 3190,
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
                'code' => '\'Order has been cancelled by the customer or system\'',
                'attributes' => 
                array (
                  'startLine' => 112,
                  'endLine' => 112,
                  'startTokenPos' => 179,
                  'startFilePos' => 3212,
                  'endTokenPos' => 179,
                  'endFilePos' => 3263,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Cancelled Order Status.
 *
 * Indicates that the order has been cancelled either by the customer,
 * the system, or an administrator. No further processing will occur.
 */',
        'startLine' => 111,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
    ),
  ),
));