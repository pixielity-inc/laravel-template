<?php

namespace Pixielity\Discovery\Filters;

use Pixielity\Discovery\Contracts\Discovery\DiscoveryStrategy;
use Pixielity\Discovery\Contracts\Discovery\Filter;
use Pixielity\Discovery\Support\Arr;

/**
 * PropertyFilter - Filters classes by attribute property values.
 *
 * Checks if a specific property on the class's attribute matches a value.
 */
class PropertyFilter implements Filter
{
    /**
     * Create a new PropertyFilter instance.
     *
     * @param string $property Property name to check
     * @param mixed  $value    Expected value
     */
    public function __construct(
        protected string $property,
        protected mixed $value
    ) {}

    /**
     * Apply filter to discovered classes.
     *
     * @param  array<string>     $classes           Classes to filter
     * @param  DiscoveryStrategy $discoveryStrategy Discovery strategy
     * @return array<string>     Filtered classes
     */
    public function apply(array $classes, DiscoveryStrategy $discoveryStrategy): array
    {
        return Arr::values(Arr::filter($classes, function (string $class) use ($discoveryStrategy): bool {
            $metadata = $discoveryStrategy->getMetadata($class);
            $attribute = $metadata['attribute'] ?? null;

            if ($attribute === null) {
                return false;
            }

            return ($attribute->{$this->property} ?? null) === $this->value;
        }));
    }
}
