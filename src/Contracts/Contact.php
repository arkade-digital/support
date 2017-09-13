<?php

namespace Arkade\Support\Contracts;

/**
 * Interface Contact
 * @package Arkade\Support\Contracts
 */
interface Contact
{
    /**
     * Get human readable contact type
     *
     * @return string
     */
    public function getType();

    /**
     * Set Type
     *
     * @param string $type
     * @return static
     */
    public function setType($type);

    /**
     * Get human readable contact value.
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set Value
     *
     * @param mixed|null $value
     * @return static
     */
    public function setValue($value = null);
}