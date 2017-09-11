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
     * Return human readable person last name
     *
     * @return string
     */
    public function getLastName();

    /**
     * Set person last name
     * @param string|null $lastName
     * @return static
     */
    public function setLastName($lastName = null);
}