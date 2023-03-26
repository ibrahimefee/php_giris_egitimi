<?php
/* ----------- Dosya Yükleme ---------- */
if(isset($_FILES['dosya'])){
  $hedef_klasor = "uploads/";
  $hedef_dosya = $hedef_klasor.basename($_FILES['dosya']['name']);

  if (move_uploaded_file($_FILES['dosya']['tmp_name'],$hedef_dosya)) {
    echo "dosya yüklendi";
  } else {
    echo "dosya yüklenemedi";

  }
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="dosya">
    <button type="submit"></button>
  </form>
</body>

</html>