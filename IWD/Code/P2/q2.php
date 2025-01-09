<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Salary Calculator</title>
</head>

<body>

    <h2>Net Salary Calculator</h2>
    <form action="#" method="post">
        <label>Enter Basic Salary :</label>
        <input type="number" name="basicSalary" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $basicSalary = $_POST['basicSalary'];
        $DA = 0.50 * $basicSalary;
        $HRA = 0.10 * $basicSalary;
        $Medical = 0.04 * $basicSalary;
        $GrossSalary = $basicSalary + $DA + $HRA + $Medical;
        $Insurance = 0.07 * $GrossSalary;
        $PF = 0.05 * $GrossSalary;
        $Deduction = $Insurance + $PF;
        $NetSalary = $GrossSalary - $Deduction;

        echo "<h3>Salary Details:</h3>";
        echo "Basic Salary: ₹" . $basicSalary . "<br>";
        echo "DA (Dearness Allowance): ₹" . $DA . "<br>";
        echo "HRA (House Rent Allowance): ₹" . $HRA . "<br>";
        echo "Medical Allowance: ₹" . $Medical . "<br>";
        echo "Gross Salary: ₹" . $GrossSalary . "<br>";
        echo "Insurance Deduction: ₹" . $Insurance . "<br>";
        echo "Provident Fund Deduction: ₹" . $PF . "<br>";
        echo "Total Deduction: ₹" . $Deduction . "<br>";
        echo "Net Salary: ₹" . $NetSalary . "<br>";
    }
    ?>

</body>

</html>