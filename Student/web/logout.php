<?php 
session_start();
unset($_SESSION['user']);
header('location:http://localhost/nb/Online/index.html');
?>