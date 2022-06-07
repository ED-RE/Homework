<?php

namespace Ap\Models;

class DbFour
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../../configFour.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
            $config['user'],
            $config['password']
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
