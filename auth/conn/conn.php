<?php

$servername = "localhost";
$username = "root";
$ServerPassword = "";
$db_name = "docu_tracker";

$conn = new mysqli($servername, $username, $ServerPassword, $db_name);

if ($CONN->connect_error) {
    die('Failed to connect to MySQL: ' . $CONN->connect_error);
}

date_default_timezone_set('Asia/Manila');

?>
