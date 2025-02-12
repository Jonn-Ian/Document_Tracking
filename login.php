<?php
require_once './auth/val/LoginVerifier.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" con   tent="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css"> <!-- Link to the external CSS file -->
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="auth/val/val.php" method="post">
            <input type="text" id="username" name="username" placeholder="Username" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>
