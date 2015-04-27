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
$konu = "İletişim Formu Dolduruldu";
$ipadres = gercekIpAdres();

$res = array("err"=>0);


if (empty($_SESSION['ip'])) {
  $_SESSION['ip'] = $ipadres;


if (($isimsoyisim=="") or ($email=="") or ($mesaj=="")) {
	$res["err"]=1;
	$res["msg"]="Lütfen tüm alanları doldurun";
	
	}else{

		@mysql_query("insert into footer_iletisim (isim_soyisim,email,mesaj,ipadres) values ('$isimsoyisim','$email','$mesaj','$ipadres')");
		
		require_once '../mail/SetPhpMailer.php'; 

		$mail->FromName = 'pyro - web';
		$mail->CharSet = 'UTF-8';
		$mail->addAddress($alici);
		$mail->addReplyTo($email);

		$mail->isHTML(true);   
		$mail->Subject = $konu;
		$mail->Body    = "<b>".ucwords($isimsoyisim)." ".'isimli kisinin mesaji:</b>'." ".$mesaj."<br>".'<b>Email Adresi:</b>'." ".$email."<br>".'<b>Ip Adresi</b>:'." ".$ipadres;
		
		$backMail->FromName = 'pyro digital solution';
		$backMail->CharSet = 'UTF-8';
		$backMail->addAddress($email);
		$backMail->addReplyTo($alici);

		$backMail->isHTML(true);
		$backMail->Subject = 'iletişim';
		$backMail->Body    = 'Mesajınız tarafımıza ulaşmıştır.<br> En kısa zamanda dönüş yapılacaktır. <br><br><b>pyro ekibi</b>';
		$backMail->addAttachment('http://pyro.com.tr/yeni/img/pyrologo.png', 'new.jpg');
		$backMail->send();

		if(!$mail->send()) {
			$res["err"]=1;
			$res["msg"]="Mesaj Gonderilirken hata olustu!";
		} else {
		    $res["err"]=0;
			$res["msg"]="Mesajiniz Gonderilmistir.";
		}
	}
} else {
  if($_SESSION["ip"] == $ipadres){
  	$res["err"]=1;
	$res["msg"]="Daha once mesaj gondermistiniz!";
  }
}
echo json_encode($res);