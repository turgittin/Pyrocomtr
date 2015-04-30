
<?php
include './inc/ayar.php';

$adsoyad = $_POST["Name"];
$email = $_POST["mail"];
$mesaj = $_POST["Message"];
$tel = $_POST["tel"];

$alici = "turgay@pyro.com.tr";
$konu = "WEB İletişim";
$ipadres = $_SERVER['REMOTE_ADDR'];

$res = array("err"=>0);


		require '../mail/SetPhpMailer.php';

		$mail->From = 'hey@pyro.com.tr';
		$mail->CharSet = 'UTF-8';
		$mail->FromName = 'Pyro-WEB';
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true); 
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($adsoyad)." ".'isimli kisinin mesaji:</b>'." ".$mesaj.
						 "<br>".'<b>Email Adresi:</b>'." ".$email.
						 "<br>".'<b>Telefon Numarasi:</b>'." ".$tel.
						 "<br>".'<b>Tahmini Butceleri:</b>'." ".$butce;
		
		$backMail->From = 'pyro digital solutions';
		$backMail->CharSet = 'UTF-8';
		$backMail->FromName = 'pyro digital solutions';
		$backMail->addAddress($email);
		$backMail->addReplyTo($alici);

		$backMail->isHTML(true);
		$backMail->Subject = 'İletişim';
		$backMail->Body    =  'Mesajınız için teşekkürler!<br> Ekibimiz en kısa sürede dönüş yapacaktır.<br><br><b>pyro digital solutions</b>';
		$backMail->addAttachment('http://pyro.com.tr/img/pyrologo.png', 'new.jpg');
		$backMail->send();

		if(!$mail->send()) {
		    $res["err"]=1;
			$res["msg"]='Mailer Error: ' . $mail->ErrorInfo;;
		} else {
		    $res["err"]=0;
			$res["msg"]="Mesajınız gönderilmiştir.";
		}

echo json_encode($res);