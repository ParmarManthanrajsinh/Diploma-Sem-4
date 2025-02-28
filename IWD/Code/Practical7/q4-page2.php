<html>

<head>
    <title>Page 2 - Display Data</title>
</head>

<body>
    <h2>Page 2: Display Submitted Data</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);  // Sanitizing user input
        $role = htmlspecialchars($_POST['user_role']); // Retrieving hidden variable

        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Role:</strong> $role</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>

    <br>
    <a href="q4-page1.php">Go Back</a>
</body>

</html>