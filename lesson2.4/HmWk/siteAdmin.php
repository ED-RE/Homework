<?php
require __DIR__ . '/Appl/autoload.php';
if (spl_autoload_register('autoloader') === false) {
    throw new Exception('ERROR');
}
try {
    spl_autoload_register('autoloader');
} catch (Exception $e) {
    echo $e->getMessage();
}

$ctrl = $_GET['ctrl'] ?? 'AdminController';
$act = $_GET['act'] ?? 'showAll';
$class = '\Controllers\Admin\\' . $ctrl;

$ctrlClient = new $class;
$ctrlClient->action($act);