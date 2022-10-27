<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . '/Products.php';
    require_once __DIR__ . '/User.php';
    
    $palla = new Product('Pallina', 13, 'Cane');

    print_r($palla);


    $snackCane = new Food('Snack per Cani', 30, 'Cane', 'Bocconcini', '20 bocconcini');

    print_r($snackCane);


    $luca = new User('lucaTedioli@gmail.com' );

    print_r($luca);
?>
