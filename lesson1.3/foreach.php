<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Перебор массива</title>
</head>
<body>
<h1>Foreach</h1>

<?php
$x = [
    'январь' => 31,
    'февраль' => 28,
    'март' => 31,
    'апрель' => 30,
];
?>

<table border="1"
<?php
foreach ($x as $key => $value) {
    ?>
    <tr>
        <th><?php echo $key ?></th>
        <td><?php echo $value ?></td>
    </tr>
    <?php
}
?>
</table>


</body>
</html>
