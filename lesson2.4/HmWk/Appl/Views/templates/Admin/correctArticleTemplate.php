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
<form action="http://homework/lesson2.4/HmWk/siteAdmin.php?ctrl=AdminController&act=<?php echo 'save' ?>" method="post">
    <p><b>Поля для ввода:</b></p>
    Заголовок:<textarea name="title"></textarea>
    <br>
    Текст:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="content"></textarea>
    <br>
    Автор:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="author">
    <br>
    <br>
    <input type="hidden" name="id" value="<?php if (isset($_POST['id'])) :
        echo $_POST['id'];
    endif; ?>">
    <input type="hidden" name="authorID" value="<?php if (isset($_POST['authorID'])) :
        echo $_POST['authorID'];
    endif; ?>">
    <button type="submit">Отправить новую информацию</button>
    <br>
    <hr>
</form>
</body>
</html>