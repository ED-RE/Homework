<?php

class DB
{
    private PDO $dbh;

    public function __construct($path)
    {
        if (file(__DIR__ . $path) === false) {
            throw new Exception('Ошибка в чтении файла');
        }
        $arr = file(__DIR__ . $path, FILE_IGNORE_NEW_LINES);
        $this->dbh = new PDO ($arr[0], $arr[1], $arr[2]);
    }

    public function execute(string $sql): bool
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }

    public function query(string $sql, array $data = null): array|false
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)) {
            return $sth->fetchAll();
        } else {
            return false;
        }
    }
}