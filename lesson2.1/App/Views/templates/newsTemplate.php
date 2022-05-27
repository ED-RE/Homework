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

for ($i = 0; $i <= count($data2) - 1; $i++) {
    if (isset($data2[$i])) {
        ?>
        <b>
                        <a href="http://lessons/lesson2.1/App/Views/templates/articleTemplate.php?id=
            <?php echo $data2[$i]->id ?>">
            <?php echo $data2[$i]->title ?>
                        </a>
        </b>
        <br>
        <?php echo mb_substr($data2[$i]->content, 0, 100) . "..."; ?>
        <br><br>
        <hr>
        <?php
    }
}
?>
</body>
</html>