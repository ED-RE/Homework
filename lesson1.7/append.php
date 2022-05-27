<?php

require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';

$guestBook = new GuestBook(__DIR__ . '/data7.txt');
$record = new GuestBookRecord($_POST['message']);

$guestBook->append($record);
echo '<pre>';
$guestBook->save();

header('Location: /lesson1.7/index7.1.php');