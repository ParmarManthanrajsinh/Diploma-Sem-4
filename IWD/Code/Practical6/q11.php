<?php
// Cloning of Objects Example

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$person1 = new Person("Alice");
$person2 = clone $person1;
$person2->name = "Bob";

echo "Person1: " . $person1->name . "\n";
echo "Person2: " . $person2->name . "\n";
