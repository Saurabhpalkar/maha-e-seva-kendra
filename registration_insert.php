<?php
include 'include/connection.php';
if ($_POST['option'] == 2) {
  $email = $_POST['email'];
} else {
  $email = $_POST['email1'];
}
$sql = "SELECT * FROM user Where email = '$email'";
$res = mysqli_query($connection, $sql);
if (mysqli_num_rows($res) > 0) {
  $response = array('status' => 'email exists');
  echo json_encode($response);
} else {

  if ($_POST['option'] == 2) {
    $registration_option = $_POST['option'];
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $user = $_POST['user'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $salutation_val = $_POST['salutation_val'];
    $salutation_txt = $_POST['salutation_txt'];
    $flag = 1;
    $target_dir =  "upload/";
    $target_file = $target_dir . basename($_FILES["idProof"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_extensions = array("jpg", "jpeg", "png", "pdf");

    if (!in_array($imageFileType, $allowed_extensions)) {
      $response = array('status' => 'wrong_extn', 'message' => 'Invalid file extension. Allowed extensions are JPG, JPEG, PNG, PDF.');
      echo json_encode($response);
      exit;
    }

    if ($flag == 1) {
      if (move_uploaded_file($_FILES["idProof"]["tmp_name"], $target_file)) {
        $query = "INSERT INTO user (salutation_val,salutation_txt, firstname, lastname, dob, gender, usertype, email, phoneNum, password, id_proof, registration_option, updated_on)
              VALUES ('$salutation_val','$salutation_txt', '$fullname', '', '$dob', '$gender', '$user', '$email', '$phone', '$password', '$target_file', $registration_option, CURRENT_TIMESTAMP)";
        if (mysqli_query($connection, $query)) {
          $response = array('status' => 'success', 'message' => 'Registration successful');
          echo json_encode($response);
        } else {
          $response = array('status' => 'error', 'message' => 'Error occurred during registration: ' . mysqli_error($connection));
          echo json_encode($response);
        }
      }
    }
  } else {
    $password1 = $_POST['password1'];
    $registration_option = $_POST['option'];
    $district1 = $_POST['district1'];
    $otp = $_POST['otp'];
    $query = "INSERT INTO user (district, email, otp, password, registration_option, updated_on)
              VALUES ( '$district1', '$email', '$otp', '$password1',$registration_option, CURRENT_TIMESTAMP)";

    if (mysqli_query($connection, $query)) {
      $response = array('status' => 'success', 'message' => 'Registration successful');
      echo json_encode($response);
    } else {
      $response = array('status' => 'error', 'message' => 'Error occurred during registration: ' . mysqli_error($connection));
      echo json_encode($response);
    }
  }
}
mysqli_close($connection);
