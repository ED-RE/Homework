<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фотогалерея</title>
</head>
<h1>Фотогалерея</h1>
<body>
<?php
$pict = scandir(__DIR__ . '/pictures'); // возвращает массив имён всех файлов в папке
array_splice($pict, 0, 2);
//var_dump($pict);

foreach ($pict as $a) {
    ?>
    <img src="/lesson1.4/pictures/<?= $a ?>" alt="Картинка Not Found" width="250" height="250">
    <?php
}
?>
<form action="HwPicture.php" method="post" enctype="multipart/form-data">
    <br>
    <input type="file" name="name1" accept="image/jpeg, image/png">
    <button type="submit">Отправить</button>
    <?php
    //    var_dump($_FILES);
    if (isset($_FILES['name1'])) {
        if (0 == $_FILES['name1']['error']) {
            if ((str_contains($_FILES['name1']['type'], 'jpeg')) || (str_contains($_FILES['name1']['type'], 'png'))) {
                move_uploaded_file($_FILES['name1']['tmp_name'], __DIR__ . '/pictures/' . $_FILES['name1']['name']);
                header('Location: http://lessons/lesson1.4/HwPicture.php');
            } else {
                echo('Картинки загружаются только в форматах .jpeg или .png');
            }
        }
    }
    ?>

</form>
</body>
</html>
