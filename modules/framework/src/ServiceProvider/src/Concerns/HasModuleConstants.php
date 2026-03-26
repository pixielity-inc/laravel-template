<?php

declare(strict_types=1);

namespace Pixielity\ServiceProvider\Concerns;

/**
 * Has Module Constants Trait.
 *
 * Provides constants for module directory structure, file names, and publishing tags.
 * These constants are used throughout the ServiceProvider traits to maintain
 * consistency and avoid magic strings.
 *
 * ## Purpose:
 * - Centralize all module structure constants
 * - Provide consistent naming across all traits
 * - Enable easy customization of directory structure
 * - Avoid magic strings in code
 *
 * ## Usage:
 * This trait is automatically included via ProvidesServices trait.
 * All constants are accessible via `self::CONSTANT_NAME` in any trait.
 *
 * @since 1.0.0
 */
trait HasModuleConstants
{
    /**
     * Directory constants for module structure.
     */
    public const DIR_ROUTES = 'routes';
    public const DIR_VIEWS = 'views';
    public const DIR_I18N = 'i18n';
    public const DIR_TRANSLATIONS = 'i18n'; // Alias for DIR_I18N
    public const DIR_MIGRATIONS = 'Migrations';
    public const DIR_SEEDERS = 'Seeders';
    public const DIR_COMMANDS = 'Commands';
    public const DIR_CONSOLE = 'Console';
    public const DIR_LISTENERS = 'Listeners';
    public const DIR_CONFIG = 'config';
    public const DIR_RESOURCES = 'resources';
    public const DIR_VENDOR = 'vendor';

    /**
     * File name constants for route files.
     */
    public const FILE_ROUTES_API = 'api.php';
    public const FILE_ROUTES_WEB = 'web.php';
    public const FILE_ROUTES_CHANNELS = 'channels.php';
    public const FILE_CONFIG = 'config.php';

    /**
     * Publishing tag constants.
     */
    public const TAG_ASSETS = 'assets';
    public const TAG_CONFIG = 'config';
    public const TAG_VIEWS = 'views';
    public const TAG_LANG = 'lang';

    /**
     * Path prefix for published assets.
     */
    public const PATH_PREFIX = 'pixielity';
}
