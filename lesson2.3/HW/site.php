<?php
require __DIR__ . '/App/autoload.php';
if (spl_autoload_register('autoloader') === false) {
    echo 'ERROR';
    die;
}
spl_autoload_register('autoloader');

$controller = new \Controllers\Controller();

$controller->save();
$controller->delete();

$controller->showAll();