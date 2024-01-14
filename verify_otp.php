<?php
session_start();
    include 'include/connection.php';
    $otp_num = $_POST['otp'];
    $email =  $_SESSION['email'];
    $sql = "SELECT * FROM user where email = '$email' and otp = '$otp_num'";
    $res = mysqli_query($connection, $sql);
    if(mysqli_num_rows($res)>0){
        echo "success"; 
    }else{
        echo "error";
    }
    
?>