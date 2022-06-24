<?php
/* @var $this SiteController
 * @var $allRecords
 */
?>
    <h1>Таблица Фреймворков</h1>
<?php
for ($i = 0; $i < count($allRecords); $i++) {
    echo '<b>' . $allRecords[$i]->getTitle() . '<br>' . '</b>';
    echo $allRecords[$i]->getContent() . '<br>';
    echo '<hr>';
}
?>