<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=rumah', 'root', '');
$query = $koneksi->query("select * from tbuser where username='$username' AND password='$password'");
$data = $query->fetch();
if($query->rowCount() > 0){
    if($data['role']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header("Location:beranda.php");
    }
    else if($data['role']=="user"){
        echo "hai user";
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "user";
        header("Location:user.php");
    }
}else{
    header("Location:form.php");
}