<?php

class Item7
{
    public $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function show()
    {
        return ' и я стою ' . $this->price . ' рублей.';
    }
}