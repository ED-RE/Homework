<?php
require __DIR__ . '/autoloadFour.php';
spl_autoload_register('autoloader');

// точка входа
$ctrl = new \Ap\Controllers\Articllle();
$ctrl();