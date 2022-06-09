<?php

require __DIR__ . '/../Applic/autoloadFive.php';
spl_autoload_register('autoloader');

$ex = new \Appl\DbException('Сломалась БД', 100);

echo '<pre>';
var_dump($ex->getMessage());

try {

} catch (\Appl\DbException $error) {
    echo 'Ошибка в БД: ' . $error->getMessage();
    die();
}