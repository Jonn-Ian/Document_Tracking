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
    <title>Document KUNASD POASD</title>
</head>
<body>
    <form action="../authentication/val/val.php" method="post">
        <input type="email" id="email" name="email" placeholder="email"><br>
        <input type="password" id="password" name="password" placeholder="password"><br>
        <input type="submit" value="login">
    </form>
</body>
</html>