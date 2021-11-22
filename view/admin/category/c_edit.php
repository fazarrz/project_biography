<?php

    if(!defined('INDEX')) die("");

    $id = $_POST['id'];
    $category = $_POST['category'];
    $images = $_FILES['image']['name'];

    if ($images != "") {

        $extension_true = array('jpg', 'jpeg', 'png');
        $a = explode('.', $images);
        $extension = strtolower(end($a));
        $file = $_FILES['image']['tmp_name'];

        if (in_array($extension, $extension_true) === true) {
            
            move_uploaded_file($file, "../../assets/images/".$images);
            $query = mysqli_query($conn, "UPDATE tbl_category SET name_category = '$category', img_category = '$images' WHERE id_category = '$id'");

            if (!$query) {
                die("Query gagal dijalankan karena : ".mysqli_errno($conn)."-".mysqli_error($conn));
            }
            else{
                echo "<script>alert('Data berhasil diubah');window.location='?hal=category'</script>";
            }

        }
        else{
            echo "<script>alert('Ekstensi gambar tidak sesuai');window.location='?hal=category_update&id=$_POST[id]'</script>"; 
        }

    }

?>