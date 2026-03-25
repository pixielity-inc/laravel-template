<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/FilesystemDriver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Foundation\Enums\FilesystemDriver
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-4e6d976843c993b211fc5b9769975224e32f08215f8b22333bbf7ce1604adf37',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/foundation/src/Enums/FilesystemDriver.php',
      ),
    ),
    'namespace' => 'Pixielity\\Foundation\\Enums',
    'name' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
    'shortName' => 'FilesystemDriver',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => true,
    'isBackedEnum' => true,
    'modifiers' => 0,
    'docComment' => '/**
 * Filesystem Driver Enum.
 *
 * Defines the available filesystem drivers supported by Laravel.
 * Use this enum instead of hardcoded driver strings.
 *
 * ## Usage:
 * ```php
 * use Pixielity\\Foundation\\Enums\\FilesystemDriver;
 *
 * // Check current filesystem driver
 * if ($driver === FilesystemDriver::S3()) {
 *     // S3-specific logic
 * }
 *
 * // In config
 * \'driver\' => FilesystemDriver::LOCAL(),
 * ```
 *
 * @since 1.0.0
 *
 * @method static string LOCAL() Returns the LOCAL enum instance
 * @method static string S3() Returns the S3 enum instance
 * @method static string FTP() Returns the FTP enum instance
 * @method static string SFTP() Returns the SFTP enum instance
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 37,
    'endLine' => 98,
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
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
      'isCloudBased' => 
      array (
        'name' => 'isCloudBased',
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
 * Check if this driver is cloud-based.
 *
 * @return bool True if driver uses cloud storage
 */',
        'startLine' => 78,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'aliasName' => NULL,
      ),
      'isRemote' => 
      array (
        'name' => 'isRemote',
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
 * Check if this driver is remote.
 *
 * @return bool True if driver stores files remotely
 */',
        'startLine' => 91,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pixielity\\Foundation\\Enums',
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'aliasName' => NULL,
      ),
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
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
        'declaringClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'implementingClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
        'currentClassName' => 'Pixielity\\Foundation\\Enums\\FilesystemDriver',
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
      'LOCAL' => 
      array (
        'name' => 'LOCAL',
        'value' => 
        array (
          'code' => '\'local\'',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 68,
            'startFilePos' => 1090,
            'endTokenPos' => 68,
            'endFilePos' => 1096,
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
                'code' => '\'Local\'',
                'attributes' => 
                array (
                  'startLine' => 45,
                  'endLine' => 45,
                  'startTokenPos' => 51,
                  'startFilePos' => 1013,
                  'endTokenPos' => 51,
                  'endFilePos' => 1019,
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
                'code' => '\'Stores files on local disk.\'',
                'attributes' => 
                array (
                  'startLine' => 46,
                  'endLine' => 46,
                  'startTokenPos' => 58,
                  'startFilePos' => 1041,
                  'endTokenPos' => 58,
                  'endFilePos' => 1069,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * Local filesystem driver.
 * Stores files on local disk.
 */',
        'startLine' => 45,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 25,
      ),
      'S3' => 
      array (
        'name' => 'S3',
        'value' => 
        array (
          'code' => '\'s3\'',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 93,
            'startFilePos' => 1349,
            'endTokenPos' => 93,
            'endFilePos' => 1352,
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
                'code' => '\'S3\'',
                'attributes' => 
                array (
                  'startLine' => 53,
                  'endLine' => 53,
                  'startTokenPos' => 76,
                  'startFilePos' => 1235,
                  'endTokenPos' => 76,
                  'endFilePos' => 1238,
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
                'code' => '\'Amazon S3 or S3-compatible storage (MinIO, DigitalOcean Spaces, etc.).\'',
                'attributes' => 
                array (
                  'startLine' => 54,
                  'endLine' => 54,
                  'startTokenPos' => 83,
                  'startFilePos' => 1260,
                  'endTokenPos' => 83,
                  'endFilePos' => 1331,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * S3 filesystem driver.
 * Amazon S3 or S3-compatible storage (MinIO, DigitalOcean Spaces, etc.).
 */',
        'startLine' => 53,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 19,
      ),
      'FTP' => 
      array (
        'name' => 'FTP',
        'value' => 
        array (
          'code' => '\'ftp\'',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 118,
            'startFilePos' => 1514,
            'endTokenPos' => 118,
            'endFilePos' => 1518,
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
                'code' => '\'FTP\'',
                'attributes' => 
                array (
                  'startLine' => 61,
                  'endLine' => 61,
                  'startTokenPos' => 101,
                  'startFilePos' => 1445,
                  'endTokenPos' => 101,
                  'endFilePos' => 1449,
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
                'code' => '\'File Transfer Protocol.\'',
                'attributes' => 
                array (
                  'startLine' => 62,
                  'endLine' => 62,
                  'startTokenPos' => 108,
                  'startFilePos' => 1471,
                  'endTokenPos' => 108,
                  'endFilePos' => 1495,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * FTP filesystem driver.
 * File Transfer Protocol.
 */',
        'startLine' => 61,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 21,
      ),
      'SFTP' => 
      array (
        'name' => 'SFTP',
        'value' => 
        array (
          'code' => '\'sftp\'',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 143,
            'startFilePos' => 1691,
            'endTokenPos' => 143,
            'endFilePos' => 1696,
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
                'code' => '\'SFTP\'',
                'attributes' => 
                array (
                  'startLine' => 69,
                  'endLine' => 69,
                  'startTokenPos' => 126,
                  'startFilePos' => 1616,
                  'endTokenPos' => 126,
                  'endFilePos' => 1621,
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
                'code' => '\'SSH File Transfer Protocol.\'',
                'attributes' => 
                array (
                  'startLine' => 70,
                  'endLine' => 70,
                  'startTokenPos' => 133,
                  'startFilePos' => 1643,
                  'endTokenPos' => 133,
                  'endFilePos' => 1671,
                ),
              ),
            ),
          ),
        ),
        'docComment' => '/**
 * SFTP filesystem driver.
 * SSH File Transfer Protocol.
 */',
        'startLine' => 69,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 23,
      ),
    ),
  ),
));