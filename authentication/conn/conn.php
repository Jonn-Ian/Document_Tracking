<?php

$servername = "localhost";
$username = "root";
$serverpassword = "";
$db_name = "docu_tracker";


$conn = new mysqli($servername, $serverpassword, $db_name, $username);;

if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

date_default_timezone_set('Asia/Manila');