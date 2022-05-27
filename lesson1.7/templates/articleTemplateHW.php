<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новость</title>
</head>
<input type="button" value="Вернуться" onclick="location.href = 'http://lessons/lesson1.7/siteNewsHW.php'"
<br>
<body>
<b>
    <p>
        <?php
        echo $this->getData()['news']->getRecords()[$_GET['id']]['title'];
        ?>
</b>
</p>
<?php
echo $this->getData()['news']->getRecords()[$_GET['id']]['content'];
?>
</body>
</html>