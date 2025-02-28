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

        if (trim($name) != "") {
            echo "Name: $name <br>";
        } else {
            echo "Name is required <br>";
        }

        if (strpos($email, '@') !== false) {
            echo "Email: $email <br>";
        } else {
            echo "Invalid email format <br>";
        }

        echo "Date of Birth: $dob <br>";
    }
    ?>
</body>

</html>