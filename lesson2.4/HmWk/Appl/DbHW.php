<?php

class DbHW
{
    protected $dbh;

    public function __construct()
    {

        $config = Config::getObject();
        $this->dbh = new \PDO(
            'mysql:host=' . $config->getHost() . ';dbname=' . $config->getDbName(),
            $config->getUser(),
            $config->getPassword()
        );
    }

    /**
     * @param $sql
     * @param $data
     * @param $class
     * @return array|false
     */
    public function query($sql, $data, $class)
    {

        $query = $this->dbh->prepare($sql);
        $query->execute($data);
        return $query->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     * @param $sql
     * @param $data
     * @param $class
     * @return array|false
     */
    public function queryForFindAll($sql, $data, $class)
    {
        return $this->dbh->query($sql)->fetchAll(\PDO::FETCH_CLASS, $class, $data);
    }

    /**
     * @param $sql
     * @param $params
     * @return bool
     */
    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    /**
     * @return false|string
     */
    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}
