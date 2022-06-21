<?php
/* @var $this SiteController */
?>
    <h1>Таблица Фреймворков</h1>
<?php
for ($i = 0; $i < count($all); $i++) {
    echo '<b>' . $all[$i]['title'] . '<br>' . '</b>';
    echo $all[$i]['content'] . '<br>';
    echo '<hr>';
}
?>