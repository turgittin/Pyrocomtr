<?php
$resimler = array(
    "./img/hero-img-1.jpg",
    "./img/hero-img-2.jpg");

$sozler = array(
	"En iyisini yapın: Yaptığınız her işte en iyisini yapmaya çalışın. Başarı yeni başarıları getirir.",
	"Eğer basit bir şekilde anlatamıyorsan, o konuyu iyi anlamamışsın demektir.");

$yazarlar = array(
	"Steve Jobs",
	"Albert Einstein");

$dk = date("i");
$img = $resimler[$dk%count($resimler)];
$soz = $sozler[$dk%count($sozler)];
$yazar = $yazarlar[$dk%count($yazarlar)];

?>