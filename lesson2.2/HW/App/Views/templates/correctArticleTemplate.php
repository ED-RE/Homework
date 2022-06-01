<!doctype html>
<p lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Panel</title>
    </head>
    <body>
<h3 align="center" style="color:black">Введите данные</h3>
<form action="/lesson2.2/HW/site.php" method="post">
    <p><b>Поля для ввода:</b></p>
    Заголовок:<textarea name="title">
    </textarea>
    <br>
    Текст:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="content">
    </textarea>
    <br>
    <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
    <button type="submit">Отправить новую информацию</button>
    <br>
    <hr>
</form>
</body>
</html>