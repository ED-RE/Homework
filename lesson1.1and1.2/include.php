<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>include</title>
</head>
<body>
<h1>Исследование include</h1>

<?php

include __DIR__ . '/test0.php';
include __DIR__ . '/test0.php';
include __DIR__ . '/test0.php';
require __DIR__ . '/test0.php';
require_once __DIR__ . '/test0.php';

?>


</body>
</html>
