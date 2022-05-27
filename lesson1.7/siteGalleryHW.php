<?php

require __DIR__ . '/classes/ViewHW.php';

$galleryPage = new ViewHW();

if (scandir(__DIR__ . '/pictures/') === false) {
    throw new Exception('ОШИБКА');
}
$galleryPage->assign('arrNamePict', scandir(__DIR__ . '/pictures/'));
echo $galleryPage->render('galleryTemplateHW.php');

if (isset($_FILES['nameFile'])) {
    if (0 == $_FILES['nameFile']['error']) {
        move_uploaded_file($_FILES['nameFile']['tmp_name'],
            __DIR__ . '/pictures/' . $_FILES['nameFile']['name']);
        header('Location: http://lessons/lesson1.7/siteGalleryHW.php');
        $forLogs = $_COOKIE['login'] . " " . " " .
            date(DATE_RFC822) . " " . $_FILES['nameFile']['name'] . "\n";
        file_put_contents(__DIR__ . '/logs7.txt', $forLogs, FILE_APPEND);
    }
}
