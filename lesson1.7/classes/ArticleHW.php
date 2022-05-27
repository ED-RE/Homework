<?php

class ArticleHW
{
    private string $title;
    private string $content;

    public function setTitle($title): string
    {
        return $this->title = $title;
    }

    public function setContent($content): string
    {
        return $this->content = $content;
    }


    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
