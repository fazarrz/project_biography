<?php

    include '../../connection/library/config.php';


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
        <h1>Haiiii</h1>
       <ul>
           <li><a href="?hal=dashboard">Beranda</a></li>
           <li><a href="?hal=category">Kategori</a></li>
           <li><a href="?hal=biography">Biography</a></li>
       </ul>
       <main>
           <hr>
           <?php
           
            include '../../connection/c_main_user.php';
           
           ?>
       </main>
    </body>
</html>