<?php
require 'PHPMailerAutoload.php';
//parse from contact form
$firstname = isset($_POST['firstname']) ? $_REQUEST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_REQUEST['lastname'] : '';
$merge = $firstname.' '.$lastname;
$email = isset($_POST['email']) ? $_REQUEST['email'] : '';
$subject = isset($_POST['subject']) ? $_REQUEST['subject'] : '';
$message = isset($_POST['message']) ? $_REQUEST['message'] : '';
 
$mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.lamsolusi.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'okki.setyawan@lamsolusi.com';                 // SMTP username
$mail->Password = 'Welcome123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to 465 587


// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'okkisetyawan@gmail.com';                 // SMTP username
// $mail->Password = 'Katerban_93';                           // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to 465 587


// $mail->Host = 'mail.yukgadai.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'info@yukgadai.com';                 // SMTP username
// $mail->Password = 'gadaiyukinfo2017';                           // SMTP password
// $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 465;                                    // TCP port to connect to 465 587

$mail->setFrom('okki.setyawan@lamsolusi.com', 'PT.LAMJAYA GLOBAL SOLUSI');
//$mail->setFrom('info@yukgadai.com', 'Pengirim Yukgadai');
$mail->addAddress($email, $merge);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('okki.setyawan@lamsolusi.com', 'Information Of Lamsolusi');
//$mail->addReplyTo('info@yukgadai.com', 'Information Of Yukgadai');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Message has been sent';
    echo "<script language=javascript>
    alert('Pesan anda berhasil dikirim!');
    window.location='http://localhost/lamsolusi/contact.html';
        </script>";
      
}