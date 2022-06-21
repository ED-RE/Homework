<?php
//Является Singletone

class Config
{
    public $data = [];
    private static $object = null;

    protected function __construct()
    {
        $this->data = include __DIR__ . '/configFile.php';
    }

    public static function getObject()
    {
        if (null === self::$object) {
            self::$object = new self();
        }
        return self::$object;
    }
}