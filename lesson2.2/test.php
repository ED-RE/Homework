<?php

//declare(strict_types=1);

function sum(int $x, int $y)
{
    return $x + $y;
}


//function buy (\App\Model $item)
function buy (\App\Models\HasPrice $item)
{
    var_dump($item);
}

$item = new \App\Models\GiftCard();
buy($item);

