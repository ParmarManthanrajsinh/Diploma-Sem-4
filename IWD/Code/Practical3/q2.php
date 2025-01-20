<?php

function CheckGrade($grade)
{
    if ($grade >= 85) {
        return "AA";
    } elseif ($grade >= 75) {
        return "AB";
    } elseif ($grade >= 65) {
        return "BB";
    } elseif ($grade >= 55) {
        return "BC";
    } elseif ($grade >= 45) {
        return "CC";
    } elseif ($grade >= 40) {
        return "CD";
    } elseif ($grade >= 35) {
        return "DD";
    } else {
        return "FF";
    }
}

$subjects = array(
    "CN" => 67,
    "ISE" => 98,
    "AOOP" => 55,
    "IWD" => 81,
);

$isPass = true;

echo "<table border='1'>";
echo "<tr><th>Subject</th><th>Marks</th><th>Grade</th></tr>";

foreach ($subjects as $subject => $marks) {
    $grade = CheckGrade($marks);
    echo "<tr>";
    echo "<td>$subject</td>";
    echo "<td>$marks</td>";
    echo "<td>$grade</td>";
    echo "</tr>";

    if ($marks < 35) {
        $isPass = false;
    }
}

echo "</table>";

if ($isPass) {
    echo "<h2>Result: PASS</h2>";
} else {
    echo "<h2>Result: FAIL</h2>";
}
?>