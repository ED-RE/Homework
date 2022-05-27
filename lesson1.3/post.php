<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<h1>$_POST</h1>
<body>

<form action="/lesson1.3/send.php" method="post">

    Имя пользователя: <input type="text" name="user">
    <br>
    Пароль: <input type="password" name="pass">
    <br>
    <button type="submit">Отправить</button>
</form>

</body>
</html>
