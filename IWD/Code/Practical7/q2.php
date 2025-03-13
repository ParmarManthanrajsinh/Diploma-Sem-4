<html>

<body>
    <form action="#" method="post">
        <label>Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label>Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label>Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];

        echo "<h2>Details:</h2>";

        // Validate name (only letters and spaces allowed)
        if (preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "Name: $name <br>";
        } else {
            echo "Invalid name format <br>";
        }

        // Validate email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: $email <br>";
        } else {
            echo "Invalid email format <br>";
        }

        echo "Date of Birth: $dob <br>";
    }
    ?>
</body>

</html>