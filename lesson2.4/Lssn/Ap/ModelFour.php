<?php

namespace Ap;

use Ap\Models\DbFour;

abstract class ModelFour
{
    public const TABLE = '';
    public $id;

    public static function findAll()
    {
        $db = new DbFour();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new DbFour();
        $sqlGetID = 'SELECT id FROM ' . static::TABLE . ' ORDER BY `id`';
        $resultID = $db->query($sqlGetID, [], static::class);
        $isId = false;
        for ($i = 0; $i < count($resultID); $i++) {
            if ((int)$resultID[$i]->id == $id) {
                $isId = true;
            }
        }
        if ($isId) {
            $sqlID = 'SELECT * FROM ' . static::TABLE . ' WHERE `id` = :id';
            return $db->query($sqlID, [':id' => $id], static::class);
        } else {
            return false;
        }
    }

    public static function findById2($id)
    {
        $db = new DbFour();

        $sql = 'SELECT * FROM ' .static::TABLE . ' WHERE `id` = :id';
        $data = $db->query(
            $sql,
            [':id' => $id],
            static::class
        );
        return $data ? $data[0] : null;

    }

    public function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];
        $data = [];

        foreach ($fields as $name => $value) {
            if ('id' == $name) {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $cols) . ')
        VALUES 
        (' . implode(',', array_keys($data)) . ')
        ';

        $db = new DbFour();
        $db->execute($sql, $data);
        $this->id = $db->getLastId();
    }

}
