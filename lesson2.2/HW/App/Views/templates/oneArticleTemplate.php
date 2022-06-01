<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
<b>
    <p>
        <?php
        require __DIR__ . '/../../autoload.php';
        spl_autoload_register('autoloader');

        $dataID = \Models\Article::findById($_GET['id']);
        echo $dataID[0]->title;
        ?>
</b>
</p>
<?php
echo $dataID[0]->content;
?>
</body>
</html>