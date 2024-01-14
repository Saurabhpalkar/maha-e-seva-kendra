<?php
session_start();
include 'include/connection.php';
$cpass = $_POST['cpass'];
$email = $_SESSION['email'];
$sql = "UPDATE user set password  = '$cpass' where email = '$email'";
$res = mysqli_query($connection, $sql);
if($res){
    echo "success";
}else{
    echo "error";
}

?>