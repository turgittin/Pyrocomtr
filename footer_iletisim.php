<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
<?php
include 'ayar.php';

$isimsoyisim = $_POST["isim"];
$email = $_POST["email"];
$mesaj = $_POST["mesaj"];
$alici = $email;
$konu = "Iletisim Formu";
$ipadres = $_SERVER['REMOTE_ADDR'];
 
if (($isimsoyisim=="") or ($email=="") or ($mesaj=="")) {
	echo "Lütfen tüm alanları doldurun";
	
	}else{

		@mysql_query("insert into footer_iletisim (isim_soyisim,email,mesaj) values ('$isimsoyisim','$email','$mesaj')");
		echo "Database kaydedildi.";

		$mesajlar.="iletisim formu mesaji<br/><br/>";
		$mesajlar.="isim Soyisim: ".$isimsoyisim."<br/>";
		$mesajlar.="E-Mail: ".$email."<br/>";
		$mesajlar.="Mesaj: ".$mesaj."<br/>";
		$mesajlar.="Ip Adres: ".$ipadres."<br/>";
		 
		$mesajgonder=mail($alici, $konu, $mesajlar, "Content-type: text/html; charset=utf-8\r\n");
		
		if ($mesajgonder){
		echo ("Mesajınız başarılı bir şekilde ulaştı. İletişim sayfasına geri dönmek için <br><a href=index.html>Buraya Tıklayın</a>");
		}else{
		echo ("MEsajınız gönderilirken bir hata oluştu. Daha sonra tekrar deneyin");
		}
	}