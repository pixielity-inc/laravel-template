<?php

declare(strict_types=1);

namespace Pixielity\Database\Attributes;

use Attribute;
use Illuminate\Database\Eloquent\Attributes\UseFactory as BaseUseFactory;

/**
 * UseFactory Attribute - Specify Factory Class for Eloquent Models.
 *
 * This attribute extends Laravel's UseFactory attribute to specify which factory
 * class should be used when creating model instances in tests and seeders.
 *
 * ## Features:
 * - Explicitly define factory class for models
 * - Type-safe factory resolution
 * - IDE-friendly factory discovery
 * - Supports custom factory namespaces
 *
 * ## Use Cases:
 * - Custom factory class names
 * - Factories in non-standard locations
 * - Multiple factories per model
 * - Testing and seeding
 *
 * ## Examples:
 * ```php
 * use Pixielity\Database\Attributes\UseFactory;
 * use Pixielity\Database\Model;
 *
 * #[UseFactory(UserFactory::class)]
 * class User extends Model
 * {
 *     // Model implementation
 * }
 *
 * // Custom factory location
 * #[UseFactory(\Database\Factories\CustomUserFactory::class)]
 * class User extends Model
 * {
 *     // Model implementation
 * }
 * ```
 *
 * @see BaseUseFactory Laravel's base UseFactory attribute
 * @see \Illuminate\Database\Eloquent\Factories\Factory
 */
#[Attribute(Attribute::TARGET_CLASS)]
class UseFactory extends BaseUseFactory {}
