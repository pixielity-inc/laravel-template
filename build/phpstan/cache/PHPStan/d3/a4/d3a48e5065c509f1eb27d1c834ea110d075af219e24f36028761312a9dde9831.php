<?php declare(strict_types = 1);

// odsl-/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Path.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pixielity\Support\Path
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.19-73838534b66243898b8f90ff961f069f3d4d82161a06b19f52b4e89fd042eeb5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pixielity\\Support\\Path',
        'filename' => '/Users/akouta/Projects/MNGO/laravel-template/modules/framework/src/Support/src/Path.php',
      ),
    ),
    'namespace' => 'Pixielity\\Support',
    'name' => 'Pixielity\\Support\\Path',
    'shortName' => 'Path',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Path Helper.
 *
 * Pure path manipulation utility inspired by Node.js path module.
 * Provides static methods for working with file and directory paths.
 * Does NOT perform any filesystem operations - only string manipulation.
 *
 * ## Purpose:
 * - Manipulate path strings without touching the filesystem
 * - Provide cross-platform path operations
 * - Offer a clean, readable API for path resolution
 * - Support monorepo structure navigation (via HasLaravelPaths trait)
 *
 * ## Features:
 * - ✅ Pure path string manipulation (no filesystem I/O)
 * - ✅ Cross-platform support (Windows/Unix)
 * - ✅ Inspired by Node.js path module
 * - ✅ Laravel-specific path helpers (via trait)
 * - ✅ Monorepo-aware helpers (via trait)
 *
 * ## Core Path Methods:
 * ```php
 * // Join paths
 * Path::join(\'/path\', \'to\', \'file.php\');
 * // Returns: /path/to/file.php
 *
 * // Get parent directory
 * Path::dirname(\'/path/to/file.php\');
 * // Returns: /path/to
 *
 * // Get filename
 * Path::basename(\'/path/to/file.php\');
 * // Returns: file.php
 *
 * // Normalize path
 * Path::normalize(\'/path/./to/../file.php\');
 * // Returns: /path/file.php
 *
 * // Resolve absolute path
 * Path::resolve(\'path\', \'to\', \'file.php\');
 * // Returns: /current/working/dir/path/to/file.php
 * ```
 *
 * ## Laravel-Specific Methods (from HasLaravelPaths trait):
 * ```php
 * // Monorepo navigation
 * Path::packages(__DIR__);           // /monorepo/packages
 * Path::modules(__DIR__);            // /monorepo/modules
 * Path::monorepoRoot(__DIR__);       // /monorepo
 *
 * // Laravel directories
 * Path::storage($basePath);          // /app/storage
 * Path::config($srcPath);            // /app/src/config
 * Path::database($srcPath);          // /app/src/database
 * ```
 *
 * @since 1.0.0
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 65,
    'endLine' => 520,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Pixielity\\Support\\Concerns\\HasLaravelPaths',
    ),
    'immediateConstants' => 
    array (
      'SEPARATOR' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'name' => 'SEPARATOR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => 'DIRECTORY_SEPARATOR',
          'attributes' => 
          array (
            'startLine' => 72,
            'endLine' => 72,
            'startTokenPos' => 35,
            'startFilePos' => 2012,
            'endTokenPos' => 35,
            'endFilePos' => 2030,
          ),
        ),
        'docComment' => '/**
 * The directory separator for the current platform.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 49,
      ),
      'DELIMITER' => 
      array (
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'name' => 'DELIMITER',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => 'PATH_SEPARATOR',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 48,
            'startFilePos' => 2131,
            'endTokenPos' => 48,
            'endFilePos' => 2144,
          ),
        ),
        'docComment' => '/**
 * The path delimiter for the current platform.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 44,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'join' => 
      array (
        'name' => 'join',
        'parameters' => 
        array (
          'segments' => 
          array (
            'name' => 'segments',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 33,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Join all path segments together using the platform-specific separator.
 *
 * Normalizes the resulting path and resolves \'..\' and \'.\' segments.
 *
 * ## Example:
 * ```php
 * Path::join(\'/foo\', \'bar\', \'baz/asdf\', \'quux\', \'..\');
 * // Returns: /foo/bar/baz/asdf
 *
 * Path::join(\'foo\', {}, \'bar\');
 * // Throws TypeError
 * ```
 *
 * @param  string  ...$segments  Path segments to join
 * @return string The joined path
 */',
        'startLine' => 96,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'resolve' => 
      array (
        'name' => 'resolve',
        'parameters' => 
        array (
          'segments' => 
          array (
            'name' => 'segments',
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
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 36,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * Resolve a sequence of paths into an absolute path.
 *
 * Processes the sequence from right to left, prepending each path until
 * an absolute path is constructed. If no absolute path is found, uses cwd.
 *
 * ## Example:
 * ```php
 * Path::resolve(\'/foo/bar\', \'./baz\');
 * // Returns: /foo/bar/baz
 *
 * Path::resolve(\'/foo/bar\', \'/tmp/file/\');
 * // Returns: /tmp/file
 *
 * Path::resolve(\'wwwroot\', \'static_files/png/\', \'../gif/image.gif\');
 * // Returns: /current/working/dir/wwwroot/static_files/gif/image.gif
 * ```
 *
 * @param  string  ...$segments  Path segments to resolve
 * @return string The resolved absolute path
 */',
        'startLine' => 137,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'normalize' => 
      array (
        'name' => 'normalize',
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
            'startLine' => 180,
            'endLine' => 180,
            'startColumn' => 38,
            'endColumn' => 49,
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
 * Normalize a path, resolving \'..\' and \'.\' segments.
 *
 * When multiple slashes are found, they are replaced by a single slash.
 * Trailing slashes are preserved.
 *
 * ## Example:
 * ```php
 * Path::normalize(\'/foo/bar//baz/asdf/quux/..\');
 * // Returns: /foo/bar/baz/asdf
 *
 * Path::normalize(\'C:\\\\temp\\\\\\\\foo\\\\bar\\\\..\\\\\');
 * // Returns: C:\\temp\\foo\\
 * ```
 *
 * @param  string  $path  The path to normalize
 * @return string The normalized path
 */',
        'startLine' => 180,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'isAbsolute' => 
      array (
        'name' => 'isAbsolute',
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
            'startLine' => 251,
            'endLine' => 251,
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
 * Determine if a path is absolute.
 *
 * ## Example:
 * ```php
 * Path::isAbsolute(\'/foo/bar\');  // true
 * Path::isAbsolute(\'foo/bar\');   // false
 * Path::isAbsolute(\'C:/foo\');    // true (Windows)
 * ```
 *
 * @param  string  $path  The path to check
 * @return bool True if path is absolute
 */',
        'startLine' => 251,
        'endLine' => 264,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'dirname' => 
      array (
        'name' => 'dirname',
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
            'startLine' => 281,
            'endLine' => 281,
            'startColumn' => 36,
            'endColumn' => 47,
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
 * Return the directory name of a path (similar to Unix dirname).
 *
 * ## Example:
 * ```php
 * Path::dirname(\'/foo/bar/baz/asdf/quux\');
 * // Returns: /foo/bar/baz/asdf
 *
 * Path::dirname(\'/foo/bar/baz/asdf/quux.html\');
 * // Returns: /foo/bar/baz/asdf
 * ```
 *
 * @param  string  $path  The path
 * @return string The directory name
 */',
        'startLine' => 281,
        'endLine' => 288,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'basename' => 
      array (
        'name' => 'basename',
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
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'suffix' => 
          array (
            'name' => 'suffix',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 306,
                'endLine' => 306,
                'startTokenPos' => 904,
                'startFilePos' => 8709,
                'endTokenPos' => 904,
                'endFilePos' => 8710,
              ),
            ),
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
            'startLine' => 306,
            'endLine' => 306,
            'startColumn' => 51,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Return the last portion of a path (similar to Unix basename).
 *
 * ## Example:
 * ```php
 * Path::basename(\'/foo/bar/baz/asdf/quux.html\');
 * // Returns: quux.html
 *
 * Path::basename(\'/foo/bar/baz/asdf/quux.html\', \'.html\');
 * // Returns: quux
 * ```
 *
 * @param  string  $path  The path
 * @param  string  $suffix  Optional suffix to remove
 * @return string The basename
 */',
        'startLine' => 306,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'extname' => 
      array (
        'name' => 'extname',
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
            'startLine' => 336,
            'endLine' => 336,
            'startColumn' => 36,
            'endColumn' => 47,
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
 * Return the extension of the path.
 *
 * ## Example:
 * ```php
 * Path::extname(\'index.html\');
 * // Returns: .html
 *
 * Path::extname(\'index.coffee.md\');
 * // Returns: .md
 *
 * Path::extname(\'index.\');
 * // Returns: .
 *
 * Path::extname(\'index\');
 * // Returns: (empty string)
 * ```
 *
 * @param  string  $path  The path
 * @return string The extension (including the dot)
 */',
        'startLine' => 336,
        'endLine' => 351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'format' => 
      array (
        'name' => 'format',
        'parameters' => 
        array (
          'pathObject' => 
          array (
            'name' => 'pathObject',
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
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 35,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return a path string from an object with dir, root, base, name, and ext.
 *
 * ## Example:
 * ```php
 * Path::format([
 *     \'root\' => \'/\',
 *     \'dir\' => \'/home/user/dir\',
 *     \'base\' => \'file.txt\'
 * ]);
 * // Returns: /home/user/dir/file.txt
 *
 * Path::format([
 *     \'dir\' => \'/home/user/dir\',
 *     \'name\' => \'file\',
 *     \'ext\' => \'.txt\'
 * ]);
 * // Returns: /home/user/dir/file.txt
 * ```
 *
 * @param  array  $pathObject  Object with path components
 * @return string The formatted path
 */',
        'startLine' => 376,
        'endLine' => 393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'parse' => 
      array (
        'name' => 'parse',
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
            'startLine' => 413,
            'endLine' => 413,
            'startColumn' => 34,
            'endColumn' => 45,
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
 * Return an object with properties representing significant elements of the path.
 *
 * ## Example:
 * ```php
 * Path::parse(\'/home/user/dir/file.txt\');
 * // Returns: [
 * //   \'root\' => \'/\',
 * //   \'dir\' => \'/home/user/dir\',
 * //   \'base\' => \'file.txt\',
 * //   \'ext\' => \'.txt\',
 * //   \'name\' => \'file\'
 * // ]
 * ```
 *
 * @param  string  $path  The path to parse
 * @return array Path components
 */',
        'startLine' => 413,
        'endLine' => 434,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'relative' => 
      array (
        'name' => 'relative',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
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
            'startLine' => 449,
            'endLine' => 449,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
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
            'startLine' => 449,
            'endLine' => 449,
            'startColumn' => 51,
            'endColumn' => 60,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Solve the relative path from \'from\' to \'to\'.
 *
 * ## Example:
 * ```php
 * Path::relative(\'/data/orandea/test/aaa\', \'/data/orandea/impl/bbb\');
 * // Returns: ../../impl/bbb
 * ```
 *
 * @param  string  $from  The source path
 * @param  string  $to  The destination path
 * @return string The relative path
 */',
        'startLine' => 449,
        'endLine' => 482,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'parent' => 
      array (
        'name' => 'parent',
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
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 35,
            'endColumn' => 46,
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
 * Get the parent directory of a path.
 *
 * Alias for dirname() for better readability.
 *
 * ## Example:
 * ```php
 * Path::parent(\'/path/to/file.php\');
 * // Returns: /path/to
 * ```
 *
 * @param  string  $path  The path
 * @return string The parent directory
 */',
        'startLine' => 498,
        'endLine' => 501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
        'aliasName' => NULL,
      ),
      'up' => 
      array (
        'name' => 'up',
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
            'startLine' => 516,
            'endLine' => 516,
            'startColumn' => 31,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'levels' => 
          array (
            'name' => 'levels',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 516,
                'endLine' => 516,
                'startTokenPos' => 1738,
                'startFilePos' => 14171,
                'endTokenPos' => 1738,
                'endFilePos' => 14171,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 516,
            'endLine' => 516,
            'startColumn' => 45,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Go up multiple directory levels from the given path.
 *
 * ## Example:
 * ```php
 * Path::up(\'/path/to/file.php\', 2);
 * // Returns: /path
 * ```
 *
 * @param  string  $path  The starting path
 * @param  int  $levels  Number of levels to go up
 * @return string The path after going up
 */',
        'startLine' => 516,
        'endLine' => 519,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pixielity\\Support',
        'declaringClassName' => 'Pixielity\\Support\\Path',
        'implementingClassName' => 'Pixielity\\Support\\Path',
        'currentClassName' => 'Pixielity\\Support\\Path',
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