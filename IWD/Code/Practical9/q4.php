<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: q2.php');
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee Home Page</title>
</head>

<body>

    <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>

    <h2>Employee Information</h2>
    <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>

</body>

</html>