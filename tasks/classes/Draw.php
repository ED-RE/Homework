<?php

class Draw
{
    public function __construct($arr, $arr2, int|float $x, int|float $y, int|float $r, int|float $step)
    {
        for ($j = 0; $j < count($arr); $j++)
            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
                if ($arr[$j][0] == $y && $arr[count($arr) - 1][$i] == $x) {
                    $arr[$j][$i] = '&#8226';
                    $arr2[$j][$i] = '&#8226';
                }
            }

        for ($j = 0; $j < count($arr); $j++) {
            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
                $ii = -0.1;
                while ($ii < 1.6) {
                    $ii += 0.1 * $step;
                    if (($arr[$j][0] == ceil($y * (1 / $step) + ($r * sin($ii)) / $step) * $step)
                        && $arr[count($arr) - 1][$i] == ceil($x * (1 / $step) + ($r * cos($ii)) / $step) * $step) {
                        $arr[$j][$i] = '&#8226';
                        $arr2[$j][$i] = '&#8226';
                    }
                }
            }
        }
        for ($j = 0; $j < count($arr); $j++) {
            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
                $ii = 1.5;
                while ($ii < 3.2) {
                    $ii += 0.1 * $step;
                    if (($arr[$j][0] == ceil($y * (1 / $step) + ($r * sin($ii)) / $step) * $step)
                        && $arr[count($arr) - 1][$i] == ceil($x * (1 / $step) + ($r * cos($ii)) / $step) * $step) {
                        $arr[$j][$i] = '&#8226';
                        $arr2[$j][$i] = '&#8226';
                    }
                }
            }
        }
        for ($j = 0; $j < count($arr); $j++) {
            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
                $ii = 3.1;
                while ($ii < 4.8) {
                    $ii += 0.1 * $step;
                    if (($arr[$j][0] == ceil($y * (1 / $step) + ($r * sin($ii)) / $step) * $step)
                        && $arr[count($arr) - 1][$i] == ceil($x * (1 / $step) + ($r * cos($ii)) / $step) * $step) {
                        $arr[$j][$i] = '&#8226';
                        $arr2[$j][$i] = '&#8226';
                    }
                }
            }
        }
        for ($j = 0; $j < count($arr); $j++) {
            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
                $ii = 4.7;
                while ($ii <= 6.2) {
                    $ii += 0.1 * $step;
                    if (($arr[$j][0] == ceil($y * (1 / $step) + ($r * sin($ii)) / $step) * $step)
                        && $arr[count($arr) - 1][$i] == ceil($x * (1 / $step) + ($r * cos($ii)) / $step) * $step) {
                        $arr[$j][$i] = '&#8226';
                        $arr2[$j][$i] = '&#8226';
                    }
                }
            }
        }


//        for ($j = 0; $j < count($arr); $j++) {
//            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
//                $ii = -0.1;
//                while ($ii < 1.6) {
//                    $ii += 0.1;
//                    if (($arr[$j][0] == ceil($y * 2 + ($r * sin($ii)) / 0.5) * 0.5)
//                        && $arr[count($arr) - 1][$i] == ceil($x * 2 + ($r * cos($ii)) / 0.5) * 0.5) {
//                        $arr[$j][$i] = '&#8226';
//                        $arr2[$j][$i] = '&#8226';
//                    }
//                }
//            }
//        }
//        for ($j = 0; $j < count($arr); $j++) {
//            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
//                $ii = 1.5;
//                while ($ii < 3.2) {
//                    $ii += 0.1;
//                    if (($arr[$j][0] == ceil($y * 2 + ($r * sin($ii)) / 0.5) * 0.5)
//                        && $arr[count($arr) - 1][$i] == ceil($x * 2 + ($r * cos($ii)) / 0.5) * 0.5) {
//                        $arr[$j][$i] = '&#8226';
//                        $arr2[$j][$i] = '&#8226';
//                    }
//                }
//            }
//        }
//        for ($j = 0; $j < count($arr); $j++) {
//            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
//                $ii = 3.1;
//                while ($ii < 4.8) {
//                    $ii += 0.1;
//                    if (($arr[$j][0] == ceil($y * 2 + ($r * sin($ii)) / 0.5) * 0.5)
//                        && $arr[count($arr) - 1][$i] == ceil($x * 2 + ($r * cos($ii)) / 0.5) * 0.5) {
//                        $arr[$j][$i] = '&#8226';
//                        $arr2[$j][$i] = '&#8226';
//                    }
//                }
//            }
//        }
//        for ($j = 0; $j < count($arr); $j++) {
//            for ($i = 0; $i < count($arr[count($arr) - 1]); $i++) {
//                $ii = 4.7;
//                while ($ii <= 6.2) {
//                    $ii += 0.1;
//                    if (($arr[$j][0] == ceil($y * 2 + ($r * sin($ii)) / 0.5) * 0.5)
//                        && $arr[count($arr) - 1][$i] == ceil($x * 2 + ($r * cos($ii)) / 0.5) * 0.5) {
//                        $arr[$j][$i] = '&#8226';
//                        $arr2[$j][$i] = '&#8226';
//                    }
//                }
//            }
//        }
        for ($j = 0; $j < count($arr); $j++) {
            for ($i = 0; $i < count($arr[$j]); $i++) {
                echo $arr[$j][$i] . ' ';
            }
            echo "<br>";
        }

        echo "<br>" . "<br>" . "<br>" . "<br>" . "<br>" . "<br>";

        for ($j = 0; $j < count($arr2); $j++) {
            for ($i = 0; $i < count($arr2[$j]); $i++) {
                echo $arr2[$j][$i] . ' ';
            }
            echo "<br>";
        }


    }
}


// записываем массив соответствий значений оси Y, отбрасываются значения 0.5, т.к. массив не записывает ключами float
//for ($i = 0, $k = (count($arr) - 1) / 2; $i < count($arr); $i++, $k = $k - 0.5) {
//    $arrY[$k] = $i;
//}
//$arr[$arrY[$y]][$x * 2] = '&#8226';

//for ($i = 14, $j = 2; $i >= 2, $j <= 14; $i--, $j++) {
//    $arr[$arrY[round($y + ($r * sin($pi / $i)))]][round($x * 2 + ($r * cos($pi / $i) * 2))] = '&#8226';
//}
//for ($i = 14, $j =2; $i >= 2, $j <= 14; $i--, $j++) {
//    $arr[$arrY[round($y - ($r * sin($pi / $i)))]][round($x * 2 - ($r * cos($pi / $i) * 2))] = '&#8226';
//}
//for ($i = 14, $j =2; $i >= 2, $j <= 14; $i--, $j++) {
//    $arr[$arrY[round($y + ($r * sin($pi / $i)))]][round($x * 2 - ($r * cos($pi / $i) * 2))] = '&#8226';
//}
//for ($i = 14, $j =2; $i >= 2, $j <= 14; $i--, $j++) {
//    $arr[$arrY[round($y - ($r * sin($pi / $i)))]][round($x * 2 + ($r * cos($pi / $i) * 2))] = '&#8226';
//}


//        if (($arr[$j][0] == ceil($y * 2 + ($r * sin($ii)) / 0.5) * 0.5)
//            && $arr[count($arr) - 1][$i] == ceil($x * 2 - ($r * cos($ii)) / 0.5) * 0.5) {
//            $arr[$j][$i] = '&#8226';
//            $arr2[$j][$i] = '&#8226';
//        }
//        if (($arr[$j][0] == ceil($y * 2 - ($r * sin($ii)) / 0.5) * 0.5)
//            && $arr[count($arr) - 1][$i] == ceil($x * 2 + ($r * cos($ii)) / 0.5) * 0.5) {
//            $arr[$j][$i] = '&#8226';
//            $arr2[$j][$i] = '&#8226';
//        }
//        if (($arr[$j][0] == ceil($y * 2 - ($r * sin($ii)) / 0.5) * 0.5)
//            && $arr[count($arr) - 1][$i] == ceil($x * 2 - ($r * cos($ii)) / 0.5) * 0.5) {
//            $arr[$j][$i] = '&#8226';
//            $arr2[$j][$i] = '&#8226';
//        }
//    }
//}
//}
//}

//                    if (($arr[$j][0] == ceil($y * 2 + ($r * sin($ii)) / 0.5) * 0.5)
//                        && $arr[count($arr) - 1][$i] == ceil($x * 2 - ($r * cos($ii)) / 0.5) * 0.5) {
//                        $arr[$j][$i] = '&#8226';
//                        $arr2[$j][$i] = '&#8226';
//                    }
//                    if (($arr[$j][0] == ceil($y * 2 - ($r * sin($ii)) / 0.5) * 0.5)
//                        && $arr[count($arr) - 1][$i] == ceil($x * 2 + ($r * cos($ii)) / 0.5) * 0.5) {
//                        $arr[$j][$i] = '&#8226';
//                        $arr2[$j][$i] = '&#8226';
//                    }
//                    if (($arr[$j][0] == ceil($y * 2 - ($r * sin($ii)) / 0.5) * 0.5)
//                        && $arr[count($arr) - 1][$i] == ceil($x * 2 - ($r * cos($ii)) / 0.5) * 0.5) {
//                        $arr[$j][$i] = '&#8226';
//                        $arr2[$j][$i] = '&#8226';
//                    }
