<?php

    if(!defined('INDEX')) die("");

    $id  = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM tbl_comment WHERE id_comment = '$id'");

    if(!$query){
        die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
    }
    else{
        echo "<script>alert('Data berhasil dihapus');window.location='?hal=comment'</script>";
    }


?>