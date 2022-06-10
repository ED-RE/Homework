<!doctype html>
<p lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ВСЕ НОВОСТИ</title>
    </head>
    <style>
        footer{
            padding: 10px 20px;
            background: blanchedalmond;
            color: black;
            display:block;
            position:absolute;
            bottom:0px;
        }
        a {
            color: #008EB0;
        }
    </style>
    <body>
<h1 align="center" style="color:black">НОВОСТИ</h1>
<h4 align="center" style="color:black">
    <a href="http://homework/lesson2.4/HmWk/siteAdmin.php">FOR ADMIN</a>
</h4>
<?php
//$this->data ниже - это записанный assing в классе View

for ($i = 0; $i <= count($this->data) - 1; $i++) :
    if (isset($this->data[$i])) :
        ?>
        <b>
            <a href="http://homework/lesson2.4/HmWk/siteClient.php?ctrl=ClientController&act=<?php echo 'showOnlyOne' ?>&id=<?php echo $this->data[$i]->id ?>">
                <?php echo $this->data[$i]->title ?>
            </a>
        </b>
        <br>
        <?php echo mb_substr($this->data[$i]->content, 0, 100) . "..."; ?>
        <br><br>
        <?php
        echo $this->data[$i]->getAuthorName();
        ?>
        <br>
        <hr>
    <?php
    endif;
endfor;
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