<?php

/* --------- Değişken Tipleri --------- */
/*
-- String (Dize) - Tırnak işaretleri ile çevrelenmiş karakter serisidir.
-- Integer (Tam sayı) - Tam sayı değerleridir.
-- Float (Ondalık sayı), Double - Ondalık sayı değerleridir.
-- Boolean (Mantıksal) - true veya false değerleridir.
-- Array (Dizi) - Birden fazla değer içerebilen özel bir değişkendir.
-- Object (Nesne) - Bir sınıfın örneğidir.
-- NULL - Boş bir değişkendir.
*/

/* --------- Değişken Tanımlarken Dikkat edilmesi gerekenler --------- */
/*
-- Değişkenler $ işareti ile başlamalıdır
-- Değişkenler harf veya alt çizgi karakteri başlayabilir
-- Değişkenler sayı ile başlayamaz.
-- Değişkenler sadece harf, sayı ve alt çizgi içerebilir (A-z, 0-9 ve _)
-- Değişkenler büyük-küçük harf duyarlıdır ($username ve $USERNAME iki farklı değişkendir).
*/

$string = "Ahmet";
$string2 = 'Ahmet';

$integer = 12;
$float = 12.1;
$boolean = true;
$null = null;
$array = array("Ahmet","Mehmet","Ayşe");


//var_dump() 
// var_dump($integer);

//gettype
echo gettype($array);
