<?php

namespace Arkade\Support\Contracts;

interface Loyalty
{

    /**
     * Get loyalty record id
     * 
     * @return string
     */
    public function getId();

    /**
     * Set loyalty record id
     * 
     * @param $id
     * @return mixed
     */
    public function setId($id);
    
    /**
     * Get loyalty type id.
     *
     * @return string
     */
    public function getLoyaltyTypeId();

    /**
     * Set loyalty type id.
     *
     * @param  string $type
     * @return static
     */
    public function setLoyaltyTypeId($type);

    /**
     * Get loyalty card number
     * 
     * @return string
     */
    public function getCardNo();

    /**
     * Set loyalty card number
     * 
     * @param $value
     * @return static
     */
    public function setCardNo($value);

    /**
     * Get loyalty join date
     * 
     * @return carbon
     */
    public function getJoinDate();

    /**
     * Set loyalty join date
     * 
     * @param Carbon $value
     * @return static
     */
    public function setJoinDate($value);
}