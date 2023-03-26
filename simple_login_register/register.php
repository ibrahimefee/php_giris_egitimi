<?php

session_start();

if (isset($_SESSION['username'])) {
    header('Location: ./home.php');
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Sayfası</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Hoşgeldin</h2>
                    <p>Hesabın varsa giriş yap</p>
                    <a class="btn" href="login.html">Giriş Yap</a>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Kayıt ol</h2>
                    <form action="./proccess.php" method="post">
                        <p>
                            <?php if (isset($_GET['error'])) {
                                echo $_GET['error'];
                            }
                            ?>
                        </p>
                        <p>
                            <label> Email <span>*</span></label>
                            <input type="text" name="email" placeholder="Email" required>
                        </p>
                        <p>
                            <label>İsim<span>*</span></label>
                            <input type="text" name="username" placeholder="isim" required>
                        </p>
                        <p>
                            <label>Şifre<span>*</span></label>
                            <input type="password" name="password" placeholder="Şifre" required>
                        </p>
                        <p>
                            <label>Şifre Tekrar<span>*</span></label>
                            <input type="password" name="repassword" placeholder="Şifre Tekrar" required>
                        </p>
                        <p>
                            <input type="submit" name="signup" value="Kayıt Ol" />
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>