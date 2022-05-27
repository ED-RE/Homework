<?php

//$x = [2, 2, 7, 7];
//$y = [2, 6, 2, 6];

$x = [2, 3, 8, 5];
$y = [2, 5, 8, 5];

$maxX = $x[0];
for ($i = 0; $i < count($x); $i++) {
    if ($maxX < $x[$i]) {
        $maxX = $x[$i];
    }
}
$minX = $x[0];
for ($i = 0; $i < count($x); $i++) {
    if ($minX > $x[$i]) {
        $minX = $x[$i];
    }
}
$maxY = $y[0];
for ($i = 0; $i < count($y); $i++) {
    if ($maxY < $y[$i]) {
        $maxY = $y[$i];
    }
}
$minY = $y[0];
for ($i = 0; $i < count($y); $i++) {
    if ($minY > $y[$i]) {
        $minY = $y[$i];
    }
}
//echo $maxX;  - 7
//echo $minX;  - 2
//echo $maxY;  6
//echo $minY;  2

//$arrNetxy = [];

//for ($j = 0; $j < $maxY; $j++)   - первая часть из моего кода на листке рабочая
//    for ($i = 0; $i < $maxX; $i++) {
//        $arrNetxy[$j][$i] = ' o ';
//    }

$arrNetxy = [];

for ($j = 0; $j <= $maxY; $j++)
    for ($i = 0; $i <= $maxX; $i++) {
        $arrNetxy[$j][$i] = '&nbsp' . '&nbsp';
    }

for ($j = 0; $j <= $maxX; $j++) {
    $arrNetxy[count($arrNetxy) - 1][$j] = $j;
}

for ($j = $maxY; $j >= 0; $j--) {
    $arrNetxy[$j][0] = abs($j - $maxY);
}

for ($k = $minX; $k < $maxX + 1; $k++) {
    $arrNetxy[abs($maxY + 1 - count($arrNetxy))][$k] = '.' . '&nbsp';
    $arrNetxy[abs($minY + 1 - count($arrNetxy))][$k] = '.' . '&nbsp';
}

//echo count($arrNetxy);

//echo $minX-(count($arrNetxy)-1);

for ($kk = abs($minY - (count($arrNetxy) - 1)); $kk >= abs($maxY - (count($arrNetxy) - 1)); $kk--) {
    $arrNetxy[$kk][$minX] = '.' . '&nbsp';
    $arrNetxy[$kk][$maxX] = '.' . '&nbsp';
//    $arrNetxy [$kk][$maxX] = 'x';
}

//$arrNetxy[1][6] = '.' . '&nbsp';
//$arrNetxy[2][5] = '.' . '&nbsp';
//$arrNetxy[2][4] = '.' . '&nbsp';
//$arrNetxy[3][3] = '.' . '&nbsp';

for ($y = abs($minY - (count($arrNetxy) - 1)), $x = $minX;
     $y >= abs($maxY - (count($arrNetxy) - 1)), $x < $maxX + 1;
     $y--, $x++) {
    $arrNetxy[$y][$x] = '.' . '&nbsp';
}


//echo '<pre>';
//var_dump($arrNetxy);
////echo count($arrNetxy);


for ($i = 0; $i < count($arrNetxy); $i++) {
    for ($j = 0; $j < count($arrNetxy[$i]); $j++) {
        echo $arrNetxy[$i][$j] . ' ';
    }
    echo "<br>";
}
