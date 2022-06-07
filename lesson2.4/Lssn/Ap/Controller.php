<?php

namespace Ap;

use views\classes\View;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        //начало внедрения зависимостей
        $this->view = new ViewFour();
    }

    //есть ли у текущего пользователя право доступа к этому контроллеру
    protected function access(): bool
    {
        return true;
    }

    public function __invoke()
    {
        if ($this->access()) {
            $this->handle();
        } else {
            die('Нет доступа');
        }
    }

    abstract protected function handle();
}
