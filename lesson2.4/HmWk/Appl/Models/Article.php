<?php

namespace Models;

use DbHW;
use Model;


class Article extends Model
{
    public const TABLE = 'newsss';

    public $title;
    public $content;
    public $authorID;

    public static function last3Article()
    {
        $db = new DbHW();
        $sqlGet3ID = 'SELECT * FROM ' . static::TABLE . ' ORDER BY `id` DESC LIMIT 3';
        return $db->query($sqlGet3ID, [], static::class);
    }


    public function getAuthor()
    {
        if (!empty($this->authorID)) {
            $db = new DbHW();
            $sql = 'SELECT * FROM ' . Author::TABLE . ' WHERE `id` = :id';
            return $db->query($sql, [':id' => $this->authorID], Author::class);
        }
        return null;
    }

}
