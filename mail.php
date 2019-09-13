<?php
session_start();
/*if(!isset($_SESSION['id'])){ //if login in session is not set
    header("Location: first_step.php");
}*/
$otp=mt_rand(1000,9999);
$_SESSION['otp']=$otp;

date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';
echo !extension_loaded('openssl')?"Not Available":"Available";

$mail = new PHPMailer;
 
$mail->isSMTP();
$mail->SMTPDebug = 4;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "ysinghal2209@gmail.com";
$mail->Password = "benditlikebeckhamshootitlikecr7";
 
$mail->setFrom = 'ysinghal2209@gmail.com';
$mail->FromName = 'Yatharth Singhal';
$mail->addAddress('ysinghal2209@gmail.com', 'Yatharth');
 
$mail->addReplyTo('ysinghal2209@gmail.com', 'Yatharth');
 
$mail->WordWrap = 50;
$mail->isHTML(true);
 
$mail->Subject = 'Password Verification';
$mail->Body    = 'OTP is '.$otp;
 
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 else
 {
  echo 'Message has been sent';
 }
echo "<script>window.location.assign('otp.php');</script>"
?>