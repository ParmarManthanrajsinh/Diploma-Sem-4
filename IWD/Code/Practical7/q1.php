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
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Date of Birth: $dob <br>";
    }
    ?>
</body>

</html>