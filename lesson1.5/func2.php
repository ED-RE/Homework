<?php

function getUsersList() // возвращвет массив всех пользователей и хэшей их паролей
{
    if (isset($_COOKIE['login']) && (!empty($_COOKIE['login']))) {
        file_put_contents(
            __DIR__ . '/users.txt',
            ">" . $_COOKIE['login'],
            FILE_APPEND
        );
    }
    if (isset($_COOKIE['password']) && (!empty($_COOKIE['password']))) {
        file_put_contents(
            __DIR__ . '/hashPasswords.txt',
            ">" . md5($_COOKIE['password']),
            FILE_APPEND
        );
    }
    return array_combine(array_slice(explode(
        '>',
        file_get_contents(
            __DIR__ . '/users.txt')),
        1), array_slice(explode(
        '>',
        file_get_contents(
            __DIR__ . '/hashPasswords.txt')),
        1));
}

function existsUser($login): bool
{
    if ((array_key_exists($login, getUsersList())) == true) {
        return true;
    }
    return false; // можно без else сразу return, т.к. если выполнится условие if то на первом return выполнение функции прервется
}

function checkPassword($login, $password): bool
{
    if (existsUser($login) && in_array(md5($password), getUsersList())) {
        return true;
    }
    return false; // можно без else сразу return, т.к. если выполнится условие if то на первом return выполнение функции прервется
}

