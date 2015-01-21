<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
<?php
include 'ayar.php';

$isimsoyisim = $_POST["isim"];
$email = $_POST["femail"];
$mesaj = $_POST["mesaj"];
$alici = "erdi@pyro.com.tr";
$konu = "Iletisim Formu Dolduruldu";
$ipadres = $_SERVER['REMOTE_ADDR'];
 
if (($isimsoyisim=="") or ($email=="") or ($mesaj=="")) {
	echo "Lütfen tüm alanları doldurun";
	
	}else{

		@mysql_query("insert into footer_iletisim (isim_soyisim,email,mesaj,ipadres) values ('$isimsoyisim','$email','$mesaj','$ipadres')");
		echo "Database kaydedildi.";
		
		require 'SetPhpMailer.php';

		$mail->From = 'Pyro Iletisim';
		$mail->FromName = ucwords($isimsoyisim);
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true);   
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($isimsoyisim)." ".'isimli kisinin mesaji:</b>'." ".$mesaj."<br>".'<b>Email Adresi:</b>'." ".$email."<br>".'<b>Ip Adresi</b>:'." ".$ipadres;
		
		$backMail->From = 'Pyro Destek';
		$backMail->FromName = 'Merhabalar,'." ".ucwords($isimsoyisim);
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
