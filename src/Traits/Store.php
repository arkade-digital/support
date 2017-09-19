<?php

namespace Arkade\Support\Traits;

trait Store
{
    /**
     * @var string $code
     */
    protected $code;

    /**
     * @var string $storeNumber
     */
    protected $storeNumber;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $line1
     */
    protected $line1;

    /**
     * @var string $line2
     */
    protected $line2;

    /**
     * @var string $city
     */
    protected $city;

    /**
     * @var string $state
     */
    protected $state;

    /**
     * @var string $postCode
     */
    protected $postCode;

    /**
     * @var string $country
     */
    protected $country;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var string $freestock
     */
    protected $freestock;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return static
     */
    public function setCode($code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return int
     */
    public function getStoreNumber()
    {
        return $this->storeNumber;
    }

    /**
     * @param int|null $storeNumber
     * @return static
     */
    public function setStoreNumber($storeNumber = null)
    {
        $this->storeNumber = $storeNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return static
     */
    public function setName($name = null)
    {
        $this->name = $name;
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
    public function setLine1($line1 = null)
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
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string|null $postCode
     * @return static
     */
    public function setPostCode($postCode = null)
    {
        $this->postCode = $postCode;
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
     * @param string|null $country
     * @return static
     */
    public function setCountry($country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return static
     */
    public function setEmail($email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getFreestock()
    {
        return $this->freestock;
    }

    /**
     * @param string $freestock
     * @return static
     */
    public function setFreestock($freestock = null)
    {
        $this->freestock = $freestock;
        return $this;
    }

}