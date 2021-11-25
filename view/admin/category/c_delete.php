<?php

    if(!defined('INDEX')) die("");

    $id  = $_GET['id'];
    $foto = $_GET['foto'];

    if (file_exists("../../assets/images/category/".$foto)) {
        unlink("../../assets/images/category/".$foto);
    }

    $query = mysqli_query($conn, "DELETE FROM tbl_category WHERE id_category = '$id'");

    if(!$query){
        die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
    }
    else{
        echo "<script>alert('Data berhasil dihapus');window.location='?hal=category'</script>";
    }


?>