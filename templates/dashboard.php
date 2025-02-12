<?php
// Start session if not already started
session_start();

//username is stored in session
$User_Name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <div class="header">
        <div class="header-right">
            <a href="employee_account.php" class="btn">
                <i class="fas fa-tachometer-alt"></i> 
                Account
            </a>
            <a href="logout.php" class="btn logout">
                <i class="fas fa-sign-out-alt"></i> 
                Logout
            </a>
        </div>
    </div>

    <div class="container">
        <div class="welcome-message">
            Welcome, <?php echo htmlspecialchars($User_Name); ?>!
        </div>

        <div class="dashboard-options">
            <a href="upload.php">Upload a File</a>
            <a href="search.php">Search/Track a File</a>
        </div>
    </div>
</body>
</html>