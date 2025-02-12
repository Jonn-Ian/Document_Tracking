<?php

$servername = "localhost";
$ServerUsername = "root";
$ServerPassword = "";
$db_name = "docu_tracker";

$conn = new mysqli($servername, $ServerUsername, $ServerPassword, $db_name);

if ($conn->connect_error) {
    die('Failed to connect to MySQL: ' . $conn->connect_error);
}

date_default_timezone_set('Asia/Manila');

?>
