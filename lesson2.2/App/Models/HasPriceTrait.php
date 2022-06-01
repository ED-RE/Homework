<?php

namespace App\Models;

trait HasPriceTrait
{
    protected $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
}
