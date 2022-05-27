<?php

function autoloader($className)
{
    require __DIR__ . '\..\\' . $className . '.php';
}