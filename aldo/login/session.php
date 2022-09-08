<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//koneksi database
$koneksi = new pdo('mysql:host=localhost;dbname=rumah sakit', 'root', '');
//cari di database, berdasarkan username dan password
$query = $koneksi->query("select * from tb_user where username ='$username' AND password='$password'");
// cek jika ada data,maka bikin session ke halaman beranda

if ($query->rowCount() > 0) {
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];
    header("location:beranda.php");
    
} else {
    //jika tidak maka ke halaman login
    header("location:form.php");
}