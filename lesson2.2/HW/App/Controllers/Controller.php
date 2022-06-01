<?php

namespace Controllers;

use Views\classes\View;
use Models\Article;

class Controller
{
    public function getAll()
    {
        $view = new View();
        foreach (Article::findAll() as $key => $article) {
            $view->assign($key, $article);
        }
        $view->display('newsTemplate.php');
    }

    public function get3LastNews()
    {
        $view = new View();
        foreach (Article::last3Article() as $key => $article) {
            $view->assign($key, $article);
        }
        $view->display('newsTemplate.php');
    }

    public function insert()
    {
        $article = new Article();
        if (isset($_POST['title']) && isset($_POST['content'])
            && !empty($_POST['title']) && !empty($_POST['content'])) {
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->insert();
        }
    }

    public function update()
    {
        $article = new Article();
        if (isset($_POST['title']) && isset($_POST['content'])
            && !empty($_POST['title']) && !empty($_POST['content'])) {
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->update();
        }
    }

    public function save()
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            self::update();
        }
        if (empty($_POST['id'])) {
            self::insert();
        }
    }

    public function delete()
    {
        $article = new Article();
        if (isset($_POST['id']) && !empty($_POST['id']) && $_POST['delete'] == 'tagDelete') {
            $article->delete();
        }
    }
}
