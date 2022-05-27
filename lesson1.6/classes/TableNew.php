<?php

require_once __DIR__ . '/Item.php';

class TableNew extends Item
{
    public $legs;

    public function show()
    {
        return 'Я - стол о ' . $this->legs . ' ножках'
            . parent::show();
    }
}
