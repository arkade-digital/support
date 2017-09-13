<?php

namespace Arkade\Support\Traits;

trait Contact
{
    /**
     * Human readable contact type
     * @var string
     */
    protected $type;

    /**
     * Human readable contact type
     * @var mixed
     */
    protected $value;

    /**
     * Get human readable contact type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set Type
     *
     * @param string $type
     * @return static
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get human readable contact value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value
     * @param mixed|null $value
     * @return static
     */
    public function setValue($value = null)
    {
        $this->value = $value;

        return $this;
    }
}