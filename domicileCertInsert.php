<?php
session_start();
include 'include/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(isset($_POST['submit_btn'])&& $_POST['submit_btn']=== 'submit'){
   
$applicant_salutation = $_POST['applicant_salutation'];
$applicant_name = $_POST['applicant_name'];
$father_name = $_POST['father_name'];
$applicant_dob = $_POST['applicant_dob'];
$applicant_age = $_POST['applicant_age'];
$applicant_num = $_POST['applicant_num'];
$applicant_gender = $_POST['applicant_gender'];
$applicant_email = $_POST['applicant_email'];
$applicant_adhaar = $_POST['applicant_adhaar'];
$applicant_natilanality = $_POST['applicant_natilanality'];
$dropdown_value = $_POST['dropdown_value'];
$dropdown_text = $_POST['dropdown_text'];
$userid = $_SESSION['userid'];

   $query = "insert into userdocuments(document_name, document_value, status, userid, updated_on)
  values('$dropdown_text', '$dropdown_value', 'INACTIVE', '$userid', CURRENT_TIMESTAMP)";
  $res = mysqli_query($connection, $query) or die(mysqli_error($connection));
  
  if($res){
    $user_doc_id = mysqli_insert_id($connection);
    echo $sql1 = "INSERT INTO all_users_cert (`user_doc_id` ,`salutation_val`, `firstname`, `middlename`, `lastname`, `dob`, `age`, `phoneNum`, `gender`, `email`, `adhar_card_num`, `nationality`,  `updated_on`) 
    VALUES ($user_doc_id, '$applicant_salutation','$applicant_name','$father_name', '', '$applicant_dob','$applicant_age','$applicant_num','$applicant_gender','$applicant_email','$applicant_adhaar','$applicant_natilanality',CURRENT_TIMESTAMP)";
   $res1 = mysqli_query($connection, $sql1);
  echo $query;
if($res){
    echo "success";
}else{
    echo "mysqli_error". mysqli_error($connection);
}
}
mysqli_close($connection);
}
}
?>
