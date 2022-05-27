<?php
require __DIR__ . '/classes/GuestBook.php';
// <hr> - который ниже в коде, это горизонтальная черта
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>i n d e x</title>
    <h1>Г о с т е в а я</h1>
    <hr>
</head>
<body>
<?php
$guestBook = new GuestBook(__DIR__ . '/data7.txt');
foreach ($guestBook->getRecords() as $record) { ?>
    <?php echo $record->getMessage(); ?>
    <hr>
<?php } ?>

<form action="append.php" method="post">
    <textarea name="message"></textarea>
    <br>
    <button type="submit">Отправить</button>
</form>

</body>
</html>