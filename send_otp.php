<?php 
session_start();
include 'include/connection.php';
$email = $_POST['email'];
$sql = "SELECT * from user where email = '$email'";
$res = mysqli_query($connection, $sql);
if(mysqli_num_rows($res)>0){
    echo "success";
    $randOtp = rand(11111,9999);
    $sql2 = "UPDATE user set otp = '$randOtp' where email = '$email'";
    $res2 = mysqli_query($connection, $sql2);
	$_SESSION['email'] = $email;
	$otpmsg = "Your OTP verification code is: ".$randOtp;
    // smtp_mailer($email, "OTP Verification", $otpmsg);
}else{
    echo "error";
}

// function smtp_mailer($to,$subject, $msg){
// 	require_once("smtp/class.phpmailer.php");
// 	$mail = new PHPMailer(); 
// 	$mail->IsSMTP(); 
// 	$mail->SMTPDebug = 1; 
// 	$mail->SMTPAuth = true; 
// 	$mail->SMTPSecure = 'TLS'; 
// 	$mail->Host = "smtp.sendgrid.net";
// 	$mail->Port = 587; 
// 	$mail->IsHTML(true);
// 	$mail->CharSet = 'UTF-8';
// 	$mail->Username = "akkighadavale25@gmail.com";
// 	$mail->Password = "Akki@123456";
// 	$mail->SetFrom("akkighadavale25@gmail.com");
// 	$mail->Subject = $subject;
// 	$mail->Body =$msg;
// 	$mail->AddAddress($to);
// 	if(!$mail->Send()){
// 		return 0;
// 	}else{
// 		return 1;
// 	}
// }
?>