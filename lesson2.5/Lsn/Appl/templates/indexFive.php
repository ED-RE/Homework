
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-2</title>
</head>
<body>

<h1>Новости</h1>

<?php foreach ($this->articles as $article): ?>
    <h2>
        <a href="/lesson2.5/Lsn/Appl/Controllers/?ctrl=ArticleFive&id="<?php echo $article->id ?> ">
        <?php echo $article->title; ?>
    </h2>
    </a>
    <p><?php echo $article->content; ?></p>
    </article>

    <hr>
<?php endforeach; ?>

</body>
</html>
