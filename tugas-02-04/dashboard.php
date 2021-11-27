<?php
session_start();
if(!isset($_SESSION['login'])){
  
} else{
    echo header("Location:login.php");    
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
</head>
<body>
        <center><h1>Welcome</h1><br>
        <h3>FATHURRAHMAN 20192205102</h3><br>
        <a href='logout.php'>Logout</a></center>
</body>
</html>