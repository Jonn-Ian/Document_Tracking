<?php 
require_once "../../authentication/val/val.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/side_nav.css">
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a href="#">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script src="../../javascript/side_nav.js"></script>
   
</body>
</html> 
