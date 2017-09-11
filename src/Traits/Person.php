<?php

namespace Arkade\Support\Traits;

trait Person
{
    /**
     * Human readable person email
     *
     * @var string
     */
    protected $email;

    /**
     * Human readable person first name
     *
     * @var string
     */
    protected $firstName;

    /**
     * Human readable person last name
     *
     * @var string
     */
    protected $lastName;

    /**
     * Return human readable person email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set person email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Return human readable person first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set first name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Return human readable person last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set last name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
}