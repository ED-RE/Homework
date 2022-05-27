<?php
//header('Set-cookie: foo=42'); // отдавать заголовки нужно до любого вывода любого текста
setcookie('foo', 24, time()+86400); // 86400 - это количество секунд в сутках

// назначение cookie - пометить клиентов !!!!!!!!!!!!

// в массив $_COOKIE что-то записываь не имеет смысла, он только для чтения
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
