<?php
require_once "../conn/conn.php";
session_start();

// For sanitizing the input of the user
function sanitize($conn, $username, $password){
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    return $username && $password;
}

// For comparing if the user's input is the same at the database and let the user log in if the same
function login($conn, $username, $password){
    $sanitized = sanitize($conn, $username, $password);

    if($sanitized){
        $query = "SELECT id, username, password, last_name, full_name FROM accounts WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        // Find the user's account
        if(mysqli_num_rows($result) > 0){
            // Fetch the data of the user and put it into the $row variable
            $row = mysqli_fetch_assoc($result);

            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Embed the session to the logged-in user to track the user
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['full_name'] = $row['full_name'];

                // Redirect the user to the dashboard after logging in
                header("location: ../templates/dashboard.php");
                exit();
            } else {
                echo "Invalid Account";
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

    login($conn, $username, $password);
}

// Validate if the user is still logged in
function verify_login(){
    if (!isset($_SESSION["username"])) {
        // Redirect to login page if the user is not logged in
        header("location: ../../templates/login.php");
        exit();
    }
}
?>
