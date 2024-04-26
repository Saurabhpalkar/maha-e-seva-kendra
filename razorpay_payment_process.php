<?php
session_start();
include 'include/connection.php';
$userDocTableID = $_POST['userDocTableID'];
$query1 = "SELECT * FROM razorpay WHERE user_doc_id =  '$userDocTableID'";
$sql1 = mysqli_query($connection, $query1);
if ($res = mysqli_num_rows($sql1) == 0) {
    if (isset($_POST['amt']) && isset($_POST['name'])) {
        // $userDocTableID=$_POST['userDocTableID'];
        $gov_fees = $_POST['gov_fees'];
        $service_charge = $_POST['service_charge'];
        $sgst = $_POST['sgst'];
        $cgst = $_POST['cgst'];
        $amt = $_POST['amt'];
        $payment_status = "pending";
        $added_on = date('Y-m-d h:i:s');
        $userid = $_SESSION['userid'];
        $res = mysqli_query($connection, "insert into razorpay(userid,name, user_doc_id,gov_fees, service_charge, sgst, cgst, amount,payment_status,added_on)
     values($userid, '', '$userDocTableID', '$gov_fees', '$service_charge', '$sgst', '$cgst', '$amt','$payment_status','$added_on')");
        $razorpay_id =mysqli_insert_id($connection);
        if($res){
            include "include/migration.php";
            $result = new database;
            $result->setRazorpayId($razorpay_id);
            $response = $result->getRazorpaytDataById();
            echo json_encode($response);
        }else{

        }
    }
} else {
    if (isset($_POST['payment_id']) && isset($userDocTableID)) {

        $payment_id = $_POST['payment_id'];
        $query = "update razorpay set payment_status='complete', payment_id='$payment_id' where user_doc_id = '$userDocTableID'";
        $res = mysqli_query($connection, $query);
        if($res){
            include "include/migration.php";
            $result = new database;
            $result->setRazorpayId($userDocTableID);
            $response = $result->getRazorpaytData();
            echo json_encode($response);

        }else{
            
        }
    }
}
