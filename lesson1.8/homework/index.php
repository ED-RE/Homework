<?php
require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/View.php';

try {
    $tableNews = new DbHW('/../config.txt');
} catch (Exception $e) {
    echo $e->getMessage();
}
$sqlShowAll = 'SELECT Заголовок, Текст, Автор FROM news ORDER BY id';
if ($tableNews->execute($sqlShowAll)) {
    $result = $tableNews->query($sqlShowAll);
} else {
    echo 'ОШИБКА';
}

$sqlGetID = 'SELECT id FROM news ORDER BY id';
$resultID = $tableNews->query($sqlGetID);

$pageNews = new View();
$pageNews->assign('allTable', $result);
$pageNews->assign('allID', $resultID);
$pageNews->display('indexTemplate.php');

if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['author'])
    && !empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['author'])) {
    $arrNewArticle = [$_POST['title'], $_POST['content'], $_POST['author']];
    $sqlSetNews = "INSERT INTO news (Заголовок, Текст, Автор)
VALUES ('$arrNewArticle[0]','$arrNewArticle[1]','$arrNewArticle[2]')";
    $tableNews->execute($sqlSetNews);
    header('Location: ' . 'http://lessons/lesson1.8/homework/index.php');
}