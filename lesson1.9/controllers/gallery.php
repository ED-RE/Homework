<?php

require __DIR__ . '/../whereis/autoload.php';
spl_autoload_register('autoloader');

$galleryPage = new views\classes\View();

if (scandir(__DIR__ . '/../views/uploads/pictures/') === false) {
    echo 'Ошибка чтения из файла';
}
$galleryPage->assign('arrNamePict', scandir(__DIR__ . '/../views/uploads/pictures/'));
$galleryPage->display('galleryTemplate.php');