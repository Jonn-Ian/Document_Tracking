<?php
// Start session if not already started
session_start();

// Assuming username is stored in session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'User';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../css/dashboard.css"> <!-- Link to the external CSS file -->
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php 
    require ("../Layout/nav.php")
    ?>

    <div class="container">
        <div class="welcome-message">
            Welcome, <?php echo htmlspecialchars($username); ?>!
        </div>

        <div class="dashboard-options">
            <a href="upload.php">Upload a File</a>
            <a href="search.php">Search/Track a File</a>
        </div>
    </div>
    
</body>
</html>