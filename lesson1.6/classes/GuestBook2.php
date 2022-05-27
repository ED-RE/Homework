<?php

class GuestBook
{

    protected $data;
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;

        $file = file($this->path);
        if ($file === false) {
            throw new Exception('Не найден файл');
        }
        $this->data = $file;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function append($text): void
    {
        $this->data[] = $text;
    }

    public function save()
    {
        $file = file($this->path);
        $newData = array_diff($this->data, $file);
        foreach ($newData as $newItem) {
            file_put_contents($this->path, $newItem, FILE_APPEND);
        }
    }
}

