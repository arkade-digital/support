<?php

namespace Arkade\Support\Contracts;

use Illuminate\Support\Collection;

interface FreestockBySku
{
    /**
     * @return string
     */
    public function getSkuName();

    /**
     * @param string|null $skuName
     * @return static
     */
    public function setSkuName($skuName = null);

    /**
     * @return mixed
     */
    public function getStores();

    /**
     * @param Collection $stores
     * @return static
     */
    public function setStores(Collection $stores);
}