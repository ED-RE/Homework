<?php
if (isset($_POST['login'])) {
    setcookie("login", $_POST['login']);
}
if (isset($_POST['password'])) {
    setcookie("password", $_POST['password']);
}
?>
<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сайт</title>
</head>
<h1>Сайт</h1>
<body>
<?php
$login = $_COOKIE['login'];
echo('Приветствую ' . $login . '!');
?>
<br><br>
ФОТОГАЛЕРЕЯ:
<br><br>
<?php
$pict = scandir(__DIR__ . '/picture'); // возвращает массив имён всех файлов в папке
array_splice($pict, 0, 2);
foreach ($pict as $a) {
    ?>
    <img src="/lesson1.5/picture/<?= $a ?>" alt="Картинка Not Found" width="250" height="250">
    <?php
}
?>
<form action="site1.php" method="post" enctype="multipart/form-data">
    <br>
    <input type="file" name="name1">
    <button type="submit">Отправить</button>
    <?php
    if (isset($_FILES['name1'])) {
        if (0 == $_FILES['name1']['error']) {
            move_uploaded_file($_FILES['name1']['tmp_name'], __DIR__ . '/picture/' . $_FILES['name1']['name']);
            $forLogs = $_COOKIE['login'] . " " . " ".date(DATE_RFC822) . " " . $_FILES['name1']['name'] . "\n";
            file_put_contents(__DIR__ . '/logs.txt', $forLogs, FILE_APPEND);
            header('Location: http://lessons/lesson1.5/site1.php');
        } else {
            echo('Картинки загружаются только в форматах .jpeg или .png');
        }
    }
    var_dump(__DIR__ . '/logs.txt');
    ?>
</body>
</html>
