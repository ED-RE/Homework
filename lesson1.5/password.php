Алгоритм для хранения паролей и проверке паролей
<?php

$password = '123456';
echo password_hash($password, PASSWORD_DEFAULT);

$db = '$2y$10$DuaFeeIBKV9s0mYlszhytuJheKY.UditD92glO3rTZVQBn6OjNZS.';

var_dump(password_verify($password,$db));
