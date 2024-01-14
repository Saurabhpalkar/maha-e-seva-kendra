<?php
include 'include/connection.php';
    $file = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    var_dump($tmp_name);
    $flag = 1;
    $target_folder = "templates/" ;
    $upload_folder = $target_folder .  basename($file);
    $file_ext = pathinfo($upload_folder, PATHINFO_EXTENSION);
    var_dump($file_ext);
    $ext_arry = array('png','jpeg','jpg','pdf');
    if(!in_array($file_ext, $ext_arry)){
        echo "extension wrong";
    }

    if($flag == 1){
        if(move_uploaded_file($_FILES['image']['tmp_name'], $upload_folder)){
            $query = "INSERT INTO user (id_proof) VALUES ('$upload_folder')";
            echo $query;
            if (mysqli_query($connection, $query)) {
                echo "success";
            }else{
                echo "error";
            }

        }
    }
?>