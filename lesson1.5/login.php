<?php
if (isset($_POST['login'])) {
    setcookie("login", $_POST['login']);
}
if (isset($_POST['password'])) {
    setcookie("password", md5($_POST['password'] . $_POST['login']));
}
?>
<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация site1</title>
</head>
<h1>Авторизуйтесь</h1>
<body>
<form method="post">
    <br>
    Имя: <input type="text" name="login">
    <br>
    Пароль: <input type="password" name="password">
    <br>
    <button type="submit">Войти</button>
    <br>
    <?php
    include __DIR__ . '/func2.php';

    if (isset($_POST['login'])) {
        $login = $_POST['login'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    if (isset($_POST['login'])
        && isset($_POST['password'])
        && checkPassword($login, md5($password . $login))) {
        header('Location: http://lessons/lesson1.5/site1.php');
    }
    ?>
</form>
</body>
</html>
