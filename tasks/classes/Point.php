<?php

class Point
{
    protected $xPoint;
    protected $yPoint;

    public function __construct(int|float $xPoint, int|float $yPoint)
    {
        if ($xPoint > 0 && $yPoint > 0) {
            $this->xPoint = $xPoint;
            $this->yPoint = $yPoint;
        } else {
            throw new Exception('Неверное значение, введите больше 0');
        }
    }

    public function getXpoint(): int|float
    {
        return $this->xPoint;
    }

    public function getYpoint(): int|float
    {
        return $this->yPoint;
    }
}
