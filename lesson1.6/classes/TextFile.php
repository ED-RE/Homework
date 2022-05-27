<?php

class TextFile
{
    protected $data;

    public function getData(): array
    {
        return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text;
        return $this;
    }
}