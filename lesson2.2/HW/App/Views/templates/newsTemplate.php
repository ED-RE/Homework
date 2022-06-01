<!doctype html>
<p lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Panel</title>
    </head>
    <body>
<h1 align="center" style="color:black">ADMIN PANEL</h1>
<?php
//$this->data ниже - это записанный assing в классе View

for ($i = 0; $i <= count($this->data) - 1; $i++) {
    if (isset($this->data[$i])) {
        ?>
        <style>
            figure {
                float: left; /* Блоки выстраиваются по горизонтали */
                text-align: center; /* Выравнивание по центру */
            }
        </style>
        <b>
            <a href="http://homework/lesson2.2/HW/App/Views/templates/oneArticleTemplate.php?id=<?= $this->data[$i]->id ?>">
                <?php echo $this->data[$i]->title ?>
            </a>
        </b>
        <br>
        <?php echo mb_substr($this->data[$i]->content, 0, 100) . "..."; ?>
        <br><br>

        <form action="/lesson2.2/HW/App/Views/templates/correctArticleTemplate.php" method="post">
            <input type="hidden" name="id" value="<?= $this->data[$i]->id ?>">
            <button type="submit">Редактировать</button>
        </form>

        <br>

        <form action="/lesson2.2/HW/site.php" method="post">
            <input type="hidden" name="id" value="<?= $this->data[$i]->id ?>">
            <input type="hidden" name="delete" value="<?= 'tagDelete' ?>">
            <button type="submit">Delete</button>
        </form>

        <hr>
        <?php
    }
}
?>
<br><br><br>
<form action="/lesson2.2/HW/App/Views/templates/correctArticleTemplate.php" method="post">
    <input type="hidden" name="id" value="<?= $_POST['id'] = null ?>">
    <button type="submit">Добавить новую запись</button>
    <br>
</form>
</body>
</html>