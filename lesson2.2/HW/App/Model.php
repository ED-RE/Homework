<?php


abstract class Model
{
    public const TABLE = '';
    public $id;

    public static function findAll()
    {
        $db = new DbHW();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

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
            $sqlID = 'SELECT * FROM ' . static::TABLE . ' WHERE `id` = :id';
            return $db->query($sqlID, [':id' => $id], static::class);
        } else {
//            return null;
            return false;
        }
    }

    public function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];
        $dataValues = [];

        foreach ($fields as $name => $value) {
            if ('id' == $name) {
                continue;
            }
            $cols[] = $name;
            $dataValues[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $cols) . ')
        VALUES 
        (' . implode(',', array_keys($dataValues)) . ')
        ';

        $db = new DbHW();
        $db->execute($sql, $dataValues);
        $this->id = $db->getLastId();
    }

    public function update()
    {
        $fields = get_object_vars($this);
        $cols = [];
        $dataValues = [];

        foreach ($fields as $name => $value) {
            if ('id' == $name) {
                continue;
            }
            $cols[] = $name . '=:' . $name;
            $dataValues[':' . $name] = $value;
        }
        $sql = 'UPDATE ' . static::TABLE . '
        SET ' . implode(', ', $cols) . '
        WHERE id=' . $_POST['id'];

        $db = new DbHW();
        $db->execute($sql, $dataValues);
    }

    public function delete()
    {
        $db = new DbHW();
        $sqlDelete = 'DELETE FROM ' . static::TABLE . ' WHERE id=' . $_POST['id'];
        $db->execute($sqlDelete);
    }

}
