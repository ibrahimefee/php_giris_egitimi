<?php

/* -------- Döngüler ------- */
/*
  - For
  - While
  - Foreach 
*/
$data = ["Selim","Mehmet","Ayşe","Selin","Meltem"];

// for ($i=0; $i < count($data); $i++) { 
//   echo "$data[$i] <br>";
// }

// $counter = 0;
// while ($counter < count($data)) {
//   echo "$data[$counter] <br>";
//   $counter++;
// }


// foreach ($data as $key => $value) {
//   echo "key = $key ve value = $value <br>";
// }

$people = [
  [
    'isim'=> "Ahmet",
    'Soyisim'=>"Doe",
    "Yas" => 23,
    "Boy" =>178
  ],
  [
    'isim'=> "Mehmet",
    'Soyisim'=>"John",
    "Yas" => 24,
    "Boy" =>178
  ],
  [
    'isim'=> "Selin",
    'Soyisim'=>"John",
    "Yas" => 24,
    "Boy" =>178
  ],
];



// foreach ($people as $person) {
//   echo "isimim " . $person['isim']."<br>";
// }

$isim = "Ahmet";

$soyisim = "DOe";
$isim_soyisim = $isim . " " .$soyisim ;

echo $isim_soyisim;