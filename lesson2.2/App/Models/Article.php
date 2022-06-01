<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'newsss';

    public $title;
    public $content;

    public static function last3Article()
    {
        $db = new Db();
        $sqlGetID = 'SELECT id FROM ' . static ::TABLE . ' ORDER BY `id`';
        $resultID = $db->query($sqlGetID, [], static::class);
        $idLast1 = $resultID[count($resultID) - 1]->id;
        $idLast2 = $resultID[count($resultID) - 1]->id - 1;
        $idLast3 = $resultID[count($resultID) - 1]->id - 2;
        $sqlID = 'SELECT * FROM ' . static::TABLE . " WHERE `id` IN ('$idLast3', '$idLast2', '$idLast1')";
        return $db->query($sqlID, [], static::class);
    }
}
