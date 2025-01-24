<!-- Write a script to sort a given indexed array. -->

<?php

$arr = array(41, 22, 44, 76, 32, 12, 61);
sort($arr);

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . " ";
}

?>