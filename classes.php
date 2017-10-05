<?php

require_once 'core.php';

// Car
$ford = new Car('Ford', 600000, 'green', 15000);
$mersedes = new Car('Mersedes', 1000000, 'black', 20000);


// TV
$androidTV = new TV('Sony', 100000, 2, 1.3);
$KVN49 = new TV('KVN-49', 20000, 0.3, 0.2);
$KVN49->isHasOS = false;


// Pen
$pen1 = new Pen();
$pen1->color = 'red';
$pen1->inkColor = 'blue';
$pen1->priceInRubles = 20;
$pen2 = new Pen();
$pen2->color = 'blue';
$pen2->inkColor = 'dark-blue';
$pen2->priceInRubles = 80;


// Duck
$duck = new Duck('1', 'grey', 'male');
$duckPet = new Duck('2', 'white', 'female');
$duckPet->setIsPetValue(true);

// Product
$barOfChocolate = new Product('Аленка', 100);
$notebook = new Product('Asus', 65000);
$notebook->getPrice();

?>
