<?php
session_start();
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $query = "SELECT ud.*, u.id, u.firstname FROM userdocuments ud,  user u  WHERE ud.userid = u.id AND  ud.status = 'INACTIVE'";
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