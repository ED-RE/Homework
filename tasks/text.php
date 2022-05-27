<?php

if ($string = file_get_contents(__DIR__ . '/text.txt') == false) {
    echo 'ERROR';
}
$string = file_get_contents(__DIR__ . '/text.txt');
var_dump($string);

//echo '<pre>'; // делать перед var_dump и всё будет красиво

?>
    <br>
<?php

function changeRegisterToUpperKirill(string $string): string
{
    $x = [];
    $y = 0;
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    $noLetter = [' ' => [], ',' => [], '.' => [], ':' => [], ';' => [], '-' => [], '!' => [], '?' => []];
    foreach ($x as $key => $item) {
        foreach ($noLetter as $keyNoLetter => $itemNoLetter) {
            if ($item === $keyNoLetter) {
                $noLetter[$keyNoLetter][] = $key;
            }
        }
    }
    foreach ($noLetter as $key => $item) {
        if (empty($item)) {
            unset($noLetter[$key]);
        }
    }
    $indexesNoLetterSymbol = [];
    foreach ($noLetter as $item) {
        foreach ($item as $i) {
            $indexesNoLetterSymbol[] = $i;
        }
    }
    $sortNoLetter = [];
    $l = count($indexesNoLetterSymbol);
    while ($l) {
        foreach ($indexesNoLetterSymbol as $key => $item) {
            if ($item == min($indexesNoLetterSymbol)) {
                $sortNoLetter[] = $item;
                unset($indexesNoLetterSymbol[$key]);
                $l = $l - 1;
                break;
            }
        }
    }
    if ($sortNoLetter[0] <= 6) {
        for ($i = 0; $i < $sortNoLetter[0]; $i = $i + 2) {
            $x[$i] = mb_strtoupper($x[$i] . $x[$i + 1]);
            unset($x[$i + 1]);
        }
    }

    if ((strlen($string) - 1) === $sortNoLetter[count($sortNoLetter) - 1]) {
        if ((strlen($string) - 1) - $sortNoLetter[count($sortNoLetter) - 2] <= 7) {
            for ($i = ($sortNoLetter[count($sortNoLetter) - 2]) + 1; $i < strlen($string) - 1; $i = $i + 2) {
                if (isset($x[$i + 1])) {
                    $x[$i] = mb_strtoupper($x[$i] . $x[$i + 1]);
                    unset($x[$i + 1]);
                }
            }
        }
    } else {
        if ((strlen($string) - 1) - $sortNoLetter[count($sortNoLetter) - 1] <= 7) {
            for ($i = ($sortNoLetter[count($sortNoLetter) - 1]) + 1; $i < strlen($string) - 1; $i = $i + 2) {
                if (isset($x[$i + 1])) {
                    $x[$i] = mb_strtoupper($x[$i] . $x[$i + 1]);
                    unset($x[$i + 1]);
                }
            }
        }
    }
    foreach ($sortNoLetter as $key => $item) {
        if ((isset($sortNoLetter[$key + 1]))
            && ((($sortNoLetter[$key + 1] - $item)) <= 7)
            && (!isset($noLetter[$x[$item + 1]]))) {
            for ($i = $item + 1; $i < $sortNoLetter[$key + 1]; $i = $i + 2) {
                if (isset($x[$i + 1])) {
                    $x[$i] = mb_strtoupper($x[$i] . $x[$i + 1]);
                    unset($x[$i + 1]);
                }
            }
        }
    }
    return implode($x);
}

var_dump(changeRegisterToUpperKirill($string));

?>
    <br>
<?php

function changeRegisterToUpper(string $string): string
{
    $x = [];
    $y = 0;
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    $noLetter = [' ' => [], ',' => [], '.' => [], ':' => [], ';' => [], '-' => [], '!' => [], '?' => []];
    foreach ($x as $key => $item) {
        foreach ($noLetter as $keyNoLetter => $itemNoLetter) {
            if ($item === $keyNoLetter) {
                $noLetter[$keyNoLetter][] = $key;
            }
        }
    }
    foreach ($noLetter as $key => $item) {
        if (empty($item)) {
            unset($noLetter[$key]);
        }
    }
    $indexesNoLetterSymbol = [];
    foreach ($noLetter as $item) {
        foreach ($item as $i) {
            $indexesNoLetterSymbol[] = $i;
        }
    }
    $sortNoLetter = [];
    $l = count($indexesNoLetterSymbol);
    while ($l) {
        foreach ($indexesNoLetterSymbol as $key => $item) {
            if ($item == min($indexesNoLetterSymbol)) {
                $sortNoLetter[] = $item;
                unset($indexesNoLetterSymbol[$key]);
                $l = $l - 1;
                break;
            }
        }
    }
    if ($sortNoLetter[0] <= 3) {
        for ($i = 0; $i <= $sortNoLetter[0]; $i++) {
            $x[$i] = strtoupper($x[$i]);
        }
    }
    if ((strlen($string) - 1) - $sortNoLetter[count($sortNoLetter) - 1] <= 3) {
        for ($i = $sortNoLetter[count($sortNoLetter) - 1]; $i <= strlen($string) - 1; $i++) {
            $x[$i] = strtoupper($x[$i]);
        }
    }
    foreach ($sortNoLetter as $key => $item) {
        if ((isset($sortNoLetter[$key + 1]))
            && (($sortNoLetter[$key + 1] - $item) <= 4)
            && (!isset($noLetter[$x[$item + 1]]))) {
            for ($i = $item; $i <= $sortNoLetter[$key + 1]; $i++) {
                $x[$i] = strtoupper($x[$i]);
            }
        }
    }
    return implode($x);
}

?>
    <br>
<?php

function unset3LetterInWordKirill(string $string): string
{
    $x = [];
    $y = 0;
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    $noLetter = [' ' => [], ',' => [], '!' => [], '.' => [], ':' => [], ';' => [], '-' => []];
    foreach ($x as $key => $item) {
        foreach ($noLetter as $keyNoLetter => $itemNoLetter) {
            if ($item === $keyNoLetter) {
                $noLetter[$keyNoLetter][] = $key;
            }
        }
    }
    foreach ($noLetter as $key => $item) {
        if (empty($item)) {
            unset($noLetter[$key]);
        }
    }
    $indexesNoLatterSymbol = [];
    foreach ($noLetter as $item) {
        foreach ($item as $i) {
            $indexesNoLatterSymbol[] = $i;
        }
    }
    $sortNoLatter = [];
    $l = count($indexesNoLatterSymbol);
    while ($l) {
        foreach ($indexesNoLatterSymbol as $key => $item) {
            if ($item == min($indexesNoLatterSymbol)) {
                $sortNoLatter[] = $item;
                unset($indexesNoLatterSymbol[$key]);
                $l = $l - 1;
                break;
            }
        }
    }
    if ($sortNoLatter[0] >= 8) {
        unset($x[4], $x[5]);
    }
    if ((strlen($string) - 1) - $sortNoLatter[count($sortNoLatter) - 1] >= 9) {
        unset($x[$sortNoLatter[count($sortNoLatter) - 1] + 5], $x[$sortNoLatter[count($sortNoLatter) - 1] + 6]);
    }
    foreach ($sortNoLatter as $key => $item) {
        if ((isset($sortNoLatter[$key + 1])) && (($sortNoLatter[$key + 1] - $item) >= 9)) {
            unset($x[$item + 5], $x[$item + 6]);
        }
    }

    return implode($x);
}

var_dump(unset3LetterInWordKirill($string));

?>
    <br>
<?php

function unset3LetterInWord(string $string): string
{
    $x = [];
    $y = 0;
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    $noLetter = [' ' => [], ',' => [], '!' => [], '.' => [], ':' => [], ';' => [], '-' => []];
    foreach ($x as $key => $item) {
        foreach ($noLetter as $keyNoLetter => $itemNoLetter) {
            if ($item === $keyNoLetter) {
                $noLetter[$keyNoLetter][] = $key;
            }
        }
    }
    foreach ($noLetter as $key => $item) {
        if (empty($item)) {
            unset($noLetter[$key]);
        }
    }
    $indexesNoLatterSymbol = [];
    foreach ($noLetter as $item) {
        foreach ($item as $i) {
            $indexesNoLatterSymbol[] = $i;
        }
    }
    $sortNoLatter = [];
    $l = count($indexesNoLatterSymbol);
    while ($l) {
        foreach ($indexesNoLatterSymbol as $key => $item) {
            if ($item == min($indexesNoLatterSymbol)) {
                $sortNoLatter[] = $item;
                unset($indexesNoLatterSymbol[$key]);
                $l = $l - 1;
                break;
            }
        }
    }
    if ($sortNoLatter[0] >= 4) {
        unset($x[2]);
    }
    if ((strlen($string) - 1) - $sortNoLatter[count($sortNoLatter) - 1] >= 4) {
        unset($x[$sortNoLatter[count($sortNoLatter) - 1] + 3]);
    }
    foreach ($sortNoLatter as $key => $item) {
        if ((isset($sortNoLatter[$key + 1])) && (($sortNoLatter[$key + 1] - $item) >= 5)) {
            var_dump($item);
            unset($x[$item + 3]);
        }
    }

    return implode($x);
}

?>
    <br>
<?php

function getCommaInsteadSpace($string): string
{
    $x = [];
    $y = 0;
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    $space = [' ' => 0];
    foreach ($x as $key => $item) {
        if (isset($x[$key - 1])) {
            if (isset($space[$item]))
            $x[$key] = ',';
        }
    }
    return implode($x);
}

var_dump(getCommaInsteadSpace($string));

?>
    <br>
<?php

function changeVowelsOnConsonantsKiril($string)
{
    $x = [];
    $y = 0;
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    $vowels =
        ['а' => 0, 'е' => 0, 'и' => 0, 'о' => 0, 'у' => 0, 'ю' => 0, 'я' => 0, 'ы' => 0,
            'А' => 0, 'Е' => 0, 'И' => 0, 'О' => 0, 'У' => 0, 'Ю' => 0, 'Я' => 0, 'Ы' => 0];
    foreach ($x as $key => $item) {
        if (isset($x[$key - 2]) && isset($x[$key + 1])) {
            foreach ($vowels as $keyVow => $itemVow) {
                if ($x[$key] . $x[$key + 1] === $keyVow) {
                    if ((!isset($vowels[$x[$key - 2] . $x[$key - 1]]))
                        && ($x[$key - 2] . $x[$key - 1] !== $x[$key - 4] . $x[$key - 3])
                        && ($x[$key - 1] !== ' ')
                        && ($x[$key - 1] !== ',')
                        && ($x[$key - 1] !== '-')) {
                        $x[$key] = $x[$key - 2];
                        $x[$key + 1] = $x[$key - 1];
                    }
                }
            }
        }
    }
    return implode($x);
}

var_dump(changeVowelsOnConsonantsKiril($string));

?>
    <br>
<?php

function changeVowelsOnConsonants($string)
{
    $x = [];
    $y = 0;
    while ($y < strlen($string)) {
        $x[$y] = $string[$y];
        $y = $y + 1;
    }
    $vowels =
        ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0, 'y' => 0,
            'A' => 0, 'E' => 0, 'I' => 0, 'O' => 0, 'U' => 0, 'Y' => 0];
    foreach ($x as $key => $item) {
        if (isset($x[$key - 1])) {
            foreach ($vowels as $keyVow => $itemVow) {
                if ($item === $keyVow) {
                    if ((!isset($vowels[$x[$key - 1]]))
                        && ($x[$key - 1] !== $x[$key - 2])
                        && ($x[$key - 1] !== ' ')
                        && ($x[$key - 1] !== ',')
                        && ($x[$key - 1] !== '-')
                    ) {
                        $x[$key] = $x[$key - 1];
                    }
                }
            }
        }
    }
    return implode($x);
}
?>

<?php
//
//function changeVowelsOnConsonants1($string): string
//{
//    $vowels = ['а', 'у', 'о', 'и', 'э', 'ы', 'е', 'ё', 'ю', 'я'];
//    $a = preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
//    $b = array_intersect($a, $vowels);
//    foreach ($b as $keyB => $valueB) {
//        unset($b[$keyB]); // удаляем старые элементы под старыми ключами
//        $keyB = $keyB - 1;
//        $b[$keyB] = $valueB;
//    }
//    $c = array_intersect_key($a, $b);
//    foreach ($c as $keyC => $valueC) {
//        unset($c[$keyC]); // удаляем старые элементы под старыми ключами
//        $keyC = $keyC + 1;
//        $c[$keyC] = $valueC;
//    }
//    $d = array_replace($a, $c);
//    $newString = implode($d);
//    return $newString;
//}
//
//function changeVowelsOnConsonants2($string)
//{
//    $x = [];
//    $y = 0;
//    while ($y < strlen($string)) {
//        $x[$y] = $string[$y];
//        $y = $y + 1;
//    }
//    foreach ($x as $key => $item) {
//        $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
//        $consonants =
//            ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];
//        if (in_array($item, $vowels))
//            if (in_array($x[$key - 1], $consonants))
//                $x[$key] = $x[$key - 1];
//    }
//    return implode($x);
//}
//
//function changeVowelsOnConsonants3($string)
//{
//    $x = [];
//    $y = 0;
//    while ($y < strlen($string)) {
//        $x[$y] = $string[$y];
//        $y = $y + 1;
//    }
//    foreach ($x as $key => $item) {
//        $vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
//        $consonants =
//            ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];
//        foreach ($vowels as $itemVow) {
//            if ($item === $itemVow) {
//                foreach ($consonants as $itemCon) {
//                    if ($x[$key - 1] === $itemCon) {
//                        $x[$key] = $x[$key - 1];
//                    }
//                }
//            }
//        }
//    }
//    return implode($x);
//}

//function changeVowelsOnConsonants($string)
//{
//    $x = [];
//    $y = 0;
//    while ($y < strlen($string)) {
//        $x[$y] = $string[$y];
//        $y = $y + 1;
//    }
//    $vowels =
//        ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];
//    foreach ($x as $key => $item) {
//        if (isset($x[$key - 1])) {
//            foreach ($vowels as $itemVow) {
//                if (($item === $itemVow)) {
//                    if ((!in_array($x[$key - 1], $vowels)) // c этим работает всё
////                    if (($x[$key - 1] !== $itemVow) // с этим не работает, почему что массив $key уже состоит только из гласных
//                        && ($x[$key - 1] !== $x[$key - 2])
//                        && ($x[$key - 1] !== ' ')
//                        && ($x[$key - 1] !== ',')
//                        && ($x[$key - 1] !== '-')
//                    ) {
//                        $x[$key] = $x[$key - 1];
//                    }
//                }
//            }
//        }
//    }
//    return implode($x);
//}