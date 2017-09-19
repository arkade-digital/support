<?php

namespace Arkade\Support\Contracts;

interface Store
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string|null $code
     * @return static
     */
    public function setCode($code = null);

    /**
     * @return int
     */
    public function getStoreNumber();

    /**
     * @param int|null $storeNumber
     * @return static
     */
    public function setStoreNumber($storeNumber = null);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param string|null $name
     * @return static
     */
    public function setName($name = null);

    /**
     * @return string
     */
    public function getLine1();

    /**
     * @param string|null $line1
     * @return static
     */
    public function setLine1($line1 = null);

    /**
     * @return string
     */
    public function getLine2();

    /**
     * @param string|null $line2
     * @return static
     */
    public function setLine2($line2 = null);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string|null $city
     * @return static
     */
    public function setCity($city = null);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string|null $state
     * @return static
     */
    public function setState($state = null);

    /**
     * @return string
     */
    public function getPostCode();

    /**
     * @param string|null $postCode
     * @return static
     */
    public function setPostCode($postCode = null);

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param string|null $country
     * @return static
     */
    public function setCountry($country = null);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string|null $email
     * @return static
     */
    public function setEmail($email = null);

    /**
     * @return string
     */
    public function getFreestock();

    /**
     * @param string $freestock
     * @return static
     */
    public function setFreestock($freestock = null);

}