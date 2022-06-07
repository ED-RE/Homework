<?php

namespace Controllers\Client;

use Controllers\BaseClientController;
use Models\Article;

class ClientController extends BaseClientController
{
    public function showAll()
    {
        foreach (Article::findAll() as $key => $article) {
            $this->view->$key = $article;
        }
        $this->view->display('Client/newsClientTemplate.php');
    }

    public function showOnlyOne()
    {
        $this->view->assign('oneArticle', Article::findById($_GET['id']));
        $this->view->display('Client/oneArticleTemplate.php');
    }
}
