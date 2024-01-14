<?php 
session_start();
include 'include/connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailerLab/src/Exception.php';
require 'PHPMailerLab/src/PHPMailer.php';
require 'PHPMailerLab/src/SMTP.php';
$email = $_POST['email'];
if(isset( $_POST['registration_option1'])){
    $sql = "SELECT * from user where email = '$email'";
    $res = mysqli_query($connection, $sql);
    if(mysqli_num_rows($res) == 0){
        $randOtp = rand(11111,9999);
        $otparray = array('status'=> 'success', 'otp'=> $randOtp);
        echo json_encode($otparray);
        $otpmsg = "Your OTP verification code is: ".$randOtp;
        smtp_mailer($email, "OTP Verification", $otpmsg);
    }else{
        $otparray = array('status'=> 'success');
        echo json_encode($otparray);
    }
}else{
    $sql = "SELECT * from user where email = '$email'";
    $res = mysqli_query($connection, $sql);
    if(mysqli_num_rows($res)>0){
        echo "success";
        $randOtp = rand(11111,9999);
        $sql2 = "UPDATE user set otp = '$randOtp' where email = '$email'";
        $res2 = mysqli_query($connection, $sql2);
        $_SESSION['email'] = $email;
        $otpmsg = "Your OTP verification code is: ".$randOtp;
        smtp_mailer($email, "OTP Verification", $otpmsg);
    }else{
        echo "error";
    }
}

function smtp_mailer($to,$subject, $msg){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    // $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = 'mywork202324@gmail.com';
    $mail->Password = 'krqd imso bwbt bwpo';
    // $mail->isHTML(true);
    $mail->setFrom('mywork202324@gmail.com');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $msg;
    
    if(!$mail->send()){
        return 0;
    }else{
        return 1;
    }
}
?>