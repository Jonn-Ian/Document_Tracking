<?php
session_start();
function Session_Destroyer(){
    session_unset();
    session_destroy();

    header('location: ../../login.php');
    exit();
}

Session_Destroyer();