<?php
include __DIR__ . '/classes/GuestBook.php';
include __DIR__ . '/classes/Uploader.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest HW 6</title>
    <h1>Гостевая книга HW 6</h1>
</head>
<body>
<?php
$path = __DIR__ . '/gBookHW.txt';
$guestBook = new GuestBook($path);
if (scandir(__DIR__ . '/pictures') == false) {
    echo 'ДАННАЯ ДИРЕКТОРИЯ НЕ ДОСТУПНА';
} else {
    $arrPictures = scandir(__DIR__ . '/pictures');
}
for ($i = 2; $i <= count($arrPictures)-1; $i++) { // игнорируем 1 и 2 индексы (т.к. там '.' и '..')
    ?>
    <img src="/lesson1.6/pictures/<?= $arrPictures[$i] ?>" alt="Картинка Not Found" width="450" height="250">
    <?php
}
?>
<br><br><br><br>
Добавьте новую запись:
<form method="post">
    <input type="text" name="text1"">
    <button type="submit">Отправить</button>
</form>
<br><br>
Загрузите новую картинку:
<form method="post" enctype="multipart/form-data">
    <input type="file" name="nameFormImages" accept="image/jpeg, image/png">
    <button type="submit">Загрузить<br>файл</button>
</form>
<?php
if (isset($_POST['text1']) && !empty($_POST['text1'])) {
    $guestBook->append($_POST['text1'] . PHP_EOL)->save();
    header('Location: ' . 'http://lessons/lesson1.6/guestHW.php');
//    $guestBook->save();
}
$uploader = new Uploader('nameFormImages');
$uploader->isUploaded();
$uploader->upload()
//if (isset($_FILES['nameImages'])) {
//    new Uploader('nameImages');
//}
?>
</body>
</html>
