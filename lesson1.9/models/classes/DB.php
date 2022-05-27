<?php

namespace models\classes;

use PDO; //импортирование глобального класса
// или можно было на 18 строчке перед PDO поставить \ (\PDO), где \ - обозначает корневое пространство имён.
// это будет значит что данный класс не входит ни в какой namespace, а ищется в корневом пространстве имён

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