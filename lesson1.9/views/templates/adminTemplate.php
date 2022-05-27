<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<h2 align="center" style="color:black">ADMIN PANEL</h2>
<hr>
<form method="post">
    <p><b>Откорректируйте информацию в разделе "ABOUT MYSELF"</b></p>
    Заголовок:<textarea name="title">
    </textarea>
    <br>
    Текст:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="content">
    </textarea>
    <br><br>
    <button type="submit">Отправить новую информацию о себе</button>
    <br>
    <hr>
</form>

<form method="post" enctype="multipart/form-data"
<p><b>Добавьте изображение в раздел "GALLERY"</b></p>
<br>
<input type="file" name="nameFile">
<button type="submit">Отправить</button>
<hr>
</form>

<form method="post">
    <p><b>Добавьте информацию в раздел "GUESTBOOK"</b></p>
    Заголовок:<textarea name="titleguest">
    </textarea>
    <br>
    Текст:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="contentguest">
    </textarea>
    <br><br>
    <button type="submit">Отправить новую запись в гостевую книгу</button>
    <br>
</form>

<form method="post">
    <p><b>Удалите информацию из раздела "GUESTBOOK"</b></p>
    Введите номер записи:&nbsp<input type="number" name="number">
    <button type="submit">Удалить</button>
</form>

<hr>
<br>
<input type="button" value="На главную" onclick="location.href = 'http://lessons/lesson1.9/controllers/mysite.php'"
<br>
</body>
</html>