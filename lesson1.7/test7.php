<?php
require __DIR__ . '/classes/User.php';
require __DIR__ . '/functions7.php';

function sendMessage(User $user, string $message)
{
    echo $user->email . ' --> ' . $message;
}

$user = new User();
$user->email = 'test@test . ru';

sendMessage($user, 'Hello!');