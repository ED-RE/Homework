<?php

class AdminController extends Controller
{
    /**
     * может быть allow/deny
     * ? -любой пользователь
     * @ -аутентифицированный пользователь
     * * -любой пользователь, включая анонимного
     */
    public function accessRules()
    {
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
     * @return void
     */
    public function actionIndex()
    {
        $this->render('index', ['allRecords' => Framework::model()->findAll()]);
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
            if (Framework::model()->findByPk($_POST['id']) === null) {
                throw new Exception('Такой записи нет');
            } else {
                $frameworkForDelete = Framework::model()->findByPk($_POST['id']);
                $frameworkForDelete->delete();
            }
        }
        $this->render('index', ['allRecords' => Framework::model()->findAll()]);
    }

    /**
     * @return void
     * @throws Exception
     */
    public function actionSave()
    {
        $frameworkForSave = new Framework();
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $frameworkForSave = Framework::model()->findByPk($_POST['id']) ?? new Framework();
        }
        if (isset($_POST['title']) && !empty($_POST['title'])) {
            $frameworkForSave->setTitle($_POST['title']);
            $frameworkForSave->setContent($_POST['content']);
            if (!($frameworkForSave->save())) {
                throw new Exception('Ошибка сохранения');
            }
        }

        $this->render('index', ['allRecords' => Framework::model()->findAll()]);
    }

}
