<?php
session_start();
include 'include/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $doc_type = $_POST['doc_type'];
    $doc_id =    $_POST["doc_id"];
    if ($doc_type == 1) {
        $child_name =   $_POST["child_name"];
        $father_name =   $_POST["father_name"];
        $mother_name =   $_POST["mother_name"];
        $surname =   $_POST["surname"];
        $place_of_birth =   $_POST["place_of_birth"];
        $hospital_name =   $_POST["hospital_name"];
        $registration_date =   $_POST["registration_date"];
        $district =   $_POST["district"];
        $state =   $_POST["state"];
        $city =   $_POST["city"];
        $query = "UPDATE all_users_cert 
        SET firstname='$child_name', 
            middlename='$father_name', 
            lastname='$surname', 
            dob='$place_of_birth', 
            place_of_birth='$place_of_birth', 
            hospital_name='$hospital_name', 
            dob='$registration_date', 
            district='$district', 
            state_val='$state', 
            city_value='$city' 
        WHERE user_doc_id = $doc_id";

    } elseif ($doc_type == 2) {
        // var_dump($_POST);
        // echo "2";
    } elseif ($doc_type == 3) {
        // echo "3";
          $certificate_types=  $_POST["certificate_types"];
          $applicant_salutation=  $_POST["applicant_salutation"];
          $applicant_name=  $_POST["applicant_name"];
          $father_name=  $_POST["father_name"];
          $applicant_dob=  $_POST["applicant_dob"];
          $applicant_age=  $_POST["applicant_age"];
          $applicant_num=  $_POST["applicant_num"];
          $applicant_gender=  $_POST["applicant_gender"];
          $applicant_email=  $_POST["applicant_email"];
          $applicant_adhaar=  $_POST["applicant_adhaar"];
          $applicant_natilanality=  $_POST["applicant_natilanality"];
    } elseif ($doc_type == 4) {
    } elseif ($doc_type == 5) {
    } elseif ($doc_type == 6) {
    } else {
        echo "invalida document id you selected";
    }
    $res = mysqli_query($connection, $query);
    if($res){
        $response = array("success" => true, "message" => "Record updated successfully");
        } else {
            $response = array("success" => false, "message" => "Error updating record: " . mysqli_error($connection));
        }
        echo json_encode($response);
} else {
    echo "not set document type";
}
