<?php

// №1 В последовательности записаны целые числа от 1 до N в произвольном порядке. Найти максимальное число.

$l = [1, 6, 5, 4, 3];
$maxL = 0; // будет работать, если числа только положительные, но можно присвоить $maxL = $l[0] тогда работать будет отриц.
for ($i = 0; $i < count($l); $i++) {
    if ($maxL < $l[$i]) {
        $maxL = $l[$i];
    }
}
echo $maxL;

// №2 В последовательности записаны целые числа от 1 до N в произвольном порядке, но одно из чисел пропущено
// (остальные встречаются ровно по одному разу). N заранее известно. Определить пропущенное число

$l2 = [1, 6, 5, 4, 3, 2, 8];
$maxL2 = max($l2);
$n = count($l2) + 1;
if ($maxL2 == count($l2)) {
    $maxL2 += 1;
}
$sumL = array_sum($l2);
$sumL2 = (1 + $maxL2) * $n / 2; // арифметическая прогрессия
echo $sumL2 - $sumL;

// №3 В последовательности записаны целые числа. Одно из чисел встречается ровно один раз, остальные по два раза.
// Найти число, которое встречается один раз

$l3 = [1, 2, 2, 1, 3, 4, 3];
$num = 0;
for ($i = 0; $i < count($l3); $i++) {
    $num ^= $l3[$i]; // понять, что за оператор
}
echo $num;

// №4 В последовательности записаны целые числа. Число X встречается один или два раза, остальные числа по три раза.
// Найти число X и количество его встреч. Для простоты считаем, что числа не отрицательные

//$l4 = [1, 2, 2, 1, 2, 1, 3, 3];
//$bin = [0] * 32; // тут решение с переводом в 2ичную систему счисления и т.д.

// №5 В последовательности записаны целые числа, больше половины из которых равны одному и тому же числу X.
// За один просмотр последовательности найти это число

$l5 = [1, 2, 100, 100, 100];
$elem = 0;
$count = 0;
for ($i = 0; $i < count($l5); $i++) {
    if ($count == 0) {
        $elem = $l5[$i];
        $count += 1;
    } elseif ($elem == $l5[$i]) {
        $count += 1;
    } else {
        $count -= 1;
    }
}
echo $elem;