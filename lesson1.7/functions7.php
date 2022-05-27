<?php

require_once __DIR__ . '/classes/GuestBookRecord.php';

function getGuestBookRecords()
{
    $lines = file(__DIR__ . '/data7.txt', FILE_IGNORE_NEW_LINES);
    $ret = [];
    foreach ($lines as $line) {
        $ret[] = new GuestBookRecord($line);
    }
    return $ret;
}