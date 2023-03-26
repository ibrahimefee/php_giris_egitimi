<?php



/*
  < Küçük
  > Büyük
  <= Eşit veya küçük
  >= Büyük veya eşit
  == eşit
  === Eşit (Hem tür hem değer olarak)
  != Eşit değil
  !== Eşit Değil (tür veya değer olarak)

  If && If-Else
  Ternary Operator ( if-else kısa kullanımı)
  Switch
*/

$sayi = 10;

// if ($sayi < 10) {
//   echo "Sayı 10'dan küçüktür";
// }


// if ($sayi > 10) {
//   echo "sayi 10'dan büyük";
// } else {
//   echo "Sayı 10'dan küçük veya Eşit";
// }

// if ($sayi < 10) {
//   echo "Sayi 10'dan küçük";
// } elseif ($sayi == 10) {
//   echo "Sayi 10'a eşittir";
// } else {
//   echo "Sayi 10'dan büyüktür";
// }

// $sonuc = $sayi == 10 ? "Sayi 10'a eşittir" : "Sayı 10'a eşit değildir";
// echo $sonuc;

// $sonuc = $sayi == 10 ? "Sayi 10'a Eşittir" : ($sayi < 10 ? "Sayi 10'dan Küçüktür" : "Sayi 10'dan büyüktür");
// echo $sonuc;

switch ($sayi) {
  case $sayi < 10:
    echo "Sayımız 10'dan küçük";
    break;
    
  case $sayi > 10:
    echo "Sayı 10'dan büyük";
    break;

  case $sayi == 10:
    echo "sayi 10'eşittir";
    break;

  default:
    echo "Değil";
    break;
}
