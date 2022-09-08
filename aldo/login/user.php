<?php
session_start();
 if(isset($_SESSION['username'])){ // jika session username ada
    echo "<h1> Halaman User </h1>";
    echo "Welcome, ";
    echo $_SESSION["username"];
    
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>User</title>
</head>
<body>
   <form action="beranda.php">
 <button class="btn btn-secondary">Beranda</button>
</form>
<form action="delete.php">
 <button class="btn btn-danger" onclick="alert('anda telah logout')">Logout</button>
</form>
</body>
</html>