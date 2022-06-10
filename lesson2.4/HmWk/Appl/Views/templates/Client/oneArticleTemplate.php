<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Одна новость</title>
</head>
<style>
    footer {
        padding: 10px 20px;
        background: blanchedalmond;
        color: black;
        display: block;
        position: absolute;
        bottom: 0px;
    }

    a {
        color: #008EB0;
    }
</style>
<body>
<b>
    <p>
        <?php
        echo $this->data['oneArticle']->title;
        ?>
    </p>
</b>
<?php
echo $this->data['oneArticle']->content;
echo '<br><br>';
echo $this->data['oneArticle']->getAuthorName();
?>
<footer>
    <?php
    $this->data['timer']->start();
    foreach (range(0, 100000) as $i) {
//    echo $i . '<br>';
    }
    print $this->data['resourceUsageFormatter']->resourceUsage($this->data['timer']->stop());
    ?>
</footer>
</body>
</html>