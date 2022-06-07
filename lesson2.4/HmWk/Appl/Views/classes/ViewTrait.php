<?php

namespace Views\classes;

trait ViewTrait
{
    /**
     * @param $name
     * @return mixed|null
     */
    public function __get($name)
    {
        // ?? - сокращенный тернарный оператор (если левая часть существует то берется она, если нет - то правая)
        return $this->data[$name] ?? null;
    }

    /**
     * @param $name
     * @param $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    // isset ниже должен вернуть true или false, на вопрос: а есть ли такое свойство
    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
}