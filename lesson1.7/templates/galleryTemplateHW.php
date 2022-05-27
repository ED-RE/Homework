<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
</head>
<form>
    <input type="button" value="Вернуться" onclick="location.href = 'http://lessons/lesson1.7/siteChoiceHW.php'"
</form>
<br>
<br>
<form>
    ГАЛЕРЕЯ ИЗОБРАЖЕНИЙ:
    <br>
    <br>
    <?php
    for ($i = 2; $i < count($this->getData()['arrNamePict']); $i++) {
        ?>
        <img src="/lesson1.7/pictures/<?= $this->getData()['arrNamePict'][$i] ?>" alt="Картинка Not Found" width="400"
             height="250">
        <?php
    }
    ?>
</form>
<br>
<br>
Загрузите изображение в галерею:
<br>
<br>
<form method="post" enctype="multipart/form-data"
<br>
<input type="file" name="nameFile">
<button type="submit">Отправить</button>
</body>
</html>
