<?php
$arrMat = [[1, 2, 3], [1, 1, 1], [3, 2, 10]]; // так можно писать массив, синтаксически правильно
echo '<pre>';
var_dump($arrMat);

// Дан массив от 1 до n, необходимо написать функцию, которая вернет максимальное значение из заданного массива.

$x = [-55, -100, - 1, -25];

function getMax(array $x): int|float
{
    $xMax = $x[0];
    foreach ($x as $item) {
        if ($xMax < $item) {
            $xMax = $item;
        }
    }
    return $xMax;
}

var_dump(getMax($x));

// Дана строка $string = 'Hello World!'; Необходимо:
// а) написать функцию, которая выведет на экран все гласные буквы;
// б) написать функцию, которая преобразует строку к виду: буква_буква_буква, где _ - символ пробела.

$string = 'Hello World!';

function getVowels($string)
{
    $x = [];
    $c = [];
    $y = 0;
    $v = ['e' => 0, 'o' => 0];
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    foreach ($x as $key => $item) {
        if (isset($v[$item])) {
            $c[] = $x[$key];
        }
    }
    return implode($c);
}

var_dump(getVowels($string));

function getSpace($string)
{
    $x = [];
    $c = [];
    $y = 0;
    $v = ['e' => 0, 'o' => 0];
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y++;
    }
    for ($i = 0; $i <= count($x) * 2; $i = $i + 2) { // возможно тут лучше должно быть решение где count умножем на 2
        $c[$i + 1] = ' ';
        $c[$i] = $x[$i / 2];
    }
    return implode($c);
}

var_dump(getSpace($string));

// написать функцию, которая на вход принимает 2 аргумента ( int a, float b). Результатом данной функции должно быть
// число, которое равно сумме квадратов a и b, с разницей удвоенного произведения a и b, а также умноженное на косинус 45

$a = 2;
$b = 0.55;

function geometr(int $a, float $b)
{
    return (((pow($a, 2) + pow($b, 2)) - (2 * ($a * $b))) * cos(45));
}

var_dump(geometr($a, $b));