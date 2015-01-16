<?php
$resimler = array(
    "./img/hero-img-1.jpg",
    "./img/hero-img-2.jpg",
    "./img/hero-img-3.jpg");

$sosyallar = array(
	"./img/hero-img-4.jpg"
	);

$sozler = array(
	"En iyisini yapın: Yaptığınız her işte en iyisini yapmaya çalışın. Başarı yeni başarıları getirir.",
	"Eğer basit bir şekilde anlatamıyorsan, o konuyu iyi anlamamışsın demektir.");

$yazarlar = array(
	"Steve Jobs",
	"Albert Einstein");

$dk = date("i");
//$dk = strtotime('+10 minute', date('Y-m-d H:i:s'));
$img = $resimler[$dk%count($resimler)];
$soz = $sozler[$dk%count($sozler)];
$yazar = $yazarlar[$dk%count($yazarlar)];
$sosyal = $sosyallar[$dk%count($sosyallar)];

?>