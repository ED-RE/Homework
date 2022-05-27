<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image-1</title>
</head>
<h1>Страница 1 изображений</h1>
<body>
<?php
$img = [1 => '/cat.jpg', 2 => '/dog.jpg', 3 => '/horse.jpg', 4 => '/pig.png'];
?>

<p><a href="/lesson1.3/image.php?id=1"><img src="/lesson1.3<?= $img[1] ?>"
                                            width="189" height="200"></a>

    <a href="/lesson1.3/image.php?id=2"><img src="/lesson1.3<?= $img[2] ?>"
                                             width="189" height="200" alt="/lesson1.3/image.php?id=2"></a>

    <a href="/lesson1.3/image.php?id=3"><img src="/lesson1.3<?= $img[3] ?>"
                                             width="189" height="200"></a>

    <a href="/lesson1.3/image.php?id=4"><img src="/lesson1.3<?= $img[4] ?>"
                                             width="189" height="200" alt="/lesson1.3/image.php?id=4"></a>
</p>
</body>
</html>
