<?php
include "migration.php";
$result = new database;

    if(isset($_POST['document_value'])){
        $result->setDocumentValue($_POST['document_value']);
        $getFeeStructData =$result->getFeeStructData();
        echo json_encode($getFeeStructData);
    }
    if(isset($_POST['rozarpay_id'])){
        $result->setRazorpayId($_POST['rozarpay_id']);
        $response = $result->getRazorpaytDataById();
        echo json_encode($response);
    }
    if(isset($_POST['state_names'])){
        $response = $result->getStateNames();
        echo json_encode($response);
    }
    if(isset($_POST['state_id'])){
        $response = $result->getDistrictNames($_POST['state_id']);
        echo json_encode($response);
    }
    if(isset($_POST['district_id'])){
        $response = $result->getTalukaNames($_POST['district_id']);
        echo json_encode($response);
    }
    if(isset($_POST['taluka_id'])){
        $response = $result->getVillageNames($_POST['taluka_id']);
        echo json_encode($response);
    }
?>