<?php
// Multiple Inheritance Simulation Using Traits

trait CanFly
{
    public function fly()
    {
        echo "I can fly.\n";
    }
}

trait CanSwim
{
    public function swim()
    {
        echo "I can swim.\n";
    }
}

class Duck
{
    use CanFly, CanSwim;

    public function quack()
    {
        echo "Quack! Quack!\n";
    }
}

$duck = new Duck();
$duck->fly();
$duck->swim();
$duck->quack();
