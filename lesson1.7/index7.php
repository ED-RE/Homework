<?php

require __DIR__ . '/classes/Table7.php';

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index7</title>
</head>
<body>
<?php
echo '<pre>';
$table = new Table7(100);
$table->legs = 4;

echo $table->show();
echo "<br>" . get_class($table); // возвращает строку - имя класса объекта

if ($table instanceof Table7) { // если это экземпляр класса Table7
    echo "<br>" . 'Да, это дейстивтельно стол!';
}

if ($table instanceof Item7) { // тоже является экзмепляром класса Item7 (родительского класса)
    echo "<br>" . 'Да, это действительно стол, хоть класс и родительский.';
}


?>
</body>
</html>
