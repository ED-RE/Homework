<?php

class AdminController extends Controller
{

    protected function getAllFrameworks()
    {
        $frameworks = new Frameworks();
        $arr = [];
        for ($i = 0; $i < count($frameworks->findAll()); $i++) {
            $arr[$i]['id'] = $frameworks->findAll()[$i]->getAttribute('id');
            $arr[$i]['title'] = $frameworks->findAll()[$i]->getAttribute('title');
            $arr[$i]['content'] = $frameworks->findAll()[$i]->getAttribute('content');
        }
        return $arr;
    }

    public function actionIndex()
    {
        $this->render('index', ['all' => $this->getAllFrameworks()]);
    }

    public function actionCorrect()
    {
        $this->render('correct');
    }

    public function actionDelete()
    {
        $frameworks = new Frameworks();
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $frameworks = $frameworks->findByPk($_POST['id']);
        }
        $frameworks->delete();
        $this->render('index', ['all' => $this->getAllFrameworks()]);
    }

    public function actionSave()
    {
        $frameworks = new Frameworks();
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $frameworks = $frameworks->findByPk($_POST['id']);
        }
        $frameworks->title = $_POST['title'];
        $frameworks->content = $_POST['content'];
        if (!($frameworks->save())) {
            throw new Exception('Сохранение не удалось');
        }
        $this->render('index', ['all' => $this->getAllFrameworks()]);
    }

}
