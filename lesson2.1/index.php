<?php

require __DIR__ . '/autoload.php';
spl_autoload_register('autoloader');

//$data = \App\Models\Article::findAll();
//$data1 = \App\Models\Article::findById(1);
$data2 = \App\Models\Article::last3Article();

//echo '<pre>';
//var_dump($data1);
include __DIR__ . '/App/Views/templates/newsTemplate.php';