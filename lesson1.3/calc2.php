<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator 2</title>
</head>
<h1>Калькулятор 2</h1>
<body>
<form method="get">
    1 число: <input type="number" name="number1" value="<?php if (isset($_GET['number1'])) {
        echo $_GET['number1'];
    } ?>">
    <br>
    знак операции: <input type="text" name="sign" value="<?php if (isset($_GET['sign'])) {
        echo $_GET['sign'];
    } ?>">
    <br>
    2 число: <input type="number" name="number2" value="<?php if (isset($_GET['number2'])) {
        echo $_GET['number2'];
    } ?>">
<!--    <br>-->
<!--    <input type="reset">-->
    <br>
    <button type="submit">=</button>
</form>
<?php

if ((!isset($_GET['number1']) || !isset($_GET['number2'])) || !isset($_GET['sign'])) {
    echo 'значения не введены';
} elseif (empty($_GET['number1']) || empty($_GET['number2']) || empty($_GET['sign'])) {
    echo 'значения ПУСТЫЕ';
} elseif (is_numeric($_GET['number1']) !== true || is_numeric($_GET['number2']) !== true) {
    echo 'вернитесь и введите ЧИСЛО в поля значений';
} elseif ($_GET['sign'] == '+') {
    $a = (float)$_GET['number1'] + (float)$_GET['number2'];
    echo 'Ваш результат: ' . $_GET['number1'] . ' + ' . $_GET['number2'] . ' = ';
    echo $a;
} elseif ($_GET['sign'] == '-') {
    $a = (float)$_GET['number1'] - (float)$_GET['number2'];
    echo 'Ваш результат: ' . $_GET['number1'] . ' - ' . $_GET['number2'] . ' = ';
    echo $a;
} elseif ($_GET['sign'] == '*') {
    $a = (float)$_GET['number1'] * (float)$_GET['number2'];
    echo 'Ваш результат: ' . $_GET['number1'] . ' * ' . $_GET['number2'] . ' = ';
    echo $a;
} elseif ($_GET['sign'] == '/') {
    $a = (float)$_GET['number1'] / (float)$_GET['number2'];
    echo 'Ваш результат: ' . $_GET['number1'] . ' / ' . $_GET['number2'] . ' = ';
    echo $a;
} elseif (($_GET['sign'] !== '+') || ($_GET['sign'] !== '-') || ($_GET['sign'] !== '*') || ($_GET['sign'] !== '/')) {
    echo 'вернитесь и выберите нормальный ЗНАК вычисления';
}
?>
</body>
</html>
