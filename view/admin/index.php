<?php

    session_start();
    ob_start();

    include '../../connection/library/config.php';
    if (empty($_SESSION['username']) or empty($_SESSION['password'])) {
        echo "Login dulu";
        echo "<meta http-equiv='refresh' content='2;url=login.php' >";
    }
    else{
        define('INDEX', true)
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/ad_main_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="../../assets/js/c_ad.js"></script>
        <title>Admin | Beranda</title>
    </head>
    <body>

        <input type="checkbox" id="sidebar-toggle">
        <div class="sidebar">
            <div class="sidebar-header">
                <h3 class="brand">
                    <span class="fa fa-address-book"></span>
                    <span>biography</span>
                </h3>
                <label for="sidebar-toggle" class="fa fa-dedent"></label>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li class="active">
                        <a href="?hal=dashboard">
                            <span class="fa fa-line-chart"></span>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=category">
                            <span class="fa fa-unlink"></span>
                            <span>Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-address-book-o"></span>
                            <span>Biografi</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-user"></span>
                            <span>Pengguna</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-folder"></span>
                            <span>Riwayat</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-cog"></span>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="search">
                    <h2>Administrator</h2>
                </div>
                <div class="social-icons">
                    <div></div>
                </div>
            </header>
            <div class="main">
                <?php include '../../connection/c_main.php';?>
            </div>
        </div>
    </body>
</html>

<?php }?>