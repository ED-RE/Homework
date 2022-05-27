<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GALLERY</title>
</head>
<h2 align="center" style="color:black">GALLERY</h2>
<form>
    <?php
    for ($i = 2; $i < count($this->getData()['arrNamePict']); $i++) {
        ?>
        <img src="/lesson1.9/views/uploads/pictures/<?= $this->getData()['arrNamePict'][$i] ?>" alt="Картинка Not Found"
             width="400"
             height="250">
        <?php
    }
    ?>
</form>
<br>
<input type="button" value="На главную" onclick="location.href = 'http://lessons/lesson1.9/controllers/mysite.php'"
<br>
</body>
</html>
