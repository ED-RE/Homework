<?php

class AdminController extends Controller
{
    public function accessRules()
    {
        /**
         * может быть allow/deny
         * ? -любой пользователь
         * @ -аутентифицированный пользователь
         * * -любой пользователь, включая анонимного
         */
        return [
            [
                'allow' => false,
                'actions' => ['index'],
                'roles' => ['?'],
            ],
            [
                'allow' => true,
                'actions' => ['correct', 'delete', 'save'],
                'roles' => ['@'],
            ]
        ];
    }

    /**
     * Забираем "чистые" данные в массив из таблицы frameworks_new
     *
     * @return array
     */
    protected function getAllRecords()
    {
        $arr = [];

        for ($i = 0; $i < count(Framework::model()->findAll()); $i++) {
            $arr[$i]['id'] = Framework::model()->findAll()[$i]->getAttribute('id');
            $arr[$i]['title'] = Framework::model()->findAll()[$i]->getAttribute('title');
            $arr[$i]['content'] = Framework::model()->findAll()[$i]->getAttribute('content');
        }
        return $arr;
    }

    /**
     * @return void
     */
    public function actionIndex()
    {
        $this->render('index', ['all' => $this->getAllRecords()]);
    }

    /**
     * @return void
     */
    public function actionCorrect()
    {
        $this->render('correct');
    }

    /**
     * @return void
     * @throws CDbException
     */
    public function actionDelete()
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $frameworkForDelete = Framework::model()->findByPk($_POST['id']);
        }
        $frameworkForDelete->delete();
        $this->render('index', ['all' => $this->getAllRecords()]);
    }

    /**
     * @return void
     * @throws Exception
     */
    public function actionSave()
    {
        $frameworkForSave = new Framework();
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $frameworkForSave = $frameworkForSave->findByPk($_POST['id']);
        }
        $frameworkForSave->title = $_POST['title'];
        $frameworkForSave->content = $_POST['content'];

        if (!($frameworkForSave->save())) {
            throw new Exception('Сохранение не удалось');
        }
        $this->render('index', ['all' => $this->getAllRecords()]);
    }

}
