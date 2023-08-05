<?php
include 'include/connection.php';

$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$query = "INSERT INTO user (firstname, lastname, dob, gender, usertype, email, phoneNum, password, updated_on)
        VALUES ('$fullname', '', '$dob', '$gender', '$user', '$email', '$phone', '$password', CURRENT_TIMESTAMP)";

if (mysqli_query($connection, $query)) {
  echo "Registration successful";
} else {
  echo "Error occurred during registration: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
