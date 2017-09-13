<?php

namespace Arkade\Support\Contracts;

use Illuminate\Support\Collection;

interface Person
{
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

    /**
     * Return human readable person contacts
     *
     * @return Collection
     */
    public function getContacts();

    /**
     * Set person contacts
     *
     * @param  Collection $contacts
     * @return static
     */
    public function setContacts(Collection $contacts);

    /**
     * Push contact into collection.
     *
     * @param  Contact $contact
     * @return static
     */
    public function pushContact(Contact $contact);
}