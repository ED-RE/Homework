<?php
/**
 * подключаем пакет (который был скачан через composer)
 */
require __DIR__ . '/../vendor/autoload.php';

function autoloader($className)
{
    require __DIR__ . '\\' . $className . '.php';
}