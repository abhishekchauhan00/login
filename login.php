<?php 
session_start(); 
include "db_conn.php";
if(isset($_POST['login'])){
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    
    $q = "select * from users where userid='$userid' AND password= '$password' AND activity= '0'";
    $result = mysqli_query($conn, $q);
    $num= mysqli_num_rows($result);
    if($num==1){
        header('location: https://sites.google.com/view/rkinternationalschool/home');
    }else{
        
        $_SESSION['msg']= "Incorrect password or you have some school dues pending";
        header('location: index.php');
    }
    
    
    
}
?>