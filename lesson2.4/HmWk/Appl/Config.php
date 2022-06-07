<?php
//Является Singletone
//Конструктор protected - поэтому напрямую вызвать не можем, а обращаемся к getObject

class Config
{
    protected $data = [];
    protected $host;
    protected $dbname;
    protected $user;
    protected $password;
    private static $object = null;

    protected function __construct()
    {
        $this->data = include __DIR__ . '/configFile.php';
        $this->host = $this->data['db']['host'];
        $this->dbname = $this->data['db']['dbname'];
        $this->user = $this->data['db']['user'];
        $this->password = $this->data['db']['password'];
    }

    public static function getObject()
    {
        if (null === self::$object) {
            self::$object = new self();
        }
        return self::$object;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getDbName()
    {
        return $this->dbname;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getPassword()
    {
        return $this->password;
    }

}