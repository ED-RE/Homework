<?php

namespace Controllers;

use Views\classes\View;

class BaseAdminController
{
    protected $view;

    public function __construct()
    {
        //начало внедрения зависимостей
        $this->view = new View();
    }

    //есть ли у текущего пользователя право доступа к этому контроллеру
    protected function access(): bool
    {
        return true;
    }

    public function action($action)
    {
        if ($this->access() === false) {
            die('Доступ закрыт');
        } else {
            $this->$action();
        }
    }
}
