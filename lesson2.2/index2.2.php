<?php

require __DIR__ . '/autoload.php';
spl_autoload_register('autoloader');

$article = new \App\Models\Article();
$article->title = 'Заголовок новости';
$article->content = 'Опять что-то произошло';

$article->insert();

var_dump($article);