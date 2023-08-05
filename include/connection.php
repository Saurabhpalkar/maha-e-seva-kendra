<?php
$host = 'localhost';
$dbname = 'MAHA-E-SEVA';
$username = 'root'; 
$password = '';

$connection = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
} 
// else {
//     echo "Connection successful";
// }


?>
