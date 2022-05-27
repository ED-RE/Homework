<?php
require __DIR__ . '/classes/Table.php';

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
$table1 = new Table;
$table1->setPrice(1000);

echo $table1->show();

$table2 = new Table;
$table2->setPrice(2000);

echo $table2->show();

?>
</body>
</html>
