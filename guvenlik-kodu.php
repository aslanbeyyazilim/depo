<?php
	$sifre=substr(md5(rand()),0,5);//rasgele bir metin oluşturuyoruz.
	
	$r=rand(0,255);
	$g=rand(0,255);
	$b=rand(0,255);//her sefer için farklı renk olması için rand ile değerler belirtiyoruz.
	
	$resim = @imagecreatefrompng("arkaplan.png");//arkaplan için resim atıyoruz.
	$renk=imagecolorallocate ($resim, $r, $g, $b);//font rengini belirliyoruz.
	$font="segoepr.ttf";//fontumuzu seçiyoruz.
	$font_boyutu=15;//font büyüklüğü
	$x=10;
	$y=30;//metnin pozisyonu
	$egim=10;//fontun eğimi
	
	imagettftext($resim, $font_boyutu, $egim, $x, $y, $renk, $font, $sifre);//yukardaki tüm değerleri birleştiriyoruz.
	
	header ('Content-type: image/png');
	
	imagepng($resim, NULL, 0);//resmi yazdırıyoruz.
	imagedestroy($resim);//resmi hafızandan siliyoruz.sunucu yorulmasın diye.

?>