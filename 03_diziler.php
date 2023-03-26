<?php
/* ----------- Arrrays ----------- */

/*
Bir dizi, birden çok değeri içeren bir değişkendir. 
*/

$array = array('Ahmet', "Ayşe", 12, 14.1, true);

echo "<pre>";
// var_dump($array);
// print_r($array);
// echo gettype($array);

// echo $array[2];

$array2 = ["Ahmet", "Mehmet", "Ayşe", 1, 1.1, false];
echo "<pre>";

// print_r($array2);
//var_dump($array2);

//echo $array2[0];

$array_key_value = ["isim" => "Ahmet", "boy" => 178, "yas" => 23];
// print_r($array_key_value);

// echo $array_key_value['boy'];

$keys = array_keys($array_key_value);
// print_r($keys);

$values = array_values($array_key_value);
// print_r($values);


// Eleman ekleme

$numbers = [1, 2, 3, 4];

array_push($numbers, 5, 6, 7);

// $numbers[] = 12;

// print_r($numbers);

$key_value = ["İsim" => "İbrahim", "Soyisim" => "EFE"];

$key_value['Yas'] = 23;

print_r($key_value);