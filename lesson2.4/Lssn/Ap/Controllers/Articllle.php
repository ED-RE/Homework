<?php

namespace Ap\Controllers;

use Ap\Controller;
use Ap\Models\ArticleFour;
use Ap\ViewFour;

class Articllle extends Controller
{
    protected function handle()
    {
        $this->view->article = ArticleFour::findById2($_GET['id']);
        echo $this->view->render(__DIR__ . '/../templates/articleFour.php');
    }
}
