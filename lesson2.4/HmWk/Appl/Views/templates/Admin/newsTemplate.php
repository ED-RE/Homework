<?php
/**
 * @var \Views\classes\View $this
 */
?>
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
<form action="http://homework/lesson2.4/HmWk/siteAdmin.php?ctrl=AdminController&act=<?php echo 'showCorrectArticle' ?>"
      method="post">
    <button class="green" type="submit">Добавить новую запись</button>
    <br><br>
    <hr>
</form>
<?php
//$this->data ниже - это записанный assing в классе View

for ($i = 0; $i <= count($this->data) - 1; $i++) :
    if (isset($this->data[$i])) :
        ?>
        <style>
            figure {
                float: left; /* Блоки выстраиваются по горизонтали */
                text-align: center; /* Выравнивание по центру */
            }

            button {
                background: #008EB0; /* Синий цвет фона */
                color: #fff; /* Белый цвет текста */
                border: none; /* Убираем рамку */
                padding: 1rem 1.5rem; /* Поля вокруг текста */
                margin-bottom: 1rem; /* Отступ снизу */
            }

            .green {
                background: #73A353;
            }

            .red {
                background: #C1172C;
            }

            .orange {
                background: #F7941E;
            }
        </style>
        <b>
            <?php echo $this->data[$i]->title ?>
        </b>
        <br>
        <?php echo mb_substr($this->data[$i]->content, 0, 100) . "..."; ?>
        <br><br>
        <?php
        echo $this->data[$i]->getAuthorName();
        ?>
        <br><br>

        <form action="http://homework/lesson2.4/HmWk/siteAdmin.php?ctrl=AdminController&act=<?php echo 'showCorrectArticle' ?>"
              method="post">
            <input type="hidden" name="id" value="<?= $this->data[$i]->id ?>">
            <input type="hidden" name="authorID" value="<?= $this->data[$i]->authorID ?>">
            <button class="orange" type="submit">Редактировать</button>
        </form>
        <br>
        <form action="http://homework/lesson2.4/HmWk/siteAdmin.php?ctrl=AdminController&act=<?php echo 'delete' ?>"
              method="post">
            <input type="hidden" name="id" value="<?= $this->data[$i]->id ?>">
            <input type="hidden" name="authorID" value="<?= $this->data[$i]->authorID ?>">
            <input type="hidden" name="delete" value="<?= 'tagDelete' ?>">
            <button class="red" type="submit">Delete</button>
        </form>
        <hr>
    <?php
    endif;
endfor;
?>
</body>
</html>