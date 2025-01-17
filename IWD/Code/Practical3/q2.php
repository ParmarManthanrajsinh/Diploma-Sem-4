<?php

$grade = 67;

if ($grade >= 85) {
    echo "Grade: AA";
} elseif ($grade >= 75) {
    echo "Grade: AB";
} elseif ($grade >= 65) {
    echo "Grade: BB";
} elseif ($grade >= 55) {
    echo "Grade: BC";
} elseif ($grade >= 45) {
    echo "Grade: CC";
} elseif ($grade >= 40) {
    echo "Grade: CD";
} elseif ($grade >= 35) {
    echo "Grade: DD";
} else {
    echo "Grade: FF";
}

?>