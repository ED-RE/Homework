<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminTable</title>
</head>
<table border="1">
    <caption>Таблица Домашки 2.7</caption>
    <tr>
        <th><?= $this->data['title'] ?></th>
        <th><?= $this->data['trimmedText'] ?></th>
    </tr>
    <?php
    for ($i = 0;
    $i < count($this->data['AllValues']);
    $i = $i + 2) {
    ?>
    <tr>
        <td><?php
            if (isset($this->data['AllValues'][$i])) {
                echo $this->data['AllValues'][$i]['title'];
            } ?>
        </td>
        <td><?php
            if (isset($this->data['AllValues'][$i + 1])) {
                echo $this->data['AllValues'][$i + 1]['trimmedText'];
            } ?></td>
    <tr><?php
        }
        ?>
</table>
</body>
</html>
