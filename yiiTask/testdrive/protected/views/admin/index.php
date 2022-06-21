<?php
/* @var $this AdminController */
?>
    <h1>Таблица Фреймворков (admin mode)</h1>
    <form action="http://homework/yiiTask/testdrive/index.php?r=admin/correct"
          method="post">
        <input type="hidden" name="action" value="<?= 'save' ?>">
        <button type="submit">Добавить новую запись</button>
        <br><br>
        <hr>
    </form>
<?php
for ($i = 0; $i < count($all); $i++) {
    echo '<b>' . $all[$i]['title'] . '<br>' . '</b>';
    echo $all[$i]['content'] . '<br>';
    ?>
    <form action="http://homework/yiiTask/testdrive/index.php?r=admin/correct"
              method="post">
            <input type="hidden" name="id" value="<?= $all[$i]['id'] ?>">
            <input type="hidden" name="action" value="<?= 'save' ?>">
            <button type="submit">Редактировать</button>
        </form>
        <br>
        <form action="http://homework/yiiTask/testdrive/index.php?r=admin/delete"
              method="post">
            <input type="hidden" name="id" value="<?= $all[$i]['id'] ?>">
            <input type="hidden" name="action" value="<?= 'delete' ?>">
            <button type="submit">Delete</button>
        </form>
       <br><hr>
<?php
}
?>