<?php

require __DIR__ . '/../whereis/autoload.php';
spl_autoload_register('autoloader');

try {
    $tableMyself = new models\classes\DB('/../../whereis/config.txt');
} catch (Exception $e) {
    echo $e->getMessage();
}

$sqlShowAll = 'SELECT title, text FROM aboutmyself ORDER BY id';
$resultMySelf = $tableMyself->query($sqlShowAll);

$aboutMySelfPage = new views\classes\View();
$aboutMySelfPage->assign('allTable', $resultMySelf);
$aboutMySelfPage->display('aboutMeTemplate.php');