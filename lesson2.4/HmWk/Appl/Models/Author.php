<?php

namespace Models;

use DbHW;

class Author extends \Model
{
    public const TABLE = 'authors';

    public $author;

    /**
     * @param $id
     * @return array|false
     */
    public static function findById($id)
    {
        $db = new DbHW();
        $sqlGetID = 'SELECT id FROM ' . static::TABLE . ' ORDER BY `id`';
        $resultID = $db->query($sqlGetID, [], static::class);
        $isId = false;
        for ($i = 0; $i < count($resultID); $i++) {
            if ((int)$resultID[$i]->id == $id) {
                $isId = true;
            }
        }
        if ($isId) {
            $sqlID = 'SELECT author FROM ' . static::TABLE . ' WHERE `id` = :id';
            return $db->query($sqlID, [':id' => $id], static::class);
        } else {
//            return null;
            return false;
        }
    }

}
