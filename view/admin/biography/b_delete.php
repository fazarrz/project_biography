<?php

    if(!defined('INDEX')) die("");

    $id  = $_GET['id'];
    $foto = $_GET['foto'];

    if (file_exists("../../assets/images/".$foto)) {
        unlink("../../assets/images/".$foto);
    }

    $query = mysqli_query($conn, "DELETE FROM tbl_biography WHERE id_bio = '$id'");

    if(!$query){
        die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
    }
    else{
        echo "<script>alert('Data berhasil dihapus');window.location='?hal=biography'</script>";
    }


?>