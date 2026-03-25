<?php

declare(strict_types=1);

namespace Pixielity\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Pixielity\Contracts\Framework\Serializer\Serializer as SerializerContract;

/**
 * Serializer Facade.
 *
 * Provides a static interface to the serialization and deserialization methods defined in the SerializerInterface.
 *
 * @method static ?string serialize(mixed $data) Serializer the given data into a serialized string format.
 * @method static mixed unserialize($string, bool $allowedClasses = false) Unserialize the given serialized string back into its original data format.
 *
 * @see SerializerContract
 */
class Serializer extends Facade
{
    /**
     * Get the accessor for the facade.
     *
     * This method must be implemented by subclasses to return the accessor string
     * corresponding to the underlying service or class the facade represents.
     *
     * @return string The accessor for the facade.
     */
    protected static function getAccessor(): string
    {
        return SerializerContract::class;
    }
}
