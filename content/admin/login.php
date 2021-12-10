<?
    include '../../connection/c_login.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/ad_style.css">
        <title>Administrator</title>
    </head>
    <body>
        <section class="content">
            <form class="form-content" action="../../connection/c_login.php" method="post">
                <div class="title">
                    <img src="../../assets/images/logo.png">
                    <p>Selamat datang <b>Administrator</b></p>
                </div>
                <?php if(isset($_GET['pesan'])){?>
                    <div class="error-message">
                        <p><b>Error!</b> Data tidak ditemukan.</p>
                    </div>
                <?php }?>
                <div class="input-data">
                    <input type="text" name="username" id="var1" required>
                    <label for="var1">Username</label>
                </div>
                <div class="input-data">
                    <input type="password" name="password" id="var2" required>
                    <label for="var2">Password</label>
                </div>
                <div class="input-data">
                    <input type="submit" name="#" value="Login">
                </div>
            </form>
        </section>
    </body>
</html>