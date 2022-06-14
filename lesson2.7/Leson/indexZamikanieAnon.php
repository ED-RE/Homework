<?php
// ЗАМЫКАНИЕ И АНОНИМНАЯ ФУНКЦИЯ

// функция, которая приветствует пользователя нашего сайта
// анонимная функция

$translate = [
    'hello' => 'Привет',
];

$hello = function ($name) use ($translate) {
    return $translate['hello'] . ', ' . $name;
};

function ctrl($name, $func)
{
    return $func($name);
}

// даже если мы переопределим здесь $translate, то всё равно в вызове $hello ниже
// переменная $translate останется такой же, как и на 10 строчке (ну на 6 строчке)
// т.е. функция запомнит в себе этот $translate, что был на момент создания и пронесет его везде

echo ctrl('Vasya', $hello);