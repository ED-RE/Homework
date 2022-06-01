<?php

namespace App\Models;

use App\Model;

class GiftCard extends Model implements HasPrice, HasWeight
{
    public const TABLE = 'cards';

    use HasPriceTrait;

    public function getWeight()
    {
        return 142;
    }
}
