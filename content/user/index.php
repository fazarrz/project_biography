<?php

    include '../../connection/library/config.php';


?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/us_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Biography</title>
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar-item">
                <div class="navbar-header">
                    <img src="../../assets/images/logo.png">
                    <span>iography</span>
                </div>
                <ul>
                    <li>
                        <a href="?hal=dashboard" class="active">
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=category">
                            <span>Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=biography">
                            <span>Biografi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <section class="content">
                <?php
                
                    include '../../connection/c_main_user.php';
                
                ?>
            </section>
        </div>
    </body>
</html>