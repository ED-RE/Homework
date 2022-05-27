<?php

require_once __DIR__ . '/classes/ViewHW.php';
require_once __DIR__ . '/classes/UserPasswordHW.php';

$choicePage = new ViewHW();
$choicePage->assign('user', new UserPasswordHW());
echo $choicePage->render('choiceTemplateHW.php');