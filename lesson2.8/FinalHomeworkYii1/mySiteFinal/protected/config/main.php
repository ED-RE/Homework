<?php

//return CMap::mergeArray(
//    require('main.php'),
//    [
//        'name' => 'Frameworks',
//        'components' => [
//            'db' => [
//                'connectionString' => 'mysql:host=localhost;dbname=php2',
//                'emulatePrepare' => true,
//                'user' => 'root',
//                'password' => '',
//                'charset' => 'utf8',
//                'tablePrefix' => 'tbl_',
//            ]]]
//);

return [
    'name' => 'Frameworks',
    'components' => [
        'db' => [
//            'class' => 'CDbConnection',
//            'class' => '\yii\db\Connection',
            'connectionString' => 'mysql:host=localhost;dbname=php2',
//            'dsn' => 'mysql:host=localhost;dbname=php2',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
//            'tablePrefix' => 'tbl_',
        ],]
];

//return ['db' => array(
//    'class' => 'CDbConnection',
//    'driverName' => 'mysql',
//    'connectionString' => 'mysql:host=localhost;dbname=php2',
//    'username' => 'root',
//    'password' => ''
//)];

//return [
//    'db' => [
//        'connectionString' => 'mysql:host=localhost;dbname=php2',
//        'emulatePrepare' => true,
//        'username' => 'root',
//        'password' => '',
//        'charset' => 'utf8',
//        'tablePrefix' => 'tbl_',
//    ]];
