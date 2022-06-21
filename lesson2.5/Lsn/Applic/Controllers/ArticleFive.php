<?php

namespace Appl\Controllers;

//use Appl\Models\ArticleFive;

class ArticleFive extends ControllerFive
{
    protected function handle()
    {
        $this->view->article = ArticleFive::findById2($_GET['id']);
        echo $this->view->render(__DIR__ . '/../templates/articleFive.php');
    }
}
