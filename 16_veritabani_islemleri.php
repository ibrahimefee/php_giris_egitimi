<?php 
/* ----------- Veritabanı İşlemleri ----------- */


$dsn = "mysql:host=localhost;dbname=test2;charset=utf8";
$username = "root";
$password = "";

$pdo = new PDO($dsn,$username,$password);

if ($pdo) {
    echo "Veritabanına bağlanıldı";
} else {
    echo "Veritabanına bağlanamdı";
}


$query = $pdo->query("SELECT * FROM kullanicilar ");

$users = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
// print_r($users);

// ekleme
$query_ekleme = $pdo->query('INSERT INTO kullanicilar (username,email,password) VALUES ("yeni_kullanici","yeni@yeni.com","123")');

// update
$query_update = $pdo->query('UPDATE kullanicilar SET username="Ahmet",email="ahmet@ahmet.com",password="12"  WHERE id=1');
// update
$query_DELETE = $pdo->query('DELETE FROM kullanicilar WHERE id=3');