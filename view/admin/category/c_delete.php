<?php

    if(!defined('INDEX')) die("");

    $id  = $_GET['id'];
    $foto = $_GET['foto'];
    //membuat variabel untuk menampung data dari form

    if (file_exists("../../assets/images/".$foto)) {
        unlink("../../assets/images/".$foto);
    }

    //menghapus foto dari folder

    $query = mysqli_query($conn, "DELETE FROM tbl_category WHERE id_category = '$id'");
    //menghapus field dari database

    if(!$query){
        die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
    }
    else{
        echo "<script>alert('Data berhasil dihapus');window.location='?hal=category'</script>";
    }


?>