<?php

require __DIR__ . '/../whereis/autoload.php';
spl_autoload_register('autoloader');

$startPage = new views\classes\View();
$startPage->display('mysiteTemplate.php');