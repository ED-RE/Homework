<?php

$staff = ['Иванов', 'Петров', 'Сидоров'];

foreach ($staff as $name) {
    echo $name . '-Лох ';
    echo ' или ';
}

echo implode(',', $staff); // из массива получаем строку, перечисляя через заданный разделитель

$list = explode(', ','Иванов, Петров, Сидоров'); // разбил эту строку на массив
var_dump($list);