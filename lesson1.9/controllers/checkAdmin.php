<?php

require __DIR__ . '/../whereis/autoload.php';
spl_autoload_register('autoloader');

$checkPage = new views\classes\View();
$checkPage->display('checkTemplate.php');

try {
    $tableLogPass = new models\classes\DB('/../../whereis/config.txt');
} catch (Exception $e) {
    echo $e->getMessage();
}

$sqlGetALL = 'SELECT login, password FROM loginpassword ORDER BY id';
$resultLogPass = $tableLogPass->query($sqlGetALL);

if (isset($_POST['login']) && isset($_POST['password'])
    && !empty($_POST['login']) && !empty($_POST['password'])) {
    for ($i = 0; $i < count($resultLogPass); $i++) {
        if (($resultLogPass[$i]['login'] === $_POST['login']) &&
            ($resultLogPass[$i]['password'] === md5($_POST['password'] . $_POST['login']))) {
            header('Location: http://lessons/lesson1.9/models/admin.php');
        }
    }
} elseif (!empty($_POST['login']) || !empty($_POST['password'])) {
    echo 'Не все поля заполнены!';
}


echo "<br>" . "<br>" . "<br>" . 'ED' . "<br>";
echo '123' . "<br>";
echo 'hash md5 (пароль + логин): ' . md5('123' . 'ED') . "<br>";

echo "<br>" . 'Vasya' . "<br>";
echo '5555' . "<br>";
echo 'hash md5 (пароль + логин): ' . md5('5555' . 'Vasya') . "<br>" . "<br>";