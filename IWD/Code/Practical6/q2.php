<?php
class Add
{
    var $a;
    var $b;
    public $c;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function AddNum(){
        $this->c = $this->a + $this->b;
    }
}

$add = new Add(4,5);
$add->AddNum();

echo " addition : $add->c"; 

?>