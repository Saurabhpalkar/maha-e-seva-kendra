<?php
session_start();
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $query = "select d.status,d.document_name, b.* from  birthcertificate b, userdocuments d where b.alldocid = d.id and d.status = 'INACTIVE' order by child_name";
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