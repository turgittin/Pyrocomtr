<?php session_start();?>
<?php
function gercekIpAdres()  
{  
    if (!empty($_SERVER['HTTP_CLIENT_IP']))  {  
        $ipadres=$_SERVER['HTTP_CLIENT_IP'];  
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){  
        $ipadres=$_SERVER['HTTP_X_FORWARDED_FOR'];  
    } else {  
        $ipadres=$_SERVER['REMOTE_ADDR'];  
    }  
    return $ipadres;  
}

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
$ipadres = gercekIpAdres();

$res = array("err"=>0);

if (empty($_SESSION['detay_ip'])) {
  $_SESSION['detay_ip'] = $ipadres;

if (($adsoyad=="") or ($email=="") or ($mesaj=="")) {
	$res["err"]=1;
	$res["msg"]="Lütfen tüm alanları doldurun.";
	
	}else{

		@mysql_query("insert into bilgi_form (adsoyad,email,mesaj,tel,hizmetler,nereden,donus,ipadres,firma) 
			values ('$adsoyad','$email','$mesaj','$tel','$hizmetler','$nereden','$donus','$ipadres','$firma')");

		require '../mail/SetPhpMailer.php';

		$mail->From = 'hey@pyro.com.tr';
		$mail->CharSet = 'UTF-8';
		$mail->FromName = 'Pyro-WEB';
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true); 
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($adsoyad)." ".':</b>'." ".$mesaj.
						 "<br>".'<b>Email Adresi:</b>'." ".$email.
						 "<br>".'<b>Firma Adi:</b>'." ".$firma.
						 "<br>".'<b>Telefon Numarasi:</b>'." ".$tel.
						 "<br>".'<b>Istenilen Hizmetler:</b>'." ".$hizmetler.
						 "<br>".'<b>Pyroyu Nereden Duydunuz:</b>'." ".$nereden.
						 "<br>".'<b>Tahmini Butceleri:</b>'." ".$butce.
						 "<br>".'<b>Geri Donus:</b>'." ".$donus." -> ".$skypeName;
		
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
	}
} else {
  if($_SESSION["detay_ip"] == $ipadres){
  	$res["err"]=1;
	$res["msg"]="Daha önce mesaj göndermiştiniz!";
  }
}
echo json_encode($res);