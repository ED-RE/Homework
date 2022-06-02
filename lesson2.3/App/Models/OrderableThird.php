<?php
namespace App\Models;

interface OrderableThird extends HasPrice, HasWeight
{
    public function getTitle();
}