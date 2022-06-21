<?php

class SiteController extends CController
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function getFrameworks()
    {
        return Frameworks::model()->findAll();
    }

}
