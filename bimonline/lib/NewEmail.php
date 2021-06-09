<?php
require 'PHPMailerAutoload.php'; //add file trong thu vien

//lay cac gia tri tu form len
$from = $_POST['txtFrom'];
$to = $_POST['txtTo'];
$subject = $_POST['txtSubject'];
$body = $_POST['txtContent'];

$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);

//thiet lap cac tham so de gui mail
$mail->Username = "vubang151@gmail.com";
$mail->Password = "01658095491";
$mail->SetFrom($from);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($to);

//gui email
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}

?>
