<?php

$m1 = array
(
    array(1, 2, 3), 
    array(4, 5, 6), 
    array(7, 8, 9)
);

$m2 = array
(
    array(9, 8, 7), 
    array(6, 5, 4), 
    array(3, 2, 1)
);

$result = [];

// Perform matrix multiplication
for ($i = 0; $i < 3; $i++) 
{
    for ($j = 0; $j < 3; $j++) 
	{
        $result[$i][$j] = 0;
        for ($k = 0; $k < 3; $k++) 
		{
            $result[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
        }
    }
}

for ($i = 0; $i < 3; $i++) 
{
    for ($j = 0; $j < 3; $j++) 
    {    
        echo $result[$i][$j] . ' ';
    }
    echo "<br>";
}
?>
