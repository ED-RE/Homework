<?php
include __DIR__ . '/classes/GuestBook.php';
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

?>
<table border='1'>
    <?php
    foreach ($guestBook->getData() as $record) { ?>
        <tr>
            <td>
                <?= $record ?>
            </td>
        </tr>
    <?php }
    ?>
</table>
<form method="post">
    <br>
    <input type="text" name="text1">
    <button type="submit">Отправить</button>
</form>
<?php
if (isset( $_POST['text1'])) {
    $guestBook->append($_POST['text1'] . PHP_EOL);
    $guestBook->save();
}
?>
</body>
</html>
