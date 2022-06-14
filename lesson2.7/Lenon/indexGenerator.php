<?php
// ГЕНЕРАТОРЫ

// Генератор - это функция, которая умеет генерировать последовательность значений
// за один раз возвращая только одно из значений, останавливаясь и возвращая следующее
// когда это требуется

// генератор отличается от функции, что у него вместо return ипользуется yield

// генератор - это функция, которая умеет прерываться, ставиться на паузу и возвращать по одному значению

// единсвтенное применение генератора - это использование в контексте foreach

// смысл использования - экономия памяти (в один момент памяти - только одно значение памяти)
// это прерываемая функция, в которую можно вернуться

/* сейчас будем изменять код ниже, используя генератор
function firstNums()
{
    $ret = [];
    $i = 1;
    while ($i <= 100) {
        $ret[] = $i;
        $i++;
    }
    return $ret;
}

foreach (firstNums() as $num)
{
    echo $num;
    echo '<br>';
}
*/

function firstNums()
{
    $i = 1;
    while ($i <= 100) {
        yield $i; // сгенерируй очередное значение
        $i++;
    }
}

foreach (firstNums() as $num)
{
    echo $num;
    echo '<br>';
}