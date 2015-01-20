<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
<?php
include 'ayar.php';

$isimsoyisim = $_POST["isim"];
$email = $_POST["email"];
$mesaj = $_POST["mesaj"];
$alici = "erdi@pyro.com.tr";
$konu = "Iletisim Formu Dolduruldu";
$ipadres = $_SERVER['REMOTE_ADDR'];
 
if (($isimsoyisim=="") or ($email=="") or ($mesaj=="")) {
	echo "Lütfen tüm alanları doldurun";
	
	}else{

		@mysql_query("insert into footer_iletisim (isim_soyisim,email,mesaj.ipadres) values ('$isimsoyisim','$email','$mesaj','$ipadres')");
		echo "Database kaydedildi.";

		$mesajlar.="iletisim formu mesaji<br/><br/>";
		$mesajlar.="Isim Soyisim: ".$isimsoyisim."<br/>";
		$mesajlar.="E-Mail: ".$email."<br/>";
		$mesajlar.="Mesaj: ".$mesaj."<br/>";
		$mesajlar.="Ip Adres: ".$ipadres."<br/>";
		
		$tesekkur = "<h1>Bizim ile iletisime gectiginiz icin tesekkur ederiz..En hizli sekilde tarafimizca donus yapilacaktir</h1>"
		$tesekkurKonu = "Tesekkurler Pyro";

		$mesajgonder=mail($alici, $konu, $mesajlar, "Content-type: text/html; charset=utf-8\r\n");
		$tesekkurgonder = mail($email, $tesekkurKonu, $tesekkur, "Content-type: text/html; charset=utf-8\r\n");

		if ($mesajgonder){
		echo ("Mesajınız başarılı bir şekilde ulaştı. İletişim sayfasına geri dönmek için <br><a href=index.html>Buraya Tıklayın</a>");
		}else{
		echo ("MEsajınız gönderilirken bir hata oluştu. Daha sonra tekrar deneyin");
		}
	}

