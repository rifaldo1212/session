<?php

session_start();

if(!isset($_SESSION["username"])){ // jika tidak ada session username
   header("location : login.php"); // buka / arahkan ke login.php
}
?>