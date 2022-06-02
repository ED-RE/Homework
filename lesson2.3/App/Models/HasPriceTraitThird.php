<?php

namespace App\Models;

trait HasPriceTraitThird
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
