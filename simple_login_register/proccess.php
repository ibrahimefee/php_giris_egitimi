<?php

//veritabanı baglantisi
$dsn = "mysql:host=localhost;dbname=test2;charset=utf8";
$username = "root";
$password = "";

$pdo = new PDO($dsn, $username, $password);
//veritabanı baglantisi

if (isset($_POST['signin'])) {
    // Giris işlemi

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->query("SELECT * FROM kullanicilar WHERE email='" . $email . "' and password='" . $password . "'");

    $user = $query->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($user)) {
        // giris başarılı

        session_start();
        $_SESSION['username'] = $user[0]['username'];
        $_SESSION['email'] = $user[0]['email'];

        header('Location: ./home.php');
    } else {
        $error = "Hatalı bir giriş denemesi";

        header('Location: ./login.php?error=' . $error);
    }
}

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];


    if ($repassword == $password) {
        $query_ekleme = $pdo->query('INSERT INTO kullanicilar (username,email,password) VALUES ("' . $username . '","' . $email . '","' . $password . '")');
        if ($query_ekleme) {
            header('Location: ./login.php?success=Başarıyla Kayıt oldunuz');
        } else {
            header('Location: ./register.php?error=Kayıt Başarısız');
        }
    } else {
        $error = "Şifreler Uyuşmuyor";
        header('Location: ./register.php?error=' . $error);
    }
}

if (isset($_GET['logout']) && $_GET['logout'] == 'ok') {
    session_start();
    session_destroy();

    header('Location: ./login.php');
}
