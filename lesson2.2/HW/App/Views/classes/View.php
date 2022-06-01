<?php

namespace Views\classes;

class View
{
    private $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function getData()
    {
        return $this->data;
    }

    public function display($template)
    {
        include __DIR__ . '/../templates/' . $template;
    }

    public function render($template)
    {
        ob_start();
        include __DIR__ . '/../templates/' . $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}