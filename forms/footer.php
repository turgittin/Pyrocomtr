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

include '../inc/ayar.php';

$isimsoyisim = $_POST["isim"];
$email = $_POST["femail"];
$mesaj = $_POST["mesaj"];
$alici = "turgay@pyro.com.tr";
$konu = "WEB Footer İletişim";
$ipadres = gercekIpAdres();

$res = array("err"=>0);


if (empty($_SESSION['ip'])) {
  $_SESSION['ip'] = $ipadres;


if (($isimsoyisim=="") or ($email=="") or ($mesaj=="")) {
	$res["err"]=1;
	$res["msg"]="Lütfen tüm alanları doldurun.";
	
	}else{

		@mysql_query("insert into footer_iletisim (isim_soyisim,email,mesaj,ipadres) values ('$isimsoyisim','$email','$mesaj','$ipadres')");
		
		require_once '../mail/SetPhpMailer.php'; 

		$mail->FromName = 'Pyro-WEB';
		$mail->CharSet = 'UTF-8';
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true);   
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($isimsoyisim)." ".':</b>'." ".$mesaj."<br>".'<b>Email Adresi:</b>'." ".$email."<br>".'<b>Ip Adresi</b>:'." ".$ipadres;
		
		$backMail->FromName = 'pyro digital solutions';
		$backMail->CharSet = 'UTF-8';
		$backMail->addAddress($email);
		$backMail->addReplyTo($alici);

		$backMail->isHTML(true);
		$backMail->Subject = 'İletişim';
		$backMail->Body    = 'Mesajınız için teşekkürler!<br> Ekibimiz en kısa sürede dönüş yapacaktır.<br><br><b>pyro digital solutions</b>';
		$backMail->addAttachment('http://www.pyro.com.tr/img/pyrologo.png', 'new.jpg');
		$backMail->send();

		if(!$mail->send()) {
			$res["err"]=1;
			$res["msg"]="Mesaj gönderilirken hata oluştu!";
		} else {
		    $res["err"]=0;
			$res["msg"]="Mesajınız gönderilmiştir.";
		}
	}
} else {
  if($_SESSION["ip"] == $ipadres){
  	$res["err"]=1;
	$res["msg"]="Az önce mesajınız bize ulaştı! :)";
  }
}
echo json_encode($res);