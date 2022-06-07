<?php

namespace Ap;

class ViewFour implements \Countable, \ArrayAccess
{
    protected $data = [];

    public function __get($name)
    {
        // ?? - сокращенный тернарный оператор (если левая часть существует то берется она, если нет - то правая)
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    // isset ниже должен вернуть true или false, на вопрос: а есть ли такое свойство
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function count()
    {
        return count($this->data);
    }

    public function offsetExists(mixed $offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet(mixed $offset)
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value)
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset(mixed $offset)
    {
        unset($this->data[$offset]);
    }
}
