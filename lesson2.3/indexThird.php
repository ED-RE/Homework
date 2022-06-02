<?php

require __DIR__ . '/autoloadThird.php';
spl_autoload_register('autoloader');

$view = new \App\ViewThird();
$view->articles = \App\Models\ArticleThird::findAll();
$view['foo'] = 'bar';
$view['baz'] = 42;

echo  $view->render(__DIR__ . '/templates/indexThird.php');