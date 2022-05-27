<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Определение пола</title>
</head>
<body>
<h1>Функция определения пола по имени</h1>
<!-- Скрытый текст, тест -->
<?php

function namGend(string $a): string
{
    if (str_ends_with($a, 'а')) {
        return 'Пол женский';
    }
    if (str_ends_with($a, 'я')) {
        return 'Пол женский';
    }
    if ((str_ends_with($a, 'а')) != true) {
        return 'Пол мужской';
    }
    if ((str_ends_with($a, 'я')) != true) {
        return 'Пол мужской';
    } else { echo 'null';}
}

echo namGend('Лариса');

?>
</body>
</html>

