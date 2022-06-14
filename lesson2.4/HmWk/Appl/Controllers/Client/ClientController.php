<?php

namespace Controllers\Client;

use Controllers\BaseClientController;
use Models\Article;
use SebastianBergmann\Timer\ResourceUsageFormatter;
use SebastianBergmann\Timer\Timer;

class ClientController extends BaseClientController
{
    public function showAll()
    {
        foreach (Article::findAllGenerate() as $key => $article) {
            $this->view->$key = $article;
        }
        $this->view->assign('timer', new Timer());
        $this->view->assign('resourceUsageFormatter', new ResourceUsageFormatter());
        $this->view->display('Client/newsClientTemplate.php');
    }

    public function showOnlyOne()
    {
        $this->view->assign('timer', new Timer());
        $this->view->assign('resourceUsageFormatter', new ResourceUsageFormatter());
        $this->view->assign('oneArticle', Article::findById($_GET['id']));
        $this->view->display('Client/oneArticleTemplate.php');
    }
}
