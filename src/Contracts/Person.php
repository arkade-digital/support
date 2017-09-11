<?php

namespace Arkade\Support\Contracts;

interface Person
{

    /**
     * Return human readable person email
     *
     * @return string
     */
    public function getEmail();

    /**
     * Set person email
     *
     * @param string|null $email
     * @return static
     */
    public function setEmail($email = null);

    /**
     * Return human readable person first name
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Set first name
     *
     * @param string|null $firstName
     * @return static
     */
    public function setFirstName($firstName = null);

    /**
     * Return human readable person surname
     *
     * @return string
     */
    public function getSurname();

    /**
     * Set person surname
     * @param string|null $surname
     * @return static
     */
    public function setSurname($surname = null);
}