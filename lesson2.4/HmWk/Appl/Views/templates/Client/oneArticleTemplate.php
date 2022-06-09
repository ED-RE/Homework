<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Одна новость</title>
</head>
<body>
<b>
    <p>
        <?php
        echo $this->data['oneArticle']->title;
        ?>
    </p>
</b>
<?php
echo $this->data['oneArticle']->content;
echo '<br><br>';
echo $this->data['oneArticle']->getAuthorName();
?>
</body>
</html>