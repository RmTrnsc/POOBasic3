<?php

require_once '../Controller/Bicycle.php';
require_once '../Controller/Skateboard.php';
require_once '../Controller/Car.php';
require_once '../Controller/Truck.php';

require_once '../Controller/HighWay.php';
require_once '../Controller/MotorWay.php';
require_once '../Controller/PedestrianWay.php';
require_once '../Controller/ResidentialWay.php';


$bicycle = new Bicycle('blue', 1, 10);

$skateboard = new Skateboard('blue', 1, 10);

$car = new Car('green', 4, 130, 'electric');

$truck = new Truck('yellow', 6, 50, 'fuel', 80);

$zoe = new MotorWay();
echo var_dump('AVANT l\'ajout de la voiture', $zoe).'<br>';
$zoe->addVehicles($car);
echo var_dump('APRES l\'ajout de la voiture', $zoe).'<br><br>';


$rockrider = new PedestrianWay();
echo var_dump('AVANT l\'ajout du vélo', $bicycle).'<br>';
$rockrider->addVehicles($bicycle);
echo var_dump('APRES l\'ajout du vélo', $bicycle).'<br><br>';

$tonyHawk = new PedestrianWay();
echo var_dump('AVANT l\'ajout du skateboard', $skateboard).'<br>';
$tonyHawk->addVehicles($skateboard);
echo var_dump('APRES l\'ajout du skateboard', $skateboard).'<br><br>';

$residential = new ResidentialWay();
echo var_dump('AVANT l\'ajout du véhicule', $truck).'<br>';
$residential->addVehicles($truck);
echo var_dump('APRES l\'ajout du véhicule', $truck).'<br>';