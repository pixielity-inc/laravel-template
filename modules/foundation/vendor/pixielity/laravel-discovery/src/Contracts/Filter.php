<?php

namespace Pixielity\Discovery\Contracts\Discovery;

/**
 * Filter Interface.
 *
 * Defines the contract for filtering discovered classes.
 */
interface Filter
{
    /**
     * Apply filter to discovered classes.
     *
     * @param  array<string>     $classes           Classes to filter
     * @param  DiscoveryStrategy $discoveryStrategy Discovery strategy for metadata access
     * @return array<string>     Filtered classes
     */
    public function apply(array $classes, DiscoveryStrategy $discoveryStrategy): array;
}
