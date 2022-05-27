<?php

//var_dump(!isset($_GET['number1']));
//die;


//if (isset($_GET['sign']) && $_GET['sign'] === '') {
//    echo 'Выберите знак';exit();
//}
//$sign = $_GET['sign'];
//$isValidSign = match ($sign) {
//    '-', '+', '/', '*' => true,
//    default => false
//};

//var_dump(($_GET['sign'] !== '+') || ($_GET['sign'] !== '-') || ($_GET['sign'] !== '*') || ($_GET['sign'] !== '/'));
//die;

if ((!isset($_GET['number1']) || !isset($_GET['number2'])) || !isset($_GET['sign'])) {
    echo 'значения не введены';
} elseif (empty($_GET['number1']) || empty($_GET['number2']) || empty($_GET['sign'])) {
    echo 'значения ПУСТЫЕ';
} elseif (is_numeric($_GET['number1']) !== true || is_numeric($_GET['number2']) !== true) {
    echo 'вернитесь и введите ЧИСЛО в поля значений';
//} elseif (!$isValidSign) {
//} elseif (($_GET['sign'] !== '+') || ($_GET['sign'] !== '-') || ($_GET['sign'] !== '*') || ($_GET['sign'] !== '/')) {
//    echo 'вернитесь и выберите нормальный ЗНАК вычисления';
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
//     $new_url = 'http://lessons/lesson1.3/calc1.php';
//     header('Location: ' .$new_url);


//switch ($_GET['sign']) {
//    case ($_GET['sign'] == '+'):
//        $a = $_GET['number1'] + $_GET['number2'];
//        echo 'Ваш результат: ';
//        echo $a;
//        break;
//    case ($_GET['sign'] == '-'):
//        $a = $_GET['number1'] - $_GET['number2'];
//        echo 'Ваш результат: ';
//        echo $a;
//        break;
//    case ($_GET['sign'] == '/'):
//        $a = $_GET['number1'] / $_GET['number2'];
//        echo 'Ваш результат: ';
//        echo $a;
//        break;
//    case ($_GET['sign'] == '*'):
//        $a = $_GET['number1'] * $_GET['number2'];
//        echo 'Ваш результат: ';
//        echo $a;
//        break;
//    default:
//        echo 'вы совершаете хуйню, вернитесь на прошлую страницу и выберите нормальный знак вычисления';
//}