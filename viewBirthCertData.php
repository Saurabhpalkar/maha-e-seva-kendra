<?php 
session_start();
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $doc_id = $_POST['doc_id'];
    $query = "select * from  birthcertificate where id = '$doc_id'";
    $jsonArray = array();
    $res = mysqli_query($connection, $query) or die(mysqli_error($connection));
    if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    $jsonArray[] = $row;
    echo json_encode($jsonArray);

}else{
    echo "error";
}
}
?>