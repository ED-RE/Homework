<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<h1>Взаимодействие с пользователем</h1>
<body>
Привет,
<?php

if (isset($_GET['name'])) { // isset проверяет существование какого-либо элемента в массиве
    $name = $_GET['name'];
} else {
    $name = null;
}

$name = $_GET['name'] ?? 'Гость'; // ?? оператор выбора одного из двух значений | либо левое, если оно существое, либо правое, если левого не существует
echo $name;
?>

</body>
</html>
