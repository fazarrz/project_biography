<?php

    if(!defined('INDEX')) die("");

    $gambar = $_FILES['gambar']['name'];
    $lokasi = $_FILES['gambar']['tmp_name'];
    $tipe_file = $_FILES['gambar']['type'];
    $size = $_FILES['gambar']['size'];

    $error = "";
    
    if ($gambar == "") {
        $query = mysqli_query($conn, "INSERT INTO tbl_category SET
         name_category = '$_POST[kategori]'
        ");

    }
    else{

        if ($tipe_file != "image/jpeg" and $tipe_file != "image/jpg" and $tipe_file != "image/png" ) {
            $error = "Tipe file tidak didukung";
        }
        else if($size >= 1000000){
            $error = "File terlalu besar";
        }
        else{
            move_uploaded_file($lokasi, "../../assets/images/".$gambar);
            $query = mysqli_query($conn, "INSERT INTO tbl_category SET
            img_category = '$gambar',
            name_category = '$_POST[kategori]'
            ");
        }

    }

    if ($error != "") {
        echo $error;
        echo "<meta http-equiv='refresh' content='2;url=?hal=category_create'>";
    }
    else if($query){
        echo "Berhasil";
        echo "<meta http-equiv='refresh' content='2; url=?hal=category'>";
    }
    else{
        echo "Gagal";
        echo mysqli_error();

    }

?>