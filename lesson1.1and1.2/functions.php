<?php
function sum($x, $y)
{
    return $x + $y;
}

if (sum(1, 0) !== 1) {
    throw new Exception('Функция sum работает неправильно');
} elseif (sum(0, 1) !== 1) {
    throw new Exception('Функция sum работает неправильно');
} elseif (sum(12, 34) !== 46) {
    throw new Exception('Функция sum работает неправильно');
}


function drt($a, $b, $c): int|float
{
    return $b ** 2 - 4 * $a * $c;
}

if (drt(2, 2, 2) !== -12) {
    throw new Exception('Функция drt работает неправильно');
}

if (drt(2, 4, 2,) !== 0) {
    throw new Exception('Функция drt работает неправильно');
}

if (drt(2, 10, 2,) !== 84) {
    throw new Exception('Функция drt работает неправильно');
}

