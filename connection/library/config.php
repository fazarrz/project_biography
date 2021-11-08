<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_bio";

    $conn= mysqli_connect($host, $user, $pass, $db);

    if (mysqli_connect_error()) {

        echo "Koneksi Gagal".mysqli_connect_error();
    }                                                                                                               

?>