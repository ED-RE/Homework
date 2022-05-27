<?php
if (isset($_POST['login'])) {
    setcookie("login", $_POST['login']);
}

require __DIR__ . '/classes/ViewHW.php';
$loginPage = new ViewHW();
echo $loginPage->render('loginTemplateHW.php');

require_once __DIR__ . '/classes/UserPasswordHW.php';

$userPassword = new UserPasswordHW();
if (isset($_POST['login']) && $userPassword->checkUser($_POST['login'])
    && $userPassword->checkPassword($_POST['login'], $_POST['password'])) {
    header('Location: http://lessons/lesson1.7/siteChoiceHW.php');
} else {
    $userPassword->saveNewUser();
    if (isset($_POST['login']) && $userPassword->checkUser($_POST['login'])
        && $userPassword->checkPassword($_POST['login'], $_POST['password'])) {
        echo "<br>" . "Вы зарегистрировались!" . "<br>" . "Введите имя и пароль, чтобы перейти на сайт";
    }
}