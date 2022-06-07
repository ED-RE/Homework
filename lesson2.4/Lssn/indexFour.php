<?php
//точка входа

require __DIR__ . '/autoloadFour.php';
spl_autoload_register('autoloader');

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = '\Ap\Controllers\\' . $ctrl;

$ctrl = new $class;
$ctrl();