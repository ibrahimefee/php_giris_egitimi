<?php
/* --------- Dizi fonksiyonları  -------- */

/*
  https://www.php.net/manual/en/ref.array.php
*/

$dizi = array(12, 14, 15, "Ahmet");
$dizi2 = [12, 14, 15, "Ahmet"];

$dizi_key_value = [
  "isim" => "Ahmet",
  "Soyisim" => "Dene",
  "Yas" => 23
];


//eleman ekleme

array_push($dizi, 10, 19);

echo "<pre>";
// print_r($dizi);

//ekleme 

$dizi_key_value['Boy'] = 189;
// print_r($dizi_key_value);


// Dizinin altına dizi eklmee
array_push($dizi, [10, 19]);

// print_r($dizi);

$dizi_key_value['alt_uye'] = [
  "isim" => "Mehmet",
  "Soyisim" => "Dene",
  "Yas" => 23
];

// print_r($dizi_key_value);


$numbers = [10,12,3,7,5];
$numbers2 = [4,5,6];
$toplam = array_sum($numbers);

// echo $toplam;
// array_pop($numbers);


// array_shift($numbers);

$fark = array_diff($numbers,$numbers2);
// print_r($fark);

$merged = array_merge($numbers,$numbers2);

$reversed = array_reverse($numbers);

// print_r($reversed);

$random = array_rand($numbers,1);

$numbers = [10,12,3,7,5];

shuffle($numbers);
print_r($numbers);