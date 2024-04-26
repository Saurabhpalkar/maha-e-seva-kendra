<?php
class database
{
    private $userDocTableID;
    private $connect;
    private $document_value;
    private $razorpay_id;
    function __construct()
    {
        include "connection.php";
        $this->connect = $connection;
    }
    function setUserDocTableID($userDocTableID)
    {
        $this->userDocTableID = $userDocTableID;
    }
    function getUserDocTableID()
    {
        return $this->userDocTableID;
    }
    function setDocumentValue($document_value)
    {
        $this->document_value = $document_value;
    }
    function getDocumentValue()
    {
        return $this->document_value;
    }
    function setRazorpayId($razorpay_id)
    {
        $this->razorpay_id = $razorpay_id;
    }
    function getRazorpayId()
    {
        return $this->razorpay_id;
    }
    function getFeeStructData()
    {

        $query = "SELECT * FROM fees_structure WHERE document_value = ?";
        $statement = mysqli_prepare($this->connect, $query);
        // var_dump($query);
        mysqli_stmt_bind_param($statement, "s", $this->document_value);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $fee_struct_data = mysqli_fetch_assoc($result);
        if ($fee_struct_data) {
            return $fee_struct_data;
        } else {
            return false;
        }
    }
    function getRazorpaytDataById(){
        $query = "SELECT r.*, u.document_name FROM razorpay r
                        JOIN userdocuments u ON r.user_doc_id = u.id   
             WHERE r.id = ?";
        $statement = mysqli_prepare($this->connect, $query);
        mysqli_stmt_bind_param($statement, "s", $this->razorpay_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $razorpay_data = mysqli_fetch_assoc($result);
        if ($razorpay_data) {
            return $razorpay_data;
        } else {
            return false;
        }
    }
    function getRazorpaytData()
    {
        $query = "SELECT * FROM razorpay WHERE user_doc_id = ?";
        $statement = mysqli_prepare($this->connect, $query);
        mysqli_stmt_bind_param($statement, "s", $this->razorpay_id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $razorpay_data = mysqli_fetch_assoc($result);
        if ($razorpay_data) {
            return $razorpay_data;
        } else {
            return false;
        }
    }
    function insertUserDocumentTable($doc_name, $doc_value, $userid)
    {
        $document_name = $doc_name;
        $document_value = $doc_value;
        $status = "ACTIVE";
        $updated_on = date('Y-m-d');
        $query = "insert into userdocuments(document_name, document_value, status, userid, updated_on)
        values(?,?,?,?,?)";
        $statement = mysqli_prepare($this->connect, $query);
        mysqli_stmt_bind_param($statement, "sisis", $document_name, $document_value, $status, $userid, $updated_on);
        $res = mysqli_stmt_execute($statement);
        if ($res) {
            return $user_doc_id = mysqli_insert_id($this->connect);
        } else {
            return false;
        }
    }

    function profilePhotoUpload($fileUpload)
    {
        // var_dump($fileUpload);
        if (isset($fileUpload) && $fileUpload['error'] == 0) {
            //   var_dump($fileUpload);
            $targetDir = "upload/";
            $targetFile = $targetDir . basename($fileUpload['name']);
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $extensionArray = ['png', 'jpeg', 'jpg', 'gif', 'pdf'];
            if (!in_array($fileType, $extensionArray)) {
                echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
                exit();
            }
            if (move_uploaded_file($fileUpload['tmp_name'], $targetFile)) {
                return $targetFile;
            }
        }
        //  else {
        //     echo "file not set";
        // }
    }
    function fileUploads($file){
        // var_dump($file);
        $uploadedFiles = [];
        foreach ($file as $key => $value) {
            if (!empty($value['name'])) {
                // if ($value['error'] === UPLOAD_ERR_OK) {
                $file_dir = "upload/";
                $file_name = basename($value['name']);
                $tmp_name = $value['tmp_name'];
                $file_dest = $file_dir . $file_name;
                $file_extn = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));
                $extensionArray = ['png', 'jpeg', 'jpg', 'gif', 'pdf'];
                if (!in_array($file_extn, $extensionArray)) {
                    echo "Sorry, only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
                    exit();
                }
                if (move_uploaded_file($tmp_name, $file_dest)) {

                    // echo "file uploaded";
                    $uploadedFiles[$key] =  $file_dest;
                }
                // var_dump($file_extn);
                // var_dump($file_dest);
                // var_dump($tmp_name);
            } 
            // else {
            //     return false;
            // }
        }
        return  $uploadedFiles;
    }
    function getStateNames(){
        $query = "SELECT stateName, id FROM state";
        $statement = mysqli_prepare($this->connect, $query);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        if ($rows) {
            return $rows;
        } else {
            return false;
        }
    }
    function getDistrictNames($state_id){
        $query = "SELECT district_name, id FROM district WHERE state_id = $state_id ";
        $statement = mysqli_prepare($this->connect, $query);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        if ($rows>0) {
            return $rows;
        } else {
            return false;
        }
    }
    function getTalukaNames($district_id){
        $query = "SELECT taluka_name, id FROM taluka WHERE district_id = $district_id";
        $statement = mysqli_prepare($this->connect, $query);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        if ($rows>0) {
            return $rows;
        } else {
            return false;
        }
    }
    function getVillageNames($taluka_id){
        $query = "SELECT cityName, id FROM city_table WHERE taluka_id = $taluka_id";
        $statement = mysqli_prepare($this->connect, $query);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        if ($rows>0) {
            return $rows;
        } else {
            return false;
        }
    }
}
