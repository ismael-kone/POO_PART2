<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$truck = new Truck('black', 3, 'fuel', 100);
var_dump($truck);

$truck->setEnergyLevel(90);
var_dump($truck);

// speed // 

$truck->setCurrentSpeed(0);
echo '<br> Speed of the truck is : ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck->forward();
echo '<br> Speed of the truck is : ' . $truck->getCurrentSpeed() . 'km/h' . '</br>';
echo $truck->brake();
echo '<br> Speed of the truck is : ' . $truck->getCurrentSpeed() . 'km/h' . '</br>';


$car = new Car('blue', 5, 'electric');
//echo $car->forward();
//var_dump(car::ALLOWED_ENERGIES);

$bike = new Bicycle('White', 1, 2);
echo $bike->forward();
var_dump($bike);

// CAPACITY AND CURRENT LOAD // 

$truck->getLoad();
echo '<br> the current load is : ' . $truck->getCurrentLoad() . '<br>';
echo $truck->getLoad();



