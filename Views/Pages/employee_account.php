<?php
require_once '../../auth/conn/conn.php';

$sql = "SELECT * FROM accounts";
$result = $CONN->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Account</title>
    <link rel="stylesheet" href="../../css/employee_account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <?php 
    require ("../Layout/nav.php")
    ?>
    <div class="container">
        <div class="row g-4 p-3">
            <div class="col-md-3">

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Account Type</th>
                            <th>Department</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)){
                        ?>

                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['last_name'];?></td>
                            <td><?php echo $row['first_name'];?></td>
                            <td><?php echo $row['acc_type'];?></td>
                            <td><?php echo $row['dept'];?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>  
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <header>
            <h1>Welcome to your employee account. Use the sidebar to navigate.</h1>
        </header>
    </div>
</body>
</html>
