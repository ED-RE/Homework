<?php

//var_dump($_FILES); // суперглобальный массив

if (isset($_FILES['picture'])) {
    if (0 == $_FILES['picture']['error']) {
        move_uploaded_file($_FILES['picture']['tmp_name'],
        __DIR__ . '/pictures/dota1.jpg');
    }
}