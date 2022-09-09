<?php
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=rumah", 'root', '');
$query = $db->query("DELETE FROM tbuser WHERE id='$id'");

if($query){
    header("location:admin.php");
}