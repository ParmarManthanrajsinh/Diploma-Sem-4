<?php

$currentDateTime = new DateTime();
$format1 = $currentDateTime->format('Y-m-d H:i:s');
echo "format1('Y-m-d H:i:s'): " . $format1 . "<br>";
$format2 = $currentDateTime->format('d/m/y h:iA');
echo "format2('d/m/y h:iA'): " . $format2 . "<br>";
$format3 = $currentDateTime->format('l,FjSY,g:ia');
echo "format3('l,FjSY,g:ia'): " . $format3 . "<br>";

?>