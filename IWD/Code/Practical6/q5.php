<?php
// Multilevel Inheritance Example

class Grandparent
{
    public function greet()
    {
        echo "Hello from Grandparent.\n";
    }
}

class ParentClass extends Grandparent
{
    public function greet()
    {
        echo "Hello from Parent.\n";
    }
}

class Child extends ParentClass
{
    public function greet()
    {
        echo "Hello from Child.\n";
    }
}

$child = new Child();
$child->greet();
