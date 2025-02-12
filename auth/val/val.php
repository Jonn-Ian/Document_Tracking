<?php
require_once "../conn/conn.php";
session_start();

// For sanitizing the input of the user
function sanitize($CONN, $username, $password){
    $username = mysqli_real_escape_string($CONN, $_POST['username']);
    $password = mysqli_real_escape_string($CONN, $_POST['password']);
    return $username && $password;
}

// For comparing if the user's input is the same at the database and let the user log in if the same
function login($CONN, $username, $password){
    $sanitized = sanitize($CONN, $username, $password);

    if($sanitized){
        // Adjust the column names to match your database schema
        $query = "SELECT * FROM accounts WHERE username = '$username' ";
        $result = mysqli_query($CONN, $query);

        // Find the user's account
        if(mysqli_num_rows($result) > 0){
            // This fetches the data of the user and puts it into the $row variable
            $row = mysqli_fetch_assoc($result);
            
            if ($row['password'] == $_POST['password'] && $row['username'] == $_POST['username']) {
                // Embed the session to the logged-in user so it tracks the user
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                // Redirect the user to the dashboard after logging in
                header("location: ../Views/Pages/dashboard.php");
                exit();
            } 
            else {
                echo "first Invalid Account";
            }
        } else {
            echo "Invalid Account";
        }
    } else {
        echo "Sanitization failed";
    }
}

// When the user presses submit, this function will execute
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($CONN, $username, $password);
}
