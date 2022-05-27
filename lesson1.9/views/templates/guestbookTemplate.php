<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GUESTBOOK</title>
</head>
<h2 align="center" style="color:black">GUESTBOOK</h2>
<body>
<?php
for ($i = count($this->getData()['allTable']);
     $i >= 0;
     $i--) {
    if (isset($this->getData()['allTable'][$i - 1])) {
        ?>
        <b>
            <?php echo $this->getData()['allTable'][$i - 1][1]; ?>
        </b>
        <br>
        <br>
        <?php echo $this->getData()['allTable'][$i - 1][2]; ?>
        <br><br>
        <?php echo 'Запись № ' . $this->getData()['allTable'][$i - 1][0]; ?>
        <hr>
        <?php
    }
}
?>
<input type="button" value="На главную" onclick="location.href = 'http://lessons/lesson1.9/controllers/mysite.php'"
<br>
</body>
</html>
<?php
