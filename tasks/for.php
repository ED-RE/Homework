<?php

$arr = [1, 2, 3, 4, 5];

var_dump(count($arr));

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i];
}
for ($j = count($arr) - 1; $j >= 0; $j--) {
    echo $arr[$j];
}

for ($i = 0, $j = count($arr) - 1; $i < count($arr), $j >= 0; $i++, $j--) {
    echo '<pre>';
    echo $arr[$i];
    echo $arr[$j];
}

//$arr1 = [54, -10, 16, 8, -3, 108, -96];
//for ($i = 0; $i < count($arr1);) {
//    echo $arr1[$i];
//    if ($arr1[$i] < 0) {
//        unset($arr[$i]);
//        $i = -1;
//    } else {
//        $i++;}
//
//}

//var_dump($arr1);