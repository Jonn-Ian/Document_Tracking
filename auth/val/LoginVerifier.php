<?php

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    header('Location: ../templates/dashboard.php');
    exit();
}
else{
    header('Location: ../templates/login.php');
    exit();
}

?>
