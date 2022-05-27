<?php
require_once __DIR__ . '/Item7.php';

class Table7 extends Item7
{
    public $legs;

    public function show()
    {
        return 'Я - стол о ' . $this->legs . ' ножках'
            . parent::show();
    }

}