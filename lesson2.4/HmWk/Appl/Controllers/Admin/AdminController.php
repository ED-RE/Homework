<?php

namespace Controllers\Admin;

use Controllers\BaseAdminController;
use Models\AdminDataTable;
use Models\Article;
use Models\Author;
use SebastianBergmann\Timer\ResourceUsageFormatter;
use SebastianBergmann\Timer\Timer;

class AdminController extends BaseAdminController
{
    public function showAll()
    {
        foreach (Article::findAll() as $key => $article) {
            $this->view->$key = $article;
        }
        $this->view->assign('timer', new Timer());
        $this->view->assign('resourceUsageFormatter', new ResourceUsageFormatter());
        $this->view->display('Admin/newsTemplate.php');
    }

    public function showALLSecond()
    {
        $article = new Article();
        $functions = [
            'title' => function (Article $article) {
                return $article->title;
            },
            'trimmedText' => function (Article $article) {
                return mb_strimwidth($article->content, 0, 100);
            }
        ];
        $adminDataTable = new AdminDataTable(Article::findAll(), $functions);
        $this->view->assign('AllValues', $adminDataTable->render());
        foreach ($functions as $key => $value) {
            $this->view->assign($key, $key);
        }
        $this->view->display('Admin/adminDataTable.php');
    }

    public function get3LastNews()
    {
        foreach (Article::get3LastArticle() as $key => $article) {
            $this->view->$key = $article;
        }
        $this->view->assign('timer', new Timer());
        $this->view->assign('resourceUsageFormatter', new ResourceUsageFormatter());
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
            $this->update();
            //было раньше self::update(); - так делать нельзя!!!!!!
        }
        if (empty($_POST['id'])) {
            $this->insert();
            ////было раньше self::insert(); - так делать нельзя!!!!
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
