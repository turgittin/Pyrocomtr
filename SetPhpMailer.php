<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'destek@pyro.com.tr';
$mail->Password = 'pyro@destek2015';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;


$backMail = new PHPMailer;
$backMail->isSMTP();
$backMail->Host = 'smtp.gmail.com';
$backMail->SMTPAuth = true;
$backMail->Username = 'destek@pyro.com.tr';
$backMail->Password = 'pyro@destek2015';
$backMail->SMTPSecure = 'tls';
$backMail->Port = 587;