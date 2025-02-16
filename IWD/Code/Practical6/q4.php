<?php
class Animal
{
    public function makeSound()
    {
        echo "Some generic animal sound.\n";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "Bark! Bark!\n";
    }
}

$dog = new Dog();
$dog->makeSound();
