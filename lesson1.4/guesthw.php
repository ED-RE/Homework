<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
    <h1>Гостевая книга</h1>
</head>
<body>
<?php
include __DIR__ . '/func2.php';
$path = __DIR__ . '/guestbook.txt';
?>
<table border="1">
    <?php
    foreach (rom($path) as $a) {
        ?>
        <tr>
            <td><?php echo $a ?></td>
        </tr>

        <?php
    }
    ?>
</table>
<form method="post">
    <br>
    Введите новую запись в Гостевую книгу: <input type="text" name="text1"
                                                  value="<?php if (isset($_POST['text1'])) {
                                                      echo $_POST['text1'];
                                                  } ?>">
    <button type="submit">Отправить запись</button>
    <?php
    if (!isset($_POST['text1'])) {
        echo ("<br>". "<br>" . 'Комментарий не введен');
    } elseif (empty($_POST['text1'])) {
        echo ("<br>". "<br>" . 'значения ПУСТЫЕ');
    } elseif (is_numeric($_POST['text1']) == true) {
        echo ("<br>". "<br>" . 'Введите текст, а не число');
    } else {
        file_put_contents($path,$_POST['text1'] . "\n", FILE_APPEND); // \n - символ переноса строки
        header('Location: '. 'http://lessons/lesson1.4/guesthw.php');
    }
    ?>
</form>
</body>
</html>
