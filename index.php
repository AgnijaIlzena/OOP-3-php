<?php

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Bike.php';
require_once 'Skateboard.php';
require_once 'Car.php';

$tricycle = new Bike('white', 1);
$volvo = new Car('grey', 5);
$skate = new Skateboard('multicolor', 1);


$northernMotorway = new Motorway(4, 130);
$northernMotorway->addVehicle($tricycle);
$northernMotorway->addVehicle($volvo);
$northernMotorway->addVehicle($skate);
print_r($northernMotorway->getCurrentVehicles());


$greenPedestrianWay = new PedestrianWay(1, 10);
$greenPedestrianWay->addVehicle($tricycle);
$greenPedestrianWay->addVehicle($volvo);
$greenPedestrianWay->addVehicle($skate);
print_r($greenPedestrianWay->getCurrentVehicles());

$cornerResidentialWay = new ResidentialWay(2, 50);
$cornerResidentialWay->addVehicle($tricycle);
$cornerResidentialWay->addVehicle($volvo);
$cornerResidentialWay->addVehicle($skate);
print_r($cornerResidentialWay->getCurrentVehicles());

