<?php
require __DIR__ . '/classes/TableNew.php';
require __DIR__ . '/classes/Cabinet.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
</head>
<body>

<?php

echo '<pre>';

$table1 = new TableNew (1000);
$table1->color = 'red';
$table1->legs = 4;

echo $table1->show();


$cab = new Cabinet(5000, 3);

echo $cab->show();


?>
</body>
</html>
