<?php
/* 
------------ Fonksiyonlar -----------
  Fonksiyonlar, belirli bir görevi yerine getirmek için çağırabileceğimiz
   yeniden kullanılabilir kod bloklarıdır. 
   Davranışlarını değiştirmek için fonksiyonlara değerler aktarabiliriz. 
   Fonksiyonlar genel kapsam ile birlikte kendi yerel kapsamına sahiptirler.
*/


function getsum()
{
  $a = 12;
  $b = 10;

  echo $a + $b;
}
// getsum();

function getsumTwo($a, $b)
{
  echo $a + $b;
}
// getsumTwo(12,10);
// getsumTwo(20,10);

function getDefualtValue($a = 1, $b = 0)
{
  echo $a + $b;
}

// getDefualtValue();

function getWithReturn($a, $b)
{
  return $a + $b;
}

$sonuc =  getWithReturn(10,10);
echo $sonuc;
