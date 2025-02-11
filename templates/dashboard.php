<?


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css"> <!-- Link to the external CSS file -->
</head>
<body>
    
    <div class="header">
        <span>Account</span>
        <a href="logout.php">Logout</a>
    </div>

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