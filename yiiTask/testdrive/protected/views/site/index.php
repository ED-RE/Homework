<?php
/* @var $this SiteController
 * @var $all
 */
?>
    <h1>Таблица Фреймворков</h1>
<?php
echo '<pre>';
for ($i = 0; $i < count($all); $i++) {
    echo '<b>' . $all[$i]['title'] . '<br>' . '</b>';
    echo $all[$i]['content'] . '<br>';
    echo '<hr>';
}
?>