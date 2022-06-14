<?php
// Оператор Spaceship или Космический корабль <=>

// для примера выполним сортировку по массиву по ДР без оператора и с ним:

$arr = [
    [
        'name' => 'Вася',
        'birthdate' => '2000-01-01',
    ],
    [
        'name' => 'Петя',
        'birthdate' => '2001-02-02',
    ],
    [
        'name' => 'Катя',
        'birthdate' => '1999-03-03',
    ]
];

// usort - на вход принимается массив и функция, которая должна сравнить 2 элемента массива, которую
// мы должны сами написать
usort($arr, function ($x1, $x2) {
    if ($x1['birthdate'] > $x2['birthdate']) {
        return 1;
    } elseif ($x1['birthdate'] < $x2['birthdate']) {
        return -1;
    } else {
        return 0;
    }
});

//и теперь тоже самое, с помощью spaceship оператора:
// возвращает 1, если 1значение больше 2го. -1, если второе больше. 0 - если они равны между собой
usort($arr, function ($x1, $x2) {
    return $x1['birthdate'] <=> $x2['birthdate'];
});

echo '<pre>';
var_dump($arr);