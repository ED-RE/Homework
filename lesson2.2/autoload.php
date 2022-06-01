<?php

function autoloader($className)
{
    require __DIR__ . '\App\\' . $className . '.php';
}

function autoloader2($className)
{
    require __DIR__ . '\\' . $className . '.php';
}

echo __DIR__ . '\\' . 'App\Models\Article.php' . '.php';