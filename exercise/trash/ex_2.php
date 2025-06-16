<?php
require_once __DIR__ . '/../vendor/autoload.php'; // go up one directory to find vendor
use Flore\Oop\App\Car;
$go = new Car("Toyota", "Fortuner", 10);

for ($i = 1; $i <= 11; $i++) {
    echo $go->drive();
}

$go->refuel(3);
echo $go->drive();