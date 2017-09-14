<?php

namespace Arkade\Support\Contracts;

interface Contact
{
    /**
     * Get type.
     *
     * @return string
     */
    public function getType();

    /**
     * Set type.
     *
     * @param  string $type
     * @return static
     */
    public function setType($type);

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue();

    /**
     * Set value.
     *
     * @param  string $value
     * @return static
     */
    public function setValue($value);
}