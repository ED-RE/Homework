<?php


abstract class Model
{
    public const TABLE = '';
    public $id;

    /**
     * @return array|false
     */
    public static function findAll()
    {
        $db = new DbHW();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new DbHW();
        $sqlID = 'SELECT * FROM ' . static::TABLE . ' WHERE `id` = :id';
        if ($db->query($sqlID, [':id' => $id], static::class) !== false) {
            $arrObjById = $db->query($sqlID, [':id' => $id], static::class);
        } else {
            throw new \Exception('Нет ничего по указанному id=' . $id);
        }
        if (array_key_exists(0, $arrObjById)) {
            return $arrObjById[0];
        }
    }

    /**
     * @return void
     */
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

    /**
     * @return void
     */
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

    /**
     * @return void
     */
    public function delete()
    {
        $db = new DbHW();
        $sqlDelete = 'DELETE FROM ' . static::TABLE . ' WHERE id=' . $_POST['id'];
        $db->execute($sqlDelete);
    }
}
