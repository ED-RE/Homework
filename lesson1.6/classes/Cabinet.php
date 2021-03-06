<?php

require_once __DIR__ . '/Item.php';

class Cabinet extends Item
{
    public $doors;

    public function __construct($price, $doors)
    {
        $this->doors = $doors;
        parent::__construct($price);
    }

    public function show()
    {
        return 'Я - шкаф о ' . $this->doors . ' дверях'
            . parent::show();
    }
}