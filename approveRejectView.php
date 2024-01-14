<?php
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $btnClick = $_POST['btnClick'];
    $doc_id = $_POST['doc_id'];
    if($btnClick === 'approve'){
        $query = "UPDATE userdocuments SET status = 'APPROVED'  WHERE id = $doc_id";
        echo $query;
    }elseif($btnClick === 'reject'){
        $query = "UPDATE userdocuments SET status = 'REJECTED'  WHERE id = '$doc_id'";
    }
    $res = mysqli_query($connection, $query);
    if($res){
        echo "  success";
    }else{
        echo "error";
    }
}
?>