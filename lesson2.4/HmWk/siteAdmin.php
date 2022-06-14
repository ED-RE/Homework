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
//$act = $_GET['act'] ?? 'showAll'; // для showAll (старая админка, нормальная)
$act = $_GET['act'] ?? 'showAllSecond'; // для отображения AdminTable по заданию 2.8
$class = '\Controllers\Admin\\' . $ctrl;

try {
    $ctrlAdmin = new $class;
    $ctrlAdmin->action($act);
} catch (\Exceptions\DBException $error) {
    echo 'Ошибка в БД: <br>' . $error->getMessage() . $error->getSql() . '<br>';
    echo 'Находится в: ' . $error->getFile() . '<br>';
    echo 'На строке: ' . $error->getLine();
    die;
} catch (\Exceptions\NotFoundRecordException $error) {
    echo $error->getError404();
    die;
}