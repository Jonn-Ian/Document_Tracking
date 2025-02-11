<?php
require_once "../conn/conn.php";

function sanitize($conn, $username, $password){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    return $username && $password;
}

function login($conn, $username, $password){
    $sanitized = sanitize($conn, $username, $password);

    if($sanitized){
        $query = "SELECT username, password, last_name, full_name FROM database WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            header("location: dashboard.php");
        }
        else{
            echo"Invalid Account";
        }
    }
    else{
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    login($conn, $username, $password);
}