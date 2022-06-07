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
        echo $this->data['oneArticle'][0]->title;
        ?>
    </p>
</b>
<?php
echo $this->data['oneArticle'][0]->content;
?>
<br><br>
<?php
if (null === $this->data['oneArticle'][0]->getAuthor()[0]->author) {
    echo 'Без автора';
} else {
    echo $this->data['oneArticle'][0]->getAuthor()[0]->author;
} ?>
</body>
</html>