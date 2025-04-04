<!DOCTYPE html>
<html>

<body>
        <h2>Employee Login</h2>
        <form method="POST" action="">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <input type="submit" name="submit" value="Login">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $password = $_POST['password'];
            $name = $_POST['name'];

            $conn = mysqli_connect("localhost", "root", "", "emp");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM employees WHERE password='$password' AND name='$name'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                session_start();

                $_SESSION['name'] = $name;
                $_SESSION['email'] = mysqli_fetch_assoc($result)['email'];

                header("Location: q4.php");
                exit();
            } else {
                echo "<h3>Invalid email or name!</h3>";
            }
        }
        ?>
</body>

</html>