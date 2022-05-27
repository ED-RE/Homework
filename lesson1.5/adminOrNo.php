<?php
$users = require_once __DIR__ . '/users.php';
// ставим 2 куки. Имя пользователя и Некий секрет связанный с этим пользователем
// один раз отрабатываем страницу, потом комментим куки
//setcookie('username','admin');
//setcookie('secret', sha1('13.04.1980'));
?>
<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if ($_COOKIE['username'] == 'admin'
    &&
    $_COOKIE['secret'] == sha1($users['admin'])
) {
    ?>Вы - админ!<?php
}
?>
</body>
</html>