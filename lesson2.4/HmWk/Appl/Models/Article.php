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

    public static function get3LastArticle()
    {
        $db = new DbHW();
        $sqlGet3ID = 'SELECT * FROM ' . static::TABLE . ' ORDER BY `id` DESC LIMIT 3';
        return $db->query($sqlGet3ID, [], static::class);
    }

    /**
     * @return mixed|null
     */
    public function getAuthor()
    {
        if (!empty($this->authorID)) {
            $db = new DbHW();
            $sql = 'SELECT * FROM ' . Author::TABLE . ' WHERE `id` = :id';
            $arrObjAuthor = $db->query($sql, [':id' => $this->authorID], Author::class);
            if (array_key_exists(0,$arrObjAuthor)) {
                return $arrObjAuthor[0]->author;
            } else {
                throw new \Exception('Нет Автора');
            }
        }
        return null;
    }

}
