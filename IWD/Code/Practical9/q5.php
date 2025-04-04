<!DOCTYPE html>
<html>

<body>
    <h2>Delete Employee</h2>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "emp");

    if (!$conn) {
        die("Connection failed");
    }

    if (isset($_POST['delete'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $sql = "DELETE FROM employees WHERE name = '$name' AND password = '$password'";

        if (mysqli_query($conn, $sql)) {
            echo "Employee deleted successfully!";
        } else {
            echo "Error deleting employee";
        }
    }
    ?>

    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="delete" value="Delete Employee">
    </form>

</body>

</html>