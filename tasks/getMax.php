<br>

<?php
$x = [7, -2, 300, -4, -100000, -45000];

function getMax($x
) // Функция возвращает максимальное значение из массива. !!!!!!!Нужно всегда помнить, что программа не запоминает значения промежуточные. Ей нужно сказать: что на данный момент - это максимальное
{
    $max = $x[0];
    foreach ($x as $b) {
        if ($max < $b) {
            $max = $b;
        }
    }
    return $max;
}

//function getMax($x){
//foreach ($x as $a) {
//    foreach ($x as $b) {
//        if ($a > $b) {
//            return $a;
//        } elseif ($a == $b) {
//            echo 'Все значения равны';
//        } else {
//            return $b;
//        }
//    }
//}
//}

    var_dump(getMax($x));


//foreach ($x as $a => $b) {
//    if ($a > ++$a) {
//        return $a;
//    }