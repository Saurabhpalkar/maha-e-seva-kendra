<?php
session_start();
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $query = "SELECT ud.*, u.firstname, u.middlename, u.lastname FROM userdocuments ud,  all_users_cert u  WHERE ud.id = u.user_doc_id AND  ud.status = 'INACTIVE'";
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