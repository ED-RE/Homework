<?php

require __DIR__ . '/../whereis/autoload.php';
spl_autoload_register('autoloader');

try {
    $tableGuestbook = new models\classes\DB('/../../whereis/config.txt');
} catch (Exception $e) {
    echo $e->getMessage();
}

$sqlShowAll = 'SELECT id, title, text FROM guestbook ORDER BY id';
$resultGuestBook = $tableGuestbook->query($sqlShowAll);

$guestbookPage = new views\classes\View();
$guestbookPage->assign('allTable', $resultGuestBook);
$guestbookPage->display('guestbookTemplate.php');