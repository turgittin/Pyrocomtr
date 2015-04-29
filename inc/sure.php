<?php
$resimler = array(
    "./img/hero-img-1.jpg",
	"./img/hero-img-6.jpg");

$sosyallar = array(
	"./img/hero-img-4.jpg"
	);

$projeler = array(
	"./img/hero-img-2.jpg"
	);

$iletisimler = array(
	"./img/hero-img-5.jpg"
	);

$neler = array(
	"./img/hero-img-6.jpg"
	);

$referans = array(
	"./img/hero-img-7.jpg"
	);

$sozler = array(
	"En iyisini yapın: Yaptığınız her işte en iyisini yapmaya çalışın. Başarı yeni başarıları getirir.",
	"Eğer basit bir şekilde anlatamıyorsan, o konuyu iyi anlamamışsın demektir.",
	"Çoşku, zekadan daha önemlidir.");

$yazarlar = array(
	"Steve Jobs",
	"Albert Einstein",
	"Albert Einstein");

$dk = date("i");
//$dk = strtotime('+10 minute', date('Y-m-d H:i:s'));
$img = $resimler[$dk%count($resimler)];
$soz = $sozler[$dk%count($sozler)];
$yazar = $yazarlar[$dk%count($yazarlar)];
$sosyal = $sosyallar[$dk%count($sosyallar)];
$proje = $projeler[$dk%count($projeler)];
$iletisim = $iletisimler[$dk%count($iletisimler)];
$ne = $neler[$dk%count($neler)];
$ref = $referans[$dk%count($referans)];

?>