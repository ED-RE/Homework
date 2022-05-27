<?php

class CoordinatePlane
{
    protected $axisX;
    protected $axisY;
    protected $step;

    public function __construct(int $axisX, int $axisY, float $step)
    {
        if ($axisX > 0 && $axisY > 0 && $step > 0) {
            $this->axisX = $axisX;
            $this->axisY = $axisY;
            $this->step = $step;
        } else {
            throw new Exception('Неверное значение, введие больше 0');
        }

    }

    public function getCoordinatePlane1()
    {
        for ($j = 0; $j <= $this->axisY * (1 / $this->step); $j++)
            for ($i = 0; $i <= $this->axisX * (1 / $this->step); $i++) {
                $arrNet[$j][$i] = '&nbsp' . '&nbsp';
            }
        for ($j = 0; $j <= $this->axisX * (1 / $this->step); $j++) {
            $arrNet[count($arrNet) - 1][$j] = $j / (1 / $this->step);
        }
        for ($j = $this->axisY * (1 / $this->step); $j >= 0; $j--) {
            $arrNet[$j][0] = abs(($j - $this->axisY * (1 / $this->step))/(1/$this->step));
        }
        return $arrNet;

//        for ($j = 0; $j <= $this->axisY * 2; $j++)
//            for ($i = 0; $i <= $this->axisX * 2; $i++) {
//                $arrNet[$j][$i] = '&nbsp' . '&nbsp';
//            }
//        for ($j = 0; $j <= $this->axisX * 2; $j++) {
//            $arrNet[count($arrNet) - 1][$j] = $j / 2;
//        }
//        for ($j = $this->axisY * 2; $j >= 0; $j--) {
//            $arrNet[$j][0] = abs($j - $this->axisY * 2) / 2;
//        }
//        return $arrNet;
    }

    public function getCoordinatePlane2()
    {
        for ($j = 0; $j <= $this->axisY * (1 / $this->step); $j++)
            for ($i = 0; $i <= $this->axisX * (1 / $this->step); $i++) {
                $arrNet2[$j][$i] = '&nbsp' . '&nbsp';
            }
        for ($j = 0; $j <= $this->axisX * (1 / $this->step); $j++) {
            $arrNet2[count($arrNet2) - 1][$j] = '&#8226' . '&nbsp';
        }
        for ($j = $this->axisY * (1 / $this->step); $j >= 0; $j--) {
            $arrNet2[$j][0] = '&#8226' . '&nbsp';
        }
        return $arrNet2;

//        for ($j = 0; $j <= $this->axisY * 2; $j++)
//            for ($i = 0; $i <= $this->axisX * 2; $i++) {
//                $arrNet2[$j][$i] = '&nbsp' . '&nbsp';
//            }
//        for ($j = 0; $j <= $this->axisY * 2; $j++) {
//            $arrNet2[count($arrNet2) - 1][$j] = '&#8226' . '&nbsp';
//        }
//        for ($j = $this->axisY * 2; $j >= 0; $j--) {
//            $arrNet2[$j][0] = '&#8226' . '&nbsp';
//        }
//        return $arrNet2;
    }

}
