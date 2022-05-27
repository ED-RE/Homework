<?php

$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
//var_dump($dbh);

$sql = 'SELECT * FROM persons WHERE id=:id';
$sth = $dbh->prepare($sql);
$sth->execute([':id' => $_GET['id']]);
$data = $sth->fetchAll();

echo '<pre>';
var_dump($data);