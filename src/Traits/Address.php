<?php

namespace Arkade\Support\Traits;

trait Address
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $line1;

    /**
     * @var string
     */

    protected $line2;
    /**
     * @var string
     */

    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $contactName;

    /**
     * @var string
     */
    protected $companyName;

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @param string|null $contactName
     * @return static
     */
    public function setContactName($contactName = null)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string|null $companyName
     * @return static
     */
    public function setCompanyName($companyName = null)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return static
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * @param string|null $line1
     * @return static
     */
    public function setLine1($line1= null)
    {
        $this->line1 = $line1;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * @param string|null $line2
     * @return static
     */
    public function setLine2($line2 = null)
    {
        $this->line2 = $line2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return static
     */
    public function setCity($city = null)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return static
     */
    public function setState($state = null)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     * @return static
     */
    public function setPostalCode($postalCode = null)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return static
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
}