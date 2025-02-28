<html>

<head>
    <title>Page 2 - Display Data</title>
</head>

<body>
    <h2>Page 2: Display Submitted Data</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $role = $_POST['user_role'];

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