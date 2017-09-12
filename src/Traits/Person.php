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
     * @return static
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
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
     * @return static
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
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
     * @return static
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

}