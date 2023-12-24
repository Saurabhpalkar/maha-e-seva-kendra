<?php
include 'include/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if( $_POST['setdata'] === "setdata"){
    $userid =$_POST['userid'];
    $query = "SELECT * FROM user where id = '$userid'";
    $res = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $jsonArray = array();

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $jsonArray[] = $row;
        }
        echo json_encode($jsonArray);
    } else {
        echo json_encode(["error" => "No records found"]);
    }
}

}
?>
