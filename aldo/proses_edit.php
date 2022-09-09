<?php

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new PDO("mysql:host=localhost;dbname=rumah", 'root', '');
$query = $db->query("UPDATE tbuser SET username='$username', password='$password', role='$role' WHERE id='$id'");

if($query){
    header("location:admin.php");
}