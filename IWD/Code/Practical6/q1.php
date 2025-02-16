<?php
class Add
{
    var $a;
    var $b;
    
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function __destruct()
    {
        echo "$this->a + $this->b = " . $this->a + $this->b;
    }
}

$add = new Add(4, 5);

?>