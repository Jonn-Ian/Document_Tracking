<?php
require_once "../conn/conn.php";
session_start();

//try lang
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
        $query = "SELECT id, username, password, last_name, full_name FROM database WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        //find the user's account
        if(mysqli_num_rows($result) > 0){

            //this fetches the data of the user and put it the to the $row variable
            $row = mysqli_fetch_assoc($result);

            //embedded the session to logged in user so it tracks the user
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            //direct the user to the dashboard after logged-in
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


//=============================================================================================//

