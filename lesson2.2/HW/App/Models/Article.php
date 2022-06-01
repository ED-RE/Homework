<?php

namespace Models;

use DbHW;
use Model;

class Article extends Model
{
    public const TABLE = 'newsss';

    public $title;
    public $content;

    public static function last3Article()
    {
        $db = new DbHW();
        $sqlGetID = 'SELECT id FROM ' . static::TABLE . ' ORDER BY `id`';
        $resultID = $db->query($sqlGetID, [], static::class);
        for ($i = count($resultID) - 1; $i >= count($resultID) - 3; $i--) {
            $last3ID[] = $resultID[$i]->id;
        }
        $sqlID = 'SELECT * FROM ' . static::TABLE . " WHERE `id` IN ('$last3ID[2]', '$last3ID[1]', '$last3ID[0]')";
        return $db->query($sqlID, [], static::class);
    }
}
