<?php

namespace Arkade\Support\Traits;

trait Payment
{

    /**
     * @var string $origin
     */
    protected $origin;

    /**
     * @var string $cardType
     */
    protected $cardType;

    /**
     * @var string $stan
     */
    protected $stan;

    /**
     * @var float $amount
     */
    protected $amount;

    /**
     * @var string $reference
     */
    protected $reference;

    /**
     * @var string $message
     */
    protected $message;

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return static
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     * @return static
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStan()
    {
        return $this->stan;
    }

    /**
     * @param string $stan
     * @return static
     */
    public function setStan($stan)
    {
        $this->stan = $stan;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return static
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return static
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return static
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }
}