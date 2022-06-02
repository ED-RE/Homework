<?php

namespace App\Models;

use App\ModelThird;

class GiftCardThird extends ModelThird implements HasPrice, HasWeight
{
    public const TABLE = 'cards';

    use HasPriceTrait;

    public function getWeight()
    {
        return 142;
    }
}
