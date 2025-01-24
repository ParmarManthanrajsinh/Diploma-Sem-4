<!-- Write a script to perform 3 x 3 matrix Multiplication -->

<?php

$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "Matrix 1:<br>";
foreach ($matrix1 as $row) {
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}

$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

echo "Matrix 2:<br>";
foreach ($matrix2 as $row) {
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}

$result = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);

for ($i = 0; $i < count($matrix1); $i++) {
    for ($j = 0; $j < count($matrix1); $j++) {
        for ($k = 0; $k < count($matrix1); $k++) {
            $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
        }
    }
}

echo "The Result:<br>";
foreach ($result as $row) {
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}

?>