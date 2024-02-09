<?php 
error_reporting(0);
session_start();
$con=mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'details'); 
 $name = $_POST['Name'];  
 $email = $_POST['Email'];
 $password = $_POST['Password'];
 $s = "select * from student where name = '$name' && password='$password'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);

 if($num == 1){
       header('location:web/1.html');
 }
 else{
    echo "Invalid Details";
 }

?> 
