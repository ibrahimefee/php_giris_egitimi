<?php
/* ---------- Süper Global Değişkenler ---------- */
/*
  Herhangi bir php sayfasından direkt olarak ulaşılabilen değişkenlerdir
*/

/*
$GLOBALS - Global kapsamda tanımlanmış değişkenler hakkında bilgi içeren süper global bir değişkendir.

$_GET - URL'den veya bir formdan geçirilen değişkenler hakkında bilgi içerir.

$_POST - Bir formdan geçirilen değişkenler hakkında bilgi içerir.

$_COOKIE - Bir çerez (cookie) aracılığıyla geçirilen değişkenler hakkında bilgi içerir.

$_SESSION - Bir oturum (session) aracılığıyla geçirilen değişkenler hakkında bilgi içerir.

$_SERVER - Sunucu ortamı hakkında bilgi içeren süper global bir değişkendir.

$_ENV - Çevre değişkenleri hakkında bilgi içerir.

$_FILES - Scripte yüklenen dosyalar hakkında bilgi içerir.

$_REQUEST - Bir formdan veya URL'den geçirilen değişkenler hakkında bilgi içerir.
*/
echo "<pre>";
// print_r($GLOBALS);

// echo $_GET['username'];
// echo $_GET['password'];

// print_r($_POST);

// echo $_POST['username'];

// setcookie('username',"ibrahimefee");
// setcookie('quid',"QB^KSK",time()+1800);

// setcookie('username',"username");

// echo $_COOKIE['quid'];

//session

// session_start();
// $_SESSION['username'] = "ibrahim";

// echo $_SESSION['username'];

// session_destroy();
// if (isset($_SESSION['username'])) {
//   echo "Giriş Başarılı giriş yapan kullanıcı " . $_SESSION['username'];
// } else {
//   echo "Girş Başarısız";
// }
// print_r($_SERVER);

// print_r($_FILES['dosya']['tmp_name']);

print_r($_REQUEST);

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
    <input type="text" name="username">
    <input type="text" name="password">
    <input type="file" name="dosya" id="">
    <button type="submit">Gönder</button>
  </form>

</body>

</html>