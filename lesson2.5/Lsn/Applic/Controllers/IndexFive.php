<?php

namespace Appl\Controllers;

use Appl\Models\ArticleFive;

class IndexFive extends ControllerFive
{
    protected function handle()
    {
        $this->view->articles = ArticleFive::findAll();
        echo $this->view->render(__DIR__ . '/../templates/indexFour.php');
    }
}
