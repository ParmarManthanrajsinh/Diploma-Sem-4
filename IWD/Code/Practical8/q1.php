<!-- php-session-demo -->

<?php
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if($name == 'admin' && $password == 'admin'){
        $_SESSION['name'] = $name;
        header("Location: home1.php");
    }else{
        echo "Name or Password is invalid. Please try again";
    }
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

