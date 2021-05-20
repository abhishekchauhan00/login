<?php
session_start(); 
include "db_conn.php";
if(isset($_POST['signup'])){
$name = $_POST['name'];
    $userid= $_POST['userid'];
$fname = $_POST['fname'];
$email = $_POST['email'];
    $class= $_POST['class'];
$pass= $_POST['password'];
$cpass = $_POST['cpassword'];


if($pass === $cpass){

$q = "INSERT INTO `users` (`name`,`userid`, `father_name`, `class`, `email`, `password`, `activity`) VALUES ('$name', '$userid', '$fname', '$class', '$email', '$pass', '0')";
$q_run = mysqli_query($conn, $q);
if($q_run){
$_SESSION['msg'] = "Sign Up successfull";
header('location: signup.php');
}
else{
	$_SESSION['msg'] = "Something Wrong";
header('location: signup.php');
}
}
else{
$_SESSION['msg'] = "password mismatch";
header('location: signup.php');
}





}



?>