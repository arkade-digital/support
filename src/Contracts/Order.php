<?php

namespace Arkade\Support\Contracts;

use Illuminate\Support\Collection;

interface Order
{
    /**
     * @return Collection
     */
    public function getContacts();

    /**
     * @param Collection $contacts
     * @return static
     */
    public function setContacts(Collection $contacts);

    /**
     * @return Collection
     */
    public function getAddresses();

    /**
     * @param Collection $addresses
     * @return static
     */
    public function setAddresses(Collection $addresses);

    /**
     * @return Collection
     */
    public function getPayments();

    /**
     * @param Collection $payments
     * @return static
     */
    public function setPayments($payments);

}