<!-- php-cookie-demo -->

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    setcookie('name', $name, time() + 3600);
    header("Location: home2.php");
}
?>

<html>

<body>
    <form method="post">
        <label>Name</label>
        <input type="text" name="name" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>