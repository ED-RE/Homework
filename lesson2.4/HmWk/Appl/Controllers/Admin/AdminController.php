<?php

namespace Controllers\Admin;

use Controllers\BaseAdminController;
use Models\Article;
use Models\Author;

class AdminController extends BaseAdminController
{
    public function showAll()
    {
        foreach (Article::findAll() as $key => $article) {
            $this->view->$key = $article;
        }
        $this->view->display('Admin/newsTemplate.php');
    }

    public function get3LastNews()
    {
        foreach (Article::get3LastArticle() as $key => $article) {
            $this->view->$key = $article;
        }
        $this->view->display('Admin/newsTemplate.php');
    }

    public function showCorrectArticle()
    {
        $this->view->display('Admin/correctArticleTemplate.php');
    }

    public function insert()
    {
        $article = new Article();
        $author = new Author();
        if (isset($_POST['title']) && isset($_POST['content'])
            && !empty($_POST['title']) && !empty($_POST['content'])) {
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $author->author = $_POST['author'];
            $author->insert();
            $article->authorID = $author->id;
            $article->insert();
        }
    }

    public function update()
    {
        $article = new Article();
        $author = new Author();
        if (isset($_POST['title']) && isset($_POST['content'])
            && !empty($_POST['title']) && !empty($_POST['content'])) {
            $article->title = $_POST['title'];
            $article->content = $_POST['content'];
            $article->authorID = $_POST['authorID'];
            $article->update();
            if (isset($article->authorID) && !empty($article->authorID)) {
                $_POST['id'] = $article->authorID;
                $author->author = $_POST['author'];
                $author->update();
            }
            if ($article->authorID === null) {
                $author->id = $article->authorID;
            }
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
        self::showAll();
    }

    public function delete()
    {
        $article = new Article();
        $author = new Author();
        if (isset($_POST['id']) && !empty($_POST['id'])
            && isset($_POST['delete']) && $_POST['delete'] == 'tagDelete') {
            $article->delete();
            $_POST['id'] = $_POST['authorID'];
            $author->delete();
        }
        self::showAll();
    }

}
