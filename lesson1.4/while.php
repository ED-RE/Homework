<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While</title>
</head>
<h1>While</h1>
<body>
<?php

$i = 0;
while ($i <= 10) {
//    $i = $i + 1;
    echo $i;
    $i++; //инкремент
}

$i1 = 0;
while ($i1 < 10) {
    $i1 = $i1 + 1;
    echo $i1;
}

$i2 = 10;
do { // обратный цикл
    echo $i2;
    $i2--;
} while ($i2 > 0);
?>

</body>
</html>
