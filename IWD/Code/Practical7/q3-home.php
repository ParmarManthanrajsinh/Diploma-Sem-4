<html>

<head>
    <title>Home</title>
</head>

<body>
    <h1>Welcome to Our Simple Home Page</h1>
    <p>Click below to visit the next page:</p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $dob = $_GET['dob'];

        echo "<h2>Details:</h2>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Date of Birth: $dob <br>";
    }
    ?>
</body>

</html>