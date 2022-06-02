<?php
//Является Singletone
//узнать почему не могу создать объект в данном случае обычным образом, через new


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