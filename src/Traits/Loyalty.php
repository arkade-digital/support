<?php

namespace Arkade\Support\Traits;

use Carbon\Carbon;

trait Loyalty
{
    /**
     * Id.
     *
     * @var string
     */
    protected $id;

    /**
     * Type Id.
     *
     * @var string
     */
    protected $loyaltyTypeId;

    /**
     * Loyalty Type
     *
     * @var string
     */
    protected $loyaltyType;
    
    /**
     * Card Number
     * 
     * @var string
     */
    protected $cardNo;

    /**
     * Join date
     * 
     * @var carbon
     */
    protected $joinDate;

    /**
     * @return string
     */
    public function getId() 
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoyaltyTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param $loyaltyTypeId string
     * @return $this
     */
    public function setLoyaltyTypeId($loyaltyTypeId)
    {
        $this->loyaltyTypeId = $loyaltyTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
        return $this->loyaltyTypeId;
    }

    /**
     * @param $typeName
     * @return $this
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * @param $carNo string
     * @return $this
     */
    public function setCardNo($carNo)
    {
        $this->cardNo = $carNo;
        return $this;
    }

    /**
     * @return Carbon
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * @param Carbon|null $joinDate
     * @return $this
     */
    public function setJoinDate(Carbon $joinDate = null)
    {
        $this->joinDate = $joinDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoyaltyType()
    {
        return $this->cardNo;
    }

    /**
     * @param $loyaltyType string
     * @return $this
     */
    public function setLoyaltyType($loyaltyType)
    {
        $this->loyaltyType = $loyaltyType;
        return $this;
    }
    
}