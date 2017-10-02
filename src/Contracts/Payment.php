<?php


namespace Arkade\Support\Contracts;


interface Payment
{
    /**
     * @return string
     */
    public function getOrigin();

    /**
     * @param string $origin
     * @return static
     */
    public function setOrigin($origin);

    /**
     * @return string
     */
    public function getCardType();

    /**
     * @param string $cardType
     * @return static
     */
    public function setCardType($cardType);

    /**
     * @return string
     */
    public function getStan();

    /**
     * @param string $stan
     * @return static
     */
    public function setStan($stan);

    /**
     * @return float
     */
    public function getAmount();

    /**
     * @param float $amount
     * @return static
     */
    public function setAmount($amount);

    /**
     * @return string
     */
    public function getReference();

    /**
     * @param string $reference
     * @return static
     */
    public function setReference($reference);

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @param string $message
     * @return static
     */
    public function setMessage($message);
}