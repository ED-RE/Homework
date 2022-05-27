<?php
function minMax(float $a, float $b): float|int|string
{
    if ($a > $b) {
        return $a;
    } elseif ($a == $b) {
        return 'Значения равны';
    } else {
        return $b;
    }
}