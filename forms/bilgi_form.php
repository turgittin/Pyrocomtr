<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
<?php
include '../inc/ayar.php';

$adsoyad = $_POST["adsoyad"];
$email = $_POST["eamil"];
$mesaj = $_POST["mesaj"];
$firma = $_POST["firma"];
$tel = $_POST["tel"];
$hizmetler = $_POST["hizmetler"];
$nereden = $_POST["nereden"];
$donus = $_POST["donus"];
$alici = "erdi@pyro.com.tr";
$konu = "Iletisim Formu Dolduruldu";
$ipadres = $_SERVER['REMOTE_ADDR'];


var_dump($adsoyad);exit();
if (($adsoyad=="") or 
	($email=="") or 
	($mesaj=="") or 
	($tel=="") or 
	($hizmetler=="") or 
	($nereden=="") or 
	($donus=="")) {

		echo '{"err":1,"msg":"tum alanlari doldurun"}';
	
	}else{

		@mysql_query("insert into bilgi_form (adsoyad,email,mesaj,tel,hizmetler,nereden,donus,ipadres,firma) 
			values ('$adsoyad','$email','$mesaj','$tel','$hizmetler','$nereden','$donus','$ipadres','$firma')");
		echo "Database kaydedildi.";

		require '../PHPMailer/SetPhpMailer.php';

		$mail->From = 'Pyro Iletisim';
		$mail->FromName = ucwords($adsoyad);
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true);   
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($adsoyad)." ".'isimli kisinin mesaji:</b>'." ".$mesaj."<br>".'<b>Email Adresi:</b>'." ".$email."<br>".'<b>Ip Adresi</b>:'." ".$ipadres;
		
		$backMail->From = 'Pyro Destek';
		$backMail->FromName = 'Merhabalar,'." ".ucwords($adsoyad);
		$backMail->addAddress($email);
		$backMail->addReplyTo($alici);

		$backMail->isHTML(true);
		$backMail->Subject = 'Pyro Iletisim';
		$backMail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$backMail->addAttachment('http://pyro.com.tr/yeni/img/pyrologo.png', 'new.jpg');
		$backMail->send();

		if(!$mail->send()) {
		    echo 'Mesaj gonderilemedi';
		    echo 'Mailer Hatasi: ' . $mail->ErrorInfo;
		} else {
		    echo 'Mail gonderilmistir.';
		}
	}
