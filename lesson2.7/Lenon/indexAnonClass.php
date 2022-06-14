<?php

interface Logger
{
    public function log($message): void;
}

class App
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething(string $x)
    {
        //...
        $this->logger->log($x);
    }
}

//допустим нам надо проверить работу
// создадим для теста класс
// проблема в том, что мы так замусорили память новым классом
class FakeLogger implements Logger
{
    public function log($message): void
    {
        echo $message;
    }
}

$app = new App(new FakeLogger());
$app->doSomething('foo');

// можно сделать проще - через анонимный класс:
// анонимный класс - это класс, который создается на один раз, для того чтобы сделать какой-то объект
// и больше не используется

$app = new App(new class implements Logger {
    public function log($message): void
    {
        echo $message;
    }
});

$app->doSomething('foo');

