<?php
session_start();
include 'include/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // var_dump($_POST);
  $file = $_FILES;
  include "include/migration.php";
  $obj = new database;
  $res = $obj->fileUploads($file);
  // var_dump($res);
  $file_data = [];
  foreach ($res as $key => $value) {
    $file_data[$key] = $value;
  }
  $file_names_columns = implode(", ", array_keys($file_data));
  $file_paths = "'" . implode("', '", array_values($file_data)) . "'";
  // echo "<pre>";
  // var_dump($file_names_columns);
  // var_dump($file_paths);
  // die();
  $yourPhoto = $_FILES['yourPhoto'];
  $applicantName = mysqli_real_escape_string($connection, $_POST['applicant_name']);
  $applicantFatherName = mysqli_real_escape_string($connection, $_POST['father_name']);
  $applicantLastName = mysqli_real_escape_string($connection, $_POST['applicant_lname']);
  $applicantDOB = mysqli_real_escape_string($connection, $_POST['applicant_dob']);
  $applicantAge = mysqli_real_escape_string($connection, $_POST['applicant_age']);
  $applicantMobileNumber = mysqli_real_escape_string($connection, $_POST['applicant_num']);
  $applicantOccupation = mysqli_real_escape_string($connection, $_POST['applicant_occupation']);
  $district = mysqli_real_escape_string($connection, $_POST['district']);
  $applicantGender = mysqli_real_escape_string($connection, $_POST['applicant_gender']);
  $applicantAddress = mysqli_real_escape_string($connection, $_POST['applicant_addr']);
  $taluka = mysqli_real_escape_string($connection, $_POST['taluka']);
  // $applicantStreet = mysqli_real_escape_string($connection, $_POST['applicant_street']);
  $section = mysqli_real_escape_string($connection, $_POST['section']);
  $building = mysqli_real_escape_string($connection, $_POST['building']);
  $landmark = mysqli_real_escape_string($connection, $_POST['landmark']);
  $village = mysqli_real_escape_string($connection, $_POST['village']);
  $pincode = mysqli_real_escape_string($connection, $_POST['pincode']);
  $userid = $_SESSION['userid'];
  $doc_name = "Income Certificate";
  $doc_value = 2;
  $res = $obj->insertUserDocumentTable($doc_name, $doc_value, $userid);
  $id = $res;  
  if ($res) {
    $profile =  $obj->profilePhotoUpload($yourPhoto);
    $query = "INSERT INTO all_users_cert(section, building, landmark, village, pincode, city_value,  permenant_addr,gender,user_doc_id ,firstname, middlename, lastname, dob, phoneNum, occupation, district, $file_names_columns) 
              VALUES ('$section','$building','$landmark','$village','$pincode','$taluka','$applicantAddress','$applicantGender',$userid, '$applicantName', '$applicantFatherName', '$applicantLastName', '$applicantDOB', '$applicantMobileNumber', 
                '$applicantOccupation','$district', $file_paths)";
    // echo "$query";
    $res = mysqli_query($connection, $query);
    if ($res) {
      $jsonarray = array("success" => true, "id" => $id);
    } else {
      $jsonarray = array("success" => false, "error" => mysqli_errno($connection));
    }
    echo json_encode($jsonarray);
  }
}
