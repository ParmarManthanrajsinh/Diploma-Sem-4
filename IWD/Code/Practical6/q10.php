<?php
// Simple Abstract Class Example

abstract class AnimalAbstract
{
    abstract public function makeSound();

    public function sleep()
    {
        echo "Sleeping...\n";
    }
}

class Cat extends AnimalAbstract
{
    public function makeSound()
    {
        echo "Meow!\n";
    }
}

$cat = new Cat();
$cat->makeSound();
$cat->sleep();
