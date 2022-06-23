<!doctype html>

<form
        action="http://homework/yiiTask/testdrive/index.php?r=admin/<?= $_POST['action'] ?>"
        method="post"
>
    <p><b>Поля для ввода:</b></p>
    Название фреймворка:<textarea name="title"></textarea>
    <br>
    Описание фреймворка:<textarea name="content"></textarea>
    <br><br>
    <input type="hidden" name="id" value="<?php if (isset($_POST['id'])) :
        echo $_POST['id'];
    endif; ?>">
    <button type="submit">Отправить новую информацию</button>
    <br>
    <hr>
</form>
