<?php
$cerezler = array(
        "./img/hero-img-1.jpg",
        "./img/hero-img-2.jpg");

$dk = date("i");
$img = $cerezler[$dk%count($cerezler)];
?>

<?php

$sozler = array("The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.","Erdi Resyiz");

$yazarlar = array("Albert Einstein","Erdi Dogan");

$dk = date("i");
$soz = $sozler[$dk%count($sozler)];
$yazar = $yazarlar[$dk%count($yazarlar)];
?>