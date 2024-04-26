<?php
session_start();
include 'include/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if ($_SESSION['usertype'] == 2) {
        $query = "SELECT d.*, a.firstname, r.payment_status, r.id as razorpay_id  FROM userdocuments d
              JOIN all_users_cert a ON d.id = a.user_doc_id 
              LEFT JOIN razorpay r on d.id = r.user_doc_id
              WHERE  d.userid = " . $_SESSION['userid'] . " ORDER BY `id` DESC";
    } else {
        $query = "SELECT d.*, a.firstname, r.payment_status, r.id as razorpay_id  FROM userdocuments d
        JOIN all_users_cert a ON d.id = a.user_doc_id 
        LEFT JOIN razorpay r on d.id = r.user_doc_id ORDER BY `id` DESC";
    }
    $res = mysqli_query($connection, $query);
    $jsonArray = array();
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            $jsonArray[] = $row;
        }
        echo json_encode($jsonArray);
    }
}
