<?php 
error_reporting(0);
session_start();
$con=mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'details'); 
 $name = $_POST['Name'];  
 $email = $_POST['Email'];
 $password = $_POST['Password'];
 $s = "select * from student where name = '$name'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);

 if($num == 1){
        echo" Username Already Taken";

 }else{
    $reg="insert into student(name,email,password) values ('$name','$email','$password')";
    mysqli_query($con ,$reg);
    echo"Registration Successful";
 }

?> 
