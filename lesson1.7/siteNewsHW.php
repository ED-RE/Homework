<?php
require_once __DIR__ . '/classes/ViewHW.php';
require_once __DIR__ . '/classes/ArticleHW.php';
require_once __DIR__ . '/classes/NewsHW.php';

$newsPage = new ViewHW();
$article = new ArticleHW();
$newsPage->assign('news', new NewsHW());

if (isset($_POST['title']) && isset($_POST['content'])
    && !empty($_POST['title']) && !empty($_POST['content'])) {
    $article->setTitle($_POST['title']);
    $article->setContent($_POST['content']);
    $newsPage->getData()['news']->append($article);
    $newsPage->getData()['news']->save();
    header('Location: ' . 'http://lessons/lesson1.7/siteNewsHW.php');
}
$newsPage->display('newsTemplateHW.php');