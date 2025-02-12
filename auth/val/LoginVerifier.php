<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    header('Location: ../Views/Pages/dashboard.php');
    exit();
}


?>
