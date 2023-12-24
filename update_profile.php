<?php
include 'include/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_POST['userid']; 
     parse_str($_POST['form_data'], $form_data);
     $fullname = mysqli_real_escape_string($connection, $form_data['fullname']);
     $dob = mysqli_real_escape_string($connection, $form_data['dob']);
     $email = mysqli_real_escape_string($connection, $form_data['email']);
     $phone = mysqli_real_escape_string($connection, $form_data['phone']);
     $password = mysqli_real_escape_string($connection, $form_data['password']);
     $cpassword = mysqli_real_escape_string($connection, $form_data['cpassword']);

     $query = "UPDATE user SET
               firstname = '$fullname',
               dob = '$dob',
               email = '$email',
               phoneNum = '$phone',
               password = '$password'
               WHERE id = $userid"; 
     $res = mysqli_query($connection, $query) or die(mysqli_error($connection));

     if ($res) {
         echo json_encode(["success" => "Data updated successfully"]);
     } else {
         echo json_encode(["error" => "Error updating data"]);
     }
 }
 ?>