<!DOCTYPE html>
<html>

<body>
    <h2>Employee Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "emp");

        if ($conn->connect_error) {
            die("Connection failed");
        }

        $sql = "INSERT INTO employees (name, email, password, salary) 
                VALUES ('{$_POST['name']}', '{$_POST['email']}', 
                        '{$_POST['password']}', {$_POST['salary']})";

        echo ($conn->query($sql)) ? "Saved successfully!" : "Error saving data";
        $conn->close();
    }
    ?>

    <form method="post">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        Salary: <input type="number" name="salary" required><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>