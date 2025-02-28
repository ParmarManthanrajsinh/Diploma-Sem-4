<!-- iii. Create two distinct web pages to 
demonstrate information passing between them 
using URL - Get method.   -->
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="q3-home.php" method="get">
            <label>Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label>Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label>Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>