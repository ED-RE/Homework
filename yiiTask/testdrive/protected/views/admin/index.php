<?php
/* @var $this AdminController
 * @var $allRecords
 */
?>
    <h1>Таблица Фреймворков (admin mode)</h1>
    <a href="<?= Yii::app()->createUrl('admin/correct')?>">Добавить новую запись</a>
    <br><hr>
<?php
foreach ($allRecords as $record) {
    echo '<b>' . $record->getTitle() . '<br>' . '</b>';
    echo $record->getContent() . '<br>';
    ?>
    <form action="http://homework/yiiTask/testdrive/index.php?r=admin/correct" method="post">
        <input type="hidden" name="id" value="<?= $record->getId() ?>">
        <button type="submit">Редактировать</button>
    </form>
    <br>
    <form action="http://homework/yiiTask/testdrive/index.php?r=admin/delete" method="post">
        <input type="hidden" name="id" value="<?= $record->getId() ?>">
        <button type="submit">Delete</button>
    </form>
    <br>
    <hr>
    <?php
}
?>