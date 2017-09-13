<?php

namespace Arkade\Support\Traits;

use Arkade\Support\Contracts;
use Illuminate\Support\Collection;

trait Person
{
    /**
     * Human readable person contacts
     *
     * @var string
     */
    protected $contacts = [];

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
     * @var Collection
     */
    protected $addresses;

    /**
     * Return human readable person contacts
     *
     * @return Collection
     */
    public function getContacts()
    {
        return new Collection($this->contacts);
    }

    /**
     * Set person contacts
     *
     * @param  Collection $contacts
     * @return static
     */
    public function setContacts(Collection $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Push contact into an array of persons contacts.
     *
     * @param  Contracts\Contact $contact
     * @return static
     */
    public function pushContact(Contracts\Contact $contact)
    {
        $this->contacts[] = $contact;

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
    public function setFirstName($firstName = null)
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
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Return human readable person addresses
     *
     * @return Collection
     */
    public function getAddresses()
    {
        return new Collection($this->addresses);
    }

    /**
     * Set addresses to a person
     *
     * @param Contracts\Address $address
     * @return static
     */
    public function setAddresses(Contracts\Address $address)
    {
        $this->addresses = $address;

        return $this;
    }

    /**
     * Push addresses to a person
     *
     * @param Contracts\Address $address
     * @return static
     */
    public function pushAddress(Contracts\Address $address)
    {
        $this->addresses[] = $address;

        return $this;
    }

}