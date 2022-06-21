<?php

class Frameworks extends CActiveRecord
{
    protected $id;
    protected $title;
    protected $content;


    public static function model($classname = __CLASS__)
    {
        return parent::model($classname);
    }
}
