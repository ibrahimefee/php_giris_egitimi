<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ./login.php?error=İzinsiz işlem');
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
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
                <div class="col-left" style="width: 1100px">
                    <div class="login-text">
                        <h2>Hoşgeldin <?php echo $_SESSION['username'] ?></h2>
                        <p><?php echo $_SESSION['email'] ?><br></p>
                        <a class="btn" href="./proccess.php?logout=ok">Çıkış Yap</a>
                    </div>
                </div>
               
            </div>
        </div>
    </body>

    </html>
</body>

</html>