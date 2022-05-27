<?php

class NewsHW
{
    protected $path;
    protected $records;

    public function __construct()
    {
        $this->path = __DIR__ . '/../news.json';
        if (file_get_contents($this->path) === false) {
            throw new Exception('Ошибка чтения файла');
        }
        $this->records = json_decode(file_get_contents($this->path), true);
    }

    public function getRecords()
    {
        return $this->records;
    }

    public function append(ArticleHW $newArticle)
    {
        $this->records[] = ['title' => $newArticle->getTitle(), 'content' => $newArticle->getContent()];
    }

    public function save()
    {
        if (file_put_contents($this->path, json_encode($this->records,JSON_UNESCAPED_UNICODE) === false)) {
            throw new Exception('Ошибка записи файла');
        }
        file_put_contents($this->path, json_encode($this->records,JSON_UNESCAPED_UNICODE));
    }
}