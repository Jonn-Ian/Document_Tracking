<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Account</title>
    <link rel="stylesheet" href="../css/employee_account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <!-- Sidebar Toggle Button -->
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰ Menu</button>

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

        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-paper-plane"></i> Sent Documents</a></li>
                <li><a href="#"><i class="fas fa-inbox"></i> Received</a></li>
                <li><a href="#"><i class="fas fa-archive"></i> Archive</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <div class="top-right-buttons">
            <a href="#" class="btn dashboard"><i class="fas fa-home"></i> Dashboard</a>
            <a href="logout.php" class="btn logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>

        <header>
            <h1>Welcome to your employee account. Use the sidebar to navigate.</h1>
        </header>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('shifted');
        }
    </script>
</body>
</html>
