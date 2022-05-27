<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
<p><b>НОВОСТИ:</b></p>
<?php

for ($i = count($this->getData()['allTable']);
     $i >= 0;
     $i--) {
    if (isset($this->getData()['allTable'][$i - 1])) {
        ?>
        <b>
            <a href="http://lessons/lesson1.8/homework/article.php?id=<?php echo $this->getData()['allID'][$i - 1][0] ?>">
                <?php echo $this->getData()['allTable'][$i - 1][0] ?>
            </a>
        </b>
        <br>
        <?php echo mb_substr($this->getData()['allTable'][$i - 1][1], 0, 100) . "..."; ?>
        <br><br>

        <?php echo $this->getData()['allTable'][$i - 1][2] ?>
        <hr>
        <?php
    }
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
    Автор:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea name="author">
    </textarea>
    <br>
    <button type="submit">Отправить новость, заголовок и автора новости</button>
</form>
</body>
</html>