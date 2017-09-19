<?php

namespace Arkade\Support\Traits;


use Illuminate\Support\Collection;

trait FreestockBySku
{
    /**
     * @var
     */
    protected $skuName;
    /**
     * @var
     */
    protected $stores;

    /**
     * @return string
     */
    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param string|null $skuName
     * @return static
     */
    public function setSkuName($skuName = null)
    {
        $this->skuName = $skuName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStores()
    {
        return $this->stores ?: $this->stores = new Collection;
    }

    /**
     * @param Collection $stores
     * @return static
     */
    public function setStores(Collection $stores)
    {
        $this->stores = $stores;
        return $this;
    }
}