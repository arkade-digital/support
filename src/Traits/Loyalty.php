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
    protected $typeId;

    /**
     * Type Name
     * 
     * @var string
     */
    protected $typeName;

    /**
     * Card Number
     * 
     * @var string
     */
    protected $cardNumber;

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
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param $typeId
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
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
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param $cardNumber
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
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
    
}