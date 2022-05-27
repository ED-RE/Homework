<?php

class Uploader
{
    protected $nameFormImages;

    public function __construct($nameFormImages)
    {
        return $this->nameFormImages = $nameFormImages;
//        $this->file = $_FILES[$nameImages];
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->nameFormImages]) && ($_FILES[$this->nameFormImages]['error'] == 0)) {
            return true;
        } else {
            return false;
        }
//        return $this;
    }

    public function upload()
    {
        if ($this->isUploaded() == true) {
            move_uploaded_file($_FILES[$this->nameFormImages]['tmp_name'],
                __DIR__ . '/../pictures/' . $_FILES[$this->nameFormImages]['name']);
            header('Location: http://lessons/lesson1.6/guestHW.php');
        } else {
            return 'Невозможно загрузить картинку';
        }
        return $this;
    }
}

