<?php
 session_start();
require 'include/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select id_proof, email, password, firstname, id, usertype from user where email =  '$username' AND password = '$password'";

    $res = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($res)) {
        $firstname = $row['firstname'];
        $_SESSION['firstname'] = $firstname;
        $userid = $row['id'];
        $_SESSION['userid'] = $userid;
        $usertype = $row['usertype'];
        $_SESSION['usertype'] = $usertype;
        $profile = $row['id_proof'];
        $_SESSION['id_proof'] = $profile;
        echo "success";
    } else {
        echo "failed";
    }

    mysqli_close($connection);
} else {
    echo "Invalid request";
}
?>
