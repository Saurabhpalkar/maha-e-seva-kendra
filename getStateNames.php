<?php
include 'include/connection.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    if($_POST['statebtn']==='state'){
$query = "select * from state";
$res = mysqli_query($connection, $query) or die(mysqli_error($connection));
$jsonArray = array();
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        $jsonArray[] = $row;
    }
    echo json_encode($jsonArray);
    
}else{
    echo "error";
}
}

}
?>
