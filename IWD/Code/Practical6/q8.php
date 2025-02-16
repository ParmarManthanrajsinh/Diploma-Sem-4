<?php
// Method Overloading Simulation Example

class Calculator
{
    public function add()
    {
        $args = func_get_args();
        $sum = 0;
        foreach ($args as $num) {
            $sum += $num;
        }
        return $sum;
    }
}

$calc = new Calculator();
echo $calc->add(1, 2) . "\n";
echo $calc->add(1, 2, 3, 4) . "\n";
