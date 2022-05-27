<?php

namespace App;

abstract class Model
{
    public const TABLE = '';
    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $sqlGetID = 'SELECT id FROM ' . static ::TABLE . ' ORDER BY `id`';
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
}
