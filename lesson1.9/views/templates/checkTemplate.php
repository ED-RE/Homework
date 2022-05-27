<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Admin</title>
</head>
<body>
Войдите, как Админ:
<form action="/lesson1.9/controllers/checkAdmin.php" method="post">
    <br>
    Имя: <input type="text" name="login">
    <br>
    Пароль: <input type="password" name="password" size="17">
    <br>
    <br>
    <button type="submit">ВОЙТИ</button>
    <br>
</form>
</body>
</html>
