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
        <header class="header-main">
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <a href="#">
                            <img src="../../assets/images/logo.png">
                            iography
                        </a>   
                    </div>
                    <input type="checkbox" id="check">
                    <label for="check" class="toggler">
                        <span></span>
                    </label>
                    <nav class="navbar">
                        <ul>
                            <li><a href="?hal=dashboard" class="active">Beranda</a></li>
                            <li><a href="#">Kategori</a></li>
                            <li><a href="#">Biografi</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <?php
                
            include '../../connection/c_main_user.php';
        
        ?>

        <footer>
            <div class="container">
                <div class="footer-content">
                    <h3>Biography</h3>
                    <p>Website biografi pertama di Indonesia.</p>
                </div>
                <div class="social-media">
                    <ul class="social">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <p>Copyright &copy; 2021 Biography</p>
                </div>
            </div>
        </footer>
    </body>
</html>