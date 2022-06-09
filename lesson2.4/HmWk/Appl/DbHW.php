<?php

use Exceptions\DBException;

class DbHW
{
    protected $dbh;

    /**
     * @throws DBException
     */
    public function __construct()
    {
        try {
            $config = Config::getObject();
            $this->dbh = new \PDO(
                'mysql:host=' . $config->getHost() . ';dbname=' . $config->getDbName(),
                $config->getUser(),
                $config->getPassword()
            );
        } catch (\PDOException) {
            throw new DBException('', 'Ошибка подключения к БД');
        }
    }

    /**
     * @param $sql
     * @param $data
     * @param $class
     * @return array|false
     * @throws DBException
     */
    public function query($sql, $data, $class)
    {

        $query = $this->dbh->prepare($sql);
        try {
            $query->execute($data);
        } catch (\PDOException) {
            throw new DBException($sql, 'Запрос не может быть выполнен - ');
        }
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
     * @throws DBException
     */
    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        try {
            return $sth->execute($params);
        } catch (\PDOException) {
            throw new DBException($sql, 'Запрос не может быть выполнен - ');
        }

    }

    /**
     * @return false|string
     */
    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}
