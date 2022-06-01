<?php
require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/View.php';

try {
    $tableNews = new DbHW('/../config.txt');
} catch (Exception $e) {
    echo $e->getMessage();
}
$sqlChooseOne = 'SELECT Заголовок, Текст, Автор FROM news WHERE id=:id';
$result = $tableNews->query($sqlChooseOne, [':id' => ($_GET['id'])]);

$articleNews = new View();
$articleNews->assign('oneArticle', $result);
echo $articleNews->render('articleTemplate.php');