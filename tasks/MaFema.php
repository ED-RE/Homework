<?php

function maFema(int $a, int $b, int $c): string
{
    if ($a >= 20 && $a <= 40 && $c < 60) {
        return 'Женщина';
    } elseif ($a < 20 && $c < 50) {
        return 'Женщина';
    } elseif ($b < 160 && $a > 55) {
        return 'Женщина';
    } elseif ($b >178 && $c >80) {
        return 'Мужчина';
    } elseif (($a > 40 && $c > 100)||($b>=168 && $b <173)) {
        return 'Мужчина';
    } elseif ($b > 195) {
        return 'Мужчина';
} else {
        return 'Не определено';
}
}

echo maFema(42, 178, 62);
echo maFema(31, 152, 89);
echo maFema(12, 160, 71);
echo maFema(72, 199, 101);
echo maFema(54, 169, 74);
echo maFema(80, 190, 81);