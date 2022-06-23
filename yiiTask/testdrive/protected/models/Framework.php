<?php

/**
 * @property int $id
 * @property string $title
 * @property string $content
 */
class Framework extends CActiveRecord
{

    /**
     * Для того чтобы validate() работал, объявляем правила проверки атрибутов.
     * Атрибуты представляют бизнес-данные и могут быть доступны как обычные свойства объекта или элементы массива.
     * Атрибут - это свойство, которое используется в основном для хранения данных, вводимых пользователем, или
     * данных, получаемых из базы данных.
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['id', 'numerical', 'integerOnly' => true],
            ['title', 'required'],
            ['title', 'type', 'type' => 'string'],
            ['title', 'length', 'min' => 2, 'max' => 100],
            ['content', 'type', 'type' => 'string']
        ];
    }

    /**
     * Переопределил, чтобы принудительно возвращать Framework
     *
     * @param $className
     * @return Framework
     */
    public static function model($className = __CLASS__): Framework
    {
        return parent::model($className);
    }

    /**
     * @return string
     */
    public function tableName()
    {
        return 'frameworks_new';
    }

}