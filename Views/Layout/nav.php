<?php 
session_start();

if (!$_SESSION) {
    header('Location: ../../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/employee_account.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="profile-section">
            <div class="profile-picture">
                <img src="<?php echo $profile_picture; ?>" alt="Profile Picture">
            </div>
            <div class="user-info">
                <h2>Username</h2>
                <p><strong>User ID:</strong></p>
                <p><strong>Department:</strong></p>
            </div>
        </div>

        <nav class="side-nav">
            <ul>
                <li></li>
                <li id="dashboard"><a href="../../Views/Pages/dashboard.php"><i class="fas fa-home"></i> Dashboard</a></li>
                <li id="employeeaccount"><a href="../../Views/Pages/employee_account.php"><i class="fas fa-tachometer-alt"></i> Account</a></li>
                <li><a href="#"><i class="fas fa-inbox"></i> Received</a></li>
                <li><a href="#"><i class="fas fa-archive"></i> Archive</a></li>
                <li><a href="../../auth/val/LogOut.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html> 