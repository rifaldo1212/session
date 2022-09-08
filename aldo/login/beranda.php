<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Beranda</title>
</head>
<body>
   <h2 style="padding: 50px;">Beranda</h2>
<div class="card" style="width: 18rem;">
  <div class="card-body">
  <?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form.php");
}
?>
<h1>Halaman Beranda </h1>
<a href="user.php">Halaman User</a><br />
<a href="hapus_session.php">Logout</a>