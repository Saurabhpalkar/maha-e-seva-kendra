<?php
session_start();
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $query = "select b.*, u.firstname from  user u, userdocuments d, birthcertificate b  where u.id = d.userid and d.id = b.allDocid ";
    $res = mysqli_query($connection, $query);
    $jsonArray = array();
    if($res){
        $row = mysqli_fetch_assoc($res);
            $jsonArray[] = $row;
        
        echo json_encode($jsonArray);
    }
}
 ?>