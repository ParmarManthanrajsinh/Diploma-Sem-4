<?php
// Method Overriding Example

class Vehicle
{
    public function start()
    {
        echo "Vehicle starting...\n";
    }
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car starting with a roar!\n";
    }
}

$vehicle = new Vehicle();
$vehicle->start();

$car = new Car();
$car->start();
