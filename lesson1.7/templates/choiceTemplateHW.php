<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choice</title>
</head>
<?php
echo 'Приветствую тебя, ' . $this->getData()['user']->getCurrentUser() . ', на нашем сайте !' .
    "<br>" . "<br>" . 'Выберите ниже куда хотите перейти:';
?>
<br>
<figure>
    <a href="http://lessons/lesson1.7/siteGalleryHW.php">
        <img src="/lesson1.7/pictForChoice/images.png" alt="Картинка Not Found" width="250" height="250">
    </a>
    <figcaption>GALLERY</figcaption>
</figure>
<figure>
    <a href="http://lessons/lesson1.7/siteNewsHW.php">
        <img src="/lesson1.7/pictForChoice/news2.png" alt="Картинка Not Found" width="250" height="250">
    </a>
    <figcaption>NEWS</figcaption>
</figure>
<body>
</body>
</html>