<?php

$servername = "loclahost";
$username = "root";
$password = "";
$db_name = "";


$conn = new mysqli($servername, $password, $db_name, $host);;

if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

date_default_timezone_set('Asia/Manila');