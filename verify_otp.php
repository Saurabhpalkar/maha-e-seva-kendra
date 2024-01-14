<?php
session_start();
    include 'include/connection.php';
    $otp_num = $_POST['otp'];
    $email =  $_SESSION['email'];
    $sql = "SELECT * FROM user where email = '$email' and otp = '$otp_num'";
    $res = mysqli_query($connection, $sql);
    if(mysqli_num_rows($res)>0){
        $row = mysqli_fetch_assoc($res);
        $id_proof = $row['id_proof'];
        $firstname =$row['firstname'];
        $usertype =$row['usertype'];
        $_SESSION['id_proof'] = $id_proof;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['usertype'] = $usertype;
        echo "success"; 
    }else{
        echo "error";
    }
    
?>