<?php
include 'include/connection.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
$stateid = $_POST['stateid'];
// $query = "select * from city_table c, state s where s.stateValue = c.stateId and stateId = '$stateid'";
$query = "SELECT * from district d  WHERE  d.state_id = $stateid ";
$res = mysqli_query($connection, $query) or die(mysqli_error($connection));
$jsonArray = array();
if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        $jsonArray[] = $row;
    }
    echo json_encode($jsonArray);
    
}else{
    echo json_encode(array("error" => "no record found"));

}
}

?>


