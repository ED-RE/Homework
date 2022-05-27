<?php

function rom($path)
{
    $lines = file($path);
    if (is_readable($path) == true) {
        return $lines;
    } else {
        echo ("<br>"."<br>" . 'ФАЙЛА ПО ПУТИ НЕТ ИЛИ ОН НЕЧИТАЕМЫЙ' . "<br>"."<br>");
    }
}
