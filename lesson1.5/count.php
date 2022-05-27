<?php
session_start(); // Функция session_start() создаёт сессию, либо возобновляет существующую, основываясь на идентификаторе сессии, переданном через GET- или POST-запрос, либо переданный через cookie.
// передаёт заголовок Set-cookie, с ID. Эта кука сессионная
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count</title>
    <style>
        h1 {
            color: fuchsia;
        / / цвет заголовка
        }
    </style>
</head>
<h1>Attendance counter</h1>
<body>
<?php
$count = $_SESSION['count'] ?? 0; // суперглобальный массив $_SESSION
$count++;
$_SESSION['count'] = $count;
?>
Счетчик: <?php echo $count;
?>

</body>
</html>
