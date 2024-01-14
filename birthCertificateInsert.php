<?php session_start();
include 'include/connection.php'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['submitbtn']) && $_POST['submitbtn'] === 'birth') {
  $childName = $_POST['child_name'];
  $fatherName = $_POST['father_name'];
  $motherName = $_POST['mother_name'];
  $surname = $_POST['surname'];
  $placeOfBirth = $_POST['place_of_birth'];
  $hospitalName = $_POST['hospital_name'];
  $registrationDate = $_POST['registration_date'];
  $district = $_POST['district'];
  $taluka = $_POST['city'];
  $userid = $_SESSION['userid'];

  $query = "insert into userdocuments(document_name, document_value, status, userid, updated_on)
  values('Birth Certificate', '1', 'INACTIVE', '$userid', CURRENT_TIMESTAMP)";
  $res = mysqli_query($connection, $query) or die(mysqli_error($connection));
  if($res){ 
    $id = mysqli_insert_id($connection);
  $query = "INSERT INTO birthcertificate  (child_name, father_name, mother_name, surname, place_of_birth, hospital_name, registration_date, district, taluka, status, allDocid, updated_on)
            VALUES ('$childName', '$fatherName', '$motherName', '$surname', '$placeOfBirth', '$hospitalName', '$registrationDate', '$district', '$taluka', 'INACTIVE', '$id', CURRENT_TIMESTAMP)";
  $res = mysqli_query($connection, $query);
  if ($res) {
    echo "success";
  } else {
    echo "Error: " . mysqli_error($connection);
  }
}
}
  mysqli_close($connection);
} else {
  echo "Invalid request";
}
?>
