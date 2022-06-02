<?php
//сделать синглтоном

namespace App;

class ConfigThird
{
    protected $data = [];
    private static $instance = null;

    protected function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}