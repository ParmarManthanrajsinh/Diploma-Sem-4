<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
</head>

<body>
    <h2>Change Password</h2>
    <form method="POST">
        <p>Name: <input type="text" name="name" required></p>
        <p>Old Password: <input type="password" name="old_password" required></p>
        <p>New Password: <input type="password" name="new_password" required></p>
        <input type="submit" value="Change Password">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "root", "", "emp");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $_POST['name'];
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];

        $sql = "SELECT * FROM employees WHERE name='$name' AND password='$old_password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $update_sql = "UPDATE employees SET password='$new_password' WHERE name='$name'";
            if (mysqli_query($conn, $update_sql)) {
                echo "Password changed successfully!";
            } else {
                echo "Error changing password: " . mysqli_error($conn);
            }
        } else {
            echo "Invalid name or old password!";
        }
    }
    ?>
</body>

</html>