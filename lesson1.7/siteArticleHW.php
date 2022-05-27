<?php
require_once __DIR__ . '/classes/ViewHW.php';
require_once __DIR__ . '/classes/NewsHW.php';

$articlePage = new ViewHW();
$articlePage->assign('news', new NewsHW());

if (isset($articlePage->getData()['news']->getrecords()[$_GET['id']]['title'])
    && isset($articlePage->getData()['news']->getrecords()[$_GET['id']]['content'])) {
    echo $articlePage->render('articleTemplateHW.php');
} else {
    throw new Exception('НE НАЕБЁТЕ!');
}
