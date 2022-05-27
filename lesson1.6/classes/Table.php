<?php

class Table
{
    public $color;
    public $legs;
    protected $price;

    public function setPrice($price)
    {
        if ($price <= 0) {
            echo 'ERROR';
            die;
        }
        $this->price = $price;
    }

    public function show()
    {
        return 'Я - есть стол. И я стою ' . $this->price;
    }
}