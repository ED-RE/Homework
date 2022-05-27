<?php

class UserPasswordHW
{

    public function saveNewUser()
    {
        if (isset($_POST['login']) && (!empty($_POST['login']))
            && isset($_POST['password']) && (!empty($_POST['password']))) {
            if (file_put_contents(
                    __DIR__ . '/../users.txt',
                    ">" . $_POST['login'],
                    FILE_APPEND) === false) {
                throw new Exception('Ошибка записи в файл');
            }
            file_put_contents(
                __DIR__ . '/../users.txt',
                ">" . $_POST['login'],
                FILE_APPEND
            );
            if (file_put_contents(
                    __DIR__ . '/../hashPasswords.txt',
                    ">" . md5($_POST['password']),
                    FILE_APPEND) === false) {
                throw new Exception('Ошибка записи в файл');
            }
            file_put_contents(
                __DIR__ . '/../hashPasswords.txt',
                ">" . md5($_POST['password']),
                FILE_APPEND
            );
        }
    }

    public function getUsersList(): array
    {
        return array_combine(array_slice(explode(
            '>',
            file_get_contents(
                __DIR__ . '/../users.txt')),
            1), array_slice(explode(
            '>',
            file_get_contents(
                __DIR__ . '/../hashPasswords.txt')),
            1));
    }

    public function checkUser($login): bool
    {
        if (array_key_exists($login, $this->getUsersList())) {
            return true;
        }
        return false;
    }

    public function checkPassword($login, $password): bool
    {
        if (($this->getUsersList()[$login]) == md5($password)) {
            return true;
        }
        return false;
    }

    public function getCurrentUser()
    {
        if (isset($_COOKIE['login']) && (!empty($_COOKIE['login']))) {
            return $_COOKIE['login'];
        } else {
            return null;
        }
    }
}