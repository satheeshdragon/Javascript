<?php

include 'PHPMailer/PHPMailer/PHPMailer.php';
include 'PHPMailer/PHPMailer/Exception.php';
//require 'PHPMailerAutoload.php';


$mail = new PHPMailer; // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "16satheeshkumar@gmail.com";
$mail->Password = "satheeshprogrammer";
$mail->SetFrom("16satheeshkumar@gmail.com");
$mail->Subject = "Test";
$mail->Body = "dragon 2";
$mail->AddAddress("16satheeshkumar@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

?>