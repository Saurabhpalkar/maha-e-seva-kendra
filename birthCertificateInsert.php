<?php session_start();
include 'include/connection.php'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['submitbtn']) && $_POST['submitbtn'] === 'birth') {
    // var_dump($_POST);
  $childName = $_POST['child_name'];
  $fatherName = $_POST['father_name'];
  $motherName = $_POST['mother_name'];
  $surname = $_POST['surname'];
  $place_of_birth = $_POST['place_of_birth'];
  $hospitalName = $_POST['hospital_name'];
  $registrationDate = $_POST['registration_date'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $city = $_POST['city'];
  $userid = $_SESSION['userid'];

  $query = "insert into userdocuments(document_name, document_value, status, userid, updated_on)
  values('Birth Certificate', '1', 'INACTIVE', '$userid', CURRENT_TIMESTAMP)";
  $res = mysqli_query($connection, $query) or die(mysqli_error($connection));
  if ($res) { 
    $id = mysqli_insert_id($connection);
    $query = "INSERT INTO all_users_cert (user_doc_id, firstname, middlename, lastname, mother_name, place_of_birth,hospital_name, dob,	state_val, district, city_value)
               VALUES ('$id', '$childName', '$fatherName', '$surname', '$motherName', '$place_of_birth', '$hospitalName','$registrationDate', '$state', '$district', '$city')";
    $query .= ";"; 

    $query .= "INSERT INTO birthcertificate (child_name, father_name, mother_name, surname, place_of_birth, hospital_name, registration_date, district, city, status, allDocid, updated_on)
              VALUES ('$childName', '$fatherName', '$motherName', '$surname', '$place_of_birth', '$hospitalName', '$registrationDate', '$district', '$city', 'INACTIVE', '$id', CURRENT_TIMESTAMP)";
    
    $res = mysqli_multi_query($connection, $query);

    if ($res) {
        $jsonarray = array("success"=> true, "id"=> $id);
    } else {
        $jsonarray = array("success"=>false, "error"=>mysqli_errno($connection));
    }
    echo json_encode($jsonarray);
}
}
  mysqli_close($connection);
} else {
  echo "Invalid request";
}
?>
