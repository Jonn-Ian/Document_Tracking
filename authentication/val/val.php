<?php
require_once "../conn/conn.php";

function sanitize($conn, $username, $password){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    return $username && $password;
}

function login($conn, $username, $password){
    $query = "SELECT username, password, last_name, full_name FROM database WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
}