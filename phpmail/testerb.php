<?php
require_once('class.phpmailer.php');
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages                         only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587 or 465
$mail->IsHTML(true);
$mail->Username = "okkisetyawan@gmail.com";
$mail->Password = "Katerban_93";
$mail->SetFrom("okkisetyawan@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("okkisetyawan@gmail.com");

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}?>