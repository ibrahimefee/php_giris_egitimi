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
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Hoşgeldin</h2>
                    <p>Hesabını Oluştur</p>
                    <a class="btn" href="register.php">Hesap Oluştur</a>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Giriş</h2>
                    <form action="./proccess.php" method="POST">
                        <p>
                            <?php if (isset($_GET['error'])) {
                                echo $_GET['error'];
                            }
                            ?>
                        </p>
                        <p>
                            <?php if (isset($_GET['success'])) {
                                echo $_GET['success'];
                            }
                            ?>
                        </p>
                        <p>
                            <label>Email<span>*</span></label>
                            <input type="text" placeholder="Email" name="email" required>
                        </p>
                        <p>
                            <label>Şifre<span>*</span></label>
                            <input type="password" placeholder="Şifre" name="password" required>
                        </p>
                        <p>
                            <input type="submit" name="signin" value="Giriş Yap" />
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>