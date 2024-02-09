<?php 
session_start();
unset($_SESSION['admin']);
header('location:1.html');
?>