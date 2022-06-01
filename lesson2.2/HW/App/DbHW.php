<?php

class DbHW
{
    protected $dbh;

    public function __construct()
    {
        $config = Config::getObject();
        $this->dbh = new \PDO(
            'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']
        );
    }

    public function query($sql, $data, $class)
    {

        $query = $this->dbh->prepare($sql);
        $query->execute($data);
        return $query->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function queryForFindAll($sql, $data, $class)
    {
        return $this->dbh->query($sql)->fetchAll(\PDO::FETCH_CLASS, $class, $data);
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}
