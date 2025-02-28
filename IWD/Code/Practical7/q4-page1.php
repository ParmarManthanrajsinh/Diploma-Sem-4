<html>

<head>
    <title>Page 1 - Hidden Variable POST</title>
</head>

<body>
    <h2>Page 1: Enter Your Name</h2>
    <form action="q4-page2.php" method="post">
        <label>Your Name:</label>
        <input type="text" id="name" name="name" required>

        <input type="hidden" name="user_role" value="Student">

        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>