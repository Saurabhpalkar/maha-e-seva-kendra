<?php
session_start();
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $query = "SELECT d.*, u.firstname, b.allDocid FROM userdocuments d, user u, birthcertificate b WHERE u.id = d.userid and d.id = b.allDocid  and d.status = 'APPROVE' and d.userid = '".$_SESSION['userid']."'";

    $res = mysqli_query($connection, $query);
    $jsonArray = array();
    if($res){
        while($row = mysqli_fetch_assoc($res)){
            $jsonArray[] = $row;
        }
        echo json_encode($jsonArray);
    }
}
 ?>