<?php

namespace Pixielity\Discovery\Contracts\Discovery;

/**
 * Validator Interface.
 *
 * Defines the contract for validating discovered classes.
 */
interface Validator
{
    /**
     * Validate a class.
     *
     * @param  string $class Fully qualified class name
     * @return bool   True if valid, false otherwise
     */
    public function validate(string $class): bool;
}
