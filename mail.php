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
$mail->Username = "email.com";
$mail->Password = "password";
 
$mail->setFrom = 'email';
$mail->FromName = 'Full Name';
$mail->addAddress('email address', 'Name');
 
$mail->addReplyTo('email address', 'Name');
 
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
