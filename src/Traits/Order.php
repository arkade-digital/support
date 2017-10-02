<?php

namespace Arkade\Support\Traits;

use Illuminate\Support\Collection;

trait Order
{
    /**
     * @var Collection $contacts
     */
    protected $contacts;
    /**
     * @var Collection $addresses
     */
    protected $addresses;

    /**
     * @var Collection $payments
     */
    protected $payments;

    /**
     * @return Collection
     */
    public function getContacts()
    {
        return $this->contacts ?: $this->contacts = new Collection;
    }

    /**
     * @param Collection $contacts
     * @return static
     */
    public function setContacts(Collection $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getAddresses()
    {
        return $this->addresses ?: $this->addresses = new Collection;
    }

    /**
     * @param Collection $addresses
     * @return static
     */
    public function setAddresses(Collection $addresses)
    {
        $this->addresses = $addresses;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getPayments()
    {
        return $this->payments ?: $this->payments = new Collection;
    }

    /**
     * @param Collection $payments
     * @return Order
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
        return $this;
    }

}