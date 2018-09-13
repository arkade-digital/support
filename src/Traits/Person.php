<?php

namespace Arkade\Support\Traits;

use Illuminate\Support\Collection;
use TheSeer\Tokenizer\TokenCollectionTest;

trait Person
{
    /**
     * First name.
     *
     * @var string
     */
    protected $firstName;

    /**
     * Last name.
     *
     * @var string
     */
    protected $lastName;

    /**
     * Contacts collection.
     *
     * @var Collection
     */
    protected $contacts;

    /**
     * Address collection.
     *
     * @var Collection
     */
    protected $addresses;

    /**
     * Loyalty collection
     * 
     * @var collection
     */
    protected $loyalties;

    /**
     * Return first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set first name.
     *
     * @param  string $firstName
     * @return static
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Return last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set last name.
     *
     * @param  string $lastName
     * @return static
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Return contacts collection.
     *
     * @return Collection
     */
    public function getContacts()
    {
        return $this->contacts ?: $this->contacts = new Collection;
    }

    /**
     * Set contacts collection.
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
     * Return address collection.
     *
     * @return Collection
     */
    public function getAddresses()
    {
        return $this->addresses ?: $this->addresses = new Collection;
    }

    /**
     * Set address collection.
     *
     * @param  Collection $addresses
     * @return static
     */
    public function setAddresses(Collection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    public function getLoyalties()
    {
        return $this->loyalties ?? new collection;
    }

    public function setLoyalties(Collection $loyalties)
    {
        $this->loyalties = $loyalties;
    }

}