<?php
//одноразовая анонимная функция
echo (
    function ($x, $y) {
        return $x + $y;
    }
    ) (2, 3) . '<br>';

$sum = function ($x, $y) {
    return $x + $y;
};
echo $sum(2, 4) . '<br>';

$diff = function ($x, $y) {
    return $x - $y;
};

function calc($x, $y, $oper)
{
    return $oper($x, $y);
}

echo calc(10, 9, $diff) . '<br>';


//пример функционального программирования, мы могли пойти через цикл foreach, но пойдем так:
//map - это одна из основных операций функционального программирования. Операция применения функции ко всем элементам какого-то множества
//еще есть - array_filter(); и array_reduce();
$arr = [1, 2, 3];
$res = array_map(function ($x) {
    return $x * 2;
}, $arr);
var_dump($res);