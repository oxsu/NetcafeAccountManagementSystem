<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Login Page -->

    <form action = "login-validate.php" method = "POST">
        <label for = "username">Username: </label>
        <input type = "text" name = "username" required><br>

        <label for = "password">Password: </label>
        <input type = "text" name = "password" required><br>

        <input type = "submit" name = "submit" value = "Login">
    </form>
</body>
</html>