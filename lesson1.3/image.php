<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image-2</title>
</head>
<h1>Страница 2 изображений</h1>
<body>
<?php
$img2 = [1 => '/cat.jpg', 2 => '/dog.jpg', 3 => '/horse.jpg', 4 => '/pig.png'];
switch ($_GET['id']) {
    case (1):
        ?>
        <img src="/lesson1.3<?= $img2[1] ?>" alt="Картинки нет"
        <?php
        break;
    case (2):
        ?>
        <img src="/lesson1.3<?= $img2[2] ?>" alt="Картинки нет"
        <?php
        break;
    case (3):
        ?>
        <img src="/lesson1.3<?= $img2[3] ?>" alt="Картинки нет"
        <?php
        break;
    case (4):
        ?>
        <img src="/lesson1.3<?= $img2[4] ?>" alt="Картинки нет"
        <?php
        break;
}
?>
</body>
</html>

<!--case (1):-->
<!--echo('<img src="/lesson1.3/cat.jpg">');-->
<!--break;-->
<!--case (2):-->
<!--echo('<img src="/lesson1.3/dog.jpg">');-->
<!--break;-->
<!--case (3):-->
<!--echo('<img src="/lesson1.3/horse.jpg">');-->
<!--break;-->
<!--case (4):-->
<!--echo('<img src="/lesson1.3/pig.png">');-->
<!--break;-->
<!--}-->