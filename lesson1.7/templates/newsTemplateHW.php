<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<input type="button" value="Вернуться" onclick="location.href = 'http://lessons/lesson1.7/siteChoiceHW.php'"
<br>
<br>
<body>
<p><b>НОВОСТИ:</b></p>
<?php
if (!empty($this->getData()['news']->getRecords())) {
    for ($i = 0; $i < count($this->getData()['news']->getRecords()); $i++) { ?>
        <b>
            <a href="http://lessons/lesson1.7/siteArticleHW.php?id=<?php echo $i ?>">
                <?php echo $this->getData()['news']->getRecords()[$i]['title']; ?>
            </a></b>
        <br>
        <?php echo mb_substr($this->getData()['news']->getRecords()[$i]['content'], 0, 100) . "..."; ?>
        <hr>
    <?php }
}
?>
<form method="post">
    <p><b>Добавьте новость</b></p>
    Заголовок:<textarea name="title">
    </textarea>
    <br>
    Новость:&nbsp&nbsp&nbsp<textarea name="content">
    </textarea>
    <br>
    <button type="submit">Отправить новость и заголовок новости</button>
</form>
</body>
</html>