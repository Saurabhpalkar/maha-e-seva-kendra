<?php
session_start();
include 'include/connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['getCertificateData'])) {
    $getCertificateData = $_POST['getCertificateData'];
    $doc_id = $_POST['doc_id'];

    if ($getCertificateData === "birthCert") {
        $query = "SELECT * FROM birthcertificate WHERE allDocid = '$doc_id'";
    } elseif ($getCertificateData === "domicile") {
        $query = "SELECT au.*, u.document_name FROM userdocuments u, all_users_cert au WHERE u.id = au.user_doc_id AND u.id = '$doc_id'";

    } else {
        echo "Invalid request or unknown condition";
    }
    $jsonArray = array();
    $res = mysqli_query($connection, $query);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            $jsonArray[] = $row;
            echo json_encode($jsonArray);
        } else {
            echo "No records found";
        }
    } else {
        echo "Query failed: " . mysqli_error($connection);
    }
} else {
    echo "Invalid request or getCertificateData not set";
}
mysqli_close($connection);
