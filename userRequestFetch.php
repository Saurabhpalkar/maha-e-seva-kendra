<?php
session_start();
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $query = "select d.*, u.firstname from  user u, userdocuments d where u.id = d.userid and d.status = 'INACTIVE'";
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