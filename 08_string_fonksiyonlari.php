<?php
/* ---------- String Fonksiyonları -------- */

/*
  Php'de php fonksiyonları
  https://www.php.net/manual/en/ref.strings.php
*/


$string = "Hello World";

// echo strlen($string);

$bolunmus_str = explode(' ',$string);
echo "<pre>";
// echo $bolunmus_str[1];

$bolunmus_str2 = explode('o',$string);
// print_r($bolunmus_str2);
// print_r($bolunmus_str);

$str = " efe ";
// echo $str;
// echo trim($str);

// lowercase
// echo strtolower($str);

// uppercase

// echo strtoupper($str);

//replace
$isim = "ibrahim EFE ";

$str_new = str_replace('i','I',$isim,$count);

echo $count;



