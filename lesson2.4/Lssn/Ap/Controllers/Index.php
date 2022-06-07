<?php

namespace Ap\Controllers;

use Ap\Controller;
use Ap\Models\ArticleFour;
use Ap\ViewFour;

class Index extends Controller
{
    protected function handle()
    {
        $this->view->articles = ArticleFour::findAll();
        echo $this->view->render(__DIR__ . '/../templates/indexFour.php');
    }
}
