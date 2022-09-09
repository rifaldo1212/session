<?php
session_start();
echo "<h1>selamat datang,</ h1>";echo $_SESSION["username"];
if(!isset($_SESSION["username"])){
    header("Location:from.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Website Rumah Sakit</title>
</head>
<body>
    <h1></h1>
    <form action="admin.php">
        <button class="btn btn-outline-primary">Cek Data Pengguna</button>
    </form>
</body>
</html>