<?php

$SERVER_NAME = "localhost";
$SERVER_USERNAME = "root";
$SERVER_PASSWORD = "";
$DB_NAME = "docu_tracker";

$CONN = new mysqli($SERVER_NAME, $SERVER_USERNAME, $SERVER_PASSWORD, $DB_NAME);

if ($CONN->connect_error) {
    die('Failed to connect to MySQL: ' . $CONN->connect_error);
}

date_default_timezone_set('Asia/Manila');