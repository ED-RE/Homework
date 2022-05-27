<?php

include __DIR__ . '/classes/CoordinatePlane.php';
include __DIR__ . '/classes/Point.php';
include __DIR__ . '/classes/Draw.php';

$coordinate = new CoordinatePlane(10, 10,0.3);
$point = new Point(6, 6);

$draw = new Draw($coordinate->getCoordinatePlane1(),
    $coordinate->getCoordinatePlane2(),
    $point->getXpoint(),
    $point->getYpoint(),
    2,
    0.3);



