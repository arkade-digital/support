<?php

namespace Arkade\Support\Contracts;

interface Address
{
    /**
     * Get human readable address contact name
     *
     * @return string
     */
    public function getContactName();

    /**
     * Set contact name
     *
     * @param string|null $contactName
     * @return static
     */
    public function setContactName($contactName = null);

    /**
     * Get human readable address company name
     *
     * @return string
     */
    public function getCompanyName();

    /**
     * Set company name
     *
     * @param string|null $companyName
     * @return static
     */
    public function setCompanyName($companyName = null);

    /**
     * Get human readable address type
     * @return string
     */
    public function getType();

    /**
     * Set human readable address type
     *
     * @param $type
     * @return static
     */
    public function setType($type);

    /**
     * Get human readable address line1
     *
     * @return string
     */
    public function getLine1();

    /**
     * Set human readable address line1
     *
     * @param string|null $line1
     * @return static
     */
    public function setLine1($line1 = null);

    /**
     * Get human readable address line2
     *
     * @return string
     */
    public function getLine2();

    /**
     * Set human readable address line2
     *
     * @param string|null $line2
     * @return static
     */
    public function setLine2($line2 = null);

    /**
     * Get human readable address city
     *
     * @return string
     */
    public function getCity();

    /**
     * Get human readable address city
     *
     * @param string|null $city
     * @return static
     */
    public function setCity($city = null);

    /**
     * Get human readable address state
     * @return string
     */
    public function getState();

    /**
     * Set human readable address
     *
     * @param string|null $state
     * @return static
     */
    public function setState($state = null);

    /**
     * Get human readable address postal code
     *
     * @return string
     */
    public function getPostalCode();

    /**
     * Set human readable address postal code
     *
     * @param string|null $postalCode
     * @return mixed
     */
    public function setPostalCode($postalCode = null);

    /**
     * Get human readable address country
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set human readable address country
     *
     * @param string $county
     * @return static
     */
    public function setCountry($county);
}