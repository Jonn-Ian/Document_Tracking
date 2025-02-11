<?php
require_once "../conn/conn.php";

//for sanitizing the input of the user
function sanitize($conn, $username, $password){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    return $username && $password;
}

//for comparing if the user's input is the same at the database and let the user logged in if the same
function login($conn, $username, $password){
    $sanitized = sanitize($conn, $username, $password);

    if($sanitized){
        $query = "SELECT username, password, last_name, full_name FROM database WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            header("location: ../templates/dashboard.php");
        }
        else{
            echo"Invalid Account";
        }
    }
    else{
        return false;
    }
}


//when the user pressed submit, this function will execute
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    login($conn, $username, $password);
}