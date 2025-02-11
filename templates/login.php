<?php
// require_once "../authentication/conn/conn.php";
// require_once "../authentication/val/val.php";
// session_start();

// if(isset($_SESSION["submit"])){

//     sanitize($conn, $username, $password);
//     login($conn, $password, $username);

//     switch(isset($_SESSION["position"])){
//         case "super_admin":
//             header("location: ");
//             break;
//         case "admin":
//             header("location: ");
//             break;
//         case "employee":
//             header("location: ");
//             break;
//         default:
//             echo "Can't find the position";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login.css"> <!-- Link to the external CSS file -->
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="../authentication/val/val.php" method="post">
            <input type="text" id="username" name="username" placeholder="Username" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>