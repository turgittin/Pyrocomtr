
<?php

header('Content-Type: text/html; charset=ISO-8859-9');

include '../inc/ayar.php';

$adsoyad = htmlentities($_POST["adsoyad"]);
$email = htmlentities($_POST["eamil"]);
$mesaj = htmlentities($_POST["mesaj"]);
$firma = htmlentities($_POST["firma"]);
$tel = htmlentities($_POST["tel"]);
$hizmetler = htmlentities($_POST["hizmetler"]);
$nereden = htmlentities($_POST["nereden"]);
$donus = htmlentities($_POST["donus"]);
$alici = "turgay@pyro.com.tr";
$konu = "Iletisim Formu Dolduruldu";
$ipadres = $_SERVER['REMOTE_ADDR'];

if (($adsoyad=="") or ($email=="") or ($mesaj=="") or ($tel=="") or ($hizmetler=="") or ($nereden=="") or ($donus=="")) 
	{
		echo '{"err":1,"msg":"tum alanlari doldurun"}';
	}else{

		@mysql_query("insert into bilgi_form (adsoyad,email,mesaj,tel,hizmetler,nereden,donus,ipadres,firma) 
			values ('$adsoyad','$email','$mesaj','$tel','$hizmetler','$nereden','$donus','$ipadres','$firma')");
		echo "Database kaydedildi.";

		require '../mail/SetPhpMailer.php';

		$mail->From = 'pyro - web';
		$mail->CharSet = 'UTF-8';
		$mail->FromName = 'pyro - web';
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true); 
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($adsoyad)." ".'isimli kisinin mesaji:</b>'." ".$mesaj."<br>".'<b>Email Adresi:</b>'." ".$email."<br>".'<b>Ip Adresi</b>:'." ".$ipadres;
		
		$backMail->From = 'pyro digital solution';
		$backMail->CharSet = 'UTF-8';
		$backMail->FromName = 'pyro digital solution';
		$backMail->addAddress($email);
		$backMail->addReplyTo($alici);

		$backMail->isHTML(true);
		$backMail->Subject = 'pyro - İletişim';
		$backMail->Body    =  $mesaj;
		$backMail->addAttachment('http://pyro.com.tr/yeni/img/pyrologo.png', 'new.jpg');
		$backMail->send();

		if(!$mail->send()) {
		    echo 'Mesaj gonderilemedi';
		    echo 'Mailer Hatasi: ' . $mail->ErrorInfo;
		} else {
		    echo 'Mail gonderilmistir.';
		}
	}
