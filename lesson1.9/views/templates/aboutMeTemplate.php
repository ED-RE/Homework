<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABOUT ME</title>
</head>
<h2 align="center" style="color:black">ABOUT MYSELF</h2>
<body>
<?php
    echo $this->getData()['allTable'][0][0] . "<br>" . "<br>";
    echo $this->getData()['allTable'][0][1] . "<br>" . "<br>" . "<br>";
?>
<input type="button" value="На главную" onclick="location.href = 'http://lessons/lesson1.9/controllers/mysite.php'"
<br>
</body>
</html>
