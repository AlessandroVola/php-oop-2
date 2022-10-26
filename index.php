<?php

    require_once __DIR__ . '/Products.php';
    require_once __DIR__ . '/User.php';
    
    $palla = new Product('Pallina', 13, 'Cane');

    print_r($palla);


    $snackCane = new Food('Snack per Cani', 30, 'Cane', 'Bocconcini', '20 bocconcini');

    print_r($snackCane);


    $luca = new User('Luca','Tedioli','25', true);

    print_r($luca);
?>
