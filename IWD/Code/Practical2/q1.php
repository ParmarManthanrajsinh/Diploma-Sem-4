<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <form method="post" action="#">
        <label>Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label>Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label>Select Operation:</label>
        <select id="operation" name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "<h3>Result: $result </h3>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<h3>Result: $result </h3>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h3>Result: $result </h3>";
                break;
            case 'divide':
                $result = $num1 / $num2;
                echo "<h3>Result: $result </h3>";
                break;
            default:
                $result = "Error";
                echo "<h3>Result: $result </h3>";
                break;
        }
    }


    ?>
</body>

</html>