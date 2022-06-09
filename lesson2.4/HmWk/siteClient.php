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

$ctrl = $_GET['ctrl'] ?? 'ClientController';
$act = $_GET['act'] ?? 'showAll';
$class = '\Controllers\Client\\' . $ctrl;

try {
    $ctrlClient = new $class;
    $ctrlClient->action($act);
} catch (\Exceptions\DBException $error) {
    echo 'Ошибка в БД: <br>' . $error->getMessage() . $error->getSql() . '<br>';
    echo 'Находится в: ' . $error->getFile() . '<br>';
    echo 'На строке: ' . $error->getLine();
    $logs = new \Models\Logger();
    $forLogs = 'Ошибка в БД: ' . $error->getMessage() . $error->getSql() .
        ' Находится в: ' . $error->getFile() .
        ' На строке: ' . $error->getLine();
    try {
        $logs->setLogsOnTxt($forLogs);
    } catch (Exception $e) {
        $e->getMessage();
    }
} catch (\Exceptions\NotFoundRecordException $error) {
    echo 'Ошибка в БД: <br>' . $error->getError404() . '<br>';
    echo 'Находится в: ' . $error->getFile() . '<br>';
    echo 'На строке: ' . $error->getLine();
    $logs = new \Models\Logger();
    $forLogs = 'Ошибка в БД: ' . $error->getError404() .
        ' Находится в: ' . $error->getFile() .
        ' На строке: ' . $error->getLine();
    try {
        $logs->setLogsOnTxt($forLogs);
    } catch (Exception $e) {
        $e->getMessage();
    }
}