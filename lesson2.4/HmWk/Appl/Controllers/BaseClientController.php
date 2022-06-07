<?php

namespace Controllers;

use Views\classes\View;

class BaseClientController
{
    protected $view;

    public function __construct()
    {
        //начало внедрения зависимостей
        $this->view = new View();
    }

    public function action($action)
    {
        $this->$action();
    }
}
