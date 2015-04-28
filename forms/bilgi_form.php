
<?php
include './inc/ayar.php';

$adsoyad = $_POST["adsoyad"];
$email = $_POST["eamil"];
$mesaj = $_POST["mesaj"];
$firma = $_POST["firma"];
$tel = $_POST["tel"];
$hizmetler = $_POST["hizmetler"];
$nereden = $_POST["nereden"];
$donus = $_POST["donus"];
$butce = $_POST["butce"];
$skypeName = $_POST["skypeName"];

$alici = "turgay@pyro.com.tr";
$konu = "WEB Detaylı Bilgi Formu";
$ipadres = $_SERVER['REMOTE_ADDR'];

$res = array("err"=>0);

if (($adsoyad=="") or ($email=="") or ($mesaj=="")) {
	$res["err"]=1;
	$res["msg"]="Lütfen tüm alanları doldurun";
	
	}else{

		@mysql_query("insert into bilgi_form (adsoyad,email,mesaj,tel,hizmetler,nereden,donus,ipadres,firma) 
			values ('$adsoyad','$email','$mesaj','$tel','$hizmetler','$nereden','$donus','$ipadres','$firma')");

		require '../mail/SetPhpMailer.php';

		$mail->From = 'hey@pyro.com.tr';
		$mail->CharSet = 'UTF-8';
		$mail->FromName = 'Detaylı Bilgi Formu';
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true); 
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($adsoyad)." ".'isimli kisinin mesaji:</b>'." ".$mesaj.
						 "<br>".'<b>Email Adresi:</b>'." ".$email.
						 "<br>".'<b>Firma Adi:</b>'." ".$firma.
						 "<br>".'<b>Telefon Numarasi:</b>'." ".$tel.
						 "<br>".'<b>Istenilen Hizmetler:</b>'." ".$hizmetler.
						 "<br>".'<b>Pyroyu Nereden Duydunuz:</b>'." ".$nereden.
						 "<br>".'<b>Tahmini Butceleri:</b>'." ".$butce.
						 "<br>".'<b>Geri Donus:</b>'." ".$donus." -> ".$skypeName;
		
		$backMail->From = 'pyro digital solution';
		$backMail->CharSet = 'UTF-8';
		$backMail->FromName = 'pyro digital solution';
		$backMail->addAddress($email);
		$backMail->addReplyTo($alici);

		$backMail->isHTML(true);
		$backMail->Subject = 'pyro - İletişim';
		$backMail->Body    =  'Mesajınız tarafımıza ulaşmıştır.<br> En kısa zamanda dönüş yapılacaktır. <br><br><b>pyro ekibi</b>';
		$backMail->addAttachment('http://pyro.com.tr/yeni/img/pyrologo.png', 'new.jpg');
		$backMail->send();

		if(!$mail->send()) {
		    $res["err"]=1;
			$res["msg"]='Mailer Error: ' . $mail->ErrorInfo;;
		} else {
		    $res["err"]=0;
			$res["msg"]="Mesajiniz Gonderilmistir.";
		}
	}
echo json_encode($res);