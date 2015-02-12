<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'erdi@pyro.com.tr';
$mail->Password = '15241524';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;


$backMail = new PHPMailer;
$backMail->isSMTP();
$backMail->Host = 'smtp.gmail.com';
$backMail->SMTPAuth = true;
$backMail->Username = 'erdi@pyro.com.tr';
$backMail->Password = '15241524';
$backMail->SMTPSecure = 'tls';
$backMail->Port = 587;